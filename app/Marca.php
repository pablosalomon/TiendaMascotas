<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //vincular modelo a tabla
    protected $table="Marca";
    //establecer la clave primaria para la entidad (por defecto: id)
    protected $primaryKey = "idMarca";
    //Omitir campos de auditoria
    public $timestamps = false;

    //relacion 1 a M entre marca y producto
    public function producto (){
        //utilizo el metodo de eloquent: hasMany
        return $this->hasMany('App\Producto', 'idMarca');
    }
}
