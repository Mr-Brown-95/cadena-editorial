<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journalist extends Model
{
    public function magazines(){
        return $this->belongsToMany(Magazine::class);
    }
}
