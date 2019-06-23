@extends('user.home.home')
@section('title','LDTShop.com - Giỏ hàng')
@section('meta')
<meta name="keywords" content="Giới thiệu, MobiJ, mobij.bizwebvietnam.net"/>
<link rel='canonical' href="{{route('user.about')}}">
@stop()
@section('main-content')
<div class="breadcrumb_background">
	<div class="title_full">
		<div class="container a-center">
			<p class="title_page">Giỏ hàng</p>
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

					<li><strong ><span itemprop="title">Giỏ hàng</span></strong></li>

				</ul>
			</div>
		</div>
	</div>
</section> 
<section class="main-cart-page main-container col1-layout">
	<div class="main container hidden-xs">
		<div class="wrap_background_aside padding-top-15 margin-bottom-40">
			<div class="header-cart">
				<?php 
					$tt = 0;
					$sl = 0;
					if(session('cart_user') != null){
						foreach (session('cart_user') as $item) {
							$tt = $tt + ($item['quantity']*$item['price']);
							$sl = $sl + ($item['quantity']);
						}
					}
				?>
				<h3><span class="count"><span class="cart-popup-count">{{$sl}}</span> sản phẩm</span></h3>
			</div>
			<div class="col-main cart_desktop_page cart-page">
				@if(session('cart_user') != null)
				<div class="cart page_cart cart_des_page hidden-xs-down">
					<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 pd-right cart_desktop">
						<div class="bg-scroll">
							<div class="cart-thead">
								<div class="text-left" style="width: 43%">
									<span>Sản phẩm<span></span></span>
								</div>
								<div style="width: 19%" class="a-center">
									<span class="nobr">Giá</span>
								</div>
								<div style="width: 13%" class="a-center">Số lượng</div>
								<div style="width: 25%" class="a-center">Thành tiền</div>
							</div>
							@if(session('cart_user') != null)
							@foreach(session('cart_user') as $cart_of_c)
							<div class="cart-tbody">
								<div class="item-cart productid-22187482">
									<div class="content_ content_s" style="width: 15%">
										<a class="product-image" title="{{$cart_of_c['name']}}" href="/vivo-v11i">
											<img alt="{{$cart_of_c['name']}}" src="public/product_upload/{{$cart_of_c['image']}}" width="75" height="auto">
										</a>
									</div>
									<div class="content_ content_s" style="width: 28%">
										<h3 class="product-name"> 
											<a class="text2line" href="/vivo-v11i" title="{{$cart_of_c['name']}}">{{$cart_of_c['name']}}</a> 
										</h3>
										<span class="variant-title" style="display: none;">Default Title</span>
										<a class="button remove-item remove-item-cart" title="Xoá sản phẩm" href="{{route('user.delete-cart_user',['id'=>$cart_of_c['id']])}}" data-id="22187482" onclick="return confirm('Xóa sản phẩm khỏi giỏ hàng?')" ><i class="fa fa-times-circle" aria-hidden="true"></i> Xóa sản phẩm</a>
									</div>
									<div style="width: 20%" class="a-center">
										<span class="item-price"> 
											<span class="price bold-price">{{number_format($cart_of_c['price'])}} VND</span></span>
										</div>
										<div style="width: 15%; padding-top: 30px;" class="a-center">
											<div class="">
												<form action="{{route('user.update-cart_user',['id' => $cart_of_c['id']])}}" method="POST" class="form-inline" role="form">
													<div class="col-md-9 col-edit" style="padding-right: 0;">
														<div class="form-group" style="padding-right: 0;">
															<input type="number" name="quantity" class="form-control" value="{{$cart_of_c['quantity']}}" required="required">
														</div>
													</div>
													@csrf
													<div class="col-md-3 col-edit" >
														<button style="margin-left: 2.5px;margin-top: 5.5px;" type="submit" class=" btn-sx"><i class="fa fa-refresh" aria-hidden="true"></i></button>
													</div>
												</form>
											</div>
										</div>
										<div style="width: 22%" class="a-center">
											<span class="item-price cart-price"> 
												<span class="price pink">{{number_format($cart_of_c['price']*$cart_of_c['quantity'])}} VND</span> </span>
											</div>
										</div>
									</div>
									@endforeach()
									@else()
									<p style="padding: 20px;">Không có sản phẩm nào trong giỏ hàng</p>
									@endif()
								</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 cart-collaterals cart_submit">
							<div class="totals">
								<div class="total">
									<div class="inner">
										<div class="wrap_checkprice">
											
											<div class="li_table shopping-cart-table-total">
												<span class="li-left li_text">Tổng tiền:</span>
												<span class="li-right totals_price price">{{number_format($tt)}} VND</span>
											</div>
										</div>
										<div class="wrap_btn">
											<a href="{{route('user.order')}}" class="button btn-proceed-checkout" title="Tiến hành thanh toán" type="button">
												<span>Tiến hành thanh toán</span>
											</a>
										</div>
										<div class="btn_bottom" >
											<a href="{{route('user.index')}}" class="button btn-continue" title="Tiếp tục mua hàng">
												<span><span>Tiếp tục mua hàng</span></span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					@endif()
				</div>
		</div>
	</div>
	<div class="wrap_background_aside padding-top-15 margin-bottom-40 padding-left-0 padding-right-0 hidden-md hidden-lg hidden-sm">
		<div class="cart-mobile">
				<div class="header-cart">
					
					<div class="title-cart title_cart_mobile">
						<h3><span class="count"><span class="cart-popup-count">{{$sl}}</span> sản phẩm</span></h3>
					</div>
					
				</div>
				<div class="header-cart-content" style="background:#fff;">
					<div class="cart_page_mobile content-product-list">
						@if(session('cart_user') != null)
						@foreach(session('cart_user') as $cart_of_c)
						<div class="item-product item productid-22187482 ">
							<div class="item-product-cart-mobile">
								<a href="/vivo-v11i"></a>
								<a class="product-images1" href="" title="{{$cart_of_c['name']}}">
									<img src="public/product_upload/{{$cart_of_c['image']}}" alt="{{$cart_of_c['name']}}" width="80" height="150">
								</a>
							</div>
							<div class="title-product-cart-mobile">
								<h3><a href="/vivo-v11i" title="{{$cart_of_c['name']}}">{{$cart_of_c['name']}}</a></h3>
								<p>Giá: <span>{{number_format($cart_of_c['price'])}} VND</span></p>
								<a class="button remove-item remove-item-cart" href="{{route('user.delete-cart_user',['id'=>$cart_of_c['id']])}}" onclick="return confirm('Xóa sản phẩm khỏi giỏ hàng?')" >Xoá</a>
							</div>
							<div class="select-item-qty-mobile">
								<div class="txt_center">
									<form action="{{route('user.update-cart_user',['id' => $cart_of_c['id']])}}" method="POST" class="form-inline" role="form">
										<div class="form-group" style="padding-right: 0;">
											<input type="number" name="quantity" class="form-control" value="{{$cart_of_c['quantity']}}" required="required" style="padding: 2.5px 5px;width: 60px;left: 5px;">
										</div>
										@csrf
										<br>
										<button style="margin-left: 2.5px;margin-top: 5.5px;" type="submit" class=" btn-sx"><i class="fa fa-refresh" aria-hidden="true"></i></button>
								</form>
								</div>
							</div>
						</div>
						@endforeach()
						@else()
						<p style="padding: 20px;">Không có sản phẩm nào trong giỏ hàng</p>
						@endif()
					</div>
					<div class="header-cart-price" style="">
						<div class="title-cart">
							<h3 class="text-xs-left">Tổng tiền</h3>
							<a class="text-xs-right pull-right totals_price_mobile">{{number_format($tt)}} VND</a>
						</div>
						<div class="checkout">
							<button class="btn-proceed-checkout-mobile" title="Tiến hành thanh toán" type="button" onclick="window.location.href='/checkout'">
								<span>Tiến hành thanh toán</span>
							</button>
							<button class="btn btn-white f-left" title="Tiếp tục mua hàng" type="button" onclick="window.location.href='/collections/all'">
								<span>Tiếp tục mua hàng</span>
							</button>
						</div>
					</div>
				</div>
		</div>
	</div>
</section>

@stop()