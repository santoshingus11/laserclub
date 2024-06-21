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
        <div class="container-fluid"><router-outlet></router-outlet><app-my-profile class="ng-star-inserted">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="profile">
                            <h2>profile</h2>
                            <table class="table ng-star-inserted">
                                <tr>
                                    <th>user id</th>
                                    <td>demo123</td>
                                </tr>
                                <tr>
                                    <th>available chips</th>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <th>exposure</th>
                                    <td>0.00</td>
                                </tr>
                                <tr>
                                    <th>total chips</th>
                                    <td>0</td>
                                </tr>
                                <tr>
                                    <th>profit</th>
                                    <td><span class="profit">0.00</span></td>
                                </tr>
                            </table><!----><!---->
                        </div>
                        <div class="row mobile-hide">
                            <div class="col-md-12">
                                <div class="inner-footer">
                                    <div class="support-wrap">
                                        <dl class="support-mail"><a class="rules-btn-home">Privacy Policy</a><a class="rules-btn-home arrow">KYC</a><a class="rules-btn-home arrow">Terms and Conditions</a><a class="rules-btn-home arrow">Rules and Regulations</a><a class="rules-btn-home arrow">Responsible Gambling</a></dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="openBets">
                            <h2>open bets</h2>
                        </div>
                    </div>
                </div>
            </app-my-profile><!----></div><app-footer class="ng-star-inserted">
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