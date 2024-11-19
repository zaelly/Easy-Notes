<?

namespace App\Controllers;

use App\Controllers\BaseController;

class NavSupportController extends BaseController{
    public function index(){
        return view('/navbar/navSupport');
    }
}