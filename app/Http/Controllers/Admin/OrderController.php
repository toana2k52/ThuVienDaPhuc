<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Models\Category;
use App\Http\Models\Product;
use App\Http\Models\Brand;
use App\Http\Models\Orders;
use App\Http\Models\Orders_detail;
use Illuminate\Http\Request;
/**
 * q``
 */
class OrderController extends Controller
{
    /**
     * summary
     */
    public function index(Request $req)
    {
        $order = Orders::orderBy('created_at', 'desc')->paginate(10);
        if ($req->search_order) {
            $order = Orders::where('user_name','like','%'.$req->search_order.'%')->paginate(10);
        }
        return view('admin.order.index',[
            'order' => $order
        ]);
       
    }

    public function index_order_detail($order_id, Request $req)
    {   
        $order = Orders::where('id',$order_id)->first();
        $order_price = Orders_detail::where('orders_id',$order_id)->sum('price');
        $order_detail = Orders_detail::where('orders_id',$order_id)->get();
        return view('admin.order.edit',[
            'order' => $order,
            'order_detail' => $order_detail,
            'order_price' => $order_price
        ]);
       
    }

    public function post_edit($id, Request $req)
    {
        $order = Orders::find($id);
        if ($req->isMethod('post')) {
            $req->offsetUnset('_token');
            if ($order->update(['status'=> $req->status,'note' => $req->note])) {
                return redirect()->route('admin.order')->with('success','Cập nhật trạng thái đơn hàng mã '.$id.' thành công!');
            }else{
                 return redirect()->back()->with('error','Cập nhật trạng thái đơn hàng mã '.$id.' không thành công!');
            }

        }
    }
}
?>