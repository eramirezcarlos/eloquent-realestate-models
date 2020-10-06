<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Role extends Model
{


    protected $table = 'role';

    protected $primaryKey = "role_id";

    protected $fillable = ['name','slug'];

    //parent relation
    public function user()
    {
        return $this->hasMany(User::class,'role_id');
    }

}
