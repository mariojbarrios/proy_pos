<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       // return view('menu_principal_usuario');
      // return view('menu_principal_admin');
      return view('inicio');
    }
}
