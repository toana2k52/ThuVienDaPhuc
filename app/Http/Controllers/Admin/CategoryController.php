<?php 
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Models\Category;
use App\Http\Models\Product;
use Illuminate\Http\Request;
/**
 * q``
 */
class CategoryController extends Controller
{
    /**
     * summary
     */
    
    public function index(Request $req)
    {
        $cats = Category::where('parent',0)->paginate(10);
        if ($req->search_cats) {
            $cats = Category::where('name','like','%'.$req->search_cats.'%')->paginate(10);
        }
        return view('admin.category.index',[
            'cats' => $cats
        ]);
       
    }
    public function add(){

    }
    public function post_add(Request $req){
        if ($req->isMethod('post')) {
            $this->validate($req,[
                'name' => 'required|unique:category',
                'slug' => 'required|unique:category'
            ],[
                'name.required' => 'Tên danh mục không được để trống!!!',
                'name.unique' => 'Tên danh mục đã tồn tại, vui lòng chọn tên khác!!!',
                'slug.required' => 'Tên hiển thị danh mục không được để trống!!!',
                'slug.unique' => 'Tên hiển thị danh mục đã tồn tại, vui lòng chọn tên khác!!!'

            ]);

            if (Category::create($req->all())) {
                return redirect()->route('admin.category')->with('success','Thêm danh mục '.$req->name.' thành công!');
            }else{
                return redirect()->back()->with('error','Thêm danh mục '.$req->name.' không thành công!');
            }
        }
    }

    public function edit($id, Request $req)
    {
        $cats_pa = Category::all();
        $cats = Category::find($id);
        return view('admin.category.edit',[
            'cats_pa' => $cats_pa,
            'cats' => $cats
        ]);
    }

    public function post_edit($id, Request $req)
    {
        $cats = Category::find($id);
        if ($req->isMethod('post')) {
            $req->offsetUnset('_token');
            $this->validate($req,[
                'name' => 'required|unique:category,name,'.$id
            ],[
                'name.required' => 'Tên danh mục không được để trống!!!',
                'name.unique' => 'Tên danh mục đã tồn tại!!!'

            ]);
            if (Category::where(['id'=>$id])->update($req->all())) {
                return redirect()->route('admin.category')->with('success','Sửa danh mục '.$req->name.' thành công!');
            }else{
                 return redirect()->back()->with('error','Sửa danh mục '.$req->name.' không thành công!');
            }

        }
    }

    public function delete($id){
        $model = Category::find($id);
        $pros = Product::where('category_id',$id)->count();
        if ($pros == 0) {
            Category::where('id',$id)->delete();
            return redirect()->back()->with('success','Xóa danh mục '.$model->name.' thành công');
        }else{
            return redirect()->back()->with('error','Danh mục '.$model->name.' dang có sản phẩm');
        }
    }
}
?>