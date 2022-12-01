<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Comments;

class Posts extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $primarykey = "post_id";
    public function comments(){
        return $this->hasMany(Comments::class,'post_id','post_id');
    }
}
