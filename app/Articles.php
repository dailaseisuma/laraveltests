<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    //
    protected $table = 'raksti';
    protected $fillable = ['title','text'];
}
