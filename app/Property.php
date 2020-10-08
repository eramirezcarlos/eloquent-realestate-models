<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    protected $table = 'property';

    protected $primaryKey = ['property_id'];

    protected $fillable = [     'property_code','price','featured',
                                'cities_id','property_type_id','image',
                                'bedroom','bathroom','area_size',
                                'parking','year_built','lot_size',
                                'agent_id','description','floor_plan',
                                'video,purpose_id','location_latitude',
                                'location_longitude'.'status_id'
                                ];




}
