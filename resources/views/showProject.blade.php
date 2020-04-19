@extends('index')
@section('title','AN-Architect')
@section('content')

<!-- HERO -->

<!-- <section id="hero" class="hero-fullscreen parallax hero-video overlay-black">
    <div class="background-image">
        <img src="{{asset('https://picography.co/wp-content/uploads/2017/11/picography-walkway-to-sunrise-sm-1-768x525.jpg')}}" alt="#">
    </div>
    <div class="video-background background-image overlay-black" data-overlay-dark="2">
        <video autoplay muted loop id="myVideo">
            <source src="img/slider/Main.mp4" type="video/mp4">
        </video>
    </div>

    <div class="hero-content">
        <div id="sec10" class="demo">
            <img src="{{url('public/img/backgrounds/test.jpg')}}" alt="">   
            <a href="#presentation-anchor"><span></span></a>
        </div>
    </div>    
</section> -->
<section id="hero" class="hero-fullscreen parallax hero-video overlay-black">
          <div class="slideshow-container">
            @foreach($slidehomes as $slh)
            <div class="mySlides fade" >
              <div class="background-image">
                <img src="{{asset('public/img/slideHome/'.$slh->image)}}" style="width:100%">
              </div>
              <div class="text fade-text"><a href=""><?php echo $slh->caption ?></a></div>
            </div>
            @endforeach
          </div>
          <br>      
          <!-- <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
          </div> -->
          
          <div class="video-background overlay-black" data-overlay-dark="2" >
                <!-- Video -->
                    <div class="video-foreground">
                        <?php 
                            $url = $themes->videoUrl;
                            $nameVid = preg_split('[watch\?v=]', $url);
                            $url = 'https://www.youtube.com/embed/'.$nameVid[1].'?loop=1&autoplay=1&playlist='.$nameVid[1].'&iv_load_policy=3&mute=1&VQ=HD1080';
                         ?>
                        <!-- <iframe width="1920" height="1080" src="https://www.youtube.com/embed/XQxEhxJK0IM?loop=1&autoplay=1&playlist=XQxEhxJK0IM&iv_load_policy=3&mute=1&VQ=HD1080" frameborder="0" allowfullscreen></iframe> -->
                        <iframe width="1920" height="1080" src="{{$url}}" frameborder="0" allowfullscreen></iframe> 
                    </div>
                <!-- <video autoplay muted loop id="myVideo">
                 <source src="{{url('public/slider/slider1.mp4')}}" type="video/mp4">
                </video> -->
            </div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var text = document.getElementsByClassName("text");
  // var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  // for (i = 0; i < dots.length; i++) {
  //   dots[i].className = dots[i].className.replace(" active", "");
  // }
  slides[slideIndex-1].style.display = "block";  
  // dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 10000); // Change image every 2 seconds
}
</script>
            
            <div class="hero-content">
                <div id="sec10" class="demo">

                    <a href="#portfolio-anchor"><span></span></a>
                    </div>
            </div>
</section>
<!-- -->
<section id="portfolio-anchor" class="bg-white">
    <div class="portfolio width100 container pt60 pb0">
        <div class="container" style="color: black;">
            <p><?php 
                echo $themes->introduce;
             ?></p>

        </div>
        <div class="row text-center">
            <!-- Section Heading -->
            <div class="section-heading relative blue">
                <h2 class="h2-md">PROJECTS</h2>
                <div class="gallery-title-absolute">
                
                </div>
            </div>
            <!-- Portfolio Category Filters -->
            
            <ul class="portfolio-filters" data-initial-filter="*">
                <li data-filter="*">Tất cả</li>
            @foreach($categories as $category)
                <li data-filter="{{$category->id}}">{{$category->cateName}}</li>
            @endforeach
            </ul>

            <div class="portfolio-grid-fullwidth" data-gap="10"><!-- Values: 10, 15, 20, 25, 30 and 35 -->
                <!-- Portfolio Items Container-->
                <div class="portfolio-forester">
                     
                    @foreach($projects as $project)
                        @if($project->cateId!=4)
                            <div class="col-md-4 col-sm-6" data-filter="{{$project->cateId}}" data-caption-style="1">
                                <!-- LIGHTBOX IMAGE DESTINATION -->
                                <a href="{{url('project/'.$project->id)}}">
                                <!-- -->
                                    <div class="portfolio-item">
                                        <div class="item-caption black">
                                            <div class="caption-desc">
                                                <div class="project-title">
                                                    <h3 class="h3-md">{{$project->projectName}}</h3>
                                                </div>
                                                <div class="caption-btn">
                                                    <h5 class="subheading dark">{{$project->surface}} m²</h5>
                                                </div>
                                                <div class="text-center">
                                                    <div class="fb-like" data-href="{{url('project/'.$project->id)}}" data-width="" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true" data-colorscheme="light" ></div>
                                                </div>
                                                <div>
                                                    <i class="fas fa-comment"></i><span class="fb-comments-count" data-href="{{url('project/'.$project->id)}}"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- UPDATE IMAGE DESTINATION BELOW -->
                                        <img class="lazyload" src="{{asset('public/img/portfolio/'.$project->featureImage)}}" alt="#">
                                        <!-- -->
                                    </div>
                                </a>
                            </div>
                        @else
                            <div class="col-md-4 col-sm-6 lightbox" data-filter="{{$project->cateId}}" data-caption-style="1">
                                <!-- LIGHTBOX VIDEO LINK -->

                                <?php $videoUrl = str_replace('watch?v=', 'embed/', $project->videoUrl); ?>
                                <a class="video-link" href="{{$videoUrl}}">

                                <!-- -->
                                    <div class="portfolio-item">
                                        <div class="item-caption black">
                                            <div class="caption-desc">
                                                <div class="project-title">
                                                    <h3 class="h3-md">{{$project->projectName}}</h3>
                                                </div>
                                                <div class="caption-btn">
                                                    <h5 class="subheading dark">Video</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- UPDATE VIDEO THUMBNAIL DESTINATION BELOW -->
                                        <img class="lazyload" src="{{asset('public/img/portfolio/'.$project->featureImage)}}" alt="#">
                                        <!-- -->
                                    </div>
                                </a>
                            </div>
                        @endif 
                    @endforeach

                </div>
        <section class="row" style="margin-top: 10px;">
            <span class="col-sm-12 col-xs-12 col-md-12">{!! $projects->links() !!}</span>
        </section>
        </div>
    </div>
</section>
@endsection