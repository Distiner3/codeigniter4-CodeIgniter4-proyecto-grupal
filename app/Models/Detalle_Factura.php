<?php 
namespace App\Models;

use CodeIgniter\Model;

class Detalle_Factura extends Model{
    protected $table      = 'detalle_facturas';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    protected $primaryKey = 'correlativo';
    protected $allowedFields = ['correlativo','id_producto','id_sucursal','cantidad','precio','no_venta'];
}