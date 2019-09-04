<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Availableflight extends Model
{
    protected $table = 'availableflights';
    protected $fillable = ['package', 'id', 'To', 'from'];
    public $timestamps = false;
}
