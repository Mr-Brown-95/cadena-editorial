<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    public function magazines(){
        return $this->belongsTo(Magazine::class,'numero_registro_id');
    }
}
