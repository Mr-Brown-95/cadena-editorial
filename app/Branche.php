<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branche extends Model
{
    //protected $fillable = array('direccion','ciudad','provincia','telefono','imagen');
    public function employs(){
        return $this->hasMany(Employ::class);
    }
    public function magazines(){
        return $this->belongsToMany(Magazine::class,'branche_magazine','codigo_sucursal_id','numero_registro_id');
    }
}
