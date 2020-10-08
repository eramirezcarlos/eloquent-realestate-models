<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property_Translation extends Model
{

    protected $table = 'property_translation';

    protected $primaryKey = ['property_id', 'language_id'];

    protected $fillable = ['title','slug', 'description', 'nearby'];



}
