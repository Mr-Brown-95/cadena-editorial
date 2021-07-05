<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employ extends Model
{
    public function branches(){
        return $this->belongsTo(Branche::class,'codigoSucursal_id');
    }
}
