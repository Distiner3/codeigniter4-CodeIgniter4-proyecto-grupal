<?php 
namespace App\Models;

use CodeIgniter\Model;

class Admin extends Model{
    protected $table      = 'administradores';
    // Uncomment below if you want add primary key
    // protected $primaryKey = 'id';
    protected $primaryKey = 'id_admin';
    protected $allowedFields = ['id_admin','nombre_admin','apellido_admin','telefono_admin','usuario','contrasenia'];
}