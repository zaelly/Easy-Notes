<?php 
namespace App\Controllers;
use App\Controllers\BaseController;

class FooterController extends BaseController{
    public function index(){
        return view('/footer/index');
    }
}