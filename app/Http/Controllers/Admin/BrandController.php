<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Models\Category;
use App\Http\Models\Product;
use App\Http\Models\Brand;
use Illuminate\Http\Request;
/**
 * q``
 */
class BrandController extends Controller
{
    /**
     * summary
     */
    public function index(Request $req)
    {
        $brand = Brand::paginate(10);
        if ($req->search_brand) {
            $brand = Brand::where('name','like','%'.$req->search_brand.'%')->paginate(10);
        }
        return view('admin.brand.index',[
            'brands' => $brand
        ]);
       
    }
    public function add(){
        return view('admin.brand.add');
    }
    public function post_add(Request $req){
        $this->validate($req,[
            'name' => 'required|unique:brand,name',
            'slug' => 'required|unique:brand,slug'
        ],[
            'name.required' => 'Tên thương hiệu không được để trống!!!',
            'name.unique' => 'Sản phẩm đã tồn tại, vui lòng sử dụng tên khác!!!',
            'slug.required' => 'Tên hiển thị không được để trống!!!',
            'slug.unique' => 'Tên hiển thị sản phẩm đã tồn tại, vui lòng sử dụng tên khác!!!'
        ]);
        if (Brand::create($req->all())) {
            return redirect()->route('admin.brand')->with('success','Thêm thương hiệu '.$req->name.' thành công!');
        }else{
            return redirect()->back()->with('error','Thêm thương hiệu '.$req->name.' không thành công!');
        }
    }

    public function edit($id, Request $req)
    {
        $brand = Brand::find($id);
        $br_id = $brand->id;
        $br_name = $brand->name;
        $br_slug = $brand->slug;
        $br_status = $brand->status;
        $br_content = $brand->content;
        return view('admin.brand.edit',[
            'brand' => $brand, 'br_id' => $br_id, 'br_name' => $br_name, 'br_slug' => $br_slug, 'br_status' => $br_status, 'br_content' => $br_content,
        ]);
    }

    public function post_edit($id, Request $req)
    {
        $brand = Brand::find($id);
        if ($req->isMethod('post')) {
            $req->offsetUnset('_token');
            $this->validate($req,[
                'name' => 'required|unique:brand,name,'.$id,
                'slug' => 'required|unique:brand,slug,'.$id
            ],[
                'name.required' => 'Tên thương hiệu không được để trống!!!',
                'name.unique' => 'Sản phẩm đã tồn tại, vui lòng sử dụng tên khác!!!',
                'slug.required' => 'Tên hiển thị không được để trống!!!',
                'slug.unique' => 'Tên hiển thị sản phẩm đã tồn tại, vui lòng sử dụng tên khác!!!'
            ]);
            if (Brand::where(['id'=>$id])->update($req->all())) {
                return redirect()->route('admin.brand')->with('success','Sửa thương hiệu '.$req->name.' thành công!');
            }else{
                 return redirect()->back()->with('error','Sửa thương hiệu '.$req->name.' không thành công!');
            }

        }
    }


    public function delete($id){
        $brand = Brand::find($id);
        $br = Brand::where('id',$id)->delete();
        if($br){
            return redirect()->back()->with('success','Xóa thương hiệu thành công!');
        }else{
            return redirect()->back()->with('error','xóa thương hiệu thất bại!');
        }
    }
}
?>