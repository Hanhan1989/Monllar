<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    protected $fillable = ['id', 'nombre', 'created_at', 'updated_at'];

    public function categorias()
    {
        return $this->hasMany('App\Model\Categoria', 'id_catalogo');
    }
}
