<?php 
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Http\Models\Category;
use App\Http\Models\Brand;
use App\Http\Models\Product;
use App\Http\Models\Product_detail;
use App\Http\Models\Product_info;
use App\Http\Models\Orders;
use App\Http\Models\Orders_detail;
use App\Cart_user\Cart_user;
/**
 * q``
 */
class OrderController extends Controller
{
    /**
     * summary
     */
    public function index()
    {
        return view('user.order_select_address');
    }

    public function add_order_detail_user( Request $req, Cart_user $cart)
    {
        $tsl = 0;
        if(session('cart_user') != 0){
            foreach (session('cart_user') as $item) {
                $tsl = $tsl + $item['quantity'];
            }
            $req->merge(['user_name'=>$req->user_name,'user_email'=>$req->user_email,'user_phone'=>$req->user_phone,'user_address'=>$req->user_address,'quantity'=>$tsl,'status'=>0]);
            $order = Orders::create($req->all());
            if ($order) {
                $req->merge(['orders_id' =>$order->id]);
                foreach (session('cart_user') as $cart_of_c){ 
                    $req->merge(['product_id' =>$cart_of_c['id'],'product_name' =>$cart_of_c['name'],'price' =>$cart_of_c['price'],'quantity' => $cart_of_c['quantity']]);
                    $order_detail = Orders_detail::create($req->all());
                    if ($order_detail) {
                        $product_detail = Product_detail::where('product_id',$cart_of_c['id'])->first();
                        $amount_new = $product_detail->amount - $cart_of_c['quantity'];
                        if($product_detail->update(['amount'=> $amount_new])){

                        }
                    }
                }
                $cart->clear();
                $od_dt = Orders_detail::where('orders_id',$order->id)->get();
                $od = Orders::find($order->id);
                $order_price = Orders_detail::where('orders_id',$order->id)->sum('price');
                $pro = Product::where('id',$order_detail->product_id)->get();
                return view('user.order_detail',[
                    'od_dt' => $od_dt,
                    'order_price' => $order_price,
                    'order' => $od,
                    'pro' => $pro
                ]);
                
            }
        }else{
            return view('user.index');
        }

    }
}
?>