@extends('admin.home.home')
@section('title','Quản lý danh mục')

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
									<input type="text" class="form-control" name="search_cats" placeholder="" >
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
									<th style="width: 30px">Mã</th>
									<th>Tên danh mục</th>
									<th style="width: 100px">Trạng thái</th>
									<th style="width: 100px"><a data-toggle="modal" href='#modal-id' title="Thêm mới" class="btn btn-success" style="width: 100%">Thêm mới</a></th>
								</tr>
							</thead>
							<tbody>
								@foreach($cats as $cat)
								<tr>
									<td>{{$cat->id}}</td>
									<td>{{$cat->name}}</td>
									<td>
										@if($cat->status == 0) Hiện @endif
										@if($cat->status != 0) Ẩn @endif
									</td>
									<td>
										<a href="{{ route('admin.category_delete',['id'=>$cat->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Bạn chắc chắn muốn xóa danh mục?')"><i class="fa fa-trash"></i></a>
										<a href="{{route('admin.category_edit',['id'=>$cat->id])}}" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
									</td>
								</tr>
								@if($cat->getChilds)
								@foreach($cat->getChilds as $child)
								<tr>
									<td>{{$child->id}}</td>
									<td style = "padding-left: 20px;">-- {{$child->name}}</td>
									<td>
										@if($child->status == 0) Hiện @endif
										@if($child->status != 0) Ẩn @endif
									</td>
									<td>
										<a href="{{ route('admin.category_delete',['id'=>$child->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Bạn chắc chắn muốn xóa danh mục?')"><i class="fa fa-trash"></i></a>
										<a href="{{route('admin.category_edit',['id'=>$child->id])}}" class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
									</td>
								</tr>
								@if($child->getChilds)
								@foreach($child->getChilds as $child_pa)
								<tr>
									<td>{{$child_pa->id}}</td>
									<td style = "padding-left: 40px;">-- {{$child_pa->name}}</td>
									<td>
										@if($child_pa->status == 0) Hiện @endif
										@if($child_pa->status != 0) Ẩn @endif
									</td>
									<td>
										<a href="{{ route('admin.category_delete',['id'=>$child_pa->id]) }}" class="btn btn-danger btn-xs" onclick="return confirm('Bạn chắc chắn muốn xóa danh mục?')"><i class="fa fa-trash"></i></a>
										<a href="{{route('admin.category_edit',['id'=>$child_pa->id])}}"  class="btn btn-default btn-xs"><i class="fa fa-edit"></i></a>
									</td>
								</tr>
								@endforeach
								@endif
								@endforeach
								@endif
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modal-id">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Thêm mới danh mục</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="col-md-12">
						<form action="{{route('admin.category_add')}}" method="POST" class="form-horizontal" role="form">
							<div class="col-md-12 col-edit">
								<div class="form-group">
									<input type="text" class="form-control" id="name" name="name" placeholder="Tên danh mục">
								</div>
								@if($errors->has('name'))
								<div class="text-danger">
									{{$errors->first('name')}}
								</div>
								@endif
								<div class="form-group" style="margin-right: -5px;">
									<input type="hidden" class="form-control" id="slug" name="slug">
								</div>
							</div>
							<div class="col-md-12 col-edit">
								<div class="form-group">
									<select name="parent" class="form-control" required="required">
										<option value="0">Danh mục gốc</option>
										{{showcateparent($cats)}}
									</select>
								</div>
							</div>
							<div class="col-md-12 col-edit">
								<div class="form-group">
									<div class="radio">
										Trạng thái: 
										<label style="margin-left: 15px;">
											<input type="radio" name="status" value="0" checked="checked">
											Hiện
										</label>
										<label style="margin-left: 10px;">
											<input type="radio" name="status"  value="1">
											Ẩn
										</label>
									</div>
								</div>
							</div>
							@csrf
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Thêm mới</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php 
	function showcateparent($cats_pa, $parent = 0, $char = ''){
		$category_child = [];
		foreach ($cats_pa as $key => $item) {
			if ($item->parent == $parent) {
				$category_child[] = $item;
			}
		}

		if ($category_child) {
			foreach ($category_child as $key => $item) {
				echo '<option value="'.$item->id.'"> '.$char.$item->name.'</option>';

				showcateparent($cats_pa, $item['id'], $char.'&nbsp&nbsp&nbsp');
			}
		}
	}
	?>
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