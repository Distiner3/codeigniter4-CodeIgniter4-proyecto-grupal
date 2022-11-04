<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Sucursal;

class Sucursales extends Controller
{

    public function verSucursales()
    {
        $sucursal = new Sucursal();
        $registros['sucursales'] = $sucursal->findAll();

        return view('Sucursales', $registros);
    }

    public function agregar_sucursales()
    {
        $sucursal = new Sucursal();

        $id = $this->request->getVar('txt_id');
        $nombre = $this->request->getVar('txt_nombre');
        $direccion = $this->request->getVar('txt_direccion');
        $telefono = $this->request->getVar('txt_telefono');
        $email = $this->request->getVar('txt_email');
        $nit = $this->request->getVar('txt_nit');
        $id_admin = $this->request->getVar('txt_admin');

        $datos = [
            'id_sucursal' => $id,
            'nombre_sucursal' => $nombre,
            'direccion_sucursal' => $direccion,
            'telefono_sucursal' => $telefono,
            'email_sucursal' => $email,
            'nit' => $nit,
            'id_admin' => $id_admin,
        ];
        $sucursal->insert($datos);
        $registros['sucursales'] = $sucursal->findAll();

        return view('Sucursales', $registros);
    }

    public function eliminar_sucursal($id = null)
    {
        $sucursal = new Sucursal();
        $sucursal->delete($id);

        $registros['sucursales'] = $sucursal->findAll();

        return view('Sucursales', $registros);
    }

    public function actualizar_sucursal($id = null)
    {
        $sucursal = new Sucursal();
        $datos['sucursaldb'] = $sucursal->where('id_sucursal', $id)->first();

        $registros['sucursales'] = $sucursal->findAll();

        return view('frm_actualizar_sucursales', $datos);
    }

    public function actualizarSucursal()
    {
        $sucursal = new Sucursal();

        $id = $this->request->getVar('txt_id');
        $nombre = $this->request->getVar('txt_nombre');
        $direccion = $this->request->getVar('txt_direccion');
        $telefono = $this->request->getVar('txt_telefono');
        $email = $this->request->getVar('txt_email');
        $nit = $this->request->getVar('txt_nit');
        $id_admin = $this->request->getVar('txt_admin');

        $datos = [
            'nombre_sucursal' => $nombre,
            'direccion_sucursal' => $direccion,
            'telefono_sucursal' => $telefono,
            'email_sucursal' => $email,
            'nit' => $nit,
            'id_admin' => $id_admin
        ];
        $sucursal->update($id, $datos);
        $registros['sucursales'] = $sucursal->findAll();

        return view('Sucursales', $registros);
    }
}
