@php 
$available_credit =0.00;
if(Auth::guard('client')->user()){

$available_credit=QueryHelper::total_availablecredit(Auth::guard('client')->user()->id,Auth::guard('client')->user()->role_id);
}
@endphp
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Live Casino | LordexWorld</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('livecasino/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('livecasino/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('livecasino/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('livecasino/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <style>
    .btnclass{
        border-color: #f5e47b !important;
        background-color: #bc883d !important;
    }
    .btnclass:hover{
        border-color: #bc883d !important;
        background-color: #f5e47b !important;
    }
    .newhover:hover{
         border-color: #f5e47b !important;
        background-color: #bc883d !important;
    }
    
   </style>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('livecasino/images/loading.gif')}}" alt="#" /></div>
      </div>
      <div class="wrapper">
         <!-- end loader -->
         <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div id="dismiss">
                  <i class="fa fa-arrow-left"></i>
               </div>
               <ul class="list-unstyled components">
                 
                  <li>
                     <a href="{{url('/sports')}}">Sports</a>
                  </li>
                  <li>
                     <a href="{{url('/')}}">Casino</a>
                  </li>
                  <li>
                     <a href="#customer">Live Casino</a>
                  </li>
                   <li>
                     <a href="{{url('/live/casino/games/aviator/jetx')}}">Aviator & JetX</a>
                  </li>
                  <li>
                     <a href="{{url('/live/casino/games/sportBetting')}}">Sports Betting</a>
                  </li>
                  
                   @if(Auth::guard('client')->user())
                    <li>
                       <a href="#"> Available Balance: {{$available_credit}}</a>
                    </li>
                    <li>
                     <a href="{{route('client-logout')}}">Logout</a>
                  </li>
                   @else
                   
                   <li>
                     <a href="{{route('login')}}">Login</a>
                  </li>
                   <li>
                     <a href="{{route('register')}}">Register</a>
                  </li>
                  @endif
                 
               </ul>
            </nav>
         </div>
         <div id="content">
            <!-- header -->
            <header>
               <!-- header inner -->
               <div class="head_top">
                  <div class="header">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-md-3 logo_section">
                              <div class="full">
                                 <div class="center-desk">
                                    <div class="logo">
                                       <a href="index.html"><img src="{{asset('frontend/assets/images/logo-login.png')}}" alt="#"></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-9">
                              <div class="right_header_info">
                                 <ul>
                                      @if(Auth::guard('client')->user())
                                        <li class="menu_iconb">
                                          Available Balance: {{$available_credit}}
                                        </li>
                                      @else
                                        <li class="menu_iconb">
                                           <a href="{{route('login')}}">Login</a>
                                        </li>
                                        <li class="menu_iconb">
                                           <a href="{{route('register')}}">Register</a>
                                        </li>
                                    @endif
                                    <li>
                                       <button type="button" id="sidebarCollapse">
                                       <img src="{{asset('livecasino/images/menu_icon.png')}}" alt="#" />
                                       </button>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </header>
            <!-- end header inner -->
            <!-- end header -->
            <section class="slider_section">
               <div class="banner_main">
                  <img src="{{asset('livecasino/images/bg_main.jpg')}}" alt="#"/>
                  <div class="container-fluid padding3">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="text-bg">
                              <a href="Javascript:void(0)" onclick="filterGames('{{$data['labels'][0]->id}}')">Play now</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
         <!-- Categories -->
         
         <!-- casino -->
         <div id="game" class="casino">
            <div class="container">
               
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage">
                        <h2>Live Casino Games</h2>
                        <span></span>
                     </div>
                  </div>
               </div>
               <div class="row">
                   <div class="btn-group-container" style="overflow-x: auto; white-space: nowrap; width: 100%;">
                        <div class="btn-group align-item-center" style="display: flex; justify-content: space-between;">
                            @foreach($data['labels'] as $label)
                            <button class="btn btn-primary btnclass" onclick="filterGames('{{$label->id}}')">{{$label->name}}</button>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row mt-3" id="gameContainer">
                    @foreach($data['games'] as $game)
                    <div class="col-md-4 padding_bottom game_item" data-catid="{{$game->cat_id}}">
                        <div class="game_box">
                            <figure><img src="{{$game->img}}" alt="#"/></figure>
                        </div>
                        <div class="game newhover">
                            @if(Auth::guard('client')->user())
                            <h3 ><a href="{{ url('/slot/game/lounch') }}/{{ $game->game_id }}">Play Now</a></h3>
                            @else
                            <h3><a href="{{ route('login') }}" >Login First</a></h3>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
               <!-- <button id="loadMoreBtn" class="btn btn-primary mt-3">Load More</button> -->
            </div>
         </div>
         <!-- end casino -->
         
         <!-- licens -->
        
         <!-- end reqeste -->
         <!--  footer -->
         <footer>
            <div class="footer">
              
               <div class="copyright">
                  <div class="container">
                     <p>Copyright 2019 All Right Reserved By <a href="#">LordexWorld</a></p>
                  </div>
               </div>
            </div>
         </footer>
         <!-- end footer -->
      </div>
      <div class="overlay"></div>
      <!-- Javascript files-->
      <script src="{{asset('livecasino/js/jquery.min.js')}}"></script>
      <script src="{{asset('livecasino/js/popper.min.js')}}"></script>
      <script src="{{asset('livecasino/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('livecasino/js/jquery-3.0.0.min.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('livecasino/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
       <script src="{{asset('livecasino/js/custom.js')}}"></script>
      <script type="text/javascript">
         $(document).ready(function() {
             $("#sidebar").mCustomScrollbar({
                 theme: "minimal"
             });
         
             $('#dismiss, .overlay').on('click', function() {
                 $('#sidebar').removeClass('active');
                 $('.overlay').removeClass('active');
             });
         
             $('#sidebarCollapse').on('click', function() {
                 $('#sidebar').addClass('active');
                 $('.overlay').addClass('active');
                 $('.collapse.in').toggleClass('in');
                 $('a[aria-expanded=true]').attr('aria-expanded', 'false');
             });
         });
      </script>
      <script>
         $(document).ready(function() {
             $(".fancybox").fancybox({
                 openEffect: "none",
                 closeEffect: "none"
             });
         
             $(".zoom").hover(function() {
         
                 $(this).addClass('transition');
             }, function() {
         
                 $(this).removeClass('transition');
             });
         });
      </script>
 <script>
       window.addEventListener('DOMContentLoaded', (event) => {
       filterGames('{{$data["labels"][0]->id}}');
    });

    function filterGames(catId) {
        var gameItems = document.querySelectorAll('.game_item');
        gameItems.forEach(function(item) {
            if (catId === 'all' || item.dataset.catid === catId) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
</script>
   </body>
</html>

