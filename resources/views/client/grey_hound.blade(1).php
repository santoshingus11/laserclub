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

                        <div class="card">
                            <div class="card-body p-0"><app-upcoming>
                                    <div class="marquee-box">
                                        <h4><i class="mdi mdi-microphone-outline"></i> News </h4>
                                        <marquee scrollamount="5">𝐆𝐎𝐎𝐃 𝐍𝐄𝐖𝐒 𝐏𝐑𝐄𝐌𝐈𝐔𝐌 𝐌𝐀𝐑𝐊𝐄𝐓 𝐈𝐒 𝐍𝐎𝐖 𝐀𝐕𝐀𝐈𝐋𝐀𝐁𝐋𝐄 (𝟐𝟒*𝟕) 𝐈𝐍 𝐎𝐔𝐑 𝐄𝐗𝐂𝐇𝐀𝐍𝐆𝐄 (𝐏) , 𝐎𝐔𝐑 𝐄𝐗𝐂𝐋𝐔𝐒𝐈𝐕𝐄 𝐏𝐑𝐄𝐌𝐈𝐔𝐌 𝐌𝐀𝐑𝐊𝐄𝐓 𝐅𝐎𝐑 (𝐒𝐑𝐋) 𝐈𝐒 𝐍𝐎𝐖 𝐒𝐓𝐀𝐑𝐓𝐄𝐃 𝐈𝐍 𝐎𝐔𝐑 𝐄𝐗𝐂𝐇𝐀𝐍𝐆𝐄 , 𝐃𝐑𝐄𝐀𝐌 𝐁𝐈𝐆 𝐖𝐈𝐍 𝐁𝐈𝐆 💰</marquee>
                                    </div>
                                </app-upcoming>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="eventlistdesign">

                                            <div>
                                                <tabset class="tab-container">
                                                    <ul role="tablist" class="nav nav-tabs" aria-label="Tabs">
                                                        <li class="active nav-item"><a href="javascript:void(0);" role="tab" class="nav-link active" aria-controls="" aria-selected="true" id=""><span>AU</span><!----><!----></a></li>
                                                        <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span>ZA</span><!----><!----></a></li>
                                                        <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span>GB</span><!----><!----></a></li><!---->
                                                    </ul>
                                                    <div class="tab-content">
                                                        <tab role="tabpanel" aria-labelledby="" class="tab-pane active">
                                                            <div class="bet-table position-relative horse-table">
                                                                <div class="bet-table-body">
                                                                    <div class="bet-table-row">
                                                                        <div class="bet-nation-name">
                                                                            <div class="game-icon"><i class="mdi mdi-television icon-tv"></i></div>
                                                                            <div class="bet-nation-game-name"><span>Crayford 24th May</span></div>
                                                                        </div>
                                                                        <div class="horse-time-detail"><a href="{{route('grey_hound_detail')}}"><span>17:26</span></a><a href="{{route('horse_racing_detail')}}"><span>17:57</span></a><a href="{{route('horse_racing_detail')}}"><span>18:31</span></a><a href="{{route('horse_racing_detail')}}"><span>19:05</span></a><!----></div>
                                                                    </div><!---->
                                                                </div>
                                                            </div>
                                                        </tab>
                                                        <tab role="tabpanel" aria-labelledby="" class="tab-pane">
                                                            <div class="bet-table position-relative horse-table">
                                                                <div class="bet-table-body">
                                                                    <div class="bet-table-row">
                                                                        <div class="bet-nation-name">
                                                                            <div class="game-icon"><i class="mdi mdi-television icon-tv"></i></div>
                                                                            <div class="bet-nation-game-name"><span>Fairview (RSA) 24th May</span></div>
                                                                        </div>
                                                                        <div class="horse-time-detail"><a href="#/event/detail/33298057/1.229271290"><span>17:45</span></a><a href="#/event/detail/33298057/1.229271292"><span>18:20</span></a><a href="#/event/detail/33298057/1.229271294"><span>18:55</span></a><a href="#/event/detail/33298057/1.229271296"><span>19:30</span></a><!----></div>
                                                                    </div><!---->
                                                                </div>
                                                            </div>
                                                        </tab>
                                                        <tab role="tabpanel" aria-labelledby="" class="tab-pane">
                                                            <div class="bet-table position-relative horse-table">
                                                                <div class="bet-table-body">
                                                                    <div class="bet-table-row">
                                                                        <div class="bet-nation-name">
                                                                            <div class="game-icon"><i class="mdi mdi-television icon-tv"></i></div>
                                                                            <div class="bet-nation-game-name"><span>Goodwood 24th May</span></div>
                                                                        </div>
                                                                        <div class="horse-time-detail"><a href="#/event/detail/33295406/1.229238515"><span>17:50</span></a><a href="#/event/detail/33295406/1.229238522"><span>18:25</span></a><a href="#/event/detail/33295406/1.229238529"><span>19:00</span></a><a href="#/event/detail/33295406/1.229238535"><span>19:35</span></a><a href="#/event/detail/33295406/1.229238542"><span>20:10</span></a><a href="#/event/detail/33295406/1.229238549"><span>20:40</span></a><a href="#/event/detail/33295406/1.229238555"><span>21:10</span></a><!----></div>
                                                                    </div>
                                                                    <div class="bet-table-row">
                                                                        <div class="bet-nation-name">
                                                                            <div class="game-icon"><i class="mdi mdi-television icon-tv"></i></div>
                                                                            <div class="bet-nation-game-name"><span>Haydock 24th May</span></div>
                                                                        </div>
                                                                        <div class="horse-time-detail"><a href="#/event/detail/33295400/1.229238226"><span>18:05</span></a><a href="#/event/detail/33295400/1.229238232"><span>18:40</span></a><a href="#/event/detail/33295400/1.229238239"><span>19:15</span></a><a href="#/event/detail/33295400/1.229238246"><span>19:50</span></a><a href="#/event/detail/33295400/1.229238253"><span>20:20</span></a><a href="#/event/detail/33295400/1.229238260"><span>20:55</span></a><a href="#/event/detail/33295400/1.229238267"><span>21:25</span></a><!----></div>
                                                                    </div><!---->
                                                                </div>
                                                            </div>
                                                        </tab><!---->
                                                    </div>
                                                </tabset>
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
                                            <h3>stake <!----></h3>
                                            <dl id="" class="setting-block stake-setting">
                                                <dd><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                                                <dd><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                                                <dd><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                                                <dd><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                                                <dd><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                                                <dd><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                                                <dd><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                                                <dd><input type="number" class="ng-untouched ng-pristine ng-valid"></dd><!---->
                                                <dd class="col-stake_edit"><a href="javascript:;" id="save" class="btn-send ui-link">Save</a></dd>
                                            </dl>
                                        </div><!---->
                                    </div>
                                </app-stakes></div>
                            <h2>open bets</h2><app-bet-list>
                                <div><select class="form-control mobile-hide ng-pristine ng-valid ng-touched"><!----></select>
                                    <div class="openBetsTabs">
                                        <tabset class="tab-container">
                                            <ul role="tablist" class="nav nav-tabs" aria-label="Tabs">
                                                <li class="active nav-item"><a href="javascript:void(0);" role="tab" class="nav-link active" aria-controls="tab1" aria-selected="true" id="tab1-link"><span>Matched</span><!----><!----></a></li>
                                                <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span>UnMatched</span><!----><!----></a></li>
                                                <li class="nav-item"><a href="javascript:void(0);" role="tab" class="nav-link" aria-controls="" aria-selected="false" id=""><span>Fancy</span><!----><!----></a></li><!---->
                                            </ul>
                                            <div class="tab-content">
                                                <tab heading="Matched" id="tab1" role="tabpanel" aria-labelledby="tab1-link" class="tab-pane active">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <td>Selname</td>
                                                                    <td>Odds</td>
                                                                    <td>Stake</td>
                                                                    <td>Date/Time</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody><!----></tbody>
                                                        </table>
                                                    </div>
                                                </tab>
                                                <tab heading="UnMatched" role="tabpanel" aria-labelledby="" class="tab-pane">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <td>Selname</td>
                                                                    <td>Odds</td>
                                                                    <td>Stake</td>
                                                                    <td>Date/Time</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody><!----></tbody>
                                                        </table>
                                                    </div>
                                                </tab>
                                                <tab heading="Fancy" role="tabpanel" aria-labelledby="" class="tab-pane">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <td>Selname</td>
                                                                    <td>Odds</td>
                                                                    <td>Stake</td>
                                                                    <td>Date/Time</td>
                                                                </tr>
                                                            </thead>
                                                            <tbody><!----></tbody>
                                                        </table>
                                                    </div>
                                                </tab>
                                            </div>
                                        </tabset>
                                    </div>
                                </div>
                            </app-bet-list>
                        </div>
                    </div>
                </div>
            </app-sport-list>
        </div>
    </div>
</div>




@endsection