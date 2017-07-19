<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    //Definimos la tabla que se usara

    protected $table = 'personas';

    //Definimos los campos que seran llenables

    protected $fillable = ['name', 'email', 'tel', 'city', 'ci', 'n_fact', 'message'];
}
