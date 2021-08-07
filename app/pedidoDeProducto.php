<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedidoDeProducto extends Model
{
    //vincular modelo a tabla
    protected $table="pedidoDeProducto";
    //establecer la clave primaria para la entidad (por defecto: id)
    protected $primaryKey = "idProductoFK, idPedidoFK";
    //Omitir campos de auditoria
    public $timestamps = false;
}
