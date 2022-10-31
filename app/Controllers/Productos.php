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

    public function agregar_productos()
    {
        $producto = new Producto();

        $id = $this->request->getVar('txt_id');
        $marca = $this->request->getVar('txt_marca');
        $talla = $this->request->getVar('txt_talla');
        $colores = $this->request->getVar('txt_color');
        $descripcion = $this->request->getVar('txt_descripcion');
        $precio = $this->request->getVar('txt_precio');

        $datos = [
            'id_producto' => $id,
            'marca' => $marca,
            'talla' => $talla,
            'color' => $colores,
            'descripcion' => $descripcion,
            'precio' => $precio,
            ];
        $producto->insert($datos);
        $registros['productos'] = $producto->findAll();

        return view('Productos', $registros);

    }
}