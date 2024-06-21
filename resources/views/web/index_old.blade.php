@extends('web.layouts.master')
@section('title', 'Home')

@section('content')

@include('web.includes.herosection')
<style>
    #palynowbtn:hover{
        cursor:pointer;
        color:red;
    }
</style>

<!-- Product Section Begin -->
<section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Trending Now</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="{{url('/live/casino/games')}}" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @if(count($data['livecasino'])>0)
                            @foreach($data['livecasino'] as $game)
                            @if($loop->iteration < 7)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{$game->img}}">
                                        <!--<div class="ep">18 / 18</div>-->
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> {{$game->game_id}}</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Live Casino</li>
                                            <li>Game</li>
                                        </ul>
                                        <h5><a href="{{ url('/slot/game/lounch') }}/{{ $game->game_id }}" id="palynowbtn">Play Now</a></h5>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            @endif
                            
                        </div>
                    </div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Popular Games</h4>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="{{url('/casino')}}" class="primary-btn">View All <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        @if(count($data['casino'])>0)
                            @foreach($data['casino'] as $game)
                            @if($loop->iteration < 7)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{$game->img}}">
                                        <!--<div class="ep">18 / 18</div>-->
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> {{$game->game_id}}</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Casino</li>
                                            <li>Game</li>
                                        </ul>
                                        <h5><a href="{{ url('/slot/game/lounch') }}/{{ $game->game_id }}" id="palynowbtn">Play Now</a></h5>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endforeach
                            @endif
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Live Sports</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter="*">Day</li>
                                <li data-filter=".week">Week</li>
                                <li data-filter=".month">Month</li>
                                <li data-filter=".years">Years</li>
                            </ul>
                            <div class="filter__gallery">
                                <div class="product__sidebar__view__item set-bg mix day years"
                                data-setbg="{{asset('new/img/ipl.jpg')}}">
                                <!--<div class="ep">18 / ?</div>-->
                                <div class="view"><i class="fa fa-eye"></i> 5012</div>
                                <h5><a href="{{ url('/sports') }}">Cyber Sports</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix month week"
                            data-setbg="https://static.cdns-stat.com/resources/sitepicstbs/imperium_bet/game_img_2/ib.jpg">
                            <!--<div class="ep">18 / ?</div>-->
                            <div class="view"><i class="fa fa-eye"></i> 3002</div>
                            <h5><a href="{{ url('/sports') }}">Sport Bet</a></h5>
                        </div>
                        <div class="product__sidebar__view__item set-bg mix week years"
                        data-setbg="https://static.cdns-stat.com/resources/sitepicstbs/op_aviator/game_img_2/jetx3.jpg">
                        <!--<div class="ep">18 / ?</div>-->
                        <div class="view"><i class="fa fa-eye"></i> 8892</div>
                        <h5><a href="{{ url('/slot/game/lounch/8892') }}">JetX3</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg mix years month"
                    data-setbg="https://static.cdns-stat.com/resources/sitepicstbs/op_aviator/game_img_2/SpribeAviator.jpg">
                    <!--<div class="ep">18 / ?</div>-->
                    <div class="view"><i class="fa fa-eye"></i> 8890</div>
                    <h5><a href="{{ url('/slot/game/lounch/8890') }}">Aviator</a></h5>
                </div>
                
        </div>
    </div>
    <div class="product__sidebar__comment">
        <div class="section-title">
            <h5>Live Casino</h5>
        </div>
         @if(count($data['livecasino'])>0)
         @foreach($data['livecasino'] as $game)
        @if($loop->iteration > 7 && $loop->iteration < 15)
        <div class="product__sidebar__comment__item">
            <div class="product__sidebar__comment__item__pic">
                <img src="{{$game->img}}" width="100px" height="100px" alt="">
            </div>
            <div class="product__sidebar__comment__item__text">
                <ul>
                    <li>Live Casino</li>
                    <li>Game</li>
                </ul>
                <h5><a href="#">{{$game->name}}</a></h5>
                <span><i class="fa fa-eye"></i> {{$game->game_id}} Viewes</span>
            </div>
        </div>
       @endif
       @endforeach
       @endif
       
       
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- Product Section End -->





 





 


@stop



