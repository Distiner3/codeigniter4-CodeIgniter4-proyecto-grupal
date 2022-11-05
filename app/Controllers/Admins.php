<?php

namespace App\Controllers;

use App\Models\Admin;
use CodeIgniter\Controller;

class Admins extends Controller
{

    public function verAdmins()
    {
        $admin = new Admin();
        $registros['administradores'] = $admin->findAll();
        return view('Admins', $registros);

        
    }

    public function agregar_admins()
    {
        $admin = new Admin();
       
        $id = $this->request->getVar('txt_id');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $telefono = $this->request->getVar('txt_telefono');
        $usuario = $this->request->getVar('txt_usuario');
        $contraseña = $this->request->getVar('txt_contraseña');

        $datos = [
            'id_admin' => $id,
            'nombre_admin' => $nombre,
            'apellido_admin' => $apellido,
            'telefono_admin' => $telefono,
            'usuario' => $usuario,
            'contrasenia' => $contraseña
        ];
        $admin->insert($datos);
        $registros['administradores'] = $admin->findAll();
        return view('Admins', $registros);
    }

    public function eliminar_admin($id = null){

        $admin = new Admin();
        $admin->delete($id);
        $registros['administradores'] = $admin->findAll();
        return view('Admins', $registros);
    }

    public function actualizar_admin($id = null){
        $admin = new Admin();
        $datos['adminisitradores'] = $admin->where('id_admin', $id)->first();
        $registros['administradores'] = $admin->findAll();
        return view('frml_actualizar_admins', $datos);
    }

    public function actualizarAdmin()
    {
        $admin = new Admin();
        $id = $this->request->getVar('txt_id');
        $nombre = $this->request->getVar('txt_nombre');
        $apellido = $this->request->getVar('txt_apellido');
        $telefono = $this->request->getVar('txt_telefono');
        $usuario = $this->request->getVar('txt_usuario');
        $contraseña = $this->request->getVar('txt_contraseña');

        $datos = [
            'id_admin' => $id,
            'nombre_admin' => $nombre,
            'apellido_admin' => $apellido,
            'telefono_admin' => $telefono,
            'usuario' => $usuario,
            'contrasenia' => $contraseña
        ];
        $admin->update($id,$datos);
        $registros['administradores'] = $admin->findAll();
        return view('Admins', $registros);
    }
}
