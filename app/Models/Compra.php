<?php 
namespace App\Models;

use CodeIgniter\Model;

class Compra extends Model{
    protected $table      = 'compras';
    protected $primaryKey = 'idcompras';
    protected $allowedFields=['idcompras','fecha_compra','idproducto','costo','cantidad','tipo_pago','documento','idproveedor','idempleado'];
}   