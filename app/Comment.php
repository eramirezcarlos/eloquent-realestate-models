<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $table = 'comment';

    protected $primaryKey = "comment_id";

    protected $fillable = [
        'body',
        'commentable_id',
        'commentable_type',
        'parent',
        'parent_id',
        'approved',
        'user_id'
    ];

    //reverse relation with role
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }



}
