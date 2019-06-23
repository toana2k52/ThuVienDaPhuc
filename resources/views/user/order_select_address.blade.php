<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" class="anyflexbox boxshadow display-table">
<head>
	<meta charset="utf-8" />
    <base href="{{asset('')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="LDT Shop - Thanh toán đơn hàng" />

    <title>LDT Shop - Thanh toán đơn hàng</title>

    
    <link rel="icon" href="public/user/home/bizweb.dktcdn.net/100/341/423/themes/700222/assets/favicon002a.png?1548750789768" type="image/x-icon" />
    
    <!-- <script src="public/home_user/css/jquery-2.1.3.min.js?4" type='text/javascript'></script>
    <link href="public/home_user/order_style/css/bootstrap.min.css?20171025" rel='stylesheet' type='text/css' />
    <link href="public/home_user/order_style/css/nprogress.css?20171025" rel='stylesheet' type='text/css' />
    <link href="public/home_user/order_style/css/font-awesome.min.css?20171025" rel='stylesheet' type='text/css' />
    <link href="public/home_user/order_style/css/checkout.css?20181105" rel='stylesheet' type='text/css' /> -->

    <script src='//bizweb.dktcdn.net/assets/themes_support/jquery-2.1.3.min.js?4' type='text/javascript'></script>
    <link href='//bizweb.dktcdn.net/assets/themes_support/bootstrap.min.css?20171025' rel='stylesheet' type='text/css' />
    <link href='//bizweb.dktcdn.net/assets/themes_support/nprogress.css?20171025' rel='stylesheet' type='text/css' />
    <link href='//bizweb.dktcdn.net/assets/themes_support/font-awesome.min.css?20171025' rel='stylesheet' type='text/css' />
    <link href='//bizweb.dktcdn.net/assets/themes_support/checkout.css?20181105' rel='stylesheet' type='text/css' />
    
    
    
    <script>
        var Bizweb = Bizweb || {};
        Bizweb.store = 'TNTSneaker.vn';
        Bizweb.theme = {"id":704696,"role":"main","name":"TNTSNeaker --- guide"};
        Bizweb.template = '';
    </script>



    <script type="text/javascript">if (typeof Bizweb == 'undefined') { Bizweb = {}; }
    Bizweb.Checkout = {};
    Bizweb.Checkout.token = "b7691fc4b84d447e8ff2887ea50334b4";
    Bizweb.Checkout.apiHost = "TNTSneaker.vn";
</script>



</head>

