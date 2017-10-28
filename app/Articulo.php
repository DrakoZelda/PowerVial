<?php

namespace PowerVial;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $table = 'articulos';
    protected $fillable = ['codigo', 'nombre', 'descripcion', 'categoria',
                           'stock', 'proveedor_id', 'marca_id',
                           'familia_articulos_id', 'familia_automotor_id'];
}
