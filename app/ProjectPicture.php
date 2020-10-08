<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectPicture extends Model
{
    protected $table = 'project_picture';

    protected $primaryKey = "project_picture_id";

    protected $fillable = ['type_image','path','alt_image'];


}
