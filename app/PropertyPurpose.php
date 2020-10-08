<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyPurpose extends Model
{

    protected $table = 'property_purpose';

    protected $primaryKey = "property_purpose_id";

    public function propertyPurposeLanguage(){

        return $this->belongsToMany(Language::class,'property_purpose_translation','language_id','property_purpose_id');


    }

}


