<section>
    <div class="container mobile-px HomemainSliders">
        <div class="row">
            <div class="col-md-12"><app-upcoming>
                    <div class="marquee-box">
                        <h4><i class="mdi mdi-microphone-outline"></i> News </h4>
                        <marquee scrollamount="5"></marquee>
                    </div>
                </app-upcoming>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="home-navigation-bar">
                    <li class="mobile-hide"><a class="hightlight-menus" href="{{route('cricket-frontend')}}"> IPL 2024 </a></li>
                    <li class="mobile-hide"><a class="hightlight-menus" href="{{route('/')}}"> LOK SABHA 2024 </a></li>
                    <li><a href="{{route('cricket-frontend')}}">Cricket </a></li>
                    <li><a href="{{route('football-frontend')}}">Football </a></li>
                    <li><a href="{{route('tennis-frontend')}}"> Tennis</a></li>
                    <li><a href="{{route('/')}}">Int Casino </a></li><!---->
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="ipl-loksabha"><a class="ipl" href="{{route('cricket-frontend')}}"><span class="blinker">ipl 2024</span></a><a class="loksabha" href="{{route('/')}}"><span class="blinker">lok sabha 2024</span></a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"><img class="img-fluid" src="{{asset('/')}}/assets/slider1.webp"></div>
        </div>
    </div>
</section>