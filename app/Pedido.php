<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //vincular modelo a tabla
    protected $table="Pedido";
    //establecer la clave primaria para la entidad (por defecto: id)
    protected $primaryKey = "idPedido";
    //Omitir campos de auditoria
    public $timestamps = false;

    //relacion 1 a M entre pedido y pedidodeproducto
    public function pedidodeproducto (){
        //utilizo el metodo de eloquent: hasMany
        return $this->hasMany('App\pedidoDeProducto', 'idPedido');
    }
}
