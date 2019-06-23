<?php 
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Product;
use Auth;
/**
 * q``
 */
class UserController extends Controller
{
    /**
     * summary
     */
    public function index()
    {
        //$pros_hot = Product::('created_at', 'desc')->limit(4)->get();
        $pros_brand = Product::orderBy('created_at','DESC')->limit(8)->get();
        $pros_sale = Product::where('price_sale','<>','0')->orderBy('price_sale','DESC')->limit(8)->get();
        $pros_new = Product::orderBy('created_at','DESC')->limit(3)->get();
        return view('user.index',[
            'pros_brand' => $pros_brand,
            'pros_sale' => $pros_sale,
            'pros_new' => $pros_new
        ]);
    }
    public function about()
    {

        return view('user.about');
    }

    public function contact()
    {

        return view('user.contact');
    }
}
?>