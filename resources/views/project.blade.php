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
        <link rel="stylesheet" type="text/css" media="screen" />
        <meta property="og:url" content="url('project/'.$project->id)">
        <meta property="og:title" content="{{$project->projectName}}" />
        <meta property="og:type" content="Architecture - Design" />
        <meta property="og:image" content="{{asset('public/img/portfolio/'.$project->featureImage)}}" />
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




    
<!-- HERO -->
<section id="hero" class="hero-fullscreen parallax">
    <div class="background-image overlay-black" data-overlay-dark="0">
        <img src="{{asset('public/img/portfolio/'.$project->featureImage)}}" alt="#">
    </div>
    <div class="hero-content">
        <div class="container pl5p pr5p">
            <div class="col-md-8 text-center m-auto black">
                <h5 class="lead h5-md mt30"></h5>
                <!-- <h3 class="h1-xl">{{$project->projectName}}</h3> -->
                <a href="#details-anchor" class="btn btn-circle btn-ghost-black mt15 btn-scroll">Info</a>
            </div>
        </div>
    </div>
</section>
<section class="bg-white projectPage" id="details-anchor">

    <div class="container black pt60 pb10">
        
        <div class="col-md-8 text-left m-auto">
            <div style="text-align: center;" class="title pb60">
                <h3 class="h1-xl">{{$project->projectName}}</h3>
            </div>
        </div>
    </div>
    <div class="container black pb60">
        <div class="col-md-8 text-center m-auto">
            <ul class="ul-v mb60 text-left">
            @if($project->architect!=null)
            <li class="kong"><span class="subheading dark">Architectes :</span> {{$project->architect}}</li>
            @endif
            @if($project->placement!=null)
            <li class="kong"><span class="subheading dark">Emplacement : {{$project->placement}}</li>
            @endif
            @if($project->surface!=null)
            <li class="kong"><span class="subheading dark">Surface :</span> {{number_format($project->surface,0,',','.')}}m²</li>
            @endif
            @if($project->year!=null)
            <li class="kong"><span class="subheading dark">Year :</span> {{$project->year}}</li>
            @endif
            </ul>

           

            <div class="projectContent">
                <?php echo $project->projectContent ?>
            </div>   
            
            <div class="mt60 text-center">
                <a href="{{url('/')}}" class="btn btn-ghost-black alt"><i class="ion-chevron-left pr5"></i>HOME</a>
            </div>

            <div class="fb-like" data-href="{{url('project/'.$project->id)}}" data-width="300" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

            <div class="fb-comments center" data-href="{{url('project/'.$project->id)}}" data-width='100%' data-numposts="10"></div>
        </div>
    </div>
</section>
<section class="bg-white">
    
</section>
<div id="full-screen-image" class="container-fluid" style="text-align: center;">
    <div id="close-full-screen-image" class="row" style="padding: 0px 15px 0px 0px; cursor: pointer;">
        <i class="fa fa-4x fa-times" aria-hidden="true" style="float: right; padding-right: 15px;"></i>
    </div>
    <div class="row" id="full-screen-content">
        <div id="pre-image" class="col-md-2 col-sm-1 col-xs-1" style="height: 100%;display: flex;
    align-items: center; justify-content: center;">
            <i class="fa fa-5x fa-caret-left" class="btn-img" style="color: white; cursor: pointer; "></i>
        </div>
        <div class="col-md-8 col-sm-9 col-xs-9" style="height: 100%; display: flex;
    align-items: center; justify-content: center;">
            <img id="image-detail" src="" style="max-width: 100%; max-height: 100%; width: auto; height: auto; " />
        </div>
        <div id="next-image" class="col-md-2 col-sm-1 col-xs-1" style="height: 100%;display: flex;
    align-items: center; justify-content: center;">
            <i class="fa fa-5x fa-caret-right" class="btn-img" style="color: white; cursor: pointer; "></i>
        </div>
    </div>
</div>

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