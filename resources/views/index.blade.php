<!DOCTYPE html>
<html lang="en">
    <head>
            <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112661109-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112661109-1');
</script>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>AN-Architect</title>
        <meta name="keywords" content="architect,biet thu,kien truc">
        <link href="{{url('public/img/assets/logo.png')}}" rel="icon" type="image/png">
        <link href="{{url('public/css/plugins.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('public/css/style.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('public/css/backgrounds.css')}}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,800%7cNunito+Sans:200,300,400" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('public/fontawesome-free-5.10.1-web/css/all.css')}}">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="{{url('public/css/style-slide.css')}}"/>
        <link rel="stylesheet" type="text/css" media="screen" />
        <meta property="og:title" content="AN-Architect" />
        <meta property="og:type" content="Architecture - Design" />
        <meta property="og:image" content="http://www.an-architect.com/img/assets/logo.png" />
        <meta property="fb:app_id" content="1430065787143715" />
        <meta property="fb:admins" content="100040971591106"/>
        <script>window.addEventListener("load", function(event) {
                    lazyload();
                });
        </script>
    </head>
    <body>
        
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1430065787143715',
          cookie     : true,
          xfbml      : true,
          version    : 'v4.0'
        });
          
        FB.AppEvents.logPageView();   
          
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v4.0&appId=501463783752621&autoLogAppEvents=1"></script>


        <!-- PRELOADER ( DO NOT DELETE, OTHERWISE, PRELOADER WON'T WORK. ) -->
        <div class="preloader"><div></div></div>
        <!-- -->




        <!-- TRANSPARENT WHITE NAV BAR -->
        @include('layout/nav')
        <!-- -->



         <!-- CONTENT    -->
        <section>
            @yield('content')
        </section>

        <!-- FOOTER -->

        @include('layout/footer')
        <!-- -->


   
        <script src="{{url('public/js/jquery.js')}}"></script>
        <script src="{{url('public/js/plugins.js')}}"></script>
        <script src="{{url('public/js/scripts.js')}}"></script>
        <script src="{{url('public/js/lazyload.js')}}"></script>
        <script src="{{url('public/js/google-maps.js')}}"></script>
        <script src="{{url('public/js/scroll-down.js')}}"></script>
        
      
                
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112661109-1');
</script>

<!-- zoom -->
<script src="{{url('public/js/wheelzoom.js')}}"></script>
<!--  -->
<script>
    function preImg(a, b){
        if (a === 0) {
            return b[b.length - 1];
        } else if (a > 0 && a <= b.length - 1) {
            return b[a - 1];
        } 
    }

    function nextImg(a, b){
        if(a === b.length -1) {
            return b[0];
        } else if (a >=0 && a < b.length-1) {
            return b[a + 1];
        }
    }

    function closeImg(){
        $("#full-screen-image").css('display', 'none');
        $("nav").css({
            display: ''
        });
    }
</script>
<script type="text/javascript">
    
    $(document).ready(function() {

            
        $("#full-screen-image").css('display', 'none');
        $(".projectphoto").click(function() {
            event.preventDefault();
            document.querySelector('img#image-detail').dispatchEvent(new CustomEvent('wheelzoom.destroy'));
            var img = $(".projectContent img");
            var imgArray = new Array();
            
            for (var i = 0; i < img.length; i++) {
                imgArray[i] = $(img[i]).attr('src');
            }

            var imgSrc;
            imgSrc = $(this).attr('src');
            
            $("nav").css({
                display: 'none'
            });

            $("#full-screen-image").css({
                width: '100vw',
                position: 'fixed',
                top: 0,
                left: 0,
                height: '100vh',
                display: '',
                background: 'rgba(0, 0, 0, 0.6)',
                zIndex: 2
            });

            $('#full-screen-content').height($("#full-screen-image").height() - $("#close-full-screen-image").height());

            $("#image-detail").attr('src', imgSrc);
            wheelzoom(document.querySelector('img#image-detail'));

            $("html").keydown(function(e) {
                /* Act on the event */
                var index = $.inArray(imgSrc, imgArray);
                if(e.keyCode == 37) {
                    if(index === 0){
                        imgSrc = imgArray[imgArray.length - 1];
                    }
                    else {
                        imgSrc = imgArray[index - 1];
                    }
                    $("#image-detail").attr('src', imgSrc);

                } else if(e.keyCode == 39) {
                   if(index === imgArray.length-1){
                        imgSrc = imgArray[0];
                   }
                   else {
                        imgSrc = imgArray[index + 1];
                   }
                   $("#image-detail").attr('src', imgSrc);

                } else if(e.keyCode == 27) {
                    closeImg();
                }
            });


            $("#pre-image").click(function() {
                var index = $.inArray(imgSrc, imgArray);
                if(index === 0){
                    imgSrc = imgArray[imgArray.length - 1];
                }
                else {
                    imgSrc = imgArray[index - 1];
                }
                $("#image-detail").attr('src', imgSrc);
            });

            $("#next-image").click(function() {
                var index = $.inArray(imgSrc, imgArray);
                if(index === imgArray.length-1){
                    imgSrc = imgArray[0];
               }
               else {
                    imgSrc = imgArray[index + 1];
               }
                $("#image-detail").attr('src', imgSrc);
            });

            $("#close-full-screen-image").click(function() {
                closeImg();
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        if(window.matchMedia('(max-width: 500px)').matches) {
            $(window).on("scroll",function(){
                var scroll_height = $('#hero').height();
                var navbarAdd = $("nav.navbar.navbar-collaps");
                if($(window).scrollTop()>=scroll_height){
                    $('.navbar-collaps').css({
                        backgroundColor: 'white',
                        borderBottom:'1px solid rgba(0,0,0,0.1)',
                    });
                    $('nav.navbar.navbar-collaps .container.fluid-container .row .col-md-9 > h4').css('color', 'black');
                    $('.icon-bar').attr('style', 'background-color:#000 !important');
                }
                else{
                    $('.navbar-collaps').css({
                        backgroundColor: 'rgba(0,0,0,0.2)',
                        borderBottom:'1px solid rgba(255,255,255,0.6)',
                    });
                    $('nav.navbar.navbar-collaps .container.fluid-container .row .col-md-9 > h4').css('color', '#fff');
                    $('.icon-bar').css('background-color','#fff');
                }
            });
        }
    });
</script>        

    </body>
</html>
