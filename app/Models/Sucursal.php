<?php 
namespace App\Models;

use CodeIgniter\Model;

class Sucursal extends Model{
    protected $table      = 'sucursales';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_sucursal';
    protected $allowedFields = ['id_sucursal','nombre_sucursal','direccion_sucursal','telefono_sucursal','email_sucursal','nit','id_admin'];
}