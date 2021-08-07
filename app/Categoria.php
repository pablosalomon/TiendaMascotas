<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //vincular modelo a tabla
    protected $table="Categoia";
    //establecer la clave primaria para la entidad (por defecto: id)
    protected $primaryKey = "idCategoria";
    //Omitir campos de auditoria
    public $timestamps = false;

    //relacion 1 a M entre categoria y producto
    public function producto (){
        //utilizo el metodo de eloquent: hasMany
        return $this->hasMany('App\Producto', 'idCategoria');
    }
}
