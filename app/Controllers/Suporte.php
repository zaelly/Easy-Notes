<?php
 namespace App\Controllers;

 use App\Controllers\BaseController;

 class Suporte extends BaseController{
    public function index(){
        return view('suporte/index');
    }
 }