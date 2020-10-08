<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeatureTranslation extends Model
{

    protected $table = 'feature_translation';

    protected $primaryKey = ['feature_id','language_id'];

    protected $fillable = ['name','slug'];

}
