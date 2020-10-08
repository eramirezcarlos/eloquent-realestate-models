<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table = 'language';

    protected $primaryKey = "language_id";

    protected $fillable = ['description'];

    public function propertyPurposeLanguage(){

        return $this->belongsToMany(PropertyPurpose::class,'property_purpose_translation','language_id','property_purpose_id');


    }




}
