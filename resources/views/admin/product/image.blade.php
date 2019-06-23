@extends('admin.home.home')
@section('title','Quản lý hình ảnh sản phẩm')

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
							<h5 class="card-title" style="margin-top: 10px;">Hình ảnh sản phẩm</h5>
						</div>
						<div class="col-md-3 col-edit" style="padding: 0;">
							<a style="float: right;" data-toggle="modal" href='#modal-image' class="btn btn-primary">Thêm mới hình ảnh</a>
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
						<div class="row" style="width: 100%;">
							@foreach($pro_image as $pr)
							<div class="col-sm-6 col-md-4">
								<div class="thumbnail">
									<div style="width: 100%; height: 220px;">	
										<image src ="public/product_upload/list_image/{{$pr->image}}" style = "width: 100%"></image>
									</div>
									<div class="caption text-right">
										<hr>
										<p>Trạng thái: @if(($pr->status) == 0) <span style="font-weight: bold; color: green;">Hiện</span>@else() <span style="font-weight: bold; color: red;">Ẩn</span>@endif()
										</p>
										<p>
											@if(($pr->status) == 0)<a href="{{route('admin.product_status_image',['id' => $pr->id, 'status' => 1])}}" class="btn btn-warning" role="button">Ẩn</a>@else() <a href="{{route('admin.product_status_image',['id' => $pr->id, 'status' => 0])}}" class="btn btn-default" role="button">Hiện</a>@endif()
											<a href="{{route('admin.product_delete_image',['id' => $pr->id])}}" class="btn btn-danger" role="button">Xóa</a> 
										</p>
									</div>
								</div>
							</div>
							@endforeach
						</div>
						<div class="modal fade" id="modal-image">
							<div class="modal-dialog">
								<form action="{{route('admin.product_image_add',['id'=>$pros->id])}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Thêm mới hình ảnh</h4>
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									</div>
									<div class="modal-body">
										<div class="container-fluid">
											<input type="hidden" class="form-control" name="product_id" value="{{$pros->id}}">
											<div class="form-group">
												<label class="">Chọn 1 hoặc nhiều ảnh</label>
												<input style="width: 100%;" type="file" class="form-control" name="other_img[]" style="margin-right: -5px;padding-top: 5px;" multiple="" >
											</div>
										</div>
										@csrf
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary">Thêm mới</button>
										<button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
									</div>
								</div>
								</form>
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