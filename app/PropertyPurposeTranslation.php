<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyPurposeTranslation extends Model
{
    protected $table = 'property_purpose_translation';

    protected $primaryKey = ['property_purpose_id','language_id'];

    protected $fillable = ['description'];





}
