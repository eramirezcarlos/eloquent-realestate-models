<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaType extends Model
{

    protected $table = 'area_type';

    protected $primaryKey = "area_type_id";

    protected $fillable = ['description'];



}
