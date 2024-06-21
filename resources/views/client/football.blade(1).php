@extends('layouts.web.app')
@section('style')
<style>
  /* Style Goes Here */

  /* Style Goes Here */
</style>
@endsection
@section('content')

<!-- Contant Goes Here -->

<div class="content-page">
  <div class="content">
    <div class="container-fluid"><router-outlet></router-outlet><app-sport-list>
        <div class="row">
          <div class="col-xl-8 px-lg-1">
            <div class="card">
              <div class="card-body p-0"><app-upcoming _nghost-iju-c50="">
                  <div class="marquee-box">
                    <h4><i class="mdi mdi-microphone-outline"></i>
                      News </h4>
                    <marquee scrollamount="5"></marquee>
                  </div>
                </app-upcoming>
                <div id="My-Slider" data-bs-ride="carousel" class="carousel slide">
                  <ol class="carousel-indicators">
                    <li data-bs-target="#My-Slider" data-bs-slide-to="0" class=""></li>
                    <li data-bs-target="#My-Slider" data-bs-slide-to="1" class=""></li>
                    <li data-bs-target="#My-Slider" data-bs-slide-to="2" class="active" aria-current="true"></li>
                  </ol>
                  <div role="listbox" class="carousel-inner">
                    <div class="carousel-item"><img src="{{asset('/')}}assets/bnr1.webp" class="img-fluid d-none d-sm-block"><img src="{{asset('/')}}assets/m_bnr1.webp" class="img-fluid d-block d-sm-none"></div>
                    <div class="carousel-item"><img src="{{asset('/')}}assets/bnr2.webp" class="img-fluid d-none d-sm-block"><img src="{{asset('/')}}assets/m_bnr2.webp" class="img-fluid d-block d-sm-none"></div>
                    <div class="carousel-item active"><img src="{{asset('/')}}assets/bnr3.webp" class="img-fluid d-none d-sm-block"><img src="{{asset('/')}}assets/m_bnr3.webp" class="img-fluid d-block d-sm-none"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <div class="eventlistdesign">
                      <h2 class="high-desktop"> &nbsp;&nbsp; Football <div class="dropdown viewby-filter"><button type="button" id="ViewBy" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="mdi mdi-filter"></i> View by </button>
                          <div aria-bs-labelledby="ViewBy" class="dropdown-menu"><a href="javascript:void(0)">Competition</a><a href="javascript:void(0)" class="active">Time</a></div>
                        </div><!----></h2>
                      <h2 class="high-mobile"> &nbsp;&nbsp; Football <div class="dropdown viewby-filter"><button type="button" id="ViewBy" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="mdi mdi-filter"></i> View by </button>
                          <div aria-bs-labelledby="ViewBy" class="dropdown-menu"><a href="javascript:void(0)">Competition</a><a href="javascript:void(0)" class="active">Time</a></div>
                        </div><!----></h2>
                      <div>
                        <div class="row oneX2">
                          <div class="col-md-7"></div>
                          <div class="col-md-4 px-lg-0">
                            <div class="oddsEventlist">
                              <div class="btn-group"><span>1</span></div>
                              <div class="btn-group"><span>X</span></div>
                              <div class="btn-group"><span>2</span></div>
                            </div>
                          </div>
                          <div class="col-md-1"></div>
                        </div>
                        <div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay" href="{{route('Football-Details')}}"><img src="{{asset('/')}}assets/img/icon-in_play.png" class="img-fluid"><!----><!----> UEFA Europa League </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><span class="game-bm"><img src="{{asset('/')}}assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">07/03/2024 21:40</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="{{asset('/')}}assets/img/icon-in_play.png" class="img-fluid"><!----><!----> UEFA Champions League </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><span class="game-bm"><img src="{{asset('/')}}assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">07/03/2024 21:46</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="{{asset('/')}}assets/img/icon-in_play.png" class="img-fluid"><!----><!----> UD Almeria Srl vs FC Barcelona SRL </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">13:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="{{asset('/')}}assets/img/icon-in_play.png" class="img-fluid"><!----><!----> UD Las Palmas Srl vs Real Betis Balompie SRL </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">13:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="{{asset('/')}}assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Real Sociedad SRL vs Valencia CF SRL </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">13:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="{{asset('/')}}assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Bosnia &amp; Herzegovina vs Slovenia </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">14:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Shandong Taishan v Sichuan Jiuniu FC </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">16:35</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.34 </button><button class="lay">1.35</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">11</button><button class="lay">11.5</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> KCB v Gor Mahia FC </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">17:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">4.1 </button><button class="lay">4.4</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.26</button><button class="lay">2.34</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> FC Tyumen vs FC Ska-Khabarovsk </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">17:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Olympiacos Piraeus B vs Giouchtas </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">17:50</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Green Buffaloes vs Nkana FC </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Bodrum B. Bodrumspor v Boluspor </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">19:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.79 </button><button class="lay">1.82</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">5.7</button><button class="lay">6</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> FC Urartu v Alashkert </a><b><!----><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">19:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.68 </button><button class="lay">2.84</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.96</button><button class="lay">3.15</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> FK Radnicki 1923 v Vojvodina </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">19:55</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.62 </button><button class="lay">2.7</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.72</button><button class="lay">2.78</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> BFC Daugavpils v FS Metta/Lu </a><b><!----><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">20:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.68 </button><button class="lay">1.75</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">5.7</button><button class="lay">6.2</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Bohemians 1905 v MFK Karvina </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">20:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.02 </button><button class="lay">2.08</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">3.95</button><button class="lay">4.1</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Zlin v Ceske Budejovice </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">20:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.26 </button><button class="lay">2.3</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">3.4</button><button class="lay">3.55</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> FK Tukums 2000 v SC Grobina </a><b><!----><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">20:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.34 </button><button class="lay">2.4</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.98</button><button class="lay">3.15</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> FK Jablonec v Pardubice </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">20:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.91 </button><button class="lay">1.93</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">4.9</button><button class="lay">5</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Al Taee v Al-Fateh (KSA) </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">20:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.58 </button><button class="lay">2.64</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.66</button><button class="lay">2.7</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Bodo Glimt v Tromso </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">21:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.34 </button><button class="lay">1.36</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">9.8</button><button class="lay">11</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Haugesund v Kristiansund </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">21:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.99 </button><button class="lay">2.04</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">4.1</button><button class="lay">4.3</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Sarpsborg v Ham-Kam </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">21:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.99 </button><button class="lay">2.02</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">3.85</button><button class="lay">4</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Hvidovre v OB </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">21:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">3.55 </button><button class="lay">3.65</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.04</button><button class="lay">2.08</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Brann v Sandefjord </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">21:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.33 </button><button class="lay">1.35</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">9.6</button><button class="lay">10.5</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Fredrikstad v Stromsgodset </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">21:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.32 </button><button class="lay">2.36</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">3.55</button><button class="lay">3.65</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Rosenborg v Kfum Oslo </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">21:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.78 </button><button class="lay">1.81</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">4.9</button><button class="lay">5.2</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> National Bank v Al-Masry </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">21:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.7 </button><button class="lay">2.72</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.96</button><button class="lay">3.05</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> AGF v Silkeborg </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">21:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.34 </button><button class="lay">2.38</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">3.5</button><button class="lay">3.55</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Odds BK v Molde </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">21:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">5.3 </button><button class="lay">5.6</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.65</button><button class="lay">1.69</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Viking v Lillestrom </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">21:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.81 </button><button class="lay">1.82</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">4.3</button><button class="lay">4.5</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> ENPPI v Future FC </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">21:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">3.25 </button><button class="lay">3.35</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.7</button><button class="lay">2.78</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> FC Noah v Ararat Armenia </a><b><!----><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">21:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.94 </button><button class="lay">3.1</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.66</button><button class="lay">2.74</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Al-Qadsia v Al Arabi Kuwait </a><b><!----><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">21:10</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">3.35 </button><button class="lay">3.8</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.18</button><button class="lay">2.3</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> FK Napredak v Crvena Zvezda </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">22:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">12 </button><button class="lay">15.5</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.25</button><button class="lay">1.28</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Corum Belediyespor v Kocaelispor </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">22:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.06 </button><button class="lay">2.12</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">3.8</button><button class="lay">4</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Malmo FF v GAIS </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">22:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.36 </button><button class="lay">1.38</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">9.6</button><button class="lay">10</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Brommapojkarna v Djurgardens </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">22:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">3.45 </button><button class="lay">3.55</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.2</button><button class="lay">2.22</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Sirius v IFK Goteborg </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">22:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.34 </button><button class="lay">2.38</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">3.2</button><button class="lay">3.3</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Kalmar FF v Norrkoping </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">22:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.36 </button><button class="lay">2.4</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">3.2</button><button class="lay">3.3</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Las Palmas v Betis </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="{{asset('/')}}assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">22:30</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">4 </button><button class="lay">4.1</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.1</button><button class="lay">2.12</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> FC Copenhagen v Midtjylland </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">23:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.83 </button><button class="lay">1.87</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">4.5</button><button class="lay">4.6</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Fulham U21 v Tottenham U21 </a><b><!----><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">23:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.66 </button><button class="lay">2.82</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.52</button><button class="lay">2.7</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Al-Wahda (KSA) v Al-Raed (KSA) </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">23:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.82 </button><button class="lay">2.9</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.58</button><button class="lay">2.62</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Al-Khaleej Saihat v Al-Ittihad </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">23:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">3.15 </button><button class="lay">3.25</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.28</button><button class="lay">2.3</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Al Salmiyah v Kuwait SC </a><b><!----><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">23:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">10.5 </button><button class="lay">18</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.27</button><button class="lay">1.31</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> SSD Bari v Ternana </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">23:30</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.86 </button><button class="lay">1.88</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">5.7</button><button class="lay">5.8</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Young Boys v St Gallen </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">23:30</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.06 </button><button class="lay">2.1</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">3.3</button><button class="lay">3.4</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Lugano v Winterthur </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">23:30</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.67 </button><button class="lay">1.7</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">5.2</button><button class="lay">5.4</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Leeds v Norwich </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="{{asset('/')}}assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">Tomorrow 00:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.64 </button><button class="lay">1.65</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">6</button><button class="lay">6.4</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Almeria v Barcelona </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="{{asset('/')}}assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">Tomorrow 00:30</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">8.6 </button><button class="lay">8.8</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.39</button><button class="lay">1.4</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Jaguares de Cordoba v Tigres FC Zipaquira </a><b><!----><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">Tomorrow 01:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.3 </button><button class="lay">1.33</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">12</button><button class="lay">16</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Real Sociedad v Valencia </a><b><!----><span class="in_play img-fluid"><img src="{{asset('/')}}assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="{{asset('/')}}assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">Tomorrow 01:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.63 </button><button class="lay">1.64</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">7</button><button class="lay">7.2</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Deportivo Riestra v Newells </a><b><!----><!----><!----><!----><!----><!----><!----><span class="game-custom">G </span><!----><span class="timer-on">Tomorrow 01:10</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">8.6 </button><button class="lay">10.5</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.58</button><button class="lay">1.63</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Fiorentina v Napoli </a><b><!----><!----><!----><span class="game-bm"><img src="{{asset('/')}}assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">Tomorrow 23:45</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.5 </button><button class="lay">2.52</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">3.05</button><button class="lay">3.1</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Southampton v West Brom </a><b><!----><!----><!----><span class="game-bm"><img src="{{asset('/')}}assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">18/05/2024 00:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.89 </button><button class="lay">1.9</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">4.9</button><button class="lay">5</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Lecce v Atalanta </a><b><!----><!----><!----><span class="game-bm"><img src="{{asset('/')}}assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">18/05/2024 21:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">4.9 </button><button class="lay">5.1</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.82</button><button class="lay">1.83</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Torino v AC Milan </a><b><!----><!----><!----><span class="game-bm"><img src="{{asset('/')}}assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">18/05/2024 23:45</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.9 </button><button class="lay">2.98</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.74</button><button class="lay">2.8</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Alaves v Getafe </a><b><!----><!----><!----><span class="game-bm"><img src="{{asset('/')}}assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">19/05/2024 00:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.12 </button><button class="lay">2.16</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">4.4</button><button class="lay">4.6</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Atalanta v Leverkusen </a><b><!----><!----><!----><!----><!----><!----><!----><!----><span class="timer-on">23/05/2024 00:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">4.4 </button><button class="lay">4.5</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.9</button><button class="lay">1.91</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="{{asset('/')}}assets/img/icon-no_play.png" class="img-fluid"><!----> Dortmund v Real Madrid </a><b><!----><!----><!----><!----><!----><!----><!----><!----><span class="timer-on">02/06/2024 00:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">5.7 </button><button class="lay">5.8</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.65</button><button class="lay">1.67</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div><!----><!---->
                        </div><!----><!----><!---->
                      </div><!----><!----><!----><!----><!---->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4">
            <div class="openBets">
              <div id="collapseSetting" class="collapse"><app-stakes>
                  <div style="position: relative;">
                    <div class="stakeDiv">
                      <h3>stake </h3>
                      <dl id="" class="setting-block stake-setting">
                        <dd><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                        <dd><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                        <dd><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                        <dd><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                        <dd><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                        <dd><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                        <dd><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                        <dd><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                        <dd class="col-stake_edit"><a href="javascript:;" id="save" class="btn-send ui-link">Save</a></dd>
                      </dl>
                    </div>
                  </div>
                </app-stakes></div>
              <h2>open bets</h2>
            </div>
          </div>
        </div>
      </app-sport-list>
    </div>
  </div>
</div>




@endsection
@section('script')
<script>
  /* Script Goes Here */

  /* Script Goes Here */
</script>
@endsection