<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    protected $table = 'countries';

    protected $fillable = ['name', 'iso3', 'iso2', 'phonecode', 'capital', 'currency','native', 'emoji', 'emojiU'];
}
