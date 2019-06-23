<?php 
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\date;
use Auth;
use App\Http\Models\Admin;
use App\Http\Models\Orders;
/**
 * q``
 */
class AdminController extends Controller
{
    /**
     * summary
     */
    public function index()
    {
        $check = 'new';
    	return view('admin.index',[
            'check' => $check
        ]);
    }

    public function index_user($id)
    {
        
        return view('admin.index',[
           'check' => $id
        ]);
    }

    public function pay()
    {
        $check = 'new';
        return view('admin.pay',[
            'check' => $check
        ]);
    }

    public function pay_user($id)
    {
        
        return view('admin.pay',[
           'check' => $id
        ]);
    }
    public function register()
    {
    	return view('admin.login.register');
    }
    public function post_register(Request $req)
    {
    	$this->validate($req,[
    		'name' => 'required|min:2',
    		'email' => 'required|email|unique:admin,email',
    		'password' => 'required|min:6',
    		'confirm_password' => 'required|same:password',
    	],[
    		'name.required' => 'Họ tên không được để trống!',
    		'email.required' => 'Email không được để trống!',
    		'password.required' => 'Mật khẩu không được để trống!',
    		'unique' => ':attribute đã được sử dụng!',
    		'min' => ':attribute phải có ít nhất :min ký tự!',
    		'same' => 'Hai mật khẩu không trùng khớp!'
    	]);

    	$password = bcrypt($req->password);
    	$req->offsetUnset('confirm_password');
    	$req->offsetUnset('_token','password');
    	$req->merge(['password'=> $password]);

    	if (Admin::create($req->all())) {
    		return redirect()->route('admin.member')->with('success','Thêm nhân viên '.$req->name.' thành công!');
    	}else{
    		return redirect()->back()->with('error','Thêm mới nhân viên '.$req->name.' không thành công!');
    	}     
    }

    public function login()
    {
        return view('admin.login.login');
    }
     public function post_login(Request $req)
    {
        $this->validate($req,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ],[
            'email.required' => 'Email không được để trống!',
            'password.required' => 'Mật khẩu không được để trống!'
        ]);
        if (Auth::attempt($req->only('email','password'),$req->has('remember'))) {
            if((Auth::user()->status) == 0){
            return redirect()->route('admin.index');
            }else{
                return redirect()->back()->with('error','Tài khoản của bạn đã bị vô hiệu hóa, liên hệ người quản lý để được hỗ trợ!'); 
            }
        }else{
            return redirect()->back()->with('error','Email hoặc mật khẩu không chính xác!');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function index_member(Request $req)
    {
        $ad = Admin::paginate(5);
        if ($req->search_ad) {
            $ad = Admin::where('name','like','%'.$req->search_ad.'%')->paginate(5);
        }
        return view('admin.member.index',[
            'ads' => $ad
        ]);
    }

    public function edit($id,Request $req)
    {
        $ad = Admin::find($id);
        if ($req->isMethod('post')) {
            $req->offsetUnset('_token');
            $this->validate($req,[
                'name' => 'required|min:2',
                'email' => 'required|email|unique:admin,email,'.$id,
                'password' => 'required|min:6',
                'confirm_password' => 'required|same:password',
                ],[
                    'name.required' => 'Họ tên không được để trống!',
                    'email.required' => 'Email không được để trống!',
                    'password.required' => 'Mật khẩu không được để trống!',
                    'unique' => ':attribute đã được sử dụng!',
                    'min' => ':attribute phải có ít nhất :min ký tự!',
                    'same' => 'Hai mật khẩu không trùng khớp!'
                ]);

            $password = bcrypt($req->password);
            $req->merge(['password'=> $password]);
            if($ad->update($req->all())) {
                return redirect()->route('admin.member')->with('success','Sửa thông nhân viên '.$req->name.' thành công!');
            }else{
                 return redirect()->back()->with('error','Sửa thông tin nhân viên '.$req->name.' không thành công!');
            }
        }
        return view('admin.member.edit',['ad' => $ad]);       
    }
    public function delete($id){
        $ads = Admin::find($id);
        $ad = Admin::where('id',$id)->delete();
        if($ad){
            return redirect()->back()->with('success','Xóa nhân viên '.$ads->name.' thành công!');
        }else{
            return redirect()->back()->with('error','xóa nhân viên '.$ads->name.' thất bại!');
        }
    }

    public function index_info(){
        $id = Auth::user()->id;
        $ads = Admin::find($id);
        return view('admin.info.index',[
            'ad' => $ads
        ]);
    }

    public function edit_info($id,Request $req)
    {
        $ad = Admin::find($id);
        if ($req->isMethod('post')) {
            $req->offsetUnset('_token');
            $this->validate($req,[
                'name' => 'required|min:2',
                'email' => 'required|email|unique:admin,email,'.$id,
                ],[
                    'name.required' => 'Họ tên không được để trống!',
                    'email.required' => 'Email không được để trống!',
                    'unique' => ':attribute đã được sử dụng!',
                    'min' => ':attribute phải có ít nhất :min ký tự!'
                ]);

            if($ad->update($req->all())) {
                return redirect()->route('admin.info')->with('success','Sửa thông tin thành công!');
            }else{
                 return redirect()->back()->with('error','Sửa thông tin không thành công!');
            }
        }     
    }

    public function lock_acc($id,Request $req)
    {
        $ad = Admin::find($id);
        if($ad->update(['status' => 1])) {
            return redirect()->route('login')->with('success','Đã vô hiệu hóa tài khoản '.$ad->name.'!');
        }else{
             return redirect()->back()->with('error','Vô hiệu hóa thất bại!');
        }    
    }

    public function reset_password()
    {
      
    }
    public function post_reset_password(Request $req)
    {
        $this->validate($req,[
            'old_password' => 'required|check_old_password',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ],[
            'old_password.check_old_password' => 'Mật khẩu cũ không đúng!',
            'old_password.required' => 'Mật khẩu cũ không được để trống!',
            'password.required' => 'Mật khẩu không được để trống!',
            'min' => ':attribute phải có ít nhất :min ký tự!',
            'same' => 'Hai mật khẩu không trùng khớp!'
            // 'same' => ':attribute không trùng khớp với :other!'
        ]);
         if (Auth::user()->update(['password' => bcrypt($req->password)])) {
                return redirect()->route('admin.index')->with('success','Thay đổi mật khẩu thành công!');
            }else{
                 return redirect()->back()->with('error','Thay đổi mật khẩu thất bại!');
            }      
    }
}
?>