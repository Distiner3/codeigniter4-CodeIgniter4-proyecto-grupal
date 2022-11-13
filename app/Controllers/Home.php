<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function index_u()
    {
        return view('index_users');
    }

    public function ver_Productos()
    {
        return view('Productos');
    }

    public function ver_Sucursales()
    {
        return view('Sucursales');
    }

    public function ver_Admins()
    {
        return view('Admins');
    }

    public function ver_Detalles()
    {
        return view('Detalle_Facturas');
    }

    public function login_i()
    {
        return view('Login');
    }

    public function login_logic(){
        $user =  $_POST['txt_user'];
        $pass =  $_POST['txt_password'];

        if ($user == "admin" && $pass == "1234"){
            return view('index');
        }

        if ($user == "user" && $pass =="4321"){
            return view('index_users');
        }

        return view('login');
    }

}
