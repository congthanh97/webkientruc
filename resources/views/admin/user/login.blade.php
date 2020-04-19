<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Modernize Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="{{url('public/css/admincss/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="{{url('public/css/admincss/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Fontawesome Css -->
    <link href="{{url('public/css/admincss/fontawesome-all.css')}}" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
    <div class="bg-page py-5">
        <div class="container">
            <!-- main-heading -->
            <h2 class="main-title-w3layouts mb-2 text-center text-white">Đăng nhập</h2>
            <!--// main-heading -->
            <div class="form-body-w3-agile text-center w-lg-50 w-sm-75 w-100 mx-auto mt-5">
                <form  method="post">
                    @csrf
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter username" required="">
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required="">
                    </div>
                    <button type="submit" class="btn btn-primary error-w3l-btn mt-sm-5 mt-3 px-4">Đăng nhập</button>
                </form>
                @if(session('alert'))
                <div class="alert alert-danger" style="margin-top: 10px;">
                    {{session('alert')}}
                </div>
                @endif
                <h1 class="paragraph-agileits-w3layouts mt-2">
                    <a href="{{url('/')}}">Back to Home</a>
                </h1>
            </div>
        </div>
    </div>


    <!-- Required common Js -->
    <script src="{{asset('public/js/adminjs/jquery-2.2.3.min.js')}}"></script>
    <!-- //Required common Js -->

    <!-- Js for bootstrap working-->
    <script src="{{asset('public/js/adminjs/bootstrap.min.js')}}"></script>
    <!-- //Js for bootstrap working -->

</body>

</html>