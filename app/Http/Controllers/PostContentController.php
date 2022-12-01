<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Likes;
class PostContentController extends Controller
{
    public $slug;
    //Get Clicked Post alongwith its comments and related posts
    public function getPost($slug){
     $content = Posts::where('slug',$slug)->with('comments.likes')->get();
     $relatedPosts = Posts::where('category',$content->first()->category)->limit(3)->get();
     return view('postcontent')->with(compact('content','relatedPosts'));
    }
    public function createComment(Request $request){
        $request->validate(
            ['name'=>'required',
             'image'=>'required',
             'comment'=>'required',
             'post_id'=>'required'
             ]
           );
      
           $comment = new Comments;
           $comment->name = $request['name'];
           $comment->image = $request['image'];
           $comment->comment = $request['comment'];
           $comment->post_id = $request['postId'];
           $comment->save();          
          return redirect('postcontent');
    }
}
