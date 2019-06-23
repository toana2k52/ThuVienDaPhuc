
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <base href="{{asset('')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="LDT Shop - Thanh toán đơn hàng" />
    
    <title>LDT Shop - Cảm ơn</title>

    
    <link rel="icon" href="public/images/logo_icon.png?1524451884518" type="image/x-icon" />
    

    <link href='//bizweb.dktcdn.net/assets/themes_support/bootstrap.min.css?20171025' rel='stylesheet' type='text/css' />
    <link href='//bizweb.dktcdn.net/assets/themes_support/font-awesome.min.css?20171025' rel='stylesheet' type='text/css' />
    <link href='//bizweb.dktcdn.net/assets/themes_support/thankyou.css?20181105' rel='stylesheet' type='text/css' />


    

    <script>
        var Bizweb = Bizweb || {};
        Bizweb.store = 'TNTSneaker.vn';
        Bizweb.theme = {"id":704696,"role":"main","name":"LDT Shop --- guide"};
    </script>
    <!-- <script type="text/javascript">
            //<![CDATA[
            Bizweb.checkout = {"created_on":"2019-01-21T10:41:03Z","currency":"VND","customer_id":9249858,"email":"huytoan@gmail.com","location_id":null,"order_id":5410324,"phone":null,"requires_shipping":true,"reservation_time":null,"source_name":"web","source_identifier":null,"source_url":null,"taxes_included":false,"tax_exempt":false,"tax_lines":null,"token":"a296859d306d40eabffe4a73641fc1f0","updated_at":null,"payment_due":null,"payment_url":null,"reservation_time_left":0,"subtotal_price":"12100000.0000","total_price":"12140000.0000","total_tax":null,"line_items":[{"id":7119735,"shipping_status":null,"wait_to_ship_quantity":0,"grams":0,"price":3090000.0000,"line_price":9270000.0000,"price_original":0.0,"line_price_orginal":0.0,"product_id":9455325,"quantity":3,"requires_shipping":true,"sku":"880555_1","title":"Nike Air Zoom Pegasus 34 - 880555-006","variant_id":15090677,"variant_title":"35","vendor":"Nike","name":"Nike Air Zoom Pegasus 34 - 880555-006 35","gift_card":false,"total_discount":0.0000,"shipping_service":null,"product_exist":false,"image":null,"url":null,"properties":{},"promotionref":null,"promotionby":[]},{"id":7119736,"shipping_status":null,"wait_to_ship_quantity":0,"grams":0,"price":2830000.0000,"line_price":2830000.0000,"price_original":0.0,"line_price_orginal":0.0,"product_id":9454864,"quantity":1,"requires_shipping":true,"sku":"922475-001_1","title":"Nike Air Zoom Train Complate 2-922475-001","variant_id":15090099,"variant_title":"41 / Xám","vendor":"Nike","name":"Nike Air Zoom Train Complate 2-922475-001 41 / Xám","gift_card":false,"total_discount":0.0000,"shipping_service":null,"product_exist":false,"image":null,"url":null,"properties":{},"promotionref":null,"promotionby":[]}],"shipping_rate":null,"shipping_address":{"id":0,"first_name":"ht22","last_name":"Toàn","phone":"054123542541","company":null,"address1":"Hà nội","address2":null,"city":"Bình Phước","province":"Bình Phước","province_code":"651","country":"Việt Nam","country_code":"VN","zip":null},"billing_address":{"id":0,"first_name":"ht22","last_name":"Toàn","phone":"054123542541","company":null,"address1":"Hà nội","address2":null,"city":"Bình Phước","province":"Bình Phước","province_code":"651","country":"Việt Nam","country_code":"VN","zip":null},"discount":null};
            //]]>
        </script> -->
        <script>
            (function() {
                function asyncLoad() {
                    var urls = ["//productreviews.bizwebapps.vn/assets/js/productreviews.min.js?store=TNTSneaker.vn"];
                    for (var i = 0; i < urls.length; i++) {
                        var s = document.createElement('script');
                        s.type = 'text/javascript';
                        s.async = true;
                        s.src = urls[i];
                        s.src = urls[i];
                        var x = document.getElementsByTagName('script')[0];
                        x.parentNode.insertBefore(s, x);
                    }
                }
                window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);
            })();
        </script>


    </head>

    <body class="body--custom-background-color ">

        <div class="container">
            <div class="header">
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
            <div class="main">
                <div class="wrap clearfix">
                    <div class="row thankyou-infos">
                        <div class="col-md-7 thankyou-message">
                            <div class="thankyou-message-icon unprint">
                                <div class="icon icon--order-success svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="72px" height="72px">
                                        <g fill="none" stroke="#8EC343" stroke-width="2">
                                            <circle cx="36" cy="36" r="35" style="stroke-dasharray:240px, 240px; stroke-dashoffset: 480px;"></circle>
                                            <path d="M17.417,37.778l9.93,9.909l25.444-25.393" style="stroke-dasharray:50px, 50px; stroke-dashoffset: 0px;"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="thankyou-message-text">
                                <h3 style="margin-top: 5px;">Đặt hàng thành công!</h3>
                                <p>
                                    Cảm ơn bạn đã đặt hàng!
                                </p>
                                <p>Nhân viên hỗ trợ sẽ sớm liên lạc lại với bạn. Hãy chú ý điện thoại nhé!!</p>
                                <div style="font-style: italic;">

                                </div>
                                <a style="padding: 5px 15px; margin-top: 20px" href="{{route('user.index')}}" class="btn btn-primary">Quay về trang chủ</a>
                            </div>
                        </div>
                   </div>
               </div>
            <div class="modal fade" id="refund-policy" data-width="" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                            <h4 class="modal-title">Chính sách hoàn trả</h4>
                        </div>
                        <div class="modal-body">
                            <pre></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="privacy-policy" data-width="" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                            <h4 class="modal-title">Chính sách bảo mật</h4>
                        </div>
                        <div class="modal-body">
                            <pre></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="terms-of-service" data-width="" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                            <h4 class="modal-title">Điều khoản sử dụng</h4>
                        </div>
                        <div class="modal-body">
                            <pre></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
    #map {
        width: 100%;
        height: 245px;
    }

    .hidden-map{
        display:none;
    }
