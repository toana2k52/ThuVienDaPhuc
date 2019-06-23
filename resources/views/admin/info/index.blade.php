@extends('admin.home.home')
@section('title','Quản lý nhân viên')

@section('main-content')
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<div class="row">
		<div class="col-12">
			<div class="card">
				<form action="{{route('admin.member_edit_info',['id' => $ad->id])}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
					<div class="row">
						<div class="card-body">
							<div class="col-md-12 col-edit" style="margin-bottom: 20px;">
								<div class="col-lg-9 col-edit" style="padding-left: 0">
									<h5 class="card-title" style="margin-top: 10px;">Thông tin cá nhân</h5>
								</div>
								<div class="col-lg-3 col-edit" style="padding-right: 0">
									<a style="float: right;" href="{{route('admin.lock_acc',['id'=>$ad->id])}}" title="Vô hiệu hóa" class="btn btn-danger" onclick="return confirm('Vô hiệu hóa tài khoản sẽ không thể đăng nhập lại, bạn có chắc chắn?')">Vô hiệu hóa tài khoản</a>
								</div>
							</div>
							<div class="col-md-12 col-edit" style="margin-bottom: 20px;">
								@if(Session::has('success'))
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									{{Session::get('success')}}
								</div>
								@endif
								@if(Session::has('error'))
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									{{Session::get('error')}}
								</div>
								@endif
							</div>

							<div class="col-md-6" style="float: left;">
								<div class="form-group">
									<label class="" for="">Họ tên</label>
									<input type="text" class="form-control" name="name" value="{{$ad->name}}" required="required">
									@if($errors->has('name'))
									<div class="text-danger">
										{{$errors->first('name')}}
									</div>
									@endif
								</div>
								<div class="form-group">
									<label class="" for="">Email</label>
									<input type="email" class="form-control" name="email" value="{{$ad->email}}" required="required">
									@if($errors->has('email'))
									<div class="text-danger">
										{{$errors->first('email')}}
									</div>
									@endif
								</div>
								<div class="form-group">
									<label class="" for="">Điện thoại</label>
									<input type="text" class="form-control" name="phone" value="{{$ad->phone}}" placeholder="">
									@if($errors->has('phone'))
									<div class="text-danger">
										{{$errors->first('phone')}}
									</div>
									@endif
								</div>
								
							</div>

							<div class="col-md-6" style="float: left;">
								<div class="form-group">
									<label class="" for="">Địa chỉ</label>
									<input type="text" class="form-control" name="address" value="{{$ad->address}}" placeholder="">
									@if($errors->has('address'))
									<div class="text-danger">
										{{$errors->first('address')}}
									</div>
									@endif
								</div>	
								<div class="form-group">
									<label class="" for="">Ngày sinh</label>
									<input type="date" class="form-control" name="birthday" value="{{$ad->birthday}}" placeholder="">
									@if($errors->has('birthday'))
									<div class="text-danger">
										{{$errors->first('birthday')}}
									</div>
									@endif
								</div>
								<div class="form-group">
									<label class="" for="">Chức vụ: </label>
									<br>
									<label style="margin-top: 10px;">@if(($ad->position) == 1) < Quản lý > @else < Nhân viên > @endif()</label>
								</div>
								<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
								@csrf
								<div class="form-group text-right" style="padding-top: 30px;">
									<button type="submit" class="btn btn-info">CẬP NHẬT</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- End PAge Content -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Right sidebar -->
		<!-- ============================================================== -->
		<!-- .right-sidebar -->
		<!-- ============================================================== -->
		<!-- End Right sidebar -->
		<!-- ============================================================== -->
	</div>
	<!-- ============================================================== -->
	<!-- End Container fluid  -->
	<!-- ============================================================== -->
	
	@stop()