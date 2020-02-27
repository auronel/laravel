<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $fillable = ['nombre', 'modelo', 'precio', 'stock', 'foto', 'detalles', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class)
            ->withDefault(['nombre' => 'Sin categoria']);
    }
}
