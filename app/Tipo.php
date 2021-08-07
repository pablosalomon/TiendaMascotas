<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    //vincular modelo a tabla
    protected $table="Tipo";
    //establecer la clave primaria para la entidad (por defecto: id)
    protected $primaryKey = "idTipo";
    //Omitir campos de auditoria
    public $timestamps = false;

    //relacion 1 a M entre tipo y categoria
    public function categoria (){
        //utilizo el metodo de eloquent: hasMany
        return $this->hasMany('App\Categoria', 'idTipo');
    }
}
