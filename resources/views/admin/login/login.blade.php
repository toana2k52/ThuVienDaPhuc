<!DOCTYPE html>
<html dir="ltr">


<!-- Mirrored from wrappixel.com/demos/free-admin-templates/matrix-admin-bt4/html/ltr/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Apr 2019 14:06:20 GMT -->
<head>
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="public/admin/assets/images/favicon.png">
    <title>XXX.com - Đăng nhập admin</title>
    <!-- Custom CSS -->
    <link href="public/admin/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
            <div class="auth-box bg-dark border-top border-secondary">
                <div id="loginform">
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img src="public/admin/assets/images/logo.png" alt="logo" /></span>
                    </div>
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session::get('success')}}
                    </div>
                    @endif
                    @if(Session::has('error'))
                    <div class="text-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i><span> {{Session::get('error')}}</span>
                    </div>
                    @endif
                    <!-- Form -->
                    <form action="" method="POST" class="form-horizontal " role="form">
                        <div class="form-group @if($errors->has('email')) has-error @endif">
                            <label class="" for="" style="color: #fff ">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="">
                            @if($errors->has('email'))
                            <div class="">
                              <p style = "color: red;">{{$errors->first('email')}}</p>
                          </div>
                          @endif
                      </div>
                      <div class="form-group @if($errors->has('password')) has-error @endif">
                        <label class="" for="" style="color: #fff   ">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="">
                        @if($errors->has('password'))
                        <div class="">
                            <p style = "color: red;">{{$errors->first('password')}}</p>
                        </div>
                        @endif
                    </div>
                    <input type="checkbox" name="remember" value=""> <span style="color: #fff">Lưu tài khoản</span>
                    @csrf
                    
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Login box.scss -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper scss in scafholding.scss -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper scss in scafholding.scss -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right Sidebar -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Right Sidebar -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- All Required js -->
<!-- ============================================================== -->
<script src="public/admin/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="public/admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="public/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugin js -->
<!-- ============================================================== -->
<script>

    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').click(function(){

        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });
</script>

</body>


<!-- Mirrored from wrappixel.com/demos/free-admin-templates/matrix-admin-bt4/html/ltr/authentication-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Apr 2019 14:06:21 GMT -->
</html>