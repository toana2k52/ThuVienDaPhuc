@extends('user.home.home')
@section('title','LDT_Shop - Chi tiết sản phẩm')
@section('meta')
<meta name="keywords" content="LDT_Shop - Chi tiết sản phẩm"/>
<link rel='canonical' href="{{route('user.about')}}">
@stop()
@section('main-content')
<div class="breadcrumb_background">
	<div class="title_full">
		<div class="container a-center">
			<p class="title_page">Chi tiết sản phẩm</p>
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
					<li class="home">
						<a itemprop="url" href="https://mobij.bizwebvietnam.net/" style="color: #000000" ><span itemprop="title">{{$pro->prod_cat->name}}</span></a>						
						<span class="mr_lr">&nbsp;/&nbsp;</span>
					</li>

				</ul>
			</div>
		</div>
	</div>
</section> 
<section class="product margin-top-10 f-left w_100" itemscope itemtype="https://schema.org/Product">	
	<meta itemprop="name" content="{{$pro->name}}">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 padding-col-left-0">
				<div class="row details-product">
					<h1 class="title-product" style="margin-bottom: 30px; padding: 15px;" >{{$pro->name}}</h1>
					<div class="product-detail-left product-images col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<div class="col_large_default large-image">

							<a  href="public/product_upload/{{$pro->image}}?v=1544578028007" data-rel="prettyPhoto[product-gallery]" >

								<img class="checkurl img-responsive" id="img_01" src="public/product_upload/{{$pro->image}}?v=1544578028007" alt="iPhone XR 128GB">
							</a>

							<div class="hidden">
								<div class="item">
									<a href="public/product_upload/{{$pro->image}}?v=1544578028777" data-image="public/product_upload/{{$pro->image}}?v=1544578028777" data-zoom-image="public/product_upload/{{$pro->image}}?v=1544578028777"  data-rel="prettyPhoto[product-gallery]" >										
									</a>
								</div>	
								<div class="item">
									<a href="public/product_upload/{{$pro->image}}?v=1544578029970" data-image="public/product_upload/{{$pro->image}}?v=1544578029970" data-zoom-image="public/product_upload/{{$pro->image}}?v=1544578029970"  data-rel="prettyPhoto[product-gallery]" >										
									</a>
								</div>	
								<div class="item">
									<a href="public/product_upload/{{$pro->image}}?v=1544578030397" data-image="public/product_upload/{{$pro->image}}?v=1544578030397" data-zoom-image="public/product_upload/{{$pro->image}}?v=1544578030397"  data-rel="prettyPhoto[product-gallery]" >										
									</a>
								</div>	
							</div>
						</div>

						<div id="gallery_02" class="owl-carousel owl-theme thumbnail-product thumb_product_details not-dqowl" 
						data-loop="false" data-lg-items="4" data-md-items="3" data-sm-items="3" data-xs-items="3" data-xxs-items="3">
						@foreach($pro_im as $pr_im)
						<div class="item">
							<a href="public/product_upload/list_image/{{$pr_im->image}}">
								<img src="public/product_upload/list_image/{{$pr_im->image}}?1548750789768"  alt="Xem sản phẩm">
							</a>
						</div>
						@endforeach()
					</div>

				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 details-pro">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="fw w_100 section" itemprop="offers" itemscope itemtype="https://schema.org/Offer">

								<div class="reviews_details_product ">
									<div class="bizweb-product-reviews-badge" data-id="13363425"></div>
								</div>
								<div class="price-box">
								@if($pro->price_sale !=0)
								<span class="special-price">
									<span class="price product-price" >{{number_format($pro->price_sale)}} VND</span> 
									<meta itemprop="price" content="{{number_format($pro->price_sale)}}">
									<meta itemprop="priceCurrency" content="VND">
								</span>
								<!-- Giá Khuyến mại -->
								<span class="old-price"  itemprop="priceSpecification" itemscope itemtype="https://schema.org/priceSpecification">
									<del class="price product-price-old">

										{{number_format($pro->price)}} VND

									</del> 
									<meta itemprop="price" content="{{number_format($pro->price)}}">
									<meta itemprop="priceCurrency" content="VND">
								</span> <!-- Giá gốc -->
								@else()
								<span class="special-price">
									<span class="price product-price" >{{number_format($pro->price)}} VND</span> 
									<meta itemprop="price" content="{{number_format($pro->price)}}">
									<meta itemprop="priceCurrency" content="VND">
								</span>
								@endif()
							</div>
							<div class="group-status">
								<span class="first_status section status margin-bottom-10">Tình trạng: 

									<span class="status_name availabel hasvariant">
										@if($pro_dt->amount != 0)
										<span class="status_name availabel">
											<link itemprop="availability" />
											Còn hàng
										</span>
										@else()
										<span class="status_name availabel">
											<link itemprop="availability"/>
											Hết hàng
										</span>
										@endif()
									</span>

								</span>
							</div>

							<div class="group-status">
								<span class="first_status section status margin-bottom-10">Thương hiệu: 

									<span class="status_name availabel hasvariant">
										
										<span class="status_name availabel">
											<link itemprop="availability" href="http://schema.org/InStock" />
											{{$pro->prod_brand->name}}
										</span>
									</span>

								</span>
							</div>
						</div>


						<div class="form-product">
							<form action="{{route('user.cart_add',['id' => $pro->id])}}" method="POST" class="form-horizontal" role="form">
								<div class="form-group form_button_details">
									<div class="form_product_content">
										<div class="soluong show">
											<div class="label_sl margin-bottom-5">Số lượng:</div>
											<div class="custom input_number_product custom-btn-number form-control">									
												<input style="width: 100px; padding: 5px 10px;" type="number" name="quantity" class="form-control" value="1" min="1" max="99" required="required">
											</div>
										</div>
										@csrf
										<div class="form-group">
											<div class="col-sm-10 col-sm-offset-2">
												<button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="tab_h">

			<!-- Nav tabs -->
			<div class="product-tab e-tabs not-dqtab">
				<ul class="tabs tabs-title clearfix">	

					<li class="tab-link" data-tab="tab-1">
						<h3><span>Mô tả sản phẩm</span></h3>
						{!! $pro_dt->content !!}
					</li>																
				</ul>																						
				<div class="tab-float">

					<div id="tab-1" class="tab-content content_extab">
						<div class="rte">

							Thông tin sản phẩm đang được cập nhật

						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<aside class="sidebar left-content col-lg-3 col-md-3 col-sm-12 col-xs-12 ">

		<div class="hed-service section_service hidden-sm hidden-xs">
			<div class="service-item">
				<a class="icon-service">
					<img src="//bizweb.dktcdn.net/thumb/icon/100/341/423/themes/700222/assets/loading-icon.png?1548750789768"  data-lazyload="//bizweb.dktcdn.net/100/341/423/themes/700222/assets/icon1.png?1548750789768" alt="Giao hàng miễn phí">
				</a>
				<div class="service">
					<span class="service-title">Giao hàng miễn phí</span>
					<span class="service-subtitle">Áp dụng cho đơn hàng trên 500.000đ tại Hà Nội và TP. HCM</span>
				</div>
			</div>
			<div class="service-item">
				<a class="icon-service">
					<img src="//bizweb.dktcdn.net/thumb/icon/100/341/423/themes/700222/assets/loading-icon.png?1548750789768"  data-lazyload="//bizweb.dktcdn.net/100/341/423/themes/700222/assets/icon2.png?1548750789768" alt="Tri ân khách hàng ">
				</a>
				<div class="service">
					<span class="service-title">Tri ân khách hàng </span>
					<span class="service-subtitle">Ưu đãi cực lớn, giảm thêm 10% cho khách hàng thân thiết</span>
				</div>
			</div>
			<div class="service-item">
				<a class="icon-service">
					<img src="//bizweb.dktcdn.net/thumb/icon/100/341/423/themes/700222/assets/loading-icon.png?1548750789768"  data-lazyload="//bizweb.dktcdn.net/100/341/423/themes/700222/assets/icon3.png?1548750789768" alt="Đổi trả trong 30 ngày">
				</a>
				<div class="service">
					<span class="service-title">Đổi trả trong 30 ngày</span>
					<span class="service-subtitle">Dịch vụ đổi trả, hoàn tiền nhanh chóng với tất cả sản phẩm</span>
				</div>
			</div>
		</div>

		<div class="hed-service section_service hidden-sm hidden-xs">
			<div class="service-item">
				<div class="section product-summary">
									<p><span style="font-weight: bold;">CPU: </span></p>
									<em style="margin-left: 15px;">{{$pro_if->cpu}}</em>
									<p><span style="font-weight: bold;">RAM: </span></p>
									<em style="margin-left: 15px;">{{$pro_if->ram}}</em>
									<p><span style="font-weight: bold;">Ổ cứng: </span></p>
									<em style="margin-left: 15px;">{{$pro_if->hard_drive}}</em>
									<p><span style="font-weight: bold;">Màn hình: </span></p>
									<em style="margin-left: 15px;">{{$pro_if->screen}}</em>
									<p><span style="font-weight: bold;">Card màn hình: </span></p>
									<em style="margin-left: 15px;">{{$pro_if->graphic_card}}</em>
									<p><span style="font-weight: bold;">Cổng kết nối: </span></p>
									<em style="margin-left: 15px;">{{$pro_if->connector}}</em>
									<p><span style="font-weight: bold;">Hệ điều hành: </span></p>
									<em style="margin-left: 15px;">{{$pro_if->operating_system}}</em>
									<p><span style="font-weight: bold;">Thiết kế: </span></p>
									<em style="margin-left: 15px;">{{$pro_if->design}}</em>
									<p><span style="font-weight: bold;">Kích thước: </span></p>
									<em style="margin-left: 15px;">{{$pro_if->size}}</em>
							</div>
			</div>
		</div>
	</aside>
