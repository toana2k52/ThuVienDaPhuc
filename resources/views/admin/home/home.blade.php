<!DOCTYPE html>
<html dir="ltr" lang="en">
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
    <title>@yield('title')</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="public/admin/assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="public/admin/assets/extra-libs/calendar/calendar.css" rel="stylesheet" />
    <link href="public/admin/dist/css/style.min.css" rel="stylesheet">
    <link href="public/table/css/style.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
<script src="public/ckeditor/ckeditor.js"></script>
<script src="public/ckeditor/ckfinder/ckfinder.js"></script>
</head>

<body>
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
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="{{route('admin.index')}}">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="public/admin/assets/images/logo-icon.png" alt="homepage" class="light-logo" />

                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                           <!-- dark Logo text -->
                           <img src="public/admin/assets/images/logo-text.png" alt="homepage" class="light-logo" />

                       </span>
                       <!-- Logo icon -->
                       <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="public/admin/assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto"> </ul>
                    <ul class="navbar-nav float-right" style="margin-right: 10px;">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="public/admin/assets/images/users/1.png" alt="user" class="rounded-circle" width="31"> <span style="color: #fff; margin-left: 10px;">{{Auth::user()->name}}</span></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a style="margin-top: 20px;" class="dropdown-item" href="{{route('admin.info')}}"><i class="ti-settings m-r-5 m-l-5"></i> Thông tin tài khoản</a>
                                <a style="margin-top: 20px;" class="dropdown-item" data-toggle="modal" href='#modal-id-10'><i class="fa fa-key m-r-5 m-l-5" aria-hidden="true"></i> Đổi mật khẩu</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{route('logout')}}"><i class="fa fa-power-off m-r-5 m-l-5"></i> Đăng xuất</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.index')}}" aria-expanded="false"><i class="fas fa-torah"></i><span class="hide-menu the-a-menu">Mượn sách</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.pay')}}" aria-expanded="false"><i class="fa fa-podcast" aria-hidden="true"></i><span class="hide-menu the-a-menu">Trả sách</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.brand')}}" aria-expanded="false"><i class="fas fa-book-medical"></i><span class="hide-menu the-a-menu">Nhập sách</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.category')}}" aria-expanded="false"><i class="fa fa-qrcode" aria-hidden="true"></i><span class="hide-menu the-a-menu">Loại sách</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.product')}}" aria-expanded="false"><i class="fa fa-cubes" aria-hidden="true"></i><span class="hide-menu the-a-menu">Kho sách</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.product')}}" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i><span class="hide-menu the-a-menu">Độc giả</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.order')}}" aria-expanded="false"><i class="fa fa-clipboard" aria-hidden="true"></i><span class="hide-menu the-a-menu">Phiếu mượn sách</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.info')}}" aria-expanded="false"><i class="fa fa-clipboard" aria-hidden="true"></i><span class="hide-menu the-a-menu">Phiếu trả sách</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('admin.info')}}" aria-expanded="false"><i class="fa fa-clipboard" aria-hidden="true"></i><span class="hide-menu the-a-menu">Phiếu nhập sách</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="modal fade" id="modal-id-10">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Đổi mật khẩu</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <form action="{{route('reset_password')}}" method="POST" class="form-horizontal" role="form">
                        <div class="modal-body">
                         <div class="form-group">
                            <label class="" for="">Mật khẩu cũ</label>
                            <input type="password" class="form-control" name="old_password" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="" for="">Mật khẩu mới</label>
                            <input type="password" class="form-control" name="password" placeholder="">
                        </div>
                        <div class="form-group">
                            <label class="" for="">Nhập lại mật khẩu mới</label>
                            <input type="password" class="form-control" name="confirm_password" placeholder="">
                        </div>
                        @csrf
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Đổi mật khẩu</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">

                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        @yield('main-content')
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            THPT Đa Phúc - Thư viện - Chịu trách nhiệm thuộc về <a href="{{route('user.index')}}">THPT Đa Phúc</a>
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script src="public/admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="public/admin/dist/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="public/admin/dist/js/jquery-ui.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="public/admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="public/admin/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="public/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="public/admin/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="public/admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="public/admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="public/admin/dist/js/custom.min.js"></script>
    <!-- this page js -->

    <script src="public/admin/assets/libs/moment/min/moment.min.js"></script>
    <script src="public/admin/assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="public/admin/dist/js/pages/calendar/cal-init.js"></script>
    <script src="public/tinymce/tinymce.min.js"></script>
    <script src="public/tinymce/config.js"></script>
    <script src="public/table/js/script.js"></script>
    <script src="public/table/js/function.js"></script>
</body>
</html>