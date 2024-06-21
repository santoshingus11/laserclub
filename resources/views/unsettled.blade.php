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
        <div class="container-fluid"><router-outlet></router-outlet><app-my-bet-list class="ng-star-inserted">
                <div class="container-fluid">
                    <div class="row my-1">
                        <div class="col-md-12">
                            <div class="userTables">
                                <div class="row">
                                    <div class="col-12">
                                        <h2 class="ng-star-inserted">Unsettled Bets</h2><!---->
                                        <div class="table-responsive">
                                            <table class="table mb-0 table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>bet id</th>
                                                        <th>event</th>
                                                        <th>market type</th>
                                                        <th>selection</th>
                                                        <th>type</th>
                                                        <th>odds req.</th>
                                                        <th>stake</th>
                                                        <th>place time</th>
                                                        <th>macthed time</th>
                                                    </tr>
                                                </thead><!----><!----><!---->
                                            </table>
                                            <div class="pagination ng-star-inserted">
                                                <nav aria-label="pagination example" class="Pager1">
                                                    <ul class="pagination pagination-circle justify-content-center">
                                                        <li class="page-item disabled ng-star-inserted"><a href="javascript:void(0)" class="page-link">« Previous</a></li>
                                                        <li class="page-item active ng-star-inserted"><a href="javascript:void(0)" class="page-link">1</a></li>
                                                        <li class="page-item disabled ng-star-inserted"><a href="javascript:void(0)" class="page-link">Next »</a></li><!---->
                                                    </ul>
                                                </nav>
                                            </div><!----><!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </app-my-bet-list><!----></div><app-footer _nghost-mnc-c52="" class="ng-star-inserted">
            <nav class="mobile-footer-menu">
                <ul>
                    <li><a routerlinkactive="active" href="#/dashboard/4" class="ui-link"><img src="assets/img/trophy.svg" class="icon-sports">Sports</a></li>
                    <li><a routerlinkactive="active" href="#/inplay" class="ui-link"><img src="assets/img/timer.svg" class="icon-inplay">In-Play</a></li>
                    <li class="main-nav"><a routerlinkactive="active" href="#/home" routerlink="/home" class="ui-link"><img src="assets/img/home.svg" class="icon-home">Home</a></li>
                    <li><a routerlinkactive="active" href="#/multi-market" class="ui-link"><img src="assets/img/pin-white-footer.svg" class="icon-pin">Multi Market</a></li>
                    <li class="ng-star-inserted"><a routerlinkactive="active" href="#/mobile-menu" routerlink="/mobile-menu" class="ui-link"><img src="assets/img/user.svg" class="icon-account">Account</a></li><!----><!---->
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