<?php 
namespace App\Models;

use CodeIgniter\Model;

class Cliente extends Model{
    protected $table      = 'clientes';
    protected $primaryKey = 'idcliente';
    protected $allowedFields=['idcliente','nombre_cliente','nit_cliente','telefono_cliente','direccion_cliente','email_cliente'];

}