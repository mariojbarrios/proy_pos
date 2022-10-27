<?php 
namespace App\Models;

use CodeIgniter\Model;

class Lista_compra extends Model{
    protected $table      = 'lista_compras';
    protected $primaryKey = 'idcompra';
    protected $allowedFields=['idcompras','fecha_compra', 'descripcion','costo','cantidad','tipo_pago','documento','nombre_proveedor','nombre_empleado'];
}   