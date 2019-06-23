@extends('admin.home.home')
@section('title','Chỉnh sửa thương hiệu')

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
				<form action="{{route('admin.brand_edit',['id'=>$br_id])}}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
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
							<div class="col-md-6 col-edit">
								<div class="form-group">
									<label class="" for="">Tên thương hiệu</label>
									<input type="text" class="form-control" name="name" id="name" value="{{$br_name}}" required="required">
									<input type="hidden" class="form-control" name="slug" id="slug" required="required" value="{{$br_slug}}">
									@if($errors->has('name'))
									<div class="text-danger">
										{{$errors->first('name')}}
									</div>
									@endif
								</div>
							</div>
							
							<div class="col-md-6 col-edit">
								<div class="form-group">
									<label class="" for="">Trạng thái</label>
									<select name="status" class="form-control">
										<option value="0" @if(($br_status) == 0) selected @endif()>Hiện</option>
										<option value="1" @if(($br_status) != 0) selected @endif()>Ẩn</option>
									</select>
								</div>
								
							</div>
							<div class="clearfix">
								<div class="form-group">
									<label class="">Nội dung <span style="color: red;">*</span></label>
									<textarea id="editor" cols="30" rows="10" name="content">{{$br_content}}</textarea>
									<script type="text/javascript">
										var editor = CKEDITOR.replace('editor',{
											language:'vi',
											filebrowserImageBrowseUrl : "public/ckeditor/ckfinder/ckfinder.html?Type=Images",
											filebrowserFlashBrowseUrl : "public/ckeditor/ckfinder/ckfinder.html?Type=Flash",
											filebrowserImageUploadUrl : "public/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images",
											filebrowserFlashUploadUrl : "public/ckeditor/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash",
										});
									</script>﻿

									@if($errors->has('noidung'))
									<div class="">
										<p id="error_reg">{{$errors->first('noidung')}}</p>
									</div>
									@endif
								</div>
							</div>
							<!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->
							@csrf
							<div class="form-group text-right" style="padding-top: 30px;">
								<button type="submit" class="btn btn-info">SỬA THƯƠNG HIỆU</button>
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