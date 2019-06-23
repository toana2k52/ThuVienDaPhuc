<?php 
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\File as LaraFile;
use App\Http\Controllers\Controller;
use App\Http\Models\Category;
use App\Http\Models\Product;
use App\Http\Models\Brand;
use App\Http\Models\Product_image;
use App\Http\Models\Product_detail;
use App\Http\Models\Product_info;
use Illuminate\Http\Request;
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
        $pros = Product::paginate(10);
        $pros_detail = Product_detail::paginate(10);
        if ($req->search_pros) {
            $pros = Product::where('name','like','%'.$req->search_pros.'%')->paginate(10);
        }
        return view('admin.product.index',[
            'pros' => $pros,
            'pros_detail' => $pros_detail
        ]);

    }

    public function add(){
        return view('admin.product.add',[
            'cats'  => Category::all(),
            'brands'  => Brand::all()
        ]);

    }

    public function post_add(Request $req){
        $this->validate($req,[
            'name' => 'required|unique:product,name',
            'slug' => 'required|unique:product,slug',
            'price' => 'required',
            'category_id' => 'required',
            'brand_id' => 'required',
            'amount' => 'required',
            'content' => 'required',
            'image_pro' => 'required',
            'type' => 'required',
            'size' => 'required',
            'glass' => 'required',
            'material' => 'required',
            'face_type' => 'required',
            'warranty' => 'required'
        ],[
            'name.required' => 'Tên sản phẩm không được để trống!!!',
            'slug.required' => 'Tên sản phẩm không được để trống!!!',
            'price.required' => 'Giá sản phẩm không được để trống!!!',
            'content.required' => 'Mô tả sản phẩm không được để trống!!!',
            'category_id.required' => 'Danh mục sản phẩm không được để trống!!!',
            'brand_id.required' => 'Thương hiệu sản phẩm không được để trống!!!',
            'amount.required' => 'Số lượng sản phẩm không được để trống!!!',
            'size.required' => 'Kích cỡ sản phẩm không được để trống!!!',
            'image_pro.required' => 'Ảnh đại diện sản phẩm không được để trống!!!',
            'name.unique' => 'Sản phẩm đã tồn tại!!!',
            'slug.unique' => 'Sản phẩm đã tồn tại!!!',
            'type.required' => 'Loại dây của sản phẩm không được để trống!!!',
            'glass.required' => 'Mặt kính của sản phẩm không được để trống!!!',
            'material.required' => 'Chất liệu của sản phẩm không được để trống!!!',
            'face_type.required' => 'Loại mặt của sản phẩm không được để trống!!!',
            'warranty.required' => 'Bảo hành của sản phẩm không được để trống!!!'
        ]);
        $imge = [];
        if($req->hasFile('image_pro')){
            $file = $req->image_pro;
            $file_name_image = date('Y-m-d-h-s-i').$file->getClientOriginalName();
            $file->move(base_path('public/product_upload'),$file_name_image);
            $imge = $file_name_image;
        }
        $req->merge(['image' => $imge]);
        $prod = Product::create($req->all());
        if ($prod) {
            $product_id = $prod->id;
            $req->merge(['product_id'=> $product_id]);
            $pro_dt = Product_detail::create($req->all()); 
            if ($pro_dt) { 
                return redirect()->route('admin.product')->with('success','Thêm sản phẩm '.$req->name.' thành công!');
            }else{
                return redirect()->back()->with('error','Thêm sản phẩm không thành công!'); 
            } 
        }
    }

    public function edit($id, $check, Request $req)
    {
        $pros = Product::find($id);
        $cats = Category::all();
        $brand = Brand::all();
        $pros_detail = Product_detail::where('product_id',$id)->get();

        $categories = Category::where(['parent' => 0])->get();
            $categories_drop_down = "";

        foreach($categories as $cat){
            if($cat->id==$pros->category_id){
                $selected = "selected";
            }else{
                $selected = null;
            }
            $categories_drop_down .= "<option value='".$cat->id."' ".$selected.">".$cat->name."</option>";
            $sub_categories = Category::where(['parent' => $cat->id])->get();
            foreach($sub_categories as $sub_cat){
                if($sub_cat->id==$pros->category_id){
                    $selected = "selected";
                }else{
                    $selected = "";
                }
                $categories_drop_down .= "<option value='".$sub_cat->id."' ".$selected.">&nbsp;&nbsp;--&nbsp;".$sub_cat->name."</option>";  
            }   
        }

        if ($req->isMethod('post')) {
            $req->offsetUnset('_token');
            $this->validate($req,[
                'name' => 'required|unique:product,name,'.$id,
                'slug' => 'required|unique:product,slug,'.$id,
                'price' => 'required',
                'category_id' => 'required',
                'brand_id' => 'required',
                'amount' => 'required',
                'content' => 'required',
                'type' => 'required',
                'size' => 'required',
                'glass' => 'required',
                'material' => 'required',
                'face_type' => 'required',
                'warranty' => 'required'
            ],[
                'name.required' => 'Tên sản phẩm không được để trống!!!',
                'slug.required' => 'Tên sản phẩm không được để trống!!!',
                'price.required' => 'Giá sản phẩm không được để trống!!!',
                'content.required' => 'Mô tả sản phẩm không được để trống!!!',
                'category_id.required' => 'Danh mục sản phẩm không được để trống!!!',
                'brand_id.required' => 'Thương hiệu sản phẩm không được để trống!!!',
                'amount.required' => 'Số lượng sản phẩm không được để trống!!!',
                'size.required' => 'Kích cỡ sản phẩm không được để trống!!!',
                'name.unique' => 'Sản phẩm đã tồn tại!!!',
                'slug.unique' => 'Sản phẩm đã tồn tại!!!',
                'type.required' => 'Loại dây của sản phẩm không được để trống!!!',
                'glass.required' => 'Mặt kính của sản phẩm không được để trống!!!',
                'material.required' => 'Chất liệu của sản phẩm không được để trống!!!',
                'face_type.required' => 'Loại mặt của sản phẩm không được để trống!!!',
                'warranty.required' => 'Bảo hành của sản phẩm không được để trống!!!'
            ]);
            $pros = Product::find($id);
            $pros_detail = Product_detail::where('product_id',$id);
            $imge_ava = $pros->image;
            if($req->hasFile('image_pro')){
                $file = $req->image_pro;
                $file_name_image = date('Y-m-d-h-s-i').$file->getClientOriginalName();
                $file->move(base_path('public/product_upload'),$file_name_image);
                $imge_ava = $file_name_image;
            }
            $req->merge(['image' => $imge_ava ]);
            if ($pros->update($req->all())) {
                if ($pros_detail->update(['amount'=> $req->amount,'content'=> $req->content,'type'=>$req->type,'size'=> $req->size,'glass'=> $req->glass,'material'=> $req->material,'face_type'=> $req->face_type,'warranty'=> $req->warranty])) {
                    if ($check != 0) {
                        return redirect()->route('admin.product')->with('success','Sửa thông tin sản phẩm '.$req->name.' thành công!');
                    }else{
                        return redirect()->route('admin.product_info',['id'=>$pros->id])->with('success','Sửa thông tin sản phẩm '.$req->name.' thành công!');
                    }
                }else{
                    return redirect()->back()->with('error','Sửa thông tin sản phẩm '.$req->name.' không thành công!');
             }
         }else{
            return redirect()->back()->with('error','Sửa thông tin sản phẩm '.$req->name.' không thành công!');
        }

    }
    return view('admin.product.edit',['pros' => $pros,'cats' =>$cats, 'brands' => $brand, 'pros_detail' => $pros_detail, 'check' => $check, 'categories_drop_down' => $categories_drop_down]);
}


