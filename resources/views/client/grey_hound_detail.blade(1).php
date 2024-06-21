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
        <div class="container-fluid"><router-outlet></router-outlet>
            <app-sport-list>
                <div class="row">
                    <div class="col-xl-8 px-lg-1">
                        <div class="empty1">
                            <div>
                                <div class="dScreen">
                                    <div class="row mx-0">
                                        <div class="col-md-12 col-12 px-0">
                                            <p class="match-odds"><!----><a href="javascript:void(0);" class="add-pins"><img src="assets/img/pin-white.svg" class="img-fluid"></a><!----> A6 480m <a href="javascript:void(0)"><i class="mdi mdi-information"></i></a><!----><span><!----><button class="btn-cashout">Betting Open</button><!----><!----></span><!----></p>
                                        </div>
                                    </div>
                                    <div class="row mx-0 odds_header">
                                        <div class="col-md-5 col-7 px-0">
                                            <div class="minmax mm-fi">
                                                <dl class="fancy-info">
                                                    <dt>Min/Max</dt>
                                                    <dd>100-5k</dd>
                                                </dl>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-5 px-0">
                                            <div class="btn-group dOddsBox"><button class="back2"></button><button class="back1"></button><button class="back">back</button><button class="lay">lay</button><button class="min-max-bet">
                                                    <dl class="fancy-info">
                                                        <dt>Min/Max</dt>
                                                        <dd>100-5k</dd>
                                                    </dl>
                                                </button></div>
                                        </div>
                                    </div>
                                    <div class="row mx-0 odds_body">
                                        <div class="col-md-5 col-7 px-0"><!---->
                                            <p class="team-name"> 1. Lighting Lewy <span class="jockey-detail"><span class="horse-attr"><b>Jockey:</b> </span><span class="horse-attr"><b>Trainer:</b> </span><span class="horse-attr"><b>Age:</b> </span></span><!----><span><!----><!----></span></p>
                                        </div>
                                        <div class="col-md-7 col-5 px-0">
                                            <div class="btn-group dOddsBox"><button class="back back2 bet_text">8 </button><button class="back back1 bet_text">8.2</button><button class="back bet_text">8.4 </button><button class="lay lay bet_text">14.5 </button><button class="lay lay1 bet_text">15 </button><button class="lay lay2 bet_text">16.5</button>
                                                <div><!----><!----></div><!----><!---->
                                            </div>
                                        </div><!---->
                                    </div>
                                    <div class="row mx-0 odds_body">
                                        <div class="col-md-5 col-7 px-0"><!---->
                                            <p class="team-name"> 2. Solway Margo <span class="jockey-detail"><span class="horse-attr"><b>Jockey:</b> </span><span class="horse-attr"><b>Trainer:</b> </span><span class="horse-attr"><b>Age:</b> </span></span><!----><span><!----><!----></span></p>
                                        </div>
                                        <div class="col-md-7 col-5 px-0">
                                            <div class="btn-group dOddsBox"><button class="back back2">6.2 <span>1.14</span></button><button class="back back1">6.6 <span>3.58</span></button><button class="back">6.8 <span>1.24</span></button><button class="lay lay">8.6 <span>2.98</span></button><button class="lay lay1">8.8 <span>2.28</span></button><button class="lay lay2">9 <span>9</span></button>
                                                <div><!----><!----></div><!----><!---->
                                            </div>
                                        </div><!---->
                                    </div>
                                    <div class="row mx-0 odds_body">
                                        <div class="col-md-5 col-7 px-0"><!---->
                                            <p class="team-name"> 3. Blooming Tempy <span class="jockey-detail"><span class="horse-attr"><b>Jockey:</b> </span><span class="horse-attr"><b>Trainer:</b> </span><span class="horse-attr"><b>Age:</b> </span></span><!----><span><!----><!----></span></p>
                                        </div>
                                        <div class="col-md-7 col-5 px-0">
                                            <div class="btn-group dOddsBox"><button class="back back2">3.3 <span>15.63</span></button><button class="back back1">3.35 <span>11.11</span></button><button class="back">3.4 <span>5.15</span></button><button class="lay lay">3.7 <span>78.61</span></button><button class="lay lay1">3.85 <span>3.53</span></button><button class="lay lay2">3.9 <span>6.19</span></button>
                                                <div><!----><!----></div><!----><!---->
                                            </div>
                                        </div><!---->
                                    </div>
                                    <div class="row mx-0 odds_body">
                                        <div class="col-md-5 col-7 px-0"><!---->
                                            <p class="team-name"> 4. Doonanes I Wins <span class="jockey-detail"><span class="horse-attr"><b>Jockey:</b> </span><span class="horse-attr"><b>Trainer:</b> </span><span class="horse-attr"><b>Age:</b> </span></span><!----><span><!----><!----></span></p>
                                        </div>
                                        <div class="col-md-7 col-5 px-0">
                                            <div class="btn-group dOddsBox"><button class="back back2">6 <span>50.78</span></button><button class="back back1">6.2 <span>8.64</span></button><button class="back">7 <span>16.17</span></button><button class="lay lay">7.2 <span>1</span></button><button class="lay lay1">7.4 <span>4.02</span></button><button class="lay lay2">7.8 <span>4.92</span></button>
                                                <div><!----><!----></div><!----><!---->
                                            </div>
                                        </div><!---->
                                    </div>
                                    <div class="row mx-0 odds_body">
                                        <div class="col-md-5 col-7 px-0"><!---->
                                            <p class="team-name"> 5. Wraysbury Honey <span class="jockey-detail"><span class="horse-attr"><b>Jockey:</b> </span><span class="horse-attr"><b>Trainer:</b> </span><span class="horse-attr"><b>Age:</b> </span></span><!----><span><!----><!----></span></p>
                                        </div>
                                        <div class="col-md-7 col-5 px-0">
                                            <div class="btn-group dOddsBox"><button class="back back2">9 <span>3.24</span></button><button class="back back1">9.4 <span>3.08</span></button><button class="back">9.6 <span>1.72</span></button><button class="lay lay">14 <span>1.89</span></button><button class="lay lay1">15.5 <span>1.26</span></button><button class="lay lay2">16.5 <span>2.42</span></button>
                                                <div><!----><!----></div><!----><!---->
                                            </div>
                                        </div><!---->
                                    </div>
                                    <div class="row mx-0 odds_body">
                                        <div class="col-md-5 col-7 px-0"><!---->
                                            <p class="team-name"> 6. Bettys Patsy <span class="jockey-detail"><span class="horse-attr"><b>Jockey:</b> </span><span class="horse-attr"><b>Trainer:</b> </span><span class="horse-attr"><b>Age:</b> </span></span><!----><span><!----><!----></span></p>
                                        </div>
                                        <div class="col-md-7 col-5 px-0">
                                            <div class="btn-group dOddsBox"><button class="back back2">3.65 <span>9.74</span></button><button class="back back1">3.7 <span>1.4</span></button><button class="back">3.75 <span>4.91</span></button><button class="lay lay">4.1 <span>2.35</span></button><button class="lay lay1">4.2 <span>2.74</span></button><button class="lay lay2">4.3 <span>1.8</span></button>
                                                <div><!----><!----></div><!----><!---->
                                            </div>
                                        </div><!---->
                                    </div><!----><!---->
                                </div><!---->
                            </div>
                            <div><!----></div>
                            <div><!----></div>
                            <div><!----></div>
                            <div><!----></div>
                            <div><!----></div>
                            <div><!----></div>
                            <div><!----></div>
                            <div><!----></div>
                            <div><!----></div>
                            <div><!----></div>
                            <div><!----></div><!---->
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
                                </app-stakes>
                            </div>
                            <!-- <h2>open bets</h2> -->
                            <app-bet-slip _nghost-uhn-c87="" class="show_bet">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="betting-table lay-bt" style="position: relative;">
                                        <h2 class="mrkname"> place bet </h2>
                                        <div class="back">
                                            <div class="row align-items-center">
                                                <div class="col col-md-4"> (Bet for) </div>
                                                <div class="col"> Odds </div>
                                                <div class="col"> Stake </div>
                                                <div class="col"> Profit </div>
                                            </div><!---->
                                            <div class="row border-bottom align-items-center">
                                                <div class="col col-md-4 text-left bat_team_place"><a><i class="fa fa-close text-danger"></i></a> Sunrisers
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
    @if(empty(Session::get('myBets')))
    $(".show_bet").hide();
    @endif
    $(".bet_text").click(function() {
        $(".show_bet").show();

        // $elem = $(this).parent("div");
        $elem = $(this).parents('.mainScore').first();

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
        $('.betplace-btn').prop("disabled", false);
    });
    /* Script Goes Here */
</script>
@endsection