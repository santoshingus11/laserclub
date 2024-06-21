@extends('layouts.web.app')
@section('style')
<style>
  /* Style Goes Here */

  /* Style Goes Here */
</style>
@endsection
@section('content')

<!-- Contant Goes Here -->
<?php if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) { ?>
  @include('layouts.web.mobile_header')
<?php } ?>
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
                        </div>
                      </h2>
                      <h2 class="high-mobile"> &nbsp;&nbsp; Football <div class="dropdown viewby-filter"><button type="button" id="ViewBy" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="mdi mdi-filter"></i> View by </button>
                          <div aria-bs-labelledby="ViewBy" class="dropdown-menu"><a href="javascript:void(0)">Competition</a><a href="javascript:void(0)" class="active">Time</a></div>
                        </div>
                      </h2>
                      <div>
                        <div class="row oneX2">
                          <div class="col-md-7"></div>
                          <div class="col-md-4 px-lg-0">
                            <div class="oddsEventlist">
                              <div class="btn-group"><span>1</span>
                              </div>
                              <div class="btn-group"><span>X</span>
                              </div>
                              <div class="btn-group"><span>2</span>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-1"></div>
                        </div>
                        <div>
                        
                        @if(isset($response))
                          @foreach($response as $r)
                          @php 
$dateTime = new DateTime($r['run_date_time'], new DateTimeZone('America/New_York'));
$dateTime->setTimezone(new DateTimeZone('Asia/Kolkata'));
$istTime = $dateTime->format('Y-m-d H:i:s');
@endphp
                          <div><app-guest-sport-list-element>
                              <div class="row align-items-center row-my">
                                <div class="col-md-6 col-10 px-1">
                                  @if($r['status']==1)  
                                  <p class="matchname"><a href="{{ route('Football-Details',$r['id']) }}" class="item-inplay"><img src="{{asset('/')}}assets/icon-in_play.png" class="img-fluid">  {{$r['game_title']}}
                                    </a><b><span class="in_play img-fluid">In-Play</span><span class="in_play img-fluid"><img src="{{asset('/')}}assets/tv.svg"></span><span class="game-fancy"><img src="{{asset('/')}}assets/icon-fancy.svg" class="img-fluid"></span><span class="game-bm"><img src="{{asset('/')}}assets/icon-bookmaker.svg" class="img-fluid"></span><span class="game-custom">T </span><span class="timer-on">{{$istTime}}</span></b>
                                  </p>
                                  @else
                                  <p class="matchname"><a><img src="{{asset('/')}}assets/icon-no_play.png" class="img-fluid">  {{$r['game_title']}} </a><b><span class="in_play img-fluid"><img src="{{asset('/')}}assets/tv.svg"></span><span class="game-bm"><img src="{{asset('/')}}assets/icon-bookmaker.svg" class="img-fluid"></span><span class="game-custom">T </span><span class="timer-on">{{$istTime}}</span></b>
                                  </p>
                                  @endif
                                </div>
                                <div class="col-md-1 text-lg-center tex-right col-matched"></div>
                                <div class="col-md-4 col px-0">
                                  @if($r['status']==1)  
                                  <a href="{{ route('Football-Details',$r['id']) }}"><div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.68 </button><button class="lay">1.69</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.44</button><button class="lay">2.48</button></div>
                                  </div></a>
                                  @else
                                  <div class="oddsEventlist">
                                    <div class="btn-group"><button class="back">1.68 </button><button class="lay">1.69</button></div>
                                    <div class="btn-group"><button class="back">-</button><button class="lay">-</button></div>
                                    <div class="btn-group"><button class="back">2.44</button><button class="lay">2.48</button></div>
                                  </div>
                                  @endif
                                </div>
                                <div class="col-md-1 col-2 text-end text-lg-center">
                                  <a href="javascript:void(0);" class="add-pins"><img src="{{asset('/')}}assets/pin-white.svg" class="img-fluid"></a>
                                </div>
                              </div>
                            </app-guest-sport-list-element></div>
                            @endforeach
                            @endif
                            
                          
                        </div>
                      </div>
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