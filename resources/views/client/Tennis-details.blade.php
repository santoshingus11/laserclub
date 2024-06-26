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
    <div class="container-fluid"><router-outlet></router-outlet>
      <app-sport-list>
        <div class="row">
          <div class="col-xl-8 px-lg-1">
              <?php if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) { ?>
                <?php if (!empty($game_single['channel_id'])) { ?>
                                <div class="betting-table lay-bt" style="position: relative;">
                                    <p class="mrkname" id="liveMatchLink"> Live Match </p>
                                </div>
                                <div id="liveTvMatch"><iframe src="{{$game_single['channel_id'] ?? ''}}" height="200" width="300" title="Iframe Example"></iframe></div>
                            <?php } ?>
                <app-bet-slip class="show_bet mb-4">
                <form action="{{route('cricket-bet-place')}}" method="POST">
                  @csrf
                  <div class="betting-table lay-bt" style="position: relative;">
                    <h5> place bet </h5>
                    <div class="back">
                      <div class="row align-items-center">
                        <div class="col col-md-4"> (Bet for) </div>
                        <div class="col"> Odds </div>
                        <div class="col"> Stake </div>
                        <div class="col"> Profit </div>
                      </div><!---->
                      <div class="row border-bottom align-items-center">
                        <div class="col col-md-4 text-left bat_team_place"><a><i _ngcontent-uhn-c87="" class="fa fa-close text-danger"></i></a> Sunrisers
                          Hyderabad </div>
                        <div class="col"><input type="text" name="bet_odds" id="bet_input" readonly="true" min="1.01" max="999.99" class="form-control ng-untouched ng-pristine ng-valid p-0"></div><!----><!---->
                        <div class="col"><input type="number" name="bet_stake" id="add_input" placeholder="Amount" class="form-control ng-untouched ng-pristine ng-valid p-0"></div>
                        <div class="col profit_div"> 0 </div>
                        <input type="hidden" name="back_lay" id="back_lay">
                        <input type="hidden" name="match_id" id="match_id">
                        <input type="hidden" name="bet_profit" id="bet_profit">
                        <input type="hidden" name="bet_team_name" id="bet_team_name">

                      </div><!----><!----><!---->
                      <div class="stakesBtns" style="width: 100%;">
                        <div class="btn-group">
                          <div class="m_stakesBtns"><a class="btn add_bet">100</a><a class="btn add_bet">5000</a><a class="btn add_bet">500</a><a class="btn add_bet">25000</a><a class="btn add_bet">50000</a><a class="btn add_bet">100000</a><a class="btn add_bet">500000</a><a class="btn add_bet">1000000</a></div>
                          <!-- <button type="button" class="btn add_bet">100</button>
                                  <button type="button" class="add_bet">500</button><button type="button" class="add_bet">1000</button><button type="button" class="add_bet">5000</button><button type="button" class="add_bet">10000</button><button type="button" class="add_bet">25000</button> -->
                        </div>
                      </div><!---->
                      <div class="row align-items-center">
                        <div class="col"><button class="btn btn-cancel" id="reset_btn">reset</button></div>
                        <div class="col"><button class="btn btn-betplace" disabled="">submit</button></div><!---->
                      </div><!---->
                    </div><!----><!---->
                  </div>
                </form>
              </app-bet-slip>
            <?php } ?>
          
              <div>
                <div>
                  <div class="dScreen book_makers">
                    <div class="row mx-0 head_bg">
                      <div class="col-md-12 col-8 px-0">
                        <p class="match-odds">BOOKMAKER ({{$game_single['game_title']}}) <a href="javascript:void(0)"><i class="mdi mdi-information-outline"></i></a></p>
                      </div>
                      <div class="col-md-6 col-4 text-end px-0"><span class="matched-count">Matched <strong></strong></span></div>
                    </div>
                    <div class="row mx-0 odds_header">
                      <div class="col-md-5 col-7 px-0">
                        <div class="minmax mm-fi">
                          <dl class="fancy-info">
                            <dt>Min/Max</dt>
                            <dd>100-50k</dd>
                          </dl>
                        </div>
                      </div>
                      <div class="col-md-7 col-5 px-0">
                        <div class="btn-group dOddsBox"><button class="back2"></button><button class="back1"></button><button class="back">back</button><button class="lay">lay</button><button class="min-max-bet">
                            <dl class="fancy-info">
                              <dt>Min/Max</dt>
                              <dd>100-50k </dd>
                            </dl>
                          </button></div>
                      </div>
                    </div>

                    @foreach($response['match_odds'] as $r)
                    <div class="row mx-0 odds_body">
                      <div class="col-md-5 col-7 px-0">
                        <p class="team-name team_name">{{$r['team_name']}}</p>
                      </div>
                      <div class="col-md-7 col-5 px-0">
                        <div class="btn-group dOddsBox"><button class="back back2">- <span>-</span></button><button class="back back1">- <span>-</span></button><button class="back bet_text" data-back-lay="back" data-match-id="{{$r['id']}}" data-team-name="{{$r['team_name']}}"> @if($r['back_status']==1) {{$r['back_value']}} @else - @endif </button><button class="lay bet_text" data-back-lay="lay" data-match-id="{{$r['id']}}" data-team-name="{{$r['team_name']}}"> @if($r['lay_status']==1) {{$r['lay_value']}} @else - @endif</button><button class="lay lay1">- <span>-</span></button><button class="lay lay2">- <span>-</span></button></div>
                      </div>
                    </div>
                    @endforeach
                    
                  </div>
                </div><!----><!---->
              </div><!---->
           
          </div>

 <?php if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) { ?>

          <div class="col-xl-4">
            <div class="openBets">
            <?php if (!empty($game_single['channel_id'])) { ?>
                                <div class="betting-table lay-bt" style="position: relative;">
                                    <p class="mrkname" id="liveMatchLink"> Live Match </p>
                                </div>
                                <div id="liveTvMatch"><iframe src="{{$game_single['channel_id'] ?? ''}}" height="200" width="300" title="Iframe Example"></iframe></div>
                            <?php } ?>
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
                </app-stakes>
              </div>
              <!-- <h2>open bets</h2> -->
              
              @if(Session::has('message'))
                  <p class="alert alert-success"><strong>{{Session::get('message')}}</strong></p>
              @endif
              @if(Session::has('error'))
                  <p class="alert alert-danger"><strong>{{Session::get('error')}}</strong></p>
              @endif
                    
              <app-bet-slip _nghost-uhn-c87="" class="show_bet">
                <form action="{{route('tennis-bet-place')}}" method="POST">
                  @csrf
                  <div class="betting-table lay-bt" style="position: relative;">
                    <h2 _ngcontent-uhn-c87="" class="mrkname"> place bet </h2>
                    <div class="back">
                      <div class="row align-items-center">
                        <div class="col col-md-4"> (Bet for) </div>
                        <div class="col"> Odds </div>
                        <div class="col"> Stake </div>
                        <div class="col"> Profit </div>
                      </div><!---->
                      <div class="row border-bottom align-items-center">
                        <div class="col col-md-4 text-left bat_team_place"><a><i _ngcontent-uhn-c87="" class="fa fa-close text-danger"></i></a> Sunrisers
                          Hyderabad </div>
                        <div class="col"><input type="text" name="bet_odds" id="bet_input" readonly="true" min="1.01" max="999.99" class="form-control ng-untouched ng-pristine ng-valid p-0"></div><!----><!---->
                        <div class="col"><input type="number" name="bet_stake" id="add_input" placeholder="Amount" class="form-control ng-untouched ng-pristine ng-valid p-0"></div>
                        <div class="col profit_div"> 0 </div>
                        <input type="hidden" name="back_lay" id="back_lay">
                        <input type="hidden" name="match_id" id="match_id">
                        <input type="hidden" name="bet_profit" id="bet_profit">
                        <input type="hidden" name="bet_team_name" id="bet_team_name">

                      </div><!----><!----><!---->
                      <div class="stakesBtns" style="width: 100%;">
                        <div class="btn-group">
                          <div class="m_stakesBtns"><a class="btn add_bet">100</a><a class="btn add_bet">5000</a><a class="btn add_bet">500</a><a class="btn add_bet">25000</a><a class="btn add_bet">50000</a><a class="btn add_bet">100000</a><a class="btn add_bet">500000</a><a class="btn add_bet">1000000</a></div>
                          <!-- <button type="button" class="btn add_bet">100</button>
                                  <button type="button" class="add_bet">500</button><button type="button" class="add_bet">1000</button><button type="button" class="add_bet">5000</button><button type="button" class="add_bet">10000</button><button type="button" class="add_bet">25000</button> -->
                        </div>
                      </div><!---->
                      <div class="row align-items-center">
                        <div class="col"><button type="button" class="btn btn-cancel" id="reset_btn">reset</button></div>
                        <div class="col"><button class="btn btn-betplace" disabled="">submit</button></div><!---->
                      </div><!---->
                    </div><!----><!---->
                  </div>
                </form>
              </app-bet-slip>
            </div>
          </div>
           <?php } ?>
          
        </div>
      </app-sport-list>
    </div>
  </div>
