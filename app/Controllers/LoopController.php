<?

namespace App\Controllers;

use App\Controllers\BaseController;

class LoopController extends BaseController{
    public function index(){
       return view("loopingCarregamento/index");
    }
}
