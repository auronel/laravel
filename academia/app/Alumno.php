<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Modulo;

class Alumno extends Model
{
    protected $fillable=['nombre','apellidos','mail','logo'];

    public function modulos()
    {
        return $this->belongsToMany('App\Modulo')->withPivot('nota')->withTimestamps();
    }

    public function modulosOut(){
        //Esto me devuelve los id de los modulos que tiene $alumno
        $modulos1=$this->modulos()->pluck('modulo_id');
        //Esto me devuelve los modulos que le faltan al alumno
        $modulos2=Modulo::whereNotIn('id',$modulos1)->get();
        return $modulos2;
    }
}
