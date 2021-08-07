<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //vincular modelo a tabla
    protected $table="Usuario";
    //establecer la clave primaria para la entidad (por defecto: id)
    protected $primaryKey = "idUsuario";
    //Omitir campos de auditoria
    public $timestamps = false;

    //relacion 1 a M entre usuario y cliente
    public function cliente (){
        //utilizo el metodo de eloquent: hasMany
        return $this->hasMany('App\Cliente', 'idUsuario');
    }

    //relacion 1 a M entre usuario y empleado
    public function empleado (){
        //utilizo el metodo de eloquent: hasMany
        return $this->hasMany('App\Empleado', 'idUsuario');
    }
}
