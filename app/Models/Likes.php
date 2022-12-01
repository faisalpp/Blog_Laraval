<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posts;
use App\Models\Comments;

class Likes extends Model
{
    use HasFactory;
    protected $primaryKey = "like_id";
    protected $table = "post_likes";
    public function post(){
     return $this->belongsTo(Comments::class,'comment_id','comment_id');
    }
}
