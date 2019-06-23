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
				<div class="card-body">
					<div class="col-md-12 col-edit" style="padding: 0">
						<div class="col-md-8 col-edit" style="margin-bottom: 20px;padding: 0;">
							<h5 class="card-title" style="margin-top: 10px;">Nhân viên</h5>

						</div>
						<div class="col-md-4 col-edit" style="padding: 0;">
							<form action="" method="GET" class="form-inline" role="form" style="float: right;">
												<div class="form-group" style="margin-right: 5px;">
													<input type="text" class="form-control" name="search_ad" placeholder="" >
												</div>
												@csrf
												<button type="submit" class="btn btn-primary">Tìm kiếm</button>
												</form>
						</div>
					</div>
					<div class="col-md-12 col-edit" style="padding: 0">
						@if(Session::has('success'))
						<div class="clearfix alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{Session::get('success')}}
						</div>
						@endif
						@if(Session::has('error'))
						<div class="clearfix alert alert-danger">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							{{Session::get('error')}}
						</div>
						@endif
					</div>
					<div class="table-responsive" style="margin-top: 10px;">
						<table id="zero_config" class="table table-striped table-bordered">
							<thead>
								<tr>
									<th style="width: 30px">Mã</th>
									<th style="width: 70px">Tên</th>
									<th style="width: 65px">Email</th>
									<th style="width: 45px">Ngày sinh</th>
									<th>Địa chỉ</th>
									<th style="width: 50px">SDT</th>
									<th style="width: 60px">Chức vụ</th>
									<th style="width: 50px">Trạng thái</th>
									<th><a href="{{route('admin.register')}}" title="Thêm mới" class="btn btn-success" style="width: 100%">Thêm mới</a></th>
								</tr>
							</thead>
							<tbody>
								@foreach($ads as $key => $ad)
								@if(($ad->id) != (Auth::user()->id))
								<tr>
									<td>{{$ad->id}}</td>
									<td>{{$ad->name}}</td>
									<td>{{$ad->email}}</td>
									<td>{{$ad->birthday}}</td>
									<td>{{$ad->address}}</td>
									<td>{{$ad->phone}}</td>
									<td>@if(($ad->position) == 1) Quản lý @else Nhân viên @endif</td>
									<td>@if(($ad->status) == 0) Mở @else Khóa @endif</td>
									<td>
										<a href="{{route('admin.member_delete',['id'=>$ad->id])}}" class="btn btn-danger btn-xs" title="Xóa" onclick="return confirm('Bạn chắc chắn muốn xóa nhân viên này?')"><i class="fa fa-trash"></i></a>
										<a href="{{route('admin.member_edit',['id'=>$ad->id])}}" data-id ="" title="Sửa" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a></td>
								</tr>
								@endif()
								@endforeach()
								</tbody>
							</table>
						</div>

					</div>
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