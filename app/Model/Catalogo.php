<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    protected $fillable = ['id', 'nombre'];

    public function categorias()
    {
        return $this->hasMany('App\Model\Categoria', 'id_catalogo');
    }
}
