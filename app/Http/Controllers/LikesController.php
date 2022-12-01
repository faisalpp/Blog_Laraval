<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Likes;

class LikesController extends Controller
{
    public function liked(Request $request){
        $like = new Likes;
        $like->like = 1;
        $like->comment_id = $request['commentId'];
        $like->save();
        //Get hostname and post url of current blog post
        $host = $request->getHttpHost();
        $uri = $request->getRequestUri();
        return redirect("$uri");
      }
}
