@extends('user.home.home')
@section('title','LDTShop.com - Liên hệ')
@section('meta')
<meta name="keywords" content=""/>
<link rel='canonical' href="{{route('user.about')}}">
@stop()
@section('main-content')
<div class="breadcrumb_background">
	<div class="title_full">
		<div class="container a-center">
			<p class="title_page">Liên hệ</p>
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

					<li><strong ><span itemprop="title">Liên hệ</span></strong></li>

				</ul>
			</div>
		</div>
	</div>
</section> 
<section class="page">
	<div class="container">
		<div class="page_contact">
			<div class="container">
				<div class="wrap_background_aside padding-top-45 margin-bottom-70">
					<div class="row">
						<div class="form_wrap col-lg-7 col-md-6 col-sm-12 col-xs-12">
							<div class="section right_contact">
								<div class="page-login page_cotact">
									<h2 class="title-head-contact a-left"><span>Liên hệ với chúng tôi</span></h2>
									<p class="text_des" style="margin-bottom: 40px;"></p>
									<div id="pagelogin" class="hidden">
										<form accept-charset="UTF-8" action="/contact" id="contact" method="post">
											<input name="FormType" type="hidden" value="contact" />
											<input name="utf8" type="hidden" value="true" /><input type="hidden" id="Token-87ba5db7843a4ed08ac7bdd023a14982" name="Token" /><script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script>
											<script>
												grecaptcha.ready(function() {
													grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {action: "/contact"})
													.then(function(token) {
														document.getElementById("Token-87ba5db7843a4ed08ac7bdd023a14982").value = token
													});
												});
											</script>


											<div class="form-signup clearfix">
												<div class="row group_contact">
													<fieldset class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
														<input placeholder="Họ và tên" type="text" class="form-control  form-control-lg">
													</fieldset>
													<fieldset class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">	
														<input placeholder="Số điện thoại" type="number" pattern="\d+" class="form-control form-control-comment form-control-lg" name="Phone" >
													</fieldset>
													<fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<input placeholder="Email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="email1" class="form-control form-control-lg" value="" name="contact[email]">
													</fieldset>
													<fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
														<textarea placeholder="Nội dung" name="contact[body]" id="comment" class="form-control content-area form-control-lg" rows="5"></textarea>
													</fieldset>
													<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-10">
														<a data-toggle="modal" href='#modal-id' class="btn btn-primary btn-lienhe">Gửi liên hệ</a>
														<p style=" margin-top: 15px; margin-bottom: 15px">Oh!
												Hệ thống không thể nhận liên hệ phản hồi bây giờ, vui lòng gửi qua email trực tiếp.
												Xin cám ơn!</p>
													</div>
												</div>
											</div>
										</form>
									</div>


									<div id="pagelogin" class="form-coment content_module">
										<form accept-charset="UTF-8" action="/contact" id="contact" method="post">
											<input name="FormType" type="hidden" value="contact" />
											<input name="utf8" type="hidden" value="true" /><input type="hidden" id="Token-5b65e78704164a0c827188b850163f51" name="Token" /><script src="https://www.google.com/recaptcha/api.js?render=6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK"></script>
											<script>
												grecaptcha.ready(function() {
													grecaptcha.execute("6Ldtu4IUAAAAAMQzG1gCw3wFlx_GytlZyLrXcsuK", {action: "/contact"})
													.then(function(token) {
														document.getElementById("Token-5b65e78704164a0c827188b850163f51").value = token
													});
												});
											</script>

											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-6">
													<fieldset class="form-group">
														<input type="text" placeholder="Nhập tên" class="input-control" value="" name="contact[Name]">
													</fieldset>
												</div>
												<div class="col-xs-12 col-sm-12 col-md-6">
													<fieldset class="form-group">										
														<input type="email" placeholder="Email của bạn" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" id="email2" class="input-control" value="" name="contact[email]">
													</fieldset>
												</div>
											</div>
											<fieldset class="form-group row">										
												<textarea id="subject" name="contact[Body]" placeholder="Nhập tin nhắn" rows="5" class="input-control"></textarea>
											</fieldset>
											<div class="margin-bottom-fix margin-bottom-50-article clearfix">
												<a data-toggle="modal" href='#modal-id' class="btn btn-primary btn-lienhe">Gửi liên hệ</a>
												<p style=" margin-top: 15px; margin-bottom: 15px">Oh!
												Hệ thống không thể nhận liên hệ phản hồi bây giờ, vui lòng gửi qua email trực tiếp.
												Xin cám ơn!</p>
											</div> <!-- End form mail -->
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="wrap_background col-lg-5 col-md-6 col-sm-12 col-xs-12">
							<div class="contact">
								<div class="section contact_info a-center">
									<div class="flop">
										<div class="fright">
											<p>Tổng đài hỗ trợ khách hàng</p>
											<a class="fone" href="tel:0976912150">
												0976912150
											</a>
											<p>Tổng đài tư vấn dịch vụ</p>
											<a class="fone" href="tel:0976912150">
												0976912150
											</a>
										</div>
									</div>
								</div>
								<div class="section time_work a-center">
									<p>Hệ thống cửa hàng</p>
									<ul class="address_info flop">
										<li>
											<span class="city">Trụ sở</span>
											<span class="address">
												<span>Số 442 Đội Cấn, Quận Ba Đình, Hà Nội</span>
											</span>
										</li>




										<li>
											<span class="city">Hà Nội</span>
											<span class="address">
												<span>Số 266 Đội Cấn, Quận Ba Đình, Hà Nội</span>
											</span>
										</li>





										<li>
											<span class="city">TP. Hồ Chí Minh</span>
											<span class="address">
												<span>Số 70 Lữ Gia, Phường 15, Quận 11, TP. Hồ Chí Minh</span>
											</span>
										</li>






									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section section_maps section margin-bottom-30">
				<div class="box-maps">
					<div class="iFrameMap">
						<div class="google-map">
							<div id="contact_map" class="map">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3717.486923071629!2d105.58236311451927!3d21.291767885856427!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3134f00da3cb9321%3A0xc0f8f922d6230a80!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgR2lhbyB0aMO0bmcgVuG6rW4gdOG6o2k!5e0!3m2!1svi!2s!4v1556350613375!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript">	
		$(document).ready(function($){  
			if($('#contact_map').length){
				$('#contact_map').gMap({
					zoom: 17,
					scrollwheel: false,
					maptype: 'ROADMAP',
					markers:[
					{
						address: '266 Đội Cấn',
						html: '_address'
					}
					]
				});
			}
		});    


	</script>
</section>
@stop()