<body class="body--custom-background-color ">
    <div class="banner" data-header="">
        <div class="wrap">
            <div class="shop logo logo--left ">

                <h1 class="shop__name">
                    <a href="{{route('user.index')}}">
                        LDT Shop
                    </a>
                </h1>

            </div>
        </div>
    </div>
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
    <div context="paymentStatus" define='{ paymentStatus: new Bizweb.PaymentStatus(this,{payment_processing:"",payment_provider_id:"",payment_info:{} }) }'>

    </div>
        <div class="wrap" context="checkout">
            <div class='sidebar '>
                <div class="sidebar_header">
                    <h2>
                        <label class="control-label">Đơn hàng</label>
                    </h2>
                    <hr class="full_width"/>
                </div>
                <div class="sidebar__content">
                    <div class="order-summary order-summary--product-list order-summary--is-collapsed">
                        <div class="summary-body summary-section summary-product" >
                            <div class="summary-product-list">
                                <table class="product-table">
                                    <tbody>
                                        @foreach(session('cart_user') as $cart_of_c)
                                        <tr class="product product-has-image clearfix">
                                            <td>
                                                <div class="product-thumbnail">
                                                    <div class="product-thumbnail__wrapper">

                                                        <img src="public/product_upload/{{$cart_of_c['image']}}" style="width: 90%; padding: 5%;" />

                                                    </div>
                                                    <span class="product-thumbnail__quantity" aria-hidden="true">{{$cart_of_c['quantity']}}</span>
                                                </div>
                                            </td>
                                            <td class="product-info">
                                                <span class="product-info-name">

                                                    {{$cart_of_c['name']}}
                                                </span>


                                            </td>
                                            <td class="product-price text-right">
                                                {{number_format($cart_of_c['price']*$cart_of_c['quantity'])}} VND
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div class="order-summary__scroll-indicator">
                                    Cuộn chuột để xem thêm
                                    <i class="fa fa-long-arrow-down" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <hr class="m0"/>
                    </div>
                    <div class="order-summary order-summary--total-lines">
                        <div class="summary-section border-top-none--mobile">
                            <div class="total-line total-line-subtotal clearfix">
                                <span class="total-line-name pull-left">
                                    Tạm tính
                                </span>
                                <span class="total-line-subprice pull-right">
                                    {{number_format($tt)}} VND
                                </span>
                            </div>
                            <div class="total-line total-line-shipping clearfix" bind-show="requiresShipping">
                                <span class="total-line-name pull-left">
                                    Phí vận chuyển
                                </span>
                                <span class="total-line-shipping pull-right"  bind-show="ShippingProvinceId || BillingProvinceId && !otherAddress || (requiresShipping && shippingMethods.length > 0)" >

                                    Miễn phí
                                    
                                </span>
                            </div>
                            <div class="total-line total-line-total clearfix">
                                <span class="total-line-name pull-left">
                                    Tổng cộng
                                </span>
                                <span  class="total-line-price pull-right">
                                    {{number_format($tt)}} VND
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group clearfix hidden-sm hidden-xs">
                        <div class="field__input-btn-wrapper mt10">
                            <a class="previous-link" href="{{route('user.cart')}}">
                                <i class="fa fa-angle-left fa-lg" aria-hidden="true"></i>
                                <span>Quay về giỏ hàng</span>
                            </a>
                        </div>
                    </div>
                    <div class="form-group has-error">
                        <div class="help-block ">
                            <ul class="list-unstyled">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>





            <div class="main" role="main">
                <div class="main_header">
                    <div class="shop logo logo--left ">

                        <h1 class="shop__name">
                            <a href="/">
                                LDT Shop
                            </a>
                        </h1>

                    </div>
                </div>
                <div class="main_content">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="section" define="{billing_address: {}}">
                                <div class="section__header">
                                    <div class="layout-flex layout-flex--wrap">
                                        <h2 class="section__title layout-flex__item layout-flex__item--stretch">
                                            <i class="fa fa-id-card-o fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                            <label class="control-label">Thông tin mua hàng</label>
                                        </h2> 
                                    </div>
                                </div>
                                <form action="{{route('user.order_2')}}" method="POST" role="form">
                                    <div class="section pt10" bind-show="otherAddress">
                                        <div class="section__content">
                                            <div bind-show="otherAddress" define="{shipping_address: {}, shipping_expand:true,show_district:  true ,show_country:  true }" class="shipping ">
                                                <div bind-show="shipping_expand || !otherAddress">
                                                    <div class="form-group">
                                                        <div class="field__input-wrapper" bind-class="{ 'js-is-filled': shipping_address.full_name }">
                                                            <input name="user_name" bind-event-change="saveAbandoned()" type="text" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_shipping_address_last_name" data-error="Vui lòng nhập họ tên" bind="shipping_address.full_name"  placeholder="Họ tên" />
                                                        </div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <div class="field__input-wrapper" bind-class="{ 'js-is-filled': shipping_address.phone }">
                                                            <input name="user_phone" bind-event-change="saveAbandoned()" type="tel" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_shipping_address_phone"  data-error="Số điện thoại không hợp lệ!" pattern="^([0-9,\+,\-,\(,\),\.]{8,20})$" bind="shipping_address.phone" placeholder="SDT"/>
                                                        </div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="field__input-wrapper" bind-class="{ 'js-is-filled': shipping_address.phone }">
                                                            <input name="user_email" type="email" bind-event-change="changeEmail()" bind-event-focus="handleFocus(this)" bind-event-blur="handleFieldBlur(this)" class="field__input form-control" id="_email" data-error="Vui lòng nhập email đúng định dạng"  required  value=""  pattern="^([a-zA-Z0-9_\-\.\+]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" bind="email" placeholder="Email" />
                                                        </div>
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="section__content">
                                                            <div class="form-group m0">
                                                                <textarea name="user_address" class="field__input form-control m0" placeholder="Địa chỉ"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @csrf
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary" style="padding: 10px 30px;margin-right: 5px;">Đặt hàng</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="section payment-methods" bind-class="{'p0--desktop': shippingMethods.length == 0}">
                                <div class="section__header">
                                    <h2 class="section__title">
                                        <i class="fa fa-credit-card fa-lg section__title--icon hidden-md hidden-lg" aria-hidden="true"></i>
                                        <label class="control-label">Thanh toán</label>
                                    </h2>
                                </div>
                                <div class="section__content">
                                    <div class="content-box">

                                        <div class="content-box__row">
                                            <div class="radio-wrapper">
                                                <div class="radio__input">
                                                    <input class="input-radio" type="radio" value="284579" name="PaymentMethodId" id="payment_method_284579" data-check-id="4" bind="payment_method_id" checked>
                                                </div>
                                                <label class="radio__label" for="payment_method_284579">
                                                    <span class="radio__label__primary">Thanh toán khi giao hàng (COD)</span>
                                                    <span class="radio__label__accessory">
                                                        <ul>
                                                            <li class="payment-icon-v2 payment-icon--4">

                                                                <i class="fa fa-money payment-icon-fa" aria-hidden="true"></i>

                                                            </li>
                                                        </ul>
                                                    </span>
                                                </label> 
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main_footer footer unprint">
                                <div class="mt10"></div>
                            </div>
                        </div>
                    </div>
                

                <div class="modal fade" id="modal-select-add">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Chọn địa chỉ nhận hàng</h4>
                            </div>
                            <div class="modal-body">
                                <div class="clearfix">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
	<!-- <script src="public/home_user/order_style/js/jquery-2.1.3.min.js?20171025" type='text/javascript'></script>
