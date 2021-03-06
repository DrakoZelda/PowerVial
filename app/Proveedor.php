<?php

namespace PowerVial;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedores';
    protected $fillable = ['tipo_identificacion_fiscal',
                           'numero_identificacion_Fiscal', 'razon_social',
                           'nombre_comercial', 'domicilio', 'pais', 'provincia',
                           'localidad', 'codigo_postal', 'telefono', 'movil',
                           'fax', 'email', 'direccion_web'];
    //
}
