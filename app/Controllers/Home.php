<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }

    public function ver_Productos()
    {
        return view('Productos');
    }

    public function ver_Sucursales()
    {
        return view('Sucursales');
    }

}
