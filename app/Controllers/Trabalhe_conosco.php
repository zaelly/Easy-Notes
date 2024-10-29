<?php 

namespace App\Controllers;

use App\Controllers\BaseController;

class TrabalheConosco extends BaseController{
    public function index(){
        return view('trabalhe_conosco/index');
    }
}