@extends('admin.home.home')
@section('title','Chỉnh sửa đơn hàng')

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
				<div class="container-fluid">
	        		<div class="clearfix">
	        			<div class="col-md-8 col-edit">
	                        <legend>Chi tiết khách hàng</legend>
	                        <p><span style="font-weight: bold;">Mã đơn hàng: </span>{{$order->id}}</p>
	                        <p><span style="font-weight: bold;">Họ tên: </span>{{$order->user_name}}</p>
	                        <p><span style="font-weight: bold;">Email: </span>{{$order->user_email}}</p>
	                        <p><span style="font-weight: bold;">Phone: </span>{{$order->user_phone}}</p>
	                        <p><span style="font-weight: bold;">Address: </span>{{$order->user_address}}</p>
	        			</div>
	        			<div class="col-md-4 col-edit">
	        				<legend>Trạng thái</legend>
	        				<form action="{{route('admin.order_edit',['id' => $order->id])}}" method="POST" class="form-horizontal" role="form">
	        					<div class="form-group">
									<label class="" for="">Trạng thái</label>
									<select class="form-control" hidden>
									</select>
								</div>
	        					<div class="form-group">
	        						<select name="status" class="form-control" required="required">
	        							<option value="0"  @if($order->status == 0) selected @endif()>Chờ xác nhận</option>	
	        							<option value="1"  @if($order->status == 1) selected @endif()>Đang vận chuyển</option>
	        							<option value="2"  @if($order->status == 2) selected @endif()>Thanh toán thành công</option>
	        							<option value="3"  @if($order->status == 3) selected @endif()>Đã hủy</option>
	        						</select>
	        					</div>
	                            <div class="form-group">
	                                <label class="" for="">Lý do hủy</label>
	                                <input type="text" class="form-control" name="note" value="{{$order->note}}">
	                            </div>
	        					@csrf
	        					<div class="text-right form-group">
	                                <button type="submit" class="btn btn-primary">Cập nhật</button>
	                            </div>
	        				</form>
	        			</div>
	        		</div>
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
			        <hr>
					<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th>Mã</th>
								<th style="width: 450px;">Tên sản phẩm</th>
								<th style="width: 150px;">Hình ảnh</th>
								<th>Giá</th>
								<th>SL</th>
								<th>Thành tiền</th>
							</tr>
						</thead>
						<tbody>
						@foreach($order_detail as $od)
							<tr>
								<td>{{$od->product_id}}</td>
								<td>{{$od->prod->name}}</td>
								<td><img style="width: 100%; height: auto;" src="public/product_upload/{{$od->prod->image}}"></td>
								<td>{{number_format($od->price)}} VND</td>
								<td>{{$od->quantity}}</td>
								<?php $price_of_pro = ($od->price)*($od->quantity) ?>
								<td>{{number_format($price_of_pro)}} VND</td>
							</tr>
						@endforeach
						</tbody>
					</table>
					<div class="clearfix">
						
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