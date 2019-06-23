<?php 
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Http\Models\Product;
use App\Http\Models\Product_detail;
use App\Cart_user\Cart_user;
/**
 * q``
 */
class CartController extends Controller
{
    /**
     * summary
     */
    public function index()
    {
    	
        return view('user.cart');
    }

    public function post_add_cart_user($id, Request $req, Cart_user $cart){
        $pro_detail = Product_detail::where('product_id',$id)->first();
        if($pro_detail->amount < 1 || $pro_detail->amount < $req->quantity){
            return redirect()->back()->with('error','Rất xin lỗi mặt hàng này hiện tại đã hết hàng, liên hệ hotline để được trợ giúp!');
        }else{
            $quantity = $req->quantity;
            $pro = Product::where('id',$id)->first();
            if($pro){
                $cart->add($pro_detail,$pro,$quantity);
            }
            return redirect()->route('user.index');
        }
    }

    public function update_cart_user($id, Request $req, Cart_user $cart){
        $quantity = $req->quantity;
        $cart->update($id,$quantity);
        return redirect()->back()->with('success','Chỉnh sửa số lượng sản phẩm thành công!');
    }
    public function delete_cart_user($id, Cart_user $cart){
        $cart->delete($id);
        return redirect()->back()->with('success','Xóa sản phẩm khỏi giỏ hàng thành công!');
    }
    public function clear_cart_user(Cart_user $cart){
        $cart->clear();
        return redirect()->back()->with('success','Xóa đơn hàng thành công!');
    }
}
?>