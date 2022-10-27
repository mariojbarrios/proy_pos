<?php 
namespace App\Models;

use CodeIgniter\Model;

class Lista_empleado extends Model{
    protected $table      = 'lista_empleados';
    protected $primaryKey = 'idempleado';
    protected $allowedFields=['idempleado', 'nombre_empleado','puesto','permisos','usuario','clave'];
}