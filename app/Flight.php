<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = 'flights';
    protected $fillable = ['package', 'id', 'To', 'from','adults','children'];
    public $timestamps = false;
}
