<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ComeceJaController extends BaseController
{
    public function index()
    {
        return view('/comecar_ja/index');
    }
}