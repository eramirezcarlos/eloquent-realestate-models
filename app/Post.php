<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $primaryKey = "post_id";

    protected $fillable = ['title','slug','image','body','view_count','is_approved','user_id'];


}