</style>

<script src='//bizweb.dktcdn.net/assets/themes_support/jquery-2.1.3.min.js?20171025' type='text/javascript'></script>
<script src='//bizweb.dktcdn.net/assets/themes_support/bootstrap.min.js?20171025' type='text/javascript'></script>
<script src='//bizweb.dktcdn.net/assets/themes_support/twine.min.js?20171025' type='text/javascript'></script>
<script src='//bizweb.dktcdn.net/assets/themes_support/checkout.js?20180327' type='text/javascript'></script>
<!--<script src="https://bizweb.dktcdn.net/100/000/001/themes/544642/assets/checkout.js?15168730444422222" type='text/javascript'></script>-->
<script src='//bizweb.dktcdn.net/assets/themes_support/thankyou.js?20171025' type='text/javascript'></script>

<script type="text/javascript">
    context = {}

    $(function () {
        Twine.reset(context).bind().refresh();
    });

    window.Bizweb || (window.Bizweb = {});
    Bizweb.Checkout = function () {
        function Checkout(e, options) {
            if (!options)
                options = {};

            this.ele = e;
            this.invalidEmail = false;
        };

        Checkout.prototype.handleClick = function (element) {
            $(element).closest(".field__input-wrapper").find(".field__input").focus();
        }

        Checkout.prototype.handleFocus = function (element) {
            $(element).closest(".field__input-wrapper").addClass("js-is-focused")
        }

        Checkout.prototype.handleFieldBlur = function (element) {
            $(element).closest(".field__input-wrapper").removeClass("js-is-focused")
        }

        Checkout.prototype.changeEmail = function () {
        }

        return Checkout;
    }();
</script>


</body>
</html>