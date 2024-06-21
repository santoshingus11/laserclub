@extends('layouts.web.app')
@section('style')
<style>
    /* Style Goes Here */

    /* Style Goes Here */
</style>
@endsection
@section('content')

<!-- Contant Goes Here -->
<div _ngcontent-swy-c56="" class="content-page">
    <div _ngcontent-swy-c56="" class="content">
        <div _ngcontent-swy-c56="" class="container-fluid"><router-outlet _ngcontent-swy-c56=""></router-outlet><app-my-bet-list _nghost-swy-c67="" class="ng-star-inserted">
                <div _ngcontent-swy-c67="" class="container-fluid">
                    <div _ngcontent-swy-c67="" class="row my-1">
                        <div _ngcontent-swy-c67="" class="col-md-12">
                            <div _ngcontent-swy-c67="" class="userTables">
                                <div _ngcontent-swy-c67="" class="row">
                                    <div _ngcontent-swy-c67="" class="col-12">
                                        <h2 _ngcontent-swy-c67="" class="ng-star-inserted">Unsettled Bets</h2><!---->
                                        <div _ngcontent-swy-c67="" class="table-responsive">
                                            <table _ngcontent-swy-c67="" class="table mb-0 table-bordered">
                                                <thead _ngcontent-swy-c67="">
                                                    <tr _ngcontent-swy-c67="">
                                                        <th _ngcontent-swy-c67="">bet id</th>
                                                        <th _ngcontent-swy-c67="">event</th>
                                                        <th _ngcontent-swy-c67="">market type</th>
                                                        <th _ngcontent-swy-c67="">selection</th>
                                                        <th _ngcontent-swy-c67="">type</th>
                                                        <th _ngcontent-swy-c67="">odds req.</th>
                                                        <th _ngcontent-swy-c67="">stake</th>
                                                        <th _ngcontent-swy-c67="">place time</th>
                                                        <th _ngcontent-swy-c67="">macthed time</th>
                                                    </tr>
                                                </thead><!----><!----><!---->
                                                
                                                <tbody _ngcontent-swy-c67="">
                                                    @foreach($betRecords as $bet)
                                                    <tr _ngcontent-swy-c67="">
                                                        <td _ngcontent-swy-c67="">{{$bet->tradeId}}</td>
                                                        <td _ngcontent-swy-c67="">{{$bet->gameId}}</td>
                                                        <td _ngcontent-swy-c67="">Exchange Games</td>
                                                        <td _ngcontent-swy-c67="">MATCH_ODDS</td>
                                                        <td _ngcontent-swy-c67="">{{$bet->action}}</td>
                                                        <td _ngcontent-swy-c67="">{{$bet->bet}}</td>
                                                        <td _ngcontent-swy-c67="">{{$bet->win}}</td>
                                                        <td _ngcontent-swy-c67="">{{$bet->created_at}}</td>
                                                        <td _ngcontent-swy-c67="">{{$bet->created_at}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                
                                            </table>
                                            <p>{{$betRecords->links()}}</p>
                                            <!--<div _ngcontent-swy-c67="" class="pagination ng-star-inserted">-->
                                            <!--    <nav _ngcontent-swy-c67="" aria-label="pagination example" class="Pager1">-->
                                            <!--        <ul _ngcontent-swy-c67="" class="pagination pagination-circle justify-content-center">-->
                                            <!--            <li _ngcontent-swy-c67="" class="page-item disabled ng-star-inserted"><a _ngcontent-swy-c67="" href="javascript:void(0)" class="page-link">« Previous</a></li>-->
                                            <!--            <li _ngcontent-swy-c67="" class="page-item active ng-star-inserted"><a _ngcontent-swy-c67="" href="javascript:void(0)" class="page-link">1</a></li>-->
                                            <!--            <li _ngcontent-swy-c67="" class="page-item disabled ng-star-inserted"><a _ngcontent-swy-c67="" href="javascript:void(0)" class="page-link">Next »</a></li><!---->
                                            <!--        </ul>-->
                                            <!--    </nav>-->
                                            <!--</div><!----><!---->
                                        </div>
                                    </div>
                                </div>
                                  <div _ngcontent-swy-c67="" class="row">
                                    <div _ngcontent-swy-c67="" class="col-12">
                                        <h2 _ngcontent-swy-c67="" class="ng-star-inserted">Cricket Bets</h2><!---->
                                        <div _ngcontent-swy-c67="" class="table-responsive">
                                            <table _ngcontent-swy-c67="" class="table mb-0 table-bordered">
                                                <thead _ngcontent-swy-c67="">
                                                    <tr _ngcontent-swy-c67="">
                                                        <th _ngcontent-swy-c67="">bet id</th>
                                                        <th _ngcontent-swy-c67="">event</th>
                                                        <th _ngcontent-swy-c67="">market type</th>
                                                        <th _ngcontent-swy-c67="">selection</th>
                                                        <th _ngcontent-swy-c67="">type</th>
                                                        <th _ngcontent-swy-c67="">odds req.</th>
                                                        <th _ngcontent-swy-c67="">stake</th>
                                                        <th _ngcontent-swy-c67="">place time</th>
                                                        <th _ngcontent-swy-c67="">macthed time</th>
                                                    </tr>
                                                </thead><!----><!----><!---->
                                                
                                                <tbody _ngcontent-swy-c67="">
                                                    @foreach($betRecords as $bet)
                                                    <tr _ngcontent-swy-c67="">
                                                        <td _ngcontent-swy-c67="">{{$bet->tradeId}}</td>
                                                        <td _ngcontent-swy-c67="">{{$bet->gameId}}</td>
                                                        <td _ngcontent-swy-c67="">Exchange Games</td>
                                                        <td _ngcontent-swy-c67="">MATCH_ODDS</td>
                                                        <td _ngcontent-swy-c67="">{{$bet->action}}</td>
                                                        <td _ngcontent-swy-c67="">{{$bet->bet}}</td>
                                                        <td _ngcontent-swy-c67="">{{$bet->win}}</td>
                                                        <td _ngcontent-swy-c67="">{{$bet->created_at}}</td>
                                                        <td _ngcontent-swy-c67="">{{$bet->created_at}}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                
                                            </table>
                                            <p>{{$betRecords->links()}}</p>
                                            <!--<div _ngcontent-swy-c67="" class="pagination ng-star-inserted">-->
                                            <!--    <nav _ngcontent-swy-c67="" aria-label="pagination example" class="Pager1">-->
                                            <!--        <ul _ngcontent-swy-c67="" class="pagination pagination-circle justify-content-center">-->
                                            <!--            <li _ngcontent-swy-c67="" class="page-item disabled ng-star-inserted"><a _ngcontent-swy-c67="" href="javascript:void(0)" class="page-link">« Previous</a></li>-->
                                            <!--            <li _ngcontent-swy-c67="" class="page-item active ng-star-inserted"><a _ngcontent-swy-c67="" href="javascript:void(0)" class="page-link">1</a></li>-->
                                            <!--            <li _ngcontent-swy-c67="" class="page-item disabled ng-star-inserted"><a _ngcontent-swy-c67="" href="javascript:void(0)" class="page-link">Next »</a></li><!---->
                                            <!--        </ul>-->
                                            <!--    </nav>-->
                                            <!--</div><!----><!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </app-my-bet-list><!----></div><app-footer _ngcontent-swy-c56="" _nghost-swy-c52="" class="ng-star-inserted">
            <nav _ngcontent-swy-c52="" class="mobile-footer-menu">
                <ul _ngcontent-swy-c52="">
                    <li _ngcontent-swy-c52=""><a _ngcontent-swy-c52="" routerlinkactive="active" href="#/dashboard/4" class="ui-link"><img _ngcontent-swy-c52="" src="assets/img/trophy.svg" class="icon-sports">Sports</a></li>
                    <li _ngcontent-swy-c52=""><a _ngcontent-swy-c52="" routerlinkactive="active" href="#/inplay" class="ui-link"><img _ngcontent-swy-c52="" src="assets/img/timer.svg" class="icon-inplay">In-Play</a></li>
                    <li _ngcontent-swy-c52="" class="main-nav"><a _ngcontent-swy-c52="" routerlinkactive="active" href="#/home" routerlink="/home" class="ui-link"><img _ngcontent-swy-c52="" src="assets/img/home.svg" class="icon-home">Home</a></li>
                    <li _ngcontent-swy-c52=""><a _ngcontent-swy-c52="" routerlinkactive="active" href="#/multi-market" class="ui-link"><img _ngcontent-swy-c52="" src="assets/img/pin-white-footer.svg" class="icon-pin">Multi Market</a></li>
                    <li _ngcontent-swy-c52="" class="ng-star-inserted"><a _ngcontent-swy-c52="" routerlinkactive="active" href="#/mobile-menu" routerlink="/mobile-menu" class="ui-link"><img _ngcontent-swy-c52="" src="assets/img/user.svg" class="icon-account">Account</a></li><!----><!---->
                </ul>
            </nav><!---->
        </app-footer><!---->
    </div>
</div>



@endsection
@section('script')
<script>
    /* Script Goes Here */

    /* Script Goes Here */
</script>
@endsection