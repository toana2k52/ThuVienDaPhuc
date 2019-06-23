@extends('user.home.home')
@section('title','LDTShop.com - Tìm kiếm')

@section('main-content')
<div id="menu-overlay" class=""></div>
<!-- Header JS -->	
<script src="//bizweb.dktcdn.net/100/341/423/themes/700222/assets/jquery-2.2.3.min.js?1548750789768" type="text/javascript"></script>
<div class="breadcrumb_background">
	<div class="title_full">
		<div class="container a-center">
			<h1 class="title_page">Tìm kiếm</h1>
		</div>
	</div>
</div> 
<section class="bread-crumb">
	<span class="crumb-border"></span>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 a-left">
				<ul class="breadcrumb" itemscope itemtype="https://data-vocabulary.org/Breadcrumb">					
					<li class="home">
						<a itemprop="url" href="{{route('user.index')}}" ><span itemprop="title">Trang chủ</span></a>						
						<span class="mr_lr">&nbsp;/&nbsp;</span>
					</li>
					
					
					<li><strong ><span itemprop="title"> Tìm kiếm - {{$detail}}</span></strong></li>


				</ul>
			</div>
		</div>
	</div>
</section>   
<div class="wrap_background_aside padding-top-15 margin-bottom-10">
	<div class="container">
		<div class="row">
			<div class="bg_collection">
				<aside class="dqdt-sidebar sidebar left-content col-lg-3 col-lg-3-fix">
					<div class="wrap_background_aside asidecollection">
						<aside class="aside-item sidebar-category collection-category">
							<div class="aside-title">
								<h2 class="title-head margin-top-0 margin-bottom-10"><span class="category-select">Nhu cầu</span></h2>
							</div>
							<div class="aside-content">
								<nav class="nav-category navbar-toggleable-md">
									<ul class="nav navbar-pills">
										@foreach($cats_all as $cats)
										<li class="nav-item lv1">
											<a class="nav-link" href="{{route('user.product_category',['slug' => $cats->slug])}}">{{$cats->name}}</a>
										</li>
										@endforeach
									</ul>
								</nav>
							</div>
						</aside>	
						<aside class="aside-item sidebar-category collection-category">
							<div class="aside-title">
								<h2 class="title-head margin-top-0 margin-bottom-10"><span class="category-select">Thương hiệu</span></h2>
							</div>
							<div class="aside-content">
								<nav class="nav-category navbar-toggleable-md">
									<ul class="nav navbar-pills">

										@foreach($brand as $br)
										<li class="nav-item lv1">
											<a class="nav-link" href="{{route('user.product_brand',['slug' => $br->slug])}}">{{$br->name}}</a>
										</li>
										@endforeach
									</ul>
								</nav>
							</div>
						</aside>
						<div class="section_best_sale aside-filter">											
							<div class="aside-item aside-mini-list-product">
								<div>

								</div>
							</div>
						</div>

					</div>
				</aside>
				<div class="main_container collection col-lg-9 col-lg-9-fix padding-col-left-0">

					<div class="category-products products">
						<hr>
						<section class="products-view products-view-grid collection_reponsive list_hover_pro">
							<div class="row">
								@foreach($pro_finds as $pro_find)
								<!-- test -->
								<div class="col-xs-6 col-sm-4 col-md-3 col-lg-4 product-col">
									<div class="item_product_main item_product_main_relative">
										<div class="product-item grid product-box product-item-main clearfix">
											<div class="product-thumbnail">
												
												@if($pro_find->price_sale != 0) 
													<div class="saleright">
														<span>
															sale
														</span>
													</div>
												@endif()

												<a class="image_thumb" href="{{route('user.product_detail',['slug' => $pro_find->slug])}}" title="{{$pro_find->name}}">
													<img src="public/product_upload/{{$pro_find->image}}?1548750789768" data-lazyload="public/product_upload/{{$pro_find->image}}?v=1545215353747" alt="{{$pro_find->name}}">
												</a>

											</div>
											<div class="product-detail product-info">

												<div class="reviews_details_product">
													<div class="bizweb-product-reviews-badge" data-id="13402375"></div>
												</div>

												<h3 class="product-title"><a href="{{route('user.product_detail',['slug' => $pro_find->slug])}}" title="{{$pro_find->name}}">{{$pro_find->name}}</a></h3>

												<div class="blockprice ">
													@if($pro_find->price_sale != 0)
														<div class="product-item-price price-box">
															<span class="price-style">
																<span class="old-price">{{number_format($pro_find->price)}} VND</span>
															</span>

															<span class="price-style">
																<span class="special-price">{{number_format($pro_find->price_sale)}} VND</span>
															</span>	
														</div>
														@else()
														<div class="product-item-price price-box">

															<span class="price-style">
																<span class="special-price">{{number_format($pro_find->price)}} VND</span>
															</span>	
														</div>
														@endif()
												</div>
											</div>
											<div class="button-view product-action clearfix">
													<div class="add-cart btn-buy button">
														<a href="{{route('user.product_detail',['slug' => $pro_find->slug])}}" class="btn-buy btn-cart button_35 left-to disabled" title="Liên hệ">
															<span>Xem chi tiết</span>
														</a>
													</div>
											</div>
										</div>
									</div>
								</div>			
								<!-- end_test-->
								@endforeach()			
							</div>

						</section>
					</div>

					<div id="open-filters" class="open-filters hidden-lg">
						<i class="fa fa-align-right"></i>
						<span>Lọc</span>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<script>
	var colName = "Tất cả sản phẩm";

	var colId = 0;

</script>
@stop()