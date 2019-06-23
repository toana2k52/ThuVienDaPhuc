@extends('admin.home.home')
@section('title','Quản lý đơn hàng')

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
							<h5 class="card-title" style="margin-top: 10px;">Đơn hàng</h5>

						</div>
						<div class="col-md-4 col-edit" style="padding: 0;">
							<form action="" method="GET" class="form-inline" role="form" style="float: right;">
												<div class="form-group" style="margin-right: 5px;">
													<input type="text" class="form-control" name="search_order" placeholder="" >
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
									<th style="width: 25px;">Mã</th>
									<th style="width: 180px;">Họ tên</th>
									<th>Địa chỉ</th>
									<th style="width: 165px;">Email</th>
									<th style="width: 100px;">SDT</th>
									<th style="width: 15px;">SL</th>
									<th style="width: 165px;">Trạng thái</th>
									<th style="width: 25px;"></th>
								</tr>
							</thead>
							<tbody>
								@foreach($order as $key => $or)
								<tr>
									<td>{{$or->id}}</td>
									<td>{{$or->user_name}}</td>
									<td>{{$or->user_address}}</td>
									<td>{{$or->user_email}}</td>
									<td>{{$or->user_phone}}</td>
									<td>{{$or->quantity}}</td>
									<td>
										@if(($or->status) == 0) Chờ xác nhận @endif
										@if(($or->status) == 1) Đang vận chuyển @endif
										@if(($or->status) == 2) Thanh toán thành công @endif
										@if(($or->status) == 3) Đã hủy bỏ @endif
									</td>
									<td>
										
										<a href="{{route('admin.order_detail',['order_id' => $or->id])}}" data-id ="" title="Chi tiết đơn hàng" class="btn btn-success btn-xs"><i class="fa fa-edit"></i></a></td>
								</tr>
								@endforeach()
								</tbody>
							</table>
						</div>
					<div class="clearfix">
						{{$order->appends(request()->only('search_order'))->links()}}
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