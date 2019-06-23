@extends('admin.home.home')
@section('title','Quản lý thương hiệu')

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
							<h5 class="card-title" style="margin-top: 10px;">Thương hiệu</h5>

						</div>
						<div class="col-md-4 col-edit" style="padding: 0;">
							<form action="" method="GET" class="form-inline" role="form" style="float: right;">
												<div class="form-group" style="margin-right: 5px;">
													<input type="text" class="form-control" name="search_brand" placeholder="" >
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
									<th>STT</th>
									<th>Tên thương hiệu</th>
									<th>Mô tả</th>
									<th>Trạng thái</th>
									<th><a href="{{route('admin.brand_add')}}" title="Thêm mới" class="btn btn-success" style="width: 100%">Thêm mới</a></th>
								</tr>
							</thead>
							<tbody>
								@foreach($brands as $key => $brand)
								<tr>
									<td>{{$key+1}}</td>
									<td style="width: 200px;">{{$brand->name}}</td>
									<td id="text-news">{{$brand->content}}</td>
									<td>@if(($brand->status) == 0) Hiện @else Ẩn @endif</td>
									<td>
										<a href="{{route('admin.brand_delete',['id'=>$brand->id])}}" class="btn btn-danger btn-xs" title="Xóa" onclick="return confirm('Bạn chắc chắn muốn xóa thương hiệu?')"><i class="fa fa-trash"></i></a>
										<a href="{{route('admin.brand_edit',['id'=>$brand->id])}}" data-id ="" title="Sửa" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a></td>
								</tr>
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