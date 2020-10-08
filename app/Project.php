<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $table = 'project';

    protected $primaryKey = "project_id";

    protected $fillable = ['longitud','latitud','cities_id'];

}
