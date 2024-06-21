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
              <div class="card-body p-0"><app-upcoming>
                  <div class="marquee-box">
                    <h4><i class="mdi mdi-microphone-outline"></i>
                      News </h4>
                    <marquee scrollamount="5"></marquee>
                  </div>
                </app-upcoming>
                <div class="row">
                  <div class="col-12">
                    <div class="eventlistdesign">
                      <h2 class="high-desktop"> &nbsp;&nbsp; Tennis <div class="dropdown viewby-filter"><button type="button" id="ViewBy" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="mdi mdi-filter"></i> View by </button>
                          <div aria-bs-labelledby="ViewBy" class="dropdown-menu"><a href="javascript:void(0)">Competition</a><a href="javascript:void(0)" class="active">Time</a></div>
                        </div><!----></h2>
                      <h2 class="high-mobile"> &nbsp;&nbsp; Tennis <div class="dropdown viewby-filter"><button type="button" id="ViewBy" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="mdi mdi-filter"></i> View by </button>
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
                                  <p class="matchname"><a class="item-inplay" href="{{route('tenis-details')}}"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> ATP Rome </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">08/05/2024 13:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> WTA Rome 2024 </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">14/05/2024 05:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Juncheng Shang v Roberto Carballes Baena </a><b><span class="in_play img-fluid">In-Play</span><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">13:55</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.44 </button><button class="lay">2.68</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.6</button><button class="lay">1.69</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Matteo Martineau v Thanasi Kokkinakis </a><b><span class="in_play img-fluid">In-Play</span><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">13:55</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">3.35 </button><button class="lay">3.5</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.4</button><button class="lay">1.42</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Maleckova v Karolina Schmiedlova </a><b><span class="in_play img-fluid">In-Play</span><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">13:55</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">12 </button><button class="lay">18</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.07</button><button class="lay">1.09</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> V Tomova v Boulter </a><b><span class="in_play img-fluid">In-Play</span><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">13:55</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">50 </button><button class="lay">110</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.01</button><button class="lay">1.02</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Elias Ymer v Jan Choinski </a><b><span class="in_play img-fluid">In-Play</span><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">13:58</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.96 </button><button class="lay">1.99</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2</button><button class="lay">2.04</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Mattia Bellucci v Francesco Maestrelli </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">14:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.12 </button><button class="lay">2.14</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.88</button><button class="lay">1.89</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Marc-Andrea Huesler v Corentin Moutet </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">14:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.52 </button><button class="lay">2.58</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.64</button><button class="lay">1.66</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Thiago Agustin Tirante v Felipe Meligeni Alves </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">14:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.26 </button><button class="lay">2.3</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.77</button><button class="lay">1.79</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Camilo Ugo Carabelli v Luciano Darderi </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">14:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">3.15 </button><button class="lay">3.35</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.43</button><button class="lay">1.47</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Arthur Fils v Botic Van de Zandschulp </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">14:20</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.69 </button><button class="lay">1.71</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.4</button><button class="lay">2.46</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Usue Maitane Arconada v Kira Matushkina </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">14:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">3.4 </button><button class="lay">3.65</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.39</button><button class="lay">1.41</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Julia Adams v Jaeda Daniel </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">14:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">50 </button><button class="lay">85</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.01</button><button class="lay">1.02</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Mateas, Maria vs Okalova, Martina </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">14:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Daavettila, Sara vs Chang, Sophie </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">14:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Bowers, Ashton vs Loeb, Jamie </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">14:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Kriznik, Matic vs Engel, Justin </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">15:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Daniel Evans v Harold Mayot </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">15:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.6 </button><button class="lay">2.62</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.62</button><button class="lay">1.63</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Murkel Dellien v Oriol Roca Batalla </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">15:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.02 </button><button class="lay">3.4</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.45</button><button class="lay">1.86</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Joris de Loore v Roman Andres Burruchaga </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">15:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.6 </button><button class="lay">2.68</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.6</button><button class="lay">1.63</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Luca Nardi v Jeffrey John Wolf </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">15:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.33 </button><button class="lay">1.35</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">3.85</button><button class="lay">4.1</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Brandon Nakashima v Yoshihito Nishioka </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">15:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.56 </button><button class="lay">1.6</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.68</button><button class="lay">2.8</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> David Goffin v Juan Pablo Varillas </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">15:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.66 </button><button class="lay">1.69</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.46</button><button class="lay">2.5</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Fabio Fognini v Giulio Zeppieri </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">15:20</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.22 </button><button class="lay">2.24</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.81</button><button class="lay">1.82</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Ganta S K R / Javia D vs Dev S D P / Kalyanpur A </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">15:30</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Di Shnaider v Els Jacquemot </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">15:30</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.23 </button><button class="lay">1.25</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">5.1</button><button class="lay">5.2</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Liu, Le Yi vs Khayrutdinova, Ekaterina </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">16:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Hubert Hurkacz v Tommy Paul </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><span class="game-custom">S </span><!----><span class="timer-on">16:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.7 </button><button class="lay">1.71</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.42</button><button class="lay">2.44</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> J Niemeier v Zeyn Sonmez </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">16:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.63 </button><button class="lay">1.68</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.48</button><button class="lay">2.6</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Thiago Seyboth Wild v Emil Ruusuvuori </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">16:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.57 </button><button class="lay">1.59</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.68</button><button class="lay">2.74</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Francesco Passaro v Daniel Elahi Galan </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">16:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.65 </button><button class="lay">1.67</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.48</button><button class="lay">2.54</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Roberto Bautista Agut v Taro Daniel </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">16:20</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.36 </button><button class="lay">1.39</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">3.6</button><button class="lay">3.75</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Clement Tabur v Damir Dzumhur </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">16:20</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.96 </button><button class="lay">3.05</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.49</button><button class="lay">1.51</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Dennis Novak v Jaime Faria </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">16:20</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.06 </button><button class="lay">2.1</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.92</button><button class="lay">1.94</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Beibit Zhukayev v Denis Yevseyev </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">16:20</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.99 </button><button class="lay">2.04</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.98</button><button class="lay">2.02</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> MA Y / Shinde V vs Gamiz A / Vedder E </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">16:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Kellovsky, Dominik vs Delage, Pierre </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">16:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Samson, Laura vs Sebestova, Ivana </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">16:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Lopez Morillo, Imanol vs Lopez Montagud, Carlos </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">16:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Jodar, Rafael vs Collignon, Raphael </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">16:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Vargova, Nina vs Smejkal, Lara </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">16:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Chirita, Ioan Alexandru vs Perez Contri, Sergi </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">16:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Geerlings Martinez, Ariana vs Maric, Dunja </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">16:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Khomutsianskaya, Daria vs Fullana, Luiza </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">16:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Karlovskiy, Evgeny vs Barroso Campos, Alberto </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">16:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Viviani, Maria Vittoria vs Cinalli, Luna Maria </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">16:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Federico Coria v Lorenzo Sonego </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">16:45</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.74 </button><button class="lay">2.76</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.57</button><button class="lay">1.58</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Stan Wawrinka v Pedro Martinez </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">17:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.26 </button><button class="lay">2.34</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.75</button><button class="lay">1.79</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Valentin Royer v Genaro Alberto Olivieri </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">17:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.68 </button><button class="lay">1.7</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.42</button><button class="lay">2.48</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Mladenovic v E Ruse </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">17:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">4.3 </button><button class="lay">4.4</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.29</button><button class="lay">1.3</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Matsuoka, Hayato vs Popovic, Stefan </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">17:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Little, Daniel vs Bouquier, Arthur </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">17:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Jones, Miles vs Fishback, Ryan </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">17:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Banthia S / Sinha N K vs Madan T / Neema A </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">17:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Celikbilek A / Ilkel C vs Broom C / Stewart H </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">17:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Pe Stearns v Zarazua </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">17:30</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.67 </button><button class="lay">1.68</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.46</button><button class="lay">2.5</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Rinaldo Persson, Kajsa vs Osuigwe, Victoria </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Er Andreeva v D Parry </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">18:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.36 </button><button class="lay">2.46</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.69</button><button class="lay">1.73</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> I Swiatek v C Gauff </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><span class="game-custom">S </span><!----><span class="timer-on">18:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.18 </button><button class="lay">1.19</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">6.4</button><button class="lay">6.6</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> R16P1 vs R16P2 </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Alexander Shevchenko v Giovanni Mpetshi Perricard </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">18:20</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.68 </button><button class="lay">1.71</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.42</button><button class="lay">2.48</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Cirpanli, Defne vs Urgesi, Federica </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Yushchenko, Valeriya vs Baidaulet, Dana </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Wiskandt, Max vs Massard, Loann </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Neilson Gatenby, Talia vs McDonald, Ella </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Summers, Matthew vs Rivet, Maxence </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Jadoun, Nicolas vs Rossi, Leonardo </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Radisic, Nika vs Strakhova, Valeriya </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Jakupovic, Dalila vs Shibahara, Ena </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Smith, Tina Nadine vs Pieri, Tatiana </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Falabella, Lautaro Agustin vs Ionel, Nicholas David </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Markovic, Sasa vs. Matsuda, Koki </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Sperle, John vs Mrva, Maxim </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Mott, Blake vs Oliel, Yshai </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Crossley, Mayu vs Hrdinkova, Denise </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Abe H / Nagata A vs Nakashima M / Ozeki A </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a class="item-inplay"><img src="assets/img/icon-in_play.png" class="img-fluid"><!----><!----> Cherie Ligniere E / Kebede Y vs Lock B / Lock C J </a><b><span class="in_play img-fluid">In-Play</span><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">18:25</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Emm Navarro v Mccar Kessler </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">18:30</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.12 </button><button class="lay">1.13</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">8.6</button><button class="lay">9.4</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Valentin Vacherot v Timofey Skatov </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">19:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.82 </button><button class="lay">1.87</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.14</button><button class="lay">2.22</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Rakhimova v M Sherif </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">19:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">4.1 </button><button class="lay">4.2</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.31</button><button class="lay">1.33</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Angella Okutoyi v Csilla Fodor </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">19:30</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.13 </button><button class="lay">1.49</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">3</button><button class="lay">8.8</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Anita Sahdiieva v Karma Yacavino </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">19:30</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.06 </button><button class="lay">1.45</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">3.2</button><button class="lay">18</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Gadecki v A. Cornet </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">19:30</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.62 </button><button class="lay">2.68</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.59</button><button class="lay">1.62</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Jane Dunyon v Melany Solange Krywoj </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">19:30</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.54 </button><button class="lay">110</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.02</button><button class="lay">2.86</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Taylor Goetz v Ema Burgic </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">19:30</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">3.15 </button><button class="lay">3.9</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.38</button><button class="lay">1.46</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Smith, Alana vs Carnicella, Kaitlyn </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">19:30</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Chin, John vs Borg, Leo </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">20:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Stefanos Tsitsipas v Nicolas Jarry </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><span class="game-custom">S </span><!----><span class="timer-on">22:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.28 </button><button class="lay">1.29</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">4.5</button><button class="lay">4.6</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Asaba A / Fishback R vs Munoz E / Pinto L </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">23:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Gregoire Barrere v Andy Murray </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><!----><span class="timer-on">23:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.69 </button><button class="lay">1.7</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.42</button><button class="lay">2.46</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> D Collins v A Sabalenka </a><b><!----><span class="in_play img-fluid"><img src="assets/img/tv.svg"></span><!----><!----><span class="game-bm"><img src="assets/img/icon-bookmaker.svg" class="img-fluid"></span><!----><!----><!----><!----><span class="game-custom">S </span><!----><span class="timer-on">23:30</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">2.5 </button><button class="lay">2.52</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">1.65</button><button class="lay">1.67</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Borg L / Shah A vs Ogura K / Vithoontien L </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">Tomorrow 00:30</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
                              </div>
                            </app-guest-sport-list-element></div>
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  <p class="matchname"><a><!----><img src="assets/img/icon-no_play.png" class="img-fluid"><!----> Walton, Adam vs Duckworth, James </a><b><!----><!----><!----><!----><span class="game-bm bg-success"> P </span><!----><!----><!----><!----><span class="timer-on">Tomorrow 07:00</span></b><!----></p>
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">- </button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                  </div>
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----></div>
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