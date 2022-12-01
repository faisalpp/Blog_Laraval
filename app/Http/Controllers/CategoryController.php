<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Facades\DB;

use Exception;

class CategoryController extends Controller
{   
    public $slug;

    public function getCategory($slug,Request $request){
        try{
        $search = $request['search'] ?? "";
        if($search != ""){
            $category = Posts::where('category','=',$slug)->where('title','LIKE',"%$search%")->get();
        }else{
         $category = Posts::where('category','=',$slug)->paginate(16);
        }
        $title = "Category";
        $data = compact('category','title','search');
        return view('category')->with($data);    
        }catch(\Exception $e){
            return abort(500);
        }
    }
}
