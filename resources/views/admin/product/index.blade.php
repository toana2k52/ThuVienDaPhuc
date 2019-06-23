@extends('admin.home.home')
@section('title','Quản lý sản phẩm')

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
							<h5 class="card-title" style="margin-top: 10px;">Sản phẩm</h5>

						</div>
						<div class="col-md-4 col-edit" style="padding: 0;">
							<form action="" method="GET" class="form-inline" role="form" style="float: right;">
												<div class="form-group" style="margin-right: 5px;">
													<input type="text" class="form-control" name="search_pros" placeholder="" >
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
									<th>Mã</th>
									<th>Ảnh</th>
									<th>Tên</th>
									<th>Danh mục</th>
									<th>Thương hiệu</th>
									<th>SL</th>
									<th>Giá</th>
									<th>Giá KM</th>
									<th>Trạng thái</th>
									<th style="width: 155px;"><a href="{{route('admin.product_add')}}" title="Thêm mới" class="btn btn-success" style="width: 100%">Thêm mới</a></th>
								</tr>
							</thead>
							<tbody>
								@foreach($pros as $key => $pro)
								<tr>
									<td>{{$pro->id}}</td>
									<td><img style="width: 100px; height: auto;" src="public/product_upload/{{$pro->image}}"></td>
									<td>{{$pro->name}}</td>
									<td>{{$pro->prod_cat->name}}</td>
									<td style="width: 70px;">{{$pro->prod_brand->name}}</td>
									@foreach($pros_detail as $pro_dt)
										@if(($pro_dt->product_id) == ($pro->id))
										<td>{{$pro_dt->amount}}</td>
										@endif()
									@endforeach()
									<td>{{number_format($pro->price)}}</td>
									<td>{{number_format($pro->price_sale)}}</td>
									<td>@if(($pro->status) == 0) Bày bán @else Ngừng kinh doanh @endif</td>
									<td>
										<a href="{{route('admin.product_delete',['id'=>$pro->id])}}" class="btn btn-danger btn-xs" title="Xóa" onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm?')"><i class="fa fa-trash"></i></a>
										<a style="width: 26.5px;" href="{{route('admin.product_edit',['id'=>$pro->id,'check'=> 1])}}" data-id ="" title="Sửa" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
										<a style="width: 26.5px;padding-left: 7px;" href="{{route('admin.product_image_add',['id'=>$pro->id])}}" data-id ="" title="Hình ảnh" class="btn btn-warning btn-xs"><i class="fa fa-file-image" aria-hidden="true"></i></a>
										<a style="width: 26.5px;padding-left: 7px;" href="{{route('admin.product_info',['id'=>$pro->id])}}" data-id ="" title="Xem chi tiết" class="btn btn-primary btn-xs"><i class="fa fa-eye" aria-hidden="true"></i></a>
									</td>
								</tr>
								@endforeach()
								</tbody>
							</table>
						</div>
						<div class="clearfix text-right">
							{{$pros->appends(request()->only('search_pros'))->links()}}
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