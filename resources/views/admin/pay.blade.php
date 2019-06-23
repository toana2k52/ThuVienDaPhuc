@extends('admin.home.home')
@section('title','THPT Đa Phúc - Trả sách')

@section('main-content')
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Start Page Content -->
	<!-- ============================================================== -->
	<div class="row">
		<div class="col-md-12">
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
			<div class="card">
				<div class="">
					<div class="row">
						<div class="col-lg-3 border-right p-r-0">
							<div class="card-body border-bottom">
								<h4 class="card-title m-t-10"> <span>{{Auth::user()->name}}</span></h4>
								<p style="margin-bottom: 5px;">< Phòng kế toán ></p>
								<li style="margin-left: 15px; color: green; size: 18px; ">online</li>
							</div>
							<div class="card-body">
								<div class="row">
									@if($check != 'new')
									<div class="col-md-12">
										<h4 class="card-title m-t-10" style="margin-bottom: 15px;">Độc giả:</h4>
											<p><i class="fa fa-angle-right" aria-hidden="true"></i>
												Họ tên: <span style="color: #029B02;"> Dương huy toàn</span></p>
											<p><i class="fa fa-angle-right" aria-hidden="true"></i>
												Địa chỉ: <span style="color: #029B02;"> Hà Nội</span></p>
											<p><i class="fa fa-angle-right" aria-hidden="true"></i>
												Giới tính: <span style="color: #029B02;">Nam</span></p>	
											<p><i class="fa fa-angle-right" aria-hidden="true"></i>
												SDT: <span style="color: #029B02;">0979433905</span></p>	
											<p><i class="fa fa-angle-right" aria-hidden="true"></i>
												Ghi chú: <span style="color: #029B02;">Ngon</span></p>	
												</div>
											<div class="col-md-12">
													<a data-toggle="modal" href='#modal-id-docgia' class="btn btn-info" style="width: 100%">Tìm kiếm</a>
											</div>
											@else()
												<h4 class="card-title m-t-10" style="margin-bottom: 15px;">Độc giả:</h4>
											@endif()
											</div>
											</div>
										</div>
										<div class="col-lg-9">
											<div class="card-body">
												<legend>Phiếu trả</legend>
												<div class="col-md-6" style="float: left; margin-bottom: 20px;">
													<form action="" method="POST" class="form-inline" role="form">
										        	
										        		<div class="form-group" style="width: 65%; margin-bottom: 0;">
										        			<input type="text" class="form-control" id="" placeholder="Nhập mã phiếu mượn ..." style="width: 100%">
										        		</div>
										        	
										        		<button type="submit" class="btn btn-default" style="margin-left: 10px; width: 30%">Tìm kiếm</button>
										        	</form>
									        	</div>
												<div class="col-md-6" style="float: left; margin-bottom: 20px;">
													<form action="" method="POST" class="form-inline" role="form">
										        	
										        		<div class="form-group" style="width: 65%; margin-bottom: 0;">
										        			<input type="text" class="form-control" id="" placeholder="Nhập tên độc giả ..." style="width: 100%">
										        		</div>
										        	
										        		<button type="submit" class="btn btn-default" style="margin-left: 10px; width: 30%">Tìm kiếm</button>
										        	</form>
												</div>
									        	
												<table class="table table-hover">
													<thead>
														<tr>
															<th style="width: 15px;"><input type="checkbox" id="check-all" ></th>
															<th>Mã sách</th>
															<th>Tên sách</th>
															<th>Tác giả</th>
															<th>Số lượng</th>
															<th>Đơn giá</th>
															<th>Thành tiền</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td style="width: 15px;"><input type="checkbox" class="item-check" name="id[]" value=""></td>
															<td>121212121</td>
															<td>ádadasdsa</td>
															<td>adascasca</td>
															<td>2</td>
															<td>3500</td>
															<td>7000</td>
														
														</tr>
														<tr>
															<td style="width: 15px;"><input type="checkbox" class="item-check" name="id[]" value=""></td>
															<td>121212121</td>
															<td>ádadasdsa</td>
															<td>adascasca</td>
															<td>2</td>
															<td>3500</td>
															<td>7000</td>
														
														</tr>
														<tr>
															<td style="width: 15px;"><input type="checkbox" class="item-check" name="id[]" value=""></td>
															<td>121212121</td>
															<td>ádadasdsa</td>
															<td>adascasca</td>
															<td>2</td>
															<td>3500</td>
															<td>7000</td>
														
														</tr>
													</tbody>
												</table>
												<hr>
												<div class="col-md-12">
													<div class="col-md-6" style="float: left;padding-left: 0;">
														<h4>Tổng tiền: <span>500000</span> VND</h4>
													</div>
													<div class="col-md-6 text-right" style="float: left;padding-left: 0;margin-bottom: 20px">
													<a href="" class="btn btn-default">THANH TOÁN</a>
													</div>
												</div>
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