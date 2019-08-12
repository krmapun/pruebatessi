<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    public function categorias(){
        return $this->belongsTo('App\Categoria');
    } 
}
