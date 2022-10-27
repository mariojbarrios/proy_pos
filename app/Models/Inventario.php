<?php 
namespace App\Models;

use CodeIgniter\Model;

class Inventario extends Model{
    protected $table      = 'inventarios';
    protected $primaryKey = 'idproducto';
    protected $allowedFields=['idproducto', 'descripcion', 'costo', 'venta','cantidad'];
}