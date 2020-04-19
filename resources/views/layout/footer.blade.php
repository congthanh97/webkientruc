<footer class="footer-black-1">
    <div class="container-fluid pt10">
        <div class="row white">
                <div class="col-md-7 col-sm-12">
                    <!-- Navigation Menu -->
                    <?php 
                        $contact = DB::table('contact')->where('id', 1)->first();
                     ?>
                     <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center pt20" id="footer-logo">
                        <p>{{$contact->maxim}}</p>
                    </div>
                    <div class="col-md-6 col-sm-6" id="footer-contact" style="font-size: 15px;">
                        <div style="margin-bottom: 10px;"><span style="padding-right: 15px;"><i style="color: #e5c779;" class="fas fa-phone-square x3"></i></span>{{$contact->mobile}}</div>
                        <div style="margin-bottom: 10px;"><span style="padding-right: 15px;"><i style="color: #e5c779;" class="fas fa-envelope x3"></i></span>{{$contact->email}}</div>
                        <div style="margin-bottom: 10px;"><span style="padding-right: 15px;"><i style="color: #e5c779;" class="fa fa-globe x3" aria-hidden="true"></i></span>www.an-architect.com</div>
                        <div style="margin-bottom: 10px;"><span style="padding-right: 15px;"><i style="color: #e5c779;" class="fa fa-home x3" aria-hidden="true"></i></span>{{$contact->address}}</div>
                    </div>
                    </div>
                    <div class="row" style="font-size: 15px;">
                        <div class="col-md-6 col-sm-6 pt40 footer-bot1">
                            <img src="{{url('public/img/assets/youtube.png')}}" style="width: 20px;margin-left: 40px;">
                            <a href="{{$contact->link_ytb}}" target="new_blank">www.youtube.com/an-architect</a>
                        </div>
                        <div class="col-md-6 col-sm-6 pt40 footer-bot2">
                            <img src="{{url('public/img/assets/facebook.png')}}" style="width: 20px;">
                            <a href="{{$contact->link_fb}}" target="new_blank" >www.facebook.com/an-architect</a>
                        </div>
                    </div>
                    <!-- -->
                </div>
                <div class="col-md-5 col-sm-6 " id ="maps" style="padding-right: 0px;padding-left: 0px;">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3779.2799024521355!2d105.68757581419594!3d18.69628276865787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139ce3ee93c8919%3A0x900ef2e9dc86a443!2sToughened%20glass%20Vinh%20in%20Nghe%20An!5e0!3m2!1sen!2s!4v1569309218282!5m2!1sen!2s" style="border:0;height: 273px;width: 95%; margin-left: 15px" allowfullscreen="" ></iframe>
    
                </div>
        </div>
    </div>
</footer>