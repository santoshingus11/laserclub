@extends ('layouts.web.app')
@section('style')
<style>
    /* Style Goes Here */

    /* Style Goes Here */
</style>
<style>
    .liveTvMatch {
        width: 100%;
        height: 400px;
        border: 1px solid black;
        /* Adjust the height as needed */
        /* position: relative; */
    }

    iframe {
        width: 100% !important;
        ;
        height: 100% !important;
        ;
        border: none;
    }
</style>
@endsection
@section('content')


<?php if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) { ?>
    @include('layouts.web.mobile_header')
<?php } ?>

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <router-outlet></router-outlet>
            <app-sport-list>
                <div class="row">
                    <div class="col-xl-8 px-lg-1">

                        <?php if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false) { ?>
                            <!-- Mobile -->
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
                                                <div class="col"><input type="hidden" name="bet_input_stake" id="bet_input_stake"><input type="text" name="bet_odds" id="bet_input" readonly="true" min="1.01" max="999.99" class="form-control ng-untouched ng-pristine ng-valid p-0"></div><!----><!---->
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
                                            <p class="match-odds">Match Odds <a href="javascript:void(0)"><i class="mdi mdi-information-outline"></i></a></p>
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

                                    <div id="matchoddclass"></div>

                                </div>
                            </div><!----><!---->

                            <div>
                                <div class="dScreen book_makers">
                                    <div class="row mx-0 head_bg">
                                        <div class="col-md-12 col-8 px-0">
                                            <p class="match-odds">BOOKMAKER <a href="javascript:void(0)"><i class="mdi mdi-information-outline"></i></a></p>
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

                                    <div id="bookmaker"></div>


                                </div>
                            </div><!----><!---->

                            <div>
                                <div class="dScreen book_makers">
                                    <div class="row mx-0 head_bg">
                                        <div class="col-md-12 col-8 px-0">
                                            <p class="match-odds"> Fancy<a href="javascript:void(0)"><i class="mdi mdi-information-outline"></i></a></p>
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

                                    <div id="fancy"></div>


                                </div>
                            </div><!----><!---->

                            <div>
                                <div class="dScreen book_makers">
                                    <div class="row mx-0 head_bg">
                                        <div class="col-md-12 col-8 px-0">
                                            <p class="match-odds"> Run Bhav <a href="javascript:void(0)"><i class="mdi mdi-information-outline"></i></a></p>
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

                                    <div id="run_bhav"></div>


                                </div>
                            </div><!----><!---->

                            <div>
                                <div class="dScreen book_makers">
                                    <div class="row mx-0 head_bg">
                                        <div class="col-md-12 col-8 px-0">
                                            <p class="match-odds"> Over by Over Session Market <a href="javascript:void(0)"><i class="mdi mdi-information-outline"></i></a></p>
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

                                    <div id="over_by_over_session_market"></div>


                                </div>
                            </div><!----><!---->

                            <div>
                                <div class="dScreen book_makers">
                                    <div class="row mx-0 head_bg">
                                        <div class="col-md-12 col-8 px-0">
                                            <p class="match-odds"> Ball by Ball Session Market <a href="javascript:void(0)"><i class="mdi mdi-information-outline"></i></a></p>
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

                                    <div id="ball_by_ball_session_market"></div>


                                </div>
                            </div><!----><!---->

                            <div>
                                <div class="dScreen book_makers">
                                    <div class="row mx-0 head_bg">
                                        <div class="col-md-12 col-8 px-0">
                                            <p class="match-odds"> Tied Match <a href="javascript:void(0)"><i class="mdi mdi-information-outline"></i></a></p>
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

                                    <div id="tied_match"></div>


                                </div>
                            </div><!----><!---->

                        </div><!---->

                    </div>


                    <?php if ($_SERVER['HTTP_USER_AGENT'] && strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') === false) { ?>
                        <div class="col-xl-4">
                            <!-- dexyop -->
                            <div class="openBets">
                                <!-- Mobile -->
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
                                <p class="alert alert-success"><strong>{{ Session::get('message')}}</strong></p>
                                @endif
                                @if(Session::has('error'))
                                <p class="alert alert-danger"><strong>{{ Session::get('error')}}</strong></p>
                                @endif

                                <app-bet-slip _nghost-uhn-c87="" class="show_bet">
                                    <form action="{{route('cricket-bet-place')}}" method="POST">
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
                                                    <div class="col"><input type="hidden" name="bet_input_stake" id="bet_input_stake"><input type="text" name="bet_odds" id="bet_input" readonly="true" min="1.01" max="999.99" class="form-control ng-untouched ng-pristine ng-valid p-0"></div><!----><!---->
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
    $(document).on('click', '.bet_text', function() {
        $(".show_bet").show();

        // $elem = $(this).parent("div");
        $elem = $(this).parents('.odds_body').first();

        // $elem.parents('.event-names').length // id = $div.attr("id");

        text = $elem.find(".team_name").text();

        $('#back_lay').val($(this).data("back-lay"));
        $('#match_id').val($(this).data("match-id"));
        $('#bet_input_stake').val($(this).data("match-stake"));
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
        var odds = $("#bet_input_stake").val();
        var profit = amnt * odds;

        $(".profit_div").text(profit);
        $("#add_input").val($(this).text());
        $("#bet_profit").val(profit);
        $('.btn-betplace').prop("disabled", false);
    });

    $("#reset_btn").click(function() {
        $("#add_input").val("");
        $("#bet_input").val("");
        $(".profit_div").text("");
    });
    /* Script Goes Here */
</script>

<script>
    setTimeout(function() {
        if ($(".alert").is(":visible")) {
            //you may add animate.css class for fancy fadeout
            $(".alert").fadeOut("slow");
        }
    }, 2000)
</script>
<!-- <script>
  document.getElementById('liveMatchLink').addEventListener('click', function() {

    var liveTvMatchDiv = document.getElementById('liveTvMatch');
    var channel_id = $("#channel_id").val();

    if (liveTvMatchDiv.style.display === 'none' || liveTvMatchDiv.style.display === '') {
      var iframe = document.createElement('iframe');
      iframe.src = channel_id;
      // iframe.src = "https://allinonereborn.in/web/ptv.html";
      // iframe.src = "https://tveboxlive.blogspot.com/?m=1&autoplay=1";
      // iframe.src = "https://allinone-tataplay-web-one.vercel.app/player.html?channel=24";
      liveTvMatchDiv.innerHTML = ''; // Clear any previous content
      liveTvMatchDiv.appendChild(iframe);
      liveTvMatchDiv.style.display = 'block'; // Show the div
      liveTvMatchDiv.style.height = '215px'; // Show the div
      iframe.style.height = '100%'; // Show the div
      iframe.style.width = '100%'; // Show the div
    } else {
      liveTvMatchDiv.style.display = 'block'; // Hide the div
    }
  });
</script> -->

<script>
    $(document).ready(function() {
        function loadCricketDetails() {
            var game_id = "{{ $game_id }}"; // Replace with your actual game ID or pass it dynamically

            $.ajax({
                url: game_id, // Update with your actual route
                method: 'GET',
                success: function(data) {
                    console.log(data);

                    var matchOddsHtml = '';
                    $.each(data.response.match_odds, function(index, r) {
                        //matchOddsHtml
                        matchOddsHtml += `
        <div class="row mx-0 odds_body">
          <div class="col-md-5 col-7 px-0">
            <p class="team-name team_name">${r.team_name}</p>
          </div>
          <div class="col-md-7 col-5 px-0">
            <div class="btn-group dOddsBox">
              <button class="back back2">- <span>-</span></button>
              <button class="back back1">- <span>-</span></button>
              <button class="back bet_text" data-back-lay="back" data-match-stake="${r.stake}" data-match-id="${r.id}" data-team-name="${r.team_name}">${r.back_status == 1 ? r.back_value : '-'}</button>
              <button class="lay bet_text" data-back-lay="lay" data-match-stake="${r.stake}" data-match-id="${r.id}" data-team-name="${r.team_name}">${r.lay_status == 1 ? r.lay_value : '-'}</button>
              <button class="lay lay1">- <span>-</span></button>
              <button class="lay lay2">- <span>-</span></button>
            </div>
          </div>
        </div>
      `;
                    });
                    // $('#matchoddclass').empty(); // Update with your actual container class
                    $('#matchoddclass').html(matchOddsHtml); // Update with your actual container class

                    var bookmaker = '';
                    $.each(data.response.bookmaker, function(index, r) {
                        //matchOddsHtml
                        bookmaker += `
        <div class="row mx-0 odds_body">
          <div class="col-md-5 col-7 px-0">
            <p class="team-name team_name">${r.team_name}</p>
          </div>
          <div class="col-md-7 col-5 px-0">
            <div class="btn-group dOddsBox">
              <button class="back back2">- <span>-</span></button>
              <button class="back back1">- <span>-</span></button>
              <button class="back bet_text" data-back-lay="back" data-match-stake="${r.stake}" data-match-id="${r.id}" data-team-name="${r.team_name}">${r.back_status == 1 ? r.back_value : '-'}</button>
              <button class="lay bet_text" data-back-lay="lay" data-match-stake="${r.stake}" data-match-id="${r.id}" data-team-name="${r.team_name}">${r.lay_status == 1 ? r.lay_value : '-'}</button>
              <button class="lay lay1">- <span>-</span></button>
              <button class="lay lay2">- <span>-</span></button>
            </div>
          </div>
        </div>
      `;
                    });
                    $('#bookmaker').html(bookmaker); // Update with your actual container class

                    var fancy = '';
                    $.each(data.response.fancy, function(index, r) {
                        //matchOddsHtml
                        fancy += `
        <div class="row mx-0 odds_body">
          <div class="col-md-5 col-7 px-0">
            <p class="team-name team_name">${r.team_name}</p>
          </div>
          <div class="col-md-7 col-5 px-0">
            <div class="btn-group dOddsBox">
              <button class="back back2">- <span>-</span></button>
              <button class="back back1">- <span>-</span></button>
              <button class="back bet_text" data-back-lay="back" data-match-stake="${r.stake}" data-match-id="${r.id}" data-team-name="${r.team_name}">${r.back_status == 1 ? r.back_value : '-'}</button>
              <button class="lay bet_text" data-back-lay="lay" data-match-stake="${r.stake}" data-match-id="${r.id}" data-team-name="${r.team_name}">${r.lay_status == 1 ? r.lay_value : '-'}</button>
              <button class="lay lay1">- <span>-</span></button>
              <button class="lay lay2">- <span>-</span></button>
            </div>
          </div>
        </div>
      `;
                    });
                    $('#fancy').html(fancy); // Update with your actual container class
                    var ball_by_ball_session_market = '';
                    $.each(data.response.ball_by_ball_session_market, function(index, r) {
                        //matchOddsHtml
                        ball_by_ball_session_market += `
        <div class="row mx-0 odds_body">
          <div class="col-md-5 col-7 px-0">
            <p class="team-name team_name">${r.team_name}</p>
          </div>
          <div class="col-md-7 col-5 px-0">
            <div class="btn-group dOddsBox">
              <button class="back back2">- <span>-</span></button>
              <button class="back back1">- <span>-</span></button>
              <button class="back bet_text" data-back-lay="back" data-match-stake="${r.stake}" data-match-id="${r.id}" data-team-name="${r.team_name}">${r.back_status == 1 ? r.back_value : '-'}</button>
              <button class="lay bet_text" data-back-lay="lay" data-match-stake="${r.stake}" data-match-id="${r.id}" data-team-name="${r.team_name}">${r.lay_status == 1 ? r.lay_value : '-'}</button>
              <button class="lay lay1">- <span>-</span></button>
              <button class="lay lay2">- <span>-</span></button>
            </div>
          </div>
        </div>
      `;
                    });
                    $('#ball_by_ball_session_market').html(ball_by_ball_session_market); // Update with your actual container class

                    var over_by_over_session_market = '';
                    $.each(data.response.over_by_over_session_market, function(index, r) {
                        //matchOddsHtml
                        over_by_over_session_market += `
        <div class="row mx-0 odds_body">
          <div class="col-md-5 col-7 px-0">
            <p class="team-name team_name">${r.team_name}</p>
          </div>
          <div class="col-md-7 col-5 px-0">
            <div class="btn-group dOddsBox">
              <button class="back back2">- <span>-</span></button>
              <button class="back back1">- <span>-</span></button>
              <button class="back bet_text" data-back-lay="back" data-match-stake="${r.stake}" data-match-id="${r.id}" data-team-name="${r.team_name}">${r.back_status == 1 ? r.back_value : '-'}</button>
              <button class="lay bet_text" data-back-lay="lay" data-match-stake="${r.stake}" data-match-id="${r.id}" data-team-name="${r.team_name}">${r.lay_status == 1 ? r.lay_value : '-'}</button>
              <button class="lay lay1">- <span>-</span></button>
              <button class="lay lay2">- <span>-</span></button>
            </div>
          </div>
        </div>
      `;
                    });
                    $('#over_by_over_session_market').html(over_by_over_session_market); // Update with your actual container class


                    var run_bhav = '';
                    $.each(data.response.run_bhav, function(index, r) {
                        //matchOddsHtml
                        run_bhav += `
        <div class="row mx-0 odds_body">
          <div class="col-md-5 col-7 px-0">
            <p class="team-name team_name">${r.team_name}</p>
          </div>
          <div class="col-md-7 col-5 px-0">
            <div class="btn-group dOddsBox">
              <button class="back back2">- <span>-</span></button>
              <button class="back back1">- <span>-</span></button>
              <button class="back bet_text" data-back-lay="back" data-match-stake="${r.stake}" data-match-id="${r.id}" data-team-name="${r.team_name}">${r.back_status == 1 ? r.back_value : '-'}</button>
              <button class="lay bet_text" data-back-lay="lay" data-match-stake="${r.stake}" data-match-id="${r.id}" data-team-name="${r.team_name}">${r.lay_status == 1 ? r.lay_value : '-'}</button>
              <button class="lay lay1">- <span>-</span></button>
              <button class="lay lay2">- <span>-</span></button>
            </div>
          </div>
        </div>
      `;
                    });
                    $('#over_by_over_session_market').html(run_bhav); // Update with your actual container class



                    var tied_match = '';
                    $.each(data.response.tied_match, function(index, r) {
                        //matchOddsHtml
                        tied_match += `
        <div class="row mx-0 odds_body">
          <div class="col-md-5 col-7 px-0">
            <p class="team-name team_name">${r.team_name}</p>
          </div>
          <div class="col-md-7 col-5 px-0">
            <div class="btn-group dOddsBox">
              <button class="back back2">- <span>-</span></button>
              <button class="back back1">- <span>-</span></button>
              <button class="back bet_text" data-back-lay="back" data-match-stake="${r.stake}" data-match-id="${r.id}" data-team-name="${r.team_name}">${r.back_status == 1 ? r.back_value : '-'}</button>
              <button class="lay bet_text" data-back-lay="lay" data-match-stake="${r.stake}" data-match-id="${r.id}" data-team-name="${r.team_name}">${r.lay_status == 1 ? r.lay_value : '-'}</button>
              <button class="lay lay1">- <span>-</span></button>
              <button class="lay lay2">- <span>-</span></button>
            </div>
          </div>
        </div>
      `;
                    });
                    $('#tied_match').html(tied_match); // Update with your actual container class




                    var to_win_the_toss = '';
                    $.each(data.response.to_win_the_toss, function(index, r) {
                        //matchOddsHtml
                        to_win_the_toss += `
        <div class="row mx-0 odds_body">
          <div class="col-md-5 col-7 px-0">
            <p class="team-name team_name">${r.team_name}</p>
          </div>
          <div class="col-md-7 col-5 px-0">
            <div class="btn-group dOddsBox">
              <button class="back back2">- <span>-</span></button>
              <button class="back back1">- <span>-</span></button>
              <button class="back bet_text" data-back-lay="back" data-match-stake="${r.stake}" data-match-id="${r.id}" data-team-name="${r.team_name}">${r.back_status == 1 ? r.back_value : '-'}</button>
              <button class="lay bet_text" data-back-lay="lay" data-match-stake="${r.stake}" data-match-id="${r.id}" data-team-name="${r.team_name}">${r.lay_status == 1 ? r.lay_value : '-'}</button>
              <button class="lay lay1">- <span>-</span></button>
              <button class="lay lay2">- <span>-</span></button>
            </div>
          </div>
        </div>
      `;
                    });
                    $('#to_win_the_toss').html(to_win_the_toss); // Update with your actual container class


                },
                error: function(xhr, status, error) {
                    console.error('Error fetching cricket details:', error);
                }
            });
        }

        // Load cricket details every 5 seconds
        setInterval(loadCricketDetails, 5000);

        // // Initial load
        loadCricketDetails();
    });
</script>
<script>
      function updateProfit(amnt) {
        var odds = parseFloat($("#bet_input_stake").val()) || 1;
        var profit = amnt * odds;
        $(".profit_div").text(profit.toFixed(2)); // Format profit to 2 decimal places
        $("#bet_profit").val(profit);
        $('.betplace-btn').prop("disabled", false);
    }
    $("#add_input").on('input', function() {
     
        var amnt = parseFloat($(this).val()) || 0;
        updateProfit(amnt);
    });
</script>
@endsection