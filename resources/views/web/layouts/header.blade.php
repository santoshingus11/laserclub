 <!-- Header Section Begin -->
 @php 
$available_credit =0.00;
if(Auth::guard('client')->user()){

$available_credit=QueryHelper::total_availablecredit(Auth::guard('client')->user()->id,Auth::guard('client')->user()->role_id);
}
@endphp
 <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="{{url('/')}}"><span styl="color:white !important;">DUNI</span><spanstyl="color:red !important;">YA11</span>
                            <!-- <img src="img/logo.png" alt=""> -->
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <!-- <li class="active"><a href="./index.html">Homepage</a></li> -->
                                <!-- <li><a href="./categories.html">Categories <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                        <li><a href="./categories.html">Categories</a></li>
                                        <li><a href="./anime-details.html">Anime Details</a></li>
                                        <li><a href="./anime-watching.html">Anime Watching</a></li>
                                        <li><a href="./blog-details.html">Blog Details</a></li>
                                        <li><a href="./signup.html">Sign Up</a></li>
                                        <li><a href="./login.html">Login</a></li>
                                    </ul>
                                </li> -->
                                <li class="{{ Request::is('sports') ? 'active' : '' }}"><a href="{{url('/sports')}}">Sports</a></li>
                                <li class="{{ Request::is('casino') ? 'active' : '' }}"><a href="{{url('/casino')}}">Casino</a></li>
                                <li class="{{ Str::startsWith(Request::url(), url('/live')) ? 'active' : '' }}"><a href="{{url('/live/casino/games')}}">Live Casino</a></li>
                                <li class="{{ Str::startsWith(Request::url(), url('/jetX')) ? 'active' : '' }}"><a href="{{url('/jetX/aviator/casino/games')}}">Aviator & JetX</a></li>
                                 <li class="{{ Str::startsWith(Request::url(), url('/lobby')) ? 'active' : '' }}"><a href="{{url('/lobby/new/casino/games')}}">Lobby</a></li>
                                  <li class="{{ Str::startsWith(Request::url(), url('/fancy')) ? 'active' : '' }}"><a href="{{url('/fancy/lobby')}}">Fancy</a></li>
                                 @if(Auth::guard('client')->user())
                                
                               <li><a href="#">Profile <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown" style="background-color: #212529; color:white;">
                                        <li><a class="bg-dark" style="color:white;">Hi! {{Auth::guard('client')->user()->username}}</a></li>
                                        <li class="{{ Request::is('deposit') ? 'active' : '' }}"><a href="{{url('/client/deposit')}}" style="color:white;">Deposit</a></li>
                                       <li class="{{ Request::is('withdraw') ? 'active' : '' }}"><a href="{{url('/client/withdraw/funds')}}" style="color:white;">Withdraw</a></li>
                                       <li class="{{ Request::is('Bettinghistory') ? 'active' : '' }}"><a href="#" style="color:white;">Betting History</a></li>
                                        
                                        <li class="{{ Request::is('Bettinghistory') ? 'active' : '' }}"><a href="#" style="color:white;">Account Statement</a></li>
                                        <li class="{{ Request::is('Bettinghistory') ? 'active' : '' }}"><a href="{{route('changepassword')}}" style="color:white;">Change Password</a></li>
                                      <li> <a href="{{route('client-logout')}}" style="color:white;">Logout</a></li>
                                    </ul>
                                </li>
                               
                                
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        @if(Auth::guard('client')->user())
                        <h5 style="color:white;">Balance: <span styl="color:red;">{{$available_credit}}</span></h5>
                       
                        @else
                        <a href="{{route('login')}}">Login</a>
                        <a href="{{route('register')}}">Register</a>
                        @endif
                        <!-- <a href="./login.html"><span class="icon_profile"></span></a> -->
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->