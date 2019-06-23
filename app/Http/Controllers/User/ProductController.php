<?php 
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Category;
use App\Http\Models\Brand;
use App\Http\Models\Product;
use App\Http\Models\Product_detail;
use App\Http\Models\Product_image;
use App\Http\Models\Product_info;
use Auth;
/**
 * q``
 */
class ProductController extends Controller
{
    /**
     * summary
     */
    public function index(Request $req)
    {
    	$pros_all = Product::orderBy('price_sale','ASC')->paginate(10);
        return view('user.product',[
        	'pros_all' => $pros_all,
            'arr' => 'tang'
        ]);
    }
    public function product_detail($slug, Request $req)
    {
        $pro = Product::where('slug', $slug)->first();
        $pro_dt = Product_detail::where('product_id', $pro->id)->first();
        $pro_if = Product_info::where('product_id', $pro->id)->first();
        $pro_im = Product_image::where('product_id', $pro->id)->get();
        $pro_all = Product::where('category_id', $pro->category_id)->get();
        return view('user.product_detail',[
            'pro' => $pro,
            'pro_dt' => $pro_dt,
            'pro_if' => $pro_if,
            'pro_im' => $pro_im,
            'pro_all' => $pro_all
        ]);
    }

    public function pro_cats($slug, Request $req)
    {
        $cat = Category::where('slug', $slug)->first();
        $pro_cats = Product::where('category_id', $cat->id)->paginate(10);
        return view('user.product_control',[
            'pro_cts' => $pro_cats,
            'detail' => $cat->name
        ]);
    }

    public function pro_brands($slug, Request $req)
    {
        $brand = Brand::where('slug', $slug)->first();
        $pro_brands = Product::where('brand_id', $brand->id)->paginate(10);
        return view('user.product_control',[
            'pro_cts' => $pro_brands,
            'detail' => $brand->name
        ]); 
    }

    public function pro_find(Request $req)
    {
        if ($req->search_all) {
            $pros_finds = Product::where('name','like','%'.$req->search_all.'%')->get();
        }
        return view('user.product_find',[
            'pro_finds' => $pros_finds,
            'detail' => $req->search_all
        ]);
    }

    public function pro_arr($arr, Request $req)
    {
        if($arr == 'tang'){
            $pros_arrs = Product::orderBy('price_sale','ASC')->paginate(10);
        }else{
            $pros_arrs = Product::orderBy('price_sale','DESC')->paginate(10);
        }
        return view('user.product',[
            'pros_all' => $pros_arrs,
            'arr' => $arr
        ]);
    }

     public function pro_price(Request $req)
    {
        
        if($req->price_max != null){
            $pros_prices = Product::where('price_sale','>=',$req->price_min)->where('price_sale','<=',$req->price_max)->paginate(10);
        }else{
            return redirect()->back();
        }
        return view('user.product',[
            'pros_all' => $pros_prices,
            'arr' => 'tang'
        ]);
    }
}
?>