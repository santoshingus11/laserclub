@extends('layouts.web.app')
@section('style')
<style>
    /* Style Goes Here */

    /* Style Goes Here */
</style>
@endsection
@section('content')

<!-- Contant Goes Here -->

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
                    <li><a href="{{route('cricket-frontend')}}">
                            Cricket </a></li>
                    <li><a href="{{route('football-frontend')}}">
                            Football </a></li>
                    <li><a href="{{route('tennis-frontend')}}"> Tennis
                        </a></li>
                    <li><a href="{{route('/')}}">
                            Int Casino </a></li><!---->
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
      <div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <a href="/slot/game/lounch/8890">
                <img class="img-fluid custom-img" src="{{asset('assets/aviator-banner.png')}}" alt="Aviator Banner">
            </a>
        </div>
        <div class="col-12 col-md-6">
            <a href="/slot/game/lounch/8891">
                <img class="img-fluid custom-img" src="{{asset('assets/sms-jetex.png')}}" alt="JetX Banner">
            </a>
        </div>
    </div>
</div>

<style>
    .custom-img {
        width: 100%;
        height: auto; /* Maintain aspect ratio */
        max-height: 222px; /* Set max height */
        object-fit: cover; /* Ensures the image covers the area without stretching */
    }

    @media (max-width: 767.98px) {
        .custom-img {
            max-height: none; /* Allow height to adjust on mobile */
                    height: 130px; /* Maintain aspect ratio on mobile */
        }
    }
</style>


    </div>
</section>
<section class="text-center mb-2">
    <div class="container mobile-px">
     
        <div class="row">
            
            @foreach($data['liveGames'] as $d)
            <div class="col-md-3 col-6">
                <div class="sportDiv ic_section"><a href="/slot/game/lounch/{{$d->id}}"><img class="img-fluid w-100" src="{{$d->img}}">
                        <h2>{{$d->name}}</h2>
                    </a></div>
            </div>
            @endforeach
            
        </div>
        <div class="row">
            <div class="col-md-6 col-6">
                <div class="sportDiv"><a href="{{route('horse_racing')}}"><img src="{{asset('/')}}/assets/horseracing.webp" class="img-fluid">
                        <h2> horse racing </h2>
                    </a></div>
            </div>
            <div class="col-md-6 col-6">
                <div class="sportDiv"><a href="{{route('grey_hound')}}"><img src="{{asset('/')}}/assets/greyhoundracing.webp" class="img-fluid">
                        <h2> greyhound racing </h2>
                    </a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="power-wrap">
                    <h3><img src="{{asset('/')}}/assets/gc.png" class="img-fluid"></h3>
                    <div class="licence_embed"><img src="{{asset('/')}}/assets/lice.png" class="img-fluid"></div>
                    <p>Laser247 is the trading name of Sports Target B.V., a company incorporated and
                        regulated in Curaçao under company number 148053 with it's registered office at Fransche Bloemweg 4,
                        Willemstad, Curaçao.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="foot">
                    <p>Our website works best in the newest and last prior version of these browsers:
                        Google Chrome. Firefox</p>
                    <p><a class="mail-link" href="mailto:laserwin247@gmail.com">laserwin247@gmail.com</a></p><!---->
                    <ul>
                        <li><a href="{{asset('/')}}/#">privacy policy</a>
                        </li>
                        <li><a href="{{asset('/')}}/#">terms and
                                conditions</a></li>
                        <li><a href="{{asset('/')}}/#">rules and
                                regulations</a></li>
                        <li><a href="{{asset('/')}}/#">about us</a></li>
                        <li><a href="{{asset('/')}}/#">responsible
                                gaming</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 text-center"><img src="{{asset('/')}}/assets/btn-appdl.png" class="download-app"></div>
        </div>
    </div>
</section><!---->


@endsection
@section('script')
<script>
    /* Script Goes Here */

    /* Script Goes Here */
</script>
@endsection