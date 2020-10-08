<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{

    protected $table = 'post_tag';

    protected $primaryKey = "post_tag_id";

    protected $fillable = ['post_id','tag_id'];

}
