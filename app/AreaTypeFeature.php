<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreaTypeFeature extends Model
{
    protected $table = 'area_type_feature';

    protected $primaryKey = ["area_type_id","feature_id"];


}
