@extends('index')
@section('title')
@section('content')
<!-- HERO -->
<!-- <section id="hero" class="hero-fullscreen parallax">
    <div class="background-image overlay-black" data-overlay-dark="0">
        <img src="http://ark-architecture.com/img/project-page-images/zg12.jpg" alt="#">
    </div>
    <div class="hero-content">
        <div class="container pl5p pr5p">
            <div class="col-md-8 text-center m-auto black">
                <h5 class="hero-subheading mb10">Company</h5>
                <h1 class="h1-xl">AN-Architect</h1>
                <h5 class="lead h5-md mt30"></h5>
                <a href="#contact-anchor" class="btn btn-circle btn-ghost-black mt15 btn-scroll">INFO</a>
            </div>
        </div>
    </div>
</section> -->
<!-- -->
<section id="hero" class="hero-fullscreen parallax hero-video overlay-black">

          <div class="slideshow-container">
            @foreach($slidecontacts as $slc)
            <div class="mySlides fade" >
              <div class="background-image">
                <img src="{{asset('public/img/slideContact/'.$slc->image)}}" style="width:100%">
              </div>
              <div class="text fade-text"><a href=""><?php echo $slc->caption ?></a></div>
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
                            $url = $cont->videoUrl;
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
  // var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  // for (i = 0; i < dots.length; i++) {
    // dots[i].className = dots[i].className.replace(" active", "");
  // }
  slides[slideIndex-1].style.display = "block";  
  // dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
            <div class="hero-content">
                <div id="sec10" class="demo">

                    <a href="#contact-anchor"><span></span></a>
                    </div>
            </div>
</section>




<section id="contact-anchor" class="bg-white">
            <div class="container pt100 pb100">
                <div class="row black">
                    <!-- Contact Info -->
                    <div class="col-md-4">
                        <h2 class="h2-md mb30 ml50">Contact</h2>
                        <ul class="ul-v contact-1">
                            <!-- Contact Number -->
                            <li>
                                <div class="contact-info-icon">
                                    <i class="fas fa-phone-square x3"></i>
                                </div>
                                <div class="contact-info-body">
                                    <h5 class="subheading mb5"></h5>
                                    {{$cont->mobile}}
                                </div>
                            </li>
                            <!-- -->

                            <!-- Contact Email Address -->
                            <li>
                                <div class="contact-info-icon">
                                    <i class="fas fa-envelope x3"></i>
                                </div>
                                <div class="contact-info-body">
                                    <h5 class="subheading mb5"></h5>
                                    {{$cont->email}}
                                </div>
                            </li>
                            <!-- -->
                            <!-- Contact Email Address -->
                           
                            
                            <li>
                                <div class="contact-info-icon">
                                    <i class="fa fa-globe x3"></i>
                                </div>
                                <div class="contact-info-body">
                                    <h5 class="subheading mb5"></h5>
                                    <a href="#" target="new_blank">www.an-architect.com</a>
                                </div>
                            </li>
                            <!-- Contact Office Location -->
                            <li>
                                <div class="contact-info-icon">
                                    <i class="fas fa-map-marker-alt x3"></i>
                                </div>
                                <div class="contact-info-body">
                                    <h5 class="subheading mb5"></h5>
                                    {{$cont->address}}
                                    
                                </div>
                            </li>
                            <li>
                                <div class="contact-info-icon">
                                    <i class="fa fa-youtube-play x3"></i>
                                </div>
                                <div class="contact-info-body">
                                    <h5 class="subheading mb5"></h5>
                                    <a href="{{$cont->link_ytb}}" target="new_blank">www.youtube.com/an-architect</a>
                                </div>
                            </li>
                            <li>
                                <div class="contact-info-icon">
                                    <i class="fa fa-facebook-official x3"></i>
                                </div>
                                <div class="contact-info-body">
                                    <h5 class="subheading mb5"></h5>
                                    <a href="{{$cont->link_fb}}" target="new_blank">www.facebook.com/an-architect</a>
                                    
                                </div>
                            </li>
                            <!-- -->
                        </ul>
                    </div>
                    <!-- -->
                    <!-- CONTACT FORM -->
                    <div class="col-md-8 contact-content">
                        <div>
                            <?php echo $cont->aboutUs; ?>
                        </div>
                    </div>
                    <!-- -->
                </div>
            </div>
        </section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.2799024521355!2d105.68757581419594!3d18.69628276865787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139ce3ee93c8919%3A0x900ef2e9dc86a443!2sToughened%20glass%20Vinh%20in%20Nghe%20An!5e0!3m2!1sen!2s!4v1569309218282!5m2!1sen!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

<div class="text-center" >
    <div class="fb-comments center" data-href="{{url('contact')}}"  data-width="800" data-numposts="15"></div>
</div>


@endsection
