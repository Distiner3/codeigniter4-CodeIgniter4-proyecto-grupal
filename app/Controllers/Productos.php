<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Producto;
class Productos extends Controller{

    public function verProductos()
    {
        $producto = new Producto();
        $registros['productos'] = $producto->findAll();

        return view('Productos', $registros);
    }

}