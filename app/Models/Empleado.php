<?php 
namespace App\Models;

use CodeIgniter\Model;

class Empleado extends Model{
    protected $table      = 'empleados';
    protected $primaryKey = 'idempleado';
    protected $allowedFields=['idempleado', 'nombre_empleado','puesto','idusuario','usuario','clave'];
}