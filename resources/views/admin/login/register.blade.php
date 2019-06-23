@extends('admin.home.home')
@section('title','Thêm mới nhân viên')

@section('main-content')
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<div class="row">
		<div class="col-md-12">
			<h5 class="card-title"></h5>
			<div class="card">
				<form action="{{route('admin.register')}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
					<div class="row">
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
						<div class="card-body">
							<div class="col-md-12 col-edit" style="margin-bottom: 20px;">
								<h5 class="card-title" style="margin-top: 10px;">Thêm mới nhân viên</h5>
							</div>
							<div class="col-md-6" style="float: left;">
								<div class="form-group">
									<label class="" for="">Họ tên</label>
									<input type="text" class="form-control" name="name" required="required">
									@if($errors->has('name'))
									<div class="text-danger">
										{{$errors->first('name')}}
									</div>
									@endif
								</div>
								<div class="form-group">
									<label class="" for="">Email</label>
									<input type="email" class="form-control" name="email" required="required">
									@if($errors->has('email'))
									<div class="text-danger">
										{{$errors->first('email')}}
									</div>
									@endif
								</div>
								<div class="form-group">
									<label class="" for="">Điện thoại</label>
									<input type="text" class="form-control" name="phone" placeholder="">
									@if($errors->has('phone'))
									<div class="text-danger">
										{{$errors->first('phone')}}
									</div>
									@endif
								</div>
								<div class="form-group">
									<label class="" for="">Địa chỉ</label>
									<input type="text" class="form-control" name="address" placeholder="">
									@if($errors->has('address'))
									<div class="text-danger">
										{{$errors->first('address')}}
									</div>
									@endif
								</div>	
								<div class="form-group">
									<label class="" for="">Ngày sinh</label>
									<input type="date" class="form-control" name="birthday" placeholder="">
									@if($errors->has('birthday'))
									<div class="text-danger">
										{{$errors->first('birthday')}}
									</div>
									@endif
								</div>
							</div>

							<div class="col-md-6" style="float: left;">
								
								<div class="form-group">
									<label class="" for="">Chức vụ</label>
									<select name="position" class="form-control">
										<option value="0" >Nhân viên</option>
										<option value="1" >Quản lý</option>
									</select>
								</div>
								<div class="form-group">
									<label class="" for="">Trạng thái</label>
									<select name="status" class="form-control">
										<option value="0" >Mở</option>
										<option value="1" >Khóa</option>
									</select>
								</div>
								<div class="form-group">
									<label class="" for="">Mật khẩu</label>
									<input type="password" class="form-control" name="password" required="required">
									@if($errors->has('password'))
									<div class="text-danger">
										{{$errors->first('password')}}
									</div>
									@endif
								</div>
								<div class="form-group">
									<label class="" for="">Nhập lại mật khẩu</label>
									<input type="password" class="form-control" name="confirm_password" required="required">
									@if($errors->has('confirm_password'))
									<div class="text-danger">
										{{$errors->first('confirm_password')}}
									</div>
									@endif
								</div>
								<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
								@csrf
								<div class="form-group text-right" style="padding-top: 30px;">
									<button type="submit" class="btn btn-info">THÊM NHÂN VIÊN</button>
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