</div>
</div>
</section>

<div class="relate-section section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 owl_nav_custome1 related-product xs-margin-top-15">
				<div class="section_prd_feature">
					<div class="heading title-head">
						<h2><a href="/san-pham-khuyen-mai" title="Sản phẩm cùng loại">Sản phẩm cùng loại</a></h2>
					</div>
					<div class="products product_related products-view-grid-bb owl-carousel owl-theme products-view-grid not-dot2" data-dot= "false" 
					data-nav= "false" data-lg-items="4" data-md-items="4" data-sm-items="3" data-xs-items="2" data-margin="30">
					<!-- test -->
					@foreach($pro_all as $pr_a)
					<div class="item_product_main related-item">
						<div class="item">
							<div class="product-item grid product-box product-item-main clearfix">
								<div class="product-thumbnail">
									@if($pr_a->price_sale != 0)
									<div class="saleright">
										<span>sale 
										</span>
									</div>
									@endif()
									<a class="image_thumb" href="{{route('user.product_detail',['slug' => $pr_a->slug])}}" title="{{$pr_a->name}}">
										<img src="public/product_upload/{{$pr_a->image}}?1548750789768" alt="{{$pr_a->name}}">
									</a>

								</div>
								<div class="product-detail product-info">

									<h3 class="product-title">
										<a href="{{route('user.product_detail',['slug' => $pr_a->slug])}}" title="{{$pr_a->name}}">{{$pr_a->name}}</a>
									</h3>

									<div class="blockprice ">
										<div class="product-item-price price-box">
											@if($pr_a->price_new != 0)
											<span class="price-style">
												<span class="old-price">{{number_format($pr_a->price)}} VND</span>
											</span>

											<span class="price-style">
												<span class="special-price" style="font-size: 16px;">{{number_format($pr_a->price_new)}} VND</span>
											</span>	
											@else()
											<span class="price-style">
												<span class="special-price" style="font-size: 16px;">{{number_format($pr_a->price)}} VND</span>
											</span>	
											@endif()
										</div>
									</div>
								</div>
								<div class="button-view product-action clearfix">
									<form action="{{route('user.product_detail',['slug' => $pr_a->slug])}}" method="get" class="variants form-nut-grid" data-id="product-actions-13363430" enctype="multipart/form-data">
										<div class="add-cart btn-buy button">
											<a type="submit" class="btn-buy btn-cart button_35 left-to add_to_cart" title="Cho vào giỏ hàng">
												<span>Xem chi tiết</span>
											</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					@endforeach()
					<!-- endtest -->
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>

@stop()