    <!DOCTYPE html>
<html lang="en">

<head>
    <title>AN-ARCHITECTURE ADMIN</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="{{url('public/css/admincss/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{url('public/css/admincss/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Bars Css -->
    <link rel="stylesheet" href="{{url('public/css/admincss/bar.css')}}">
    <!--// Bars Css -->
    <!-- Common Css -->
    <link href="{{url('public/css/admincss/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="{{url('public/css/admincss/style4.css')}}">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link rel="stylesheet" type="text/css" href="{{url('public/font-awesome-4.7.0/css/font-awesome.css')}}" >
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
    
     <!-- Required common Js -->
    <script src="{{url('public/js/adminjs/jquery-2.2.3.min.js')}}"></script>
    <!-- //Required common Js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js" ></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h1>
                    <a href="{{url('/')}}">AN-ARCHITECTURE</a>
                </h1>
                <span><a href="{{url('/')}}">AN</a></span>
            </div>
            <div class="logo"><a href="{{url('/admin')}}"><img src="{{asset('public/img/assets/logo.png')}}" ></a></div>

            <ul class="list-unstyled components">
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-clipboard" aria-hidden="true"></i>
                        Dự án
                        <i class="fa fa-chevron-down fa-pull-right" aria-hidden="true"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{url('admin/project')}}">Danh sách</a>
                        </li>
                        <li>
                            <a href="{{url('admin/addproject')}}">Thêm dự án</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('admin/categories')}}">
                        <i class="fa fa-folder" aria-hidden="true"></i>
                        Danh mục
                    </a>
                </li>
                <li>
                    <a href="#homeSubmenuContact" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-clipboard" aria-hidden="true"></i>
                        Liên hệ
                        <i class="fa fa-chevron-down fa-pull-right" aria-hidden="true"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenuContact">
                        <li>
                            <a href="{{url('admin/contact')}}">Thông tin</a>
                        </li>
                        <li>
                            <a href="{{url('admin/slideContact')}}">Slide contact</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('admin/theme')}}">
                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                        Chủ đề
                    </a>
                </li>
                <!-- <li>
                    <a href="#pageSubmenu1" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        Thành viên
                        <i class="fa fa-chevron-down fa-pull-right" aria-hidden="true"></i>
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu1">
                        <li>
                            <a href="{{url('admin/user')}}">Danh sách</a>
                        </li>
                        <li>
                            <a href="{{url('admin/adduser')}}">Thêm thành viên</a>

                        </li>
                    </ul>
                </li> -->
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                    </div>
                    <!-- Search-from -->
                   <!--  <form  method="post" class="form-inline mx-auto search-form">
                        @csrf
                        <input class="form-control mr-sm-2" type="search" placeholder="Từ khóa" aria-label="Search" required="" name="keyword" id="keyword">
                        <button class="btn btn-style my-2 my-sm-0"  id="search">Tìm kiếm</button>
                    </form> -->
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-user-o" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="profile-l align-self-center">
                                        <img src="{{asset('public/img/admin/images/profile.jpg')}}" class="img-fluid mb-3" alt="Responsive image">
                                    </div>
                                    <div class="profile-r align-self-center">
                                        <h3 class="sub-title-w3-agileits">{{session('UserAdmin')}}</h3>
                                    </div>
                                </div>
                                <a href="{{url('admin/myProfile')}}" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fa fa-user mr-3" aria-hidden="true"></i>Thông tin của tôi</h4>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url('admin/logout')}}">Đăng xuất</a>

                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--// top-bar -->
            
            @yield('content')

        </div>
    </div>
    <!-- Sidebar-nav Js -->
    <script>
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
    <!--// Sidebar-nav Js -->


    <!-- profile-widget-dropdown js-->
    <script src="{{url('public/js/adminjs/script.js')}}"></script>
    <!--// profile-widget-dropdown js-->
    
    <!-- dropdown nav -->
    <script>
        $(document).ready(function () {
            $(".dropdown").hover(
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
    <!-- //dropdown nav -->

    <!-- Js for bootstrap working-->
    <script src="{{url('public/js/adminjs/bootstrap.min.js')}}"></script>
    <!-- //Js for bootstrap working -->

    
</body>

</html>