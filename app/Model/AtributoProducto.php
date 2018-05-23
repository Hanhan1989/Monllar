<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AtributoProducto extends Model
{
    protected $fillable = ['id', 'id_producto'];

    public function atributos()
    {
        return $this->belongsTo('App\Model\Producto');
    }
}
