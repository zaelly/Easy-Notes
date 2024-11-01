<?php 
namespace App\Controllers;

use App\Controllers\BaseController;

class ContatoController extends BaseController{
    public function index(){
        return view('/contato/index');
    }
}