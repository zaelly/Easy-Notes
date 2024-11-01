<?php
 namespace App\Controllers;

 use App\Controllers\BaseController;

 class SuporteController extends BaseController{
    public function index(){
        return view('/suporte/index');
    }
 }