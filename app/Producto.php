<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //vincular modelo a tabla
    protected $table="Producto";
    //establecer la clave primaria para la entidad (por defecto: id)
    protected $primaryKey = "idProducto";
    //Omitir campos de auditoria
    public $timestamps = false;

    //relacion 1 a M entre producto y pedidodeproducto
    public function pedidodeproducto (){
        //utilizo el metodo de eloquent: hasMany
        return $this->hasMany('App\pedidoDeProducto', 'idProducto');
    }
}