public function delete($id){
    $pros = Product::find($id);
    $pro_image = Product_image::where('product_id',$id)->delete();
    $pro_detail = Product_detail::where('product_id',$id)->delete();

    if ($pro_detail) {  
        $pro = Product::where('id',$id)->delete();
        if($pro){
            $dl = LaraFile::delete("public/product_upload/".$pros->image);
            if ($dl) {
             return redirect()->back()->with('success','Xóa sản phẩm thành công!');
         }else{
            return redirect()->back()->with('error','xóa sản phẩm thất bại <Hình ảnh>!');
        }
    }else{
        return redirect()->back()->with('error','xóa sản phẩm thất bại!');
    }
}else{
    return redirect()->back()->with('error','xóa sản phẩm thất bại!');
}
}

public function add_image($id){
        $pros = Product::find($id);
        $pro = Product::Where('id',$id)->first();
        $pro_image = Product_image::where('product_id',$id)->get();
        return view('admin.product.image',[
            'pros' => $pros,
            'pro' => $pro,
            'pro_image'  => $pro_image
        ]);
    }
    public function post_add_image($id, Request $req){
        foreach($req->other_img as $other){
            $file_name_image = date('Y-m-d-h-s-i').$other->getClientOriginalName();
            $other->move(base_path('public/product_upload/list_image/'),$file_name_image);
            $req->merge(['image' => $file_name_image ]);
            Product_image::create($req->all());
        }
        return redirect()->back()->with('success','Thêm ảnh sản phẩm thành công!');
    }

    public function delete_image($id){
        $pros_image = Product_image::find($id);
        $pro_image = Product_image::where('id',$id)->delete();
        if($pro_image){
            return redirect()->back()->with('success','Xóa ảnh sản phẩm thành công!');
        }else{
            return redirect()->back()->with('error','xóa ảnh sản phẩm thất bại!');
        }
    }

    public function status_image($id, $status){
    $pros_image = Product_image::find($id);
        if ($pros_image->update(['status'=> $status])) {
                    return redirect()->back()->with('success','Xóa ảnh sản phẩm thành công!');
                }else{
                    return redirect()->back()->with('error','xóa ảnh sản phẩm thất bại!');
            }
    }
    public function info($id){
        $pro = Product::find($id);
        $pro_dt = Product_detail::where('product_id',$pro->id)->get();
        return view('admin.product.info',[
            'pro' => $pro,
            'pro_dt' => $pro_dt
        ]);
    }

}
?>