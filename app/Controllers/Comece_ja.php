<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ComeceJa extends BaseController
{
    public function index()
    {
        echo "Método index chamado"; 
        return view('comece_ja/index');
    }
}