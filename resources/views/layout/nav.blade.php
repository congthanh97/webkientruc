<nav class="navbar sticky transparent-white">
    <div class="container fluid-container hidden-md">
        <div class="row">
            <div class="col-md-3">
                <div class="col-md-2">
                  <div class="hero-logo">
                    <div class="logo-img">
                        <a href="{{url('/')}}"><img src="{{asset('public/img/assets/logo.png')}}" class="logo-white" alt="#" ></a>
                        <a href="{{url('/')}}"><img src="{{asset('public/img/assets/logo.png')}}" class="logo-black" alt="#"></a>
                     </div>
                  </div>
                </div>
                <div class="col-md-10 logo-black company-name">
                    <h4>AN-Architect</h4>
                </div>
                <div class="col-md-10 logo-white company-name">
                    <h4 style="color:white;" >AN-Architect</h4>
                </div>
                
                
            </div>
            <?php 
                if(url()->current()!=url('')){
                  $urlproject = url('/#portfolio-anchor');
                }
                else{
                  $urlproject = '#portfolio-anchor';
                }
             ?>
            <?php 
              $contact = DB::table('contact')->where('id', 1)->first();
            ?>
            <div class="col-md-9">
                <ul class="ul-h nav-menu nav-social nav-social-right" >
                   
                   <li><a href="{{url('')}}" class="btn-scroll"><!-- <i class="fas fa-home"></i> -->HOME</a></li>
                   <li><a href="{{$urlproject}}" class="btn-scroll" >PROJECTS</a></li>
                   <li><a href="{{url('contact')}}" class="btn-scroll">CONTACT</a></li>

                   <li><a href="{{$contact->link_fb}}" target="_blank">  <!--  <i class="fab fa-facebook-square"></i> --> FACEBOOK</a></li>
                   <li><a href="{{$contact->link_ytb}}" target="_blank"><!-- <i class="fab fa-youtube"></i> -->YOUTUBE</a></li>
               </ul>
           </div> 
       </div>
   </div>

   <!-- Collapsed Navigation Bar -->
   <nav class="navbar navbar-collaps">
    <div class="container fluid-container">
      <div class="row">
        <div class="col-md-3 col-xs-3">
          <div class="hero-logo">
            <div class="logo-img">
              <a href="{{url('/')}}"><img src="{{asset('public/img/assets/logo.png')}}" class="logo-white" alt="#" ></a>
              <a href="{{url('/')}}"><img src="{{asset('public/img/assets/logo.png')}}" class="logo-black" alt="#"></a>
            </div>
          </div>
        </div>
        <div class="col-md-9 col-xs-9">
          <h4>AN-Architect</h4>
        </div>
      </div>
      <div class="hamburger-menu">
          <button type="button" class="hamburger-btn clicked">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
          </button>
      </div>
    </div>
    <!--=============== navigation ===============-->
    <div class="nav-inner isDown">
        <div class="nav-decor nav-decor-tl"></div>
        <div class="nav-decor nav-decor-br"></div>
        <div class="overlay"></div>
        <nav>
            <ul class="pl0 mb0">
                <li><a href="{{url('')}}" class="btn-scroll"><!-- <i class="fas fa-home"></i> -->HOME</a></li>
                <li><a href="{{$urlproject}}" class="btn-scroll">PROJECTS</a></li>
                <li><a href="{{url('contact')}}" class="btn-scroll">CONTACT</a></li>
                <li><a href="https://www.facebook.com/an-architect" target="_blank"><!-- <i class="fab fa-facebook-square"></i></i> --> FACEBOOK</a></li>
                <li><a href="https://www.youtube.com/channel/UCqiihOpAy1AW_47dSJkoi5w" target="_blank"><!-- <i class="fab fa-youtube"></i> -->YOUTUBE</a></li>
            </ul>
        </nav>
    </div>
    <!-- navigation  end -->
</nav>
<!-- -->
</nav>

