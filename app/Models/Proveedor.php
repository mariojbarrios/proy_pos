<?php 
namespace App\Models;

use CodeIgniter\Model;

class Proveedor extends Model{
    protected $table      = 'proveedores';
    protected $primaryKey = 'idproveedor';
    protected $allowedFields=['idproveedor','nombre_proveedor','nit_proveedor','telefono_proveedor','direccion_proveedor','email_proveedor'];
}