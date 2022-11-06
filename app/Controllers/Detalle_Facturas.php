<?php

namespace App\Controllers;

use App\Models\Detalle_Factura;
use App\Models\Producto;
use App\Models\Sucursal;
use CodeIgniter\Controller;

class Detalle_Facturas extends Controller
{

    public function verDetalles()
    {
        $detalle = new Detalle_Factura();
        $producto = new Producto();
        $sucursal = new Sucursal();
        $registros['detalle_facturas'] = $detalle->findAll();
        $registros['productos'] = $producto->findAll();
        $registros['sucursales'] = $sucursal->findAll();
        return view('Detalle_Facturas', $registros);

        
    }

    

    public function agregar_detalle()
    {
        $detalle = new Detalle_Factura();
       
        $correlativo = $this->request->getVar('txt_correlativo');
        $id_producto = $this->request->getVar('txt_id_producto');
        $id_sucursal = $this->request->getVar('txt_id_sucursal');
        $cantidad = $this->request->getVar('txt_cantidad');
        $precio = $this->request->getVar('txt_precio');
        $no_venta = $this->request->getVar('txt_no_venta');

        $datos = [
            'correlativo' => $correlativo,
            'id_producto' => $id_producto,
            'id_sucursal' => $id_sucursal,
            'cantidad' => $cantidad,
            'precio' => $precio,
            'no_venta' => $no_venta
        ];
        $detalle->insert($datos);
        $producto = new Producto();
        $sucursal = new Sucursal();
        $registros['detalle_facturas'] = $detalle->findAll();
        $registros['productos'] = $producto->findAll();
        $registros['sucursales'] = $sucursal->findAll();
        return view('Detalle_Facturas', $registros);
    }

    public function eliminar_detalle($id = null){



        $detalle = new Detalle_Factura();

        $detalle->delete($id);
        $producto = new Producto();
        $sucursal = new Sucursal();
        $registros['detalle_facturas'] = $detalle->findAll();
        $registros['productos'] = $producto->findAll();
        $registros['sucursales'] = $sucursal->findAll();
        return view('Detalle_Facturas', $registros);
    }

    public function actualizar_detalle($id = null){
        $detalle = new Detalle_Factura();
        $datos['detalle_facturas'] = $detalle->where('correlativo', $id)->first();
        $registros['detalle_facturas'] = $detalle->findAll();
        return view('frml_actualizar_detalles', $registros);
    }

    public function actualizarDetalle()
    {
        $detalle = new Detalle_Factura();
       
        $correlativo = $this->request->getVar('txt_correlativo');
        $id_producto = $this->request->getVar('txt_id_producto');
        $id_sucursal = $this->request->getVar('txt_id_sucursal');
        $cantidad = $this->request->getVar('txt_cantidad');
        $precio = $this->request->getVar('txt_precio');
        $no_venta = $this->request->getVar('txt_no_venta');

        $datos = [
            'correlativo' => $correlativo,
            'id_producto' => $id_producto,
            'id_sucursal' => $id_sucursal,
            'cantidad' => $cantidad,
            'precio' => $precio,
            'no_venta' => $no_venta
        ];
        $detalle->update($correlativo,$datos);
        $registros['detalle_facturas'] = $detalle->findAll();
        return view('Detalle_Facturas', $registros);
    }
}
