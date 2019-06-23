@extends('admin.home.home')
@section('title','Thêm mới thương hiệu')

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
				<form action="{{route('admin.category_edit',['id'=>$cats->id])}}" method="POST" class="form-horizontal" role="form">
					<div class="card-body">
						<div class="col-md-12 col-edit" style="margin-bottom: 20px;padding: 0;">
							<h5 class="card-title" style="margin-top: 10px;">Chỉnh sửa hương hiệu</h5>
						</div>
					<div class="col-md-4 col-edit">
						<div class="form-group">
							<input type="text" class="form-control" id="name" name="name" placeholder="Tên danh mục" value="{{$cats->name}}">
						</div>
						<input type="hidden" class="form-control" name="slug" id="slug" required="required" value="{{$cats->slug}}">
					</div>
					<div class="col-md-4 col-edit">
						<div class="form-group">
							<select name="parent" class="form-control" required="required">
								<option value="0">Danh mục gốc</option>
								@foreach($cats_pa as $cat_pa)
								<option value="{{$cat_pa->id}}" @if($cat_pa->id == $cats->parent) selected @endif>{{$cat_pa->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="col-md-3 text-center col-edit">
						<div class="form-group" style="padding-top: 10px;">
							<div class="radio">
								<label>
									<input type="radio" name="status" value="0" @if($cats->status == 0) checked="checked" @endif>
									Hiện
								</label>
								<label>
									<input type="radio" name="status"  value="1" @if($cats->status == 1) checked="checked" @endif>
									Ẩn
								</label>
							</div>
						</div>
					</div>
					@csrf
					<div class="col-md-12 text-right col-edit">
						<hr>
						<div class="form-group">
							<button type="submit" class="btn btn-primary" style="width: 200px;">Sửa danh mục</button>
						</div>
					</div>
				</div>
				</form>
				@if($errors->has('name'))
				<div class="text-danger">
					{{$errors->first('name')}}
				</div>
				@endif
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