<?php 

namespace App\Controllers;

use App\Controllers\BaseController;

class TrabalheConoscoController extends BaseController{
    public function index(){
        return view('/trabalhe_conosco/index');
    }
}