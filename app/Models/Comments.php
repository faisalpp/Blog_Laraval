<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posts;
use App\Models\Likes;

class Comments extends Model
{
    use HasFactory;
    protected $primarykey = "comment_id";
    public function likes(){
      return $this->hasMany(Likes::class,'comment_id','comment_id');
    }

    public function post(){
      return $this->belongsTo(Posts::class,'post_id','post_id');
     }
    
}
