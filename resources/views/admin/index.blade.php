@extends('admin.home.home')
@section('title','THPT Đa Phúc - Mượn sách')

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
											@else()
											<div class="col-md-12">
													<form action="" method="POST" class="form-horizontal" role="form">
													<h4 class="card-title m-t-10" style="margin-bottom: 15px;">Độc giả:</h4>
														<div class="form-group">
															<input type="text" name="" id="input" class="form-control" value="" required="required" placeholder="Họ tên">
														</div>	
														<div class="form-group">
															<select name="" id="input" class="form-control" required="required">
																<option value="">Nam</option>
																<option value="">Nữ</option>
																<option value="">Khác</option>
															</select>
														</div>
														<div class="form-group">
															<input type="text" name="" id="input" class="form-control" value="" required="required" placeholder="Họ tên">
														</div>
														<div class="form-group">
															<input type="text" name="" id="input" class="form-control" value="" required="required" placeholder="SDT">
														</div>
														<div class="form-group">
															<input type="text" name="" id="input" class="form-control" value="" required="required" placeholder="Ghi chú">
														</div>
													</form>
												</div>
												@endif()
												<div class="col-md-12">
													<div class="col-md-6" style="float: left;">
														<a data-toggle="modal" href='#modal-id-docgia' class="btn btn-info">Tìm kiếm</a>
													</div>
													<div class="col-md-6" style="float: left;">
														<a href="{{route('admin.index')}}" class="btn btn-info">Thêm mới</a>
													</div>
												</div>
												</div>
											</div>
										</div>
										<div class="modal fade" id="modal-id-docgia">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">Chọn độc giả</h4>
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													</div>
													<div class="modal-body">
														<div class="container">
															<div class="row">
																<div class="col">
																		<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Tìm kiếm theo SDT ...">
																		<div class="fc-scroller fc-day-grid-container" style="overflow: scroll; height: 425px;">
																		<table class="myTable" style="font-size: 13px">
																		  <tr class="header">
																		    <th style="width:40%;">Tên</th>
																		    <th style="width:20%;">SDT</th>
																		    <th style="width:30%;">Quê quán</th>
																		    <th style="width:10%;"></th>
																		  </tr>
																		  <tbody id="myTable" style="font-size: 13px">
																		  <tr>
																		    <td>Alfreds Futterkiste</td>
																		    <td>Germany</td>
																		    <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Berglunds snabbkop</td>
																		    <td>Sweden</td>
																		    <td>Sweden</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Island Trading</td>
																		    <td>UK</td>
																		    <td>UK</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Koniglich Essen</td>
																		    <td>Germany</td>
																		    <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Alfreds Futterkiste</td>
																		    <td>Germany</td>
																		    <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Berglunds snabbkop</td>
																		    <td>Sweden</td>
																		    <td>Sweden</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Island Trading</td>
																		    <td>UK</td>
																		    <td>UK</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Koniglich Essen</td>
																		    <td>Germany</td>
																		    <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Alfreds Futterkiste</td>
																		    <td>Germany</td>
																		    <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Berglunds snabbkop</td>
																		    <td>Sweden</td>
																		    <td>Sweden</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Island Trading</td>
																		    <td>UK</td>
																		    <td>UK</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Koniglich Essen</td>
																		    <td>Germany</td>
																		    <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Alfreds Futterkiste</td>
																		    <td>Germany</td>
																		    <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Berglunds snabbkop</td>
																		    <td>Sweden</td>
																		    <td>Sweden</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Island Trading</td>
																		    <td>UK</td>
																		    <td>UK</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Koniglich Essen</td>
																		    <td>Germany</td>
																		    <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Alfreds Futterkiste</td>
																		    <td>Germany</td>
																		    <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Berglunds snabbkop</td>
																		    <td>Sweden</td>
																		    <td>Sweden</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Island Trading</td>
																		    <td>UK</td>
																		    <td>UK</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Koniglich Essen</td>
																		    <td>Germany</td>
																		    <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Alfreds Futterkiste</td>
																		    <td>Germany</td>
																		    <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Berglunds snabbkop</td>
																		    <td>Sweden</td>
																		    <td>Sweden</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Island Trading</td>
																		    <td>UK</td>
																		    <td>UK</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  <tr>
																		    <td>Koniglich Essen</td>
																		    <td>Germany</td>
																		    <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
																		  </tr>
																		  </tbody>
																		</table>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-9">
											<div class="card-body">
															<legend>Phiếu mượn</legend>
									        	<input type="text" id="myInput2" placeholder="Nhập mã sách ...">
										        <table id="myTable2" style="font-size: 13px">
										          <tr class="header">
										            <th style="width:30%;">Mã sách</th>
										            <th style="width:40%;">Tên sách</th>
										            <th style="width:30%;">Tác giả</th>
										            <th style="width:30%;"></th>
										          </tr>
										          <tr>
										            <td>Arsenal</td>
										            <td>England</td>
										             <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
										          </tr>
										          <tr>
										            <td>Atletico Madrid</td>
										            <td>Spain</td>
										             <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
										          </tr>
										          <tr>
										            <td>Barcelona</td>
										            <td>Spain</td>
										             <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
										          </tr>
										          <tr>
										            <td>Liverpool</td>
										            <td>England</td>
										             <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
										          </tr>
										          <tr>
										            <td>Real Madrid</td>
										            <td>Spain</td>
										             <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
										          </tr>
										          <tr>
										            <td>Bayern Munich</td>
										            <td>Germany</td>
										             <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
										          </tr>
										          <tr>
										            <td>Borussia Dortmund</td>
										            <td>Germany</td>
										             <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
										          </tr>
										          <tr>
										            <td>Paris Saint-Germain</td>
										            <td>France</td>
										             <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
										          </tr>
										          <tr>
										            <td>Manchester United</td>
										            <td>England</td>
										             <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
										          </tr>
										          <tr>
										            <td>Monaco</td>
										            <td>France</td>
										             <td>Germany</td>
																		    <td><a href="" class="btn btn-danger">Chọn</a></td>
										          </tr>
										        </table>
													<script>
										      // lấy thẻ input
										      var input = document.getElementById("myInput2");
										      // định nghĩa hàm xử lý myFunction
										      function myFunction() {
										        var filter, table, tr, td, i;
										        // lấy giá trị người dùng nhập
										        filter = input.value.toUpperCase();

										        // lấy phần bảng hiển thị kết quả
										        table = document.getElementById("myTable2");
										        // lấy tất cả các thẻ tr
										        tr = table.getElementsByTagName("tr");

										        //Nếu filter không có giá trị ẩn các kết quả
										        if (!filter) {
										          table.style.display = "none";
										        }else{
										          // lặp qua tất cả các thẻ tr
										          for (i = 0; i < tr.length; i++) {
										            // lấy giá trị của thẻ td đầu tiên đại diện cho tên club
										            td = tr[i].getElementsByTagName("td")[0];
										            if (td) {
										              // kiểm tra giá trị filter có tồn tại trong thẻ tr không
										              if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
										                //nếu có hiển thị chúng
										                table.style.display = "table";
										                tr[i].style.display = "";
										              } else {
										                // nếu không ẩn chúng
										                tr[i].style.display = "none";
										              }
										            }       
										          }
										        }
										      }
										      //gán sự kiện cho thẻ input
										      input.addEventListener("keyup", myFunction);
										    </script>
												<table class="table table-hover">
													<thead>
														<tr>
															<th>Mã sách</th>
															<th>Tên sách</th>
															<th>Tác giả</th>
															<th>Số lượng</th>
															<th>Đơn giá</th>
															<th>Thành tiền</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>121212121</td>
															<td>ádadasdsa</td>
															<td>adascasca</td>
															<td>2</td>
															<td>3500</td>
															<td>7000</td>
															<td><a href="" class="btn-xs btn-danger"><i class="fas fa-trash-alt"></i></a></td>
														</tr>
														<tr>
															<td>121212121</td>
															<td>ádadasdsa</td>
															<td>adascasca</td>
															<td>2</td>
															<td>3500</td>
															<td>7000</td>
															<td><a href="" class="btn-xs btn-danger"><i class="fas fa-trash-alt"></i></a></td>
														</tr>
														<tr>
															<td>121212121</td>
															<td>ádadasdsa</td>
															<td>adascasca</td>
															<td>2</td>
															<td>3500</td>
															<td>7000</td>
															<td><a href="" class="btn-xs btn-danger"><i class="fas fa-trash-alt"></i></a></td>
														</tr>
													</tbody>
												</table>
												<hr>
												<div class="col-md-12">
													<div class="col-md-6" style="float: left;padding-left: 0;">
														<h4>Tổng tiền: <span>500000</span> VND</h4>
													</div>
													<div class="col-md-6 text-right" style="float: left;">
														<a href="" class="btn btn-default">HOÀN TẤT</a>
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