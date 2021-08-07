<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //vincular modelo a tabla
    protected $table="Rol";
    //establecer la clave primaria para la entidad (por defecto: id)
    protected $primaryKey = "idRol";
    //Omitir campos de auditoria
    public $timestamps = false;

    //relacion 1 a M entre rol y usuario
    public function usuario (){
        //utilizo el metodo de eloquent: hasMany
        return $this->hasMany('App\Usuario', 'idRol');
    }
}
