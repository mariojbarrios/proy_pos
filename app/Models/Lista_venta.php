<?php 
namespace App\Models;

use CodeIgniter\Model;

class Lista_venta extends Model{
    protected $table      = 'lista_ventas';
    protected $primaryKey = 'idventas';
    protected $allowedFields=['idventas','fecha_venta','descripcion','venta','cantidad','tipo_pago','documento','nombre_cliente','nombre_empleado'];
}