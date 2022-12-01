<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comments;
use App\Models\Posts;


class DashboardController extends Controller
{
    public function home(){
     $posts = Posts::with('comments.likes')->limit(6)->get();
     $posts_count = Posts::all()->count();
     return view('dash.home')->with(compact('posts','posts_count'));
    }

    public function allPosts(Request $request){
      try{
        $search = $request['search'] ?? "";
        if($search != ""){
          $posts = Posts::where('title','LIKE',"%$search%")->get();
        }else{
         $posts = Posts::paginate(25);
        }
        $data = compact('posts','search');
        return view('dash.allPosts')->with($data);    
        }catch(\Exception $e){
            return abort(500);
        }
    }

    public function createPost(){
     return view('dash.createPost');
    }

    public function trashPost($id){
      $post = Posts::where('post_id','=',$id);
      if(!is_null($post)){
        $post->delete();
      }
      return redirect('/dashboard/allPosts');
    }
    public function deletePost($id){
      $post = Posts::withTrashed()->where('post_id','=',$id);
      if(!is_null($post)){
        $post->forceDelete();
      }
      return redirect('/dashboard/trash');
    }

    public function trashView(){
      $posts = Posts::onlyTrashed()->get();
      return view('dash.trashPosts')->with(compact('posts'));
    }
    public function undoPost($id){
      $posts = Posts::withTrashed()->where('post_id',$id);
      if(!is_null($posts)){
       $posts->restore();
      }
      return redirect('/dashboard/trash');
    }

    public function editePost($id){
      $post = Posts::where('post_id','=',$id)->get();
      if(\is_null($post)){
        return redirect('/dashboard/allPosts');
      }else{
       return view('dash.editePost')->with(compact('post'));
      }
    }
    
    public function submitPost(Request $request){
        $request->validate(
            ['title'=>'required',
             'excerpt'=>'required',
             'image'=>'required',
             'category'=>'required',
             'content'=>'required'
             ]
           );
           
           $slug = str_replace(' ','-',strtolower($request['title']));

           $post = new Posts;
           $post->title = $request['title'];
           $post->slug = $slug;
           $post->excerpt = $request['excerpt'];
           $post->image = $request['image'];
           $post->category = $request['category'];
           $post->content = $request['content'];
           $post->save();
          
          return view('dash.createPost');
    }

    
    public function updatePost($id,Request $request){
        $request->validate(
            ['title'=>'required',
             'excerpt'=>'required',
             'image'=>'required',
             'category'=>'required',
             'content'=>'required'
             ]
           );
           
           $slug = str_replace(' ','-',strtolower($request['title']));

           $post = Posts::where('post_id',$id)->update(
            [
              'title'=>$request['title'],
              'slug'=>$slug,
              'excerpt'=>$request['excerpt'],
              'image'=>$request['image'],
              'category'=>$request['category'],
              'content'=>$request['content'],
            ]);
           return redirect('/dashboard/allPosts');
    }
}