</div>




@endsection
@section('script')
<script>
  /* Script Goes Here */
  @if(empty(Session::get('myBets')))
  $(".show_bet").hide();
  @endif
  $(".bet_text").click(function() {
    $(".show_bet").show();

    // $elem = $(this).parent("div");
    $elem = $(this).parents('.odds_body').first();

    // $elem.parents('.event-names').length // id = $div.attr("id");

    text = $elem.find(".team_name").text();

    $('#back_lay').val($(this).data("back-lay"));
    $('#match_id').val($(this).data("match-id"));
    $('#bet_team_name').val($(this).data("team-name"));


    console.log($(this).text());

    // alert( text  );
    $('.bat_team_place').text(text);
    $("#bet_input").val($(this).text());
  });
</script>


<script>
  $(".add_bet").click(function() {
    // alert($("#bet_input").val());
    // alert($(this).text());
    var amnt = $(this).text();
    var odds = $("#bet_input").val();
    var profit = amnt * odds;

    $(".profit_div").text(profit);
    $("#add_input").val($(this).text());
    $("#bet_profit").val(profit);
    $('.btn-betplace').prop("disabled", false);
  });
  /* Script Goes Here */
</script>

<script>
      $("#reset_btn").click(function() {
      $("#add_input").val("");
      $("#bet_input").val("");
      $(".profit_div").text("");
    });
    
    
    setTimeout(function() {
      if ($(".alert").is(":visible")) {
        //you may add animate.css class for fancy fadeout
        $(".alert").fadeOut("slow");
      }
    }, 2000)
  </script>
