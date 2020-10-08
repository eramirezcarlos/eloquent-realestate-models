<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{

    protected $table = 'gallery';

    protected $primaryKey = "gallery_id";

    protected $fillable = ['album_id','image','size','type','link'];



}
