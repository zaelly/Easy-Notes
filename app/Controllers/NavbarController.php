<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class NavbarController extends BaseController
{
    public function index()
    {
        return view('/navbar/index');
    }
}