<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class NavbarController extends BaseController
{
    public function index()
    {
        return view('navbar/index'); // ou a view que deseja carregar
    }
}