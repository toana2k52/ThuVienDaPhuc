@extends('admin.home.home')
@section('title','Quản lý thông tin cấu hình sản phẩm')

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
						<div class="col-md-9 col-edit" style="margin-bottom: 20px;padding: 0;">
							<h5 class="card-title" style="margin-top: 10px;">Thông tin sản phẩm</h5>
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
						<div class="col-md-6 col-edit" style="margin-bottom: 40px;">
							<img style="width: 90%; height: auto; margin-top: 15px;" src="public/product_upload/{{$pro->image}}">
						</div>
						<div class="col-md-6 col-edit">
							<p>Tên sản phẩm: <span style="font-style: italic; font-weight: bold;">{{$pro->name}}</span></p>
							<hr>
							<p>Danh mục: <span style="font-style: italic;">{{$pro->prod_cat->name}}</span></p>
							<hr>
							<p>Thương hiệu: <span style="font-style: italic;">{{$pro->prod_brand->name}}</span></p>
							<hr>
						</div>
						<div class="col-md-6 col-edit">
							@foreach($pro_dt as $dt)
							<p>Số lượng tồn: <span style="font-style: italic;">{{$dt->amount}}</span></p>
							<hr>
							<p>Giá: <span style="font-style: italic;">{{number_format($pro->price)}} VND</span></p>
							<hr>
							<p>Giá khuyến mại: <span style="font-style: italic;">{{number_format($pro->price_sale)}} VND</span></p>
							<hr>
							<p>Trạng thái: <span style="font-style: italic;">@if(($pro->status) == 0) Bày bán @else Ngừng kinh doanh @endif</span></p>
							<hr>
							@endforeach()
						</div>
						<div class="col-md-6 col-edit">
							<br>
							@foreach($pro_dt as $info)
							<p>Loại dây: <span style="font-style: italic;">{{$info->type}}</span></p>
							<hr>
							<p>Mặt kính: <span style="font-style: italic;">{{$info->glass}}</span></p>
							<hr>
							<p>Chất liệu: <span style="font-style: italic;">{{$info->material}}</span></p>
							<hr>
							<p>Bảo hành: <span style="font-style: italic;">{{$info->warranty}}</span></p>
							<hr>
							<p>Hình dáng: <span style="font-style: italic;">{{$info->face_type}}</span></p>
							<hr>
							<p>Kích thước: <span style="font-style: italic;">{{$info->size}}</span></p>
							<hr>
							@endforeach()
							<div class="text-right" style="width: 100%">
								<a href="{{route('admin.product_edit',['id'=>$pro->id,'check' => 0])}}" title="Chỉnh sửa" class="btn btn-primary">Chỉnh sửa chi tiết</a>
							</div>
						</div>
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