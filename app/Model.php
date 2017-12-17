<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    //this are the allowed data
    // protected $fillable = ['title', 'body'];

    // this are not allowed
    protected $guarded = [];
    // can be an empty array so as to allow everything

}
