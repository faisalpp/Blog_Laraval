<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Facades\DB;

use Exception;

class HomeController extends Controller
{
    public function index(){
        try{
        $reactPosts = Posts::where('category','=','ReactJs')->limit(4)->get();
        $uiPosts = Posts::where('category','=','UiDesign')->limit(4)->get();
        $data = compact('reactPosts','uiPosts');
        return view('home')->with($data);
        }catch(\Exception $e){
           return abort(500);
        }
    }
}
