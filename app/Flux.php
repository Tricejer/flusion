<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flux extends Model
{
    protected $table='FlusionFlux';
    protected $fillable = ['idf','format','type','nom','description'];
}
