<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //vincular modelo a tabla
    protected $table="Cliente";
    //establecer la clave primaria para la entidad (por defecto: id)
    protected $primaryKey = "idCliente";
    //Omitir campos de auditoria
    public $timestamps = false;

    //relacion 1 a M entre cliente y pedido
    public function pedido (){
        //utilizo el metodo de eloquent: hasMany
        return $this->hasMany('App\Pedido', 'idCliente');
    }
}
