<?php 
namespace App\Models;

use CodeIgniter\Model;

class Venta extends Model{
    protected $table      = 'ventas';
    protected $primaryKey = 'idventas';
    protected $allowedFields=['idventas','fecha_venta','idproducto','venta','cantidad','tipo_pago','documento','idcliente','idempleado'];

}