@endsection


<!-- <div class="col-md-12 px-0">
  <app-guest-bet-slip>
    <div class="bettingTable back">
      <div class="row justify-content-end py-1">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-2 px-0 mbetting-table-none"><button class="btn btn-cancel">cacnel</button></div>
            <div class="col-md-7 px-0">
              <div class="row">
                <div class="col-md-7 col-6 px-1">
                  <div class="input-group">
                    <div class="input-group-prepend disabled"><span class="input-group-text"><i class="mdi mdi-minus"></i></span></div><input type="number" disabled="" min="1.01" max="999.99" class="form-control ng-untouched ng-pristine">
                    <div class="input-group-append disabled"><span class="input-group-text"><i class="mdi mdi-plus"></i></span></div>
                  </div>
                </div>
                <div class="col-md-5 col-6 px-1"><input type="number" min="0" placeholder="Min: 000" class="form-control mbetting-table-none ng-untouched ng-pristine ng-valid">
                  <div class="input-group dbetting-table-none">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="mdi mdi-minus"></i></span></div><input type="number" min="0" placeholder="Min: 000" class="form-control ng-untouched ng-pristine ng-valid">
                    <div class="input-group-append"><span class="input-group-text"><i class="mdi mdi-plus"></i></span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 mbetting-table-none"><button class="btn btn-betplace" disabled="">betplace</button></div>
          </div>
        </div>
      </div>
      <div class="row justify-content-center py-1">
        <ul class="stakesBtns mbetting-table-none">
          <li><a class="btn">100</a></li>
          <li><a class="btn">5000</a></li>
          <li><a class="btn">500</a></li>
          <li><a class="btn">25000</a></li>
          <li><a class="btn">50000</a></li>
          <li><a class="btn">100000</a></li>
          <li><a class="btn">500000</a></li>
          <li><a class="btn">1000000</a></li>
        </ul>
        <div class="col-12 dbetting-table-none">
          <div class="m_stakesBtns"><a class="btn">100</a><a class="btn">5000</a><a class="btn">500</a><a class="btn">25000</a><a class="btn">50000</a><a class="btn">100000</a><a class="btn">500000</a><a class="btn">1000000</a></div>
        </div>
      </div>
      <div class="row">
        <div class="col-6 dbetting-table-none pr-xs-1"><button class="btn btn-cancel">cacnel</button></div>
        <div class="col-6 dbetting-table-none pl-xs-1"><button class="btn btn-betplace" disabled="">betplace</button></div>
      </div>
    </div>
  </app-guest-bet-slip>
</div> -->