<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = ['nombre', 'modelo', 'precio', 'stock', 'foto', 'detalles'];
}