<script src="public/home_user/order_style/js/bootstrap.min.js?20171025" type='text/javascript'></script>
<script src="public/home_user/order_style/js/twine.min.js?20171025" type='text/javascript'></script>
<script src="public/home_user/order_style/js/validator.min.js?20171025" type='text/javascript'></script>
<script src="public/home_user/order_style/js/nprogress.js?20171025" type='text/javascript'></script>
<script src="public/home_user/order_style/js/money-helper.js?20171025" type='text/javascript'></script>

<script src="public/home_user/order_style/js/ua-parser.pack.js?20180611" type='text/javascript'></script>
<script src="public/home_user/order_style/js/checkout.js?20180821" type='text/javascript'></script> -->

<script src='//bizweb.dktcdn.net/assets/themes_support/jquery-2.1.3.min.js?20171025' type='text/javascript'></script>
<script src='//bizweb.dktcdn.net/assets/themes_support/bootstrap.min.js?20171025' type='text/javascript'></script>
<script src='//bizweb.dktcdn.net/assets/themes_support/twine.min.js?20171025' type='text/javascript'></script>
<script src='//bizweb.dktcdn.net/assets/themes_support/validator.min.js?20171025' type='text/javascript'></script>
<script src='//bizweb.dktcdn.net/assets/themes_support/nprogress.js?20171025' type='text/javascript'></script>
<script src='//bizweb.dktcdn.net/assets/themes_support/money-helper.js?20171025' type='text/javascript'></script>

<script src="//bizweb.dktcdn.net/assets/scripts/ua-parser.pack.js?20180611" type='text/javascript'></script>
<script src='//bizweb.dktcdn.net/assets/themes_support/checkout.js?20180821' type='text/javascript'></script>

<script type="text/javascript">
    $(document).ajaxStart(function () {
        NProgress.start();
    });
    $(document).ajaxComplete(function () {
        NProgress.done();
    });

    context = {}

    $(function () {
        Twine.reset(context).bind().refresh();
    });
    
    $(document).ready(function () {
      setTimeout(function(){




      }, 50);

  });
</script>

</body>
</html>