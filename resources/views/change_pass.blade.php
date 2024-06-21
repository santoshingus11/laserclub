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
        <div class="container-fluid"><router-outlet></router-outlet><app-change-password class="ng-star-inserted">
                <div class="container-fluid">
                    <div class="row my-1">
                        <div class="col-md-12">
                            <div class="userTables">
                                <h2 class="ng-star-inserted">change password</h2><!---->
                                <form novalidate="" class="new-cp-form ng-untouched ng-pristine ng-invalid">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group"><label for="" class="text-capitalize font-weight-bold mb-0">old password</label><input type="password" id="" formcontrolname="old_password" class="form-control ng-untouched ng-pristine ng-invalid"><!----></div>
                                            <div class="form-group"><label for="" class="text-capitalize font-weight-bold mb-0">new password</label><input type="password" formcontrolname="new_password" class="form-control ng-untouched ng-pristine ng-invalid"><!----></div>
                                            <div class="form-group"><label for="" class="text-capitalize font-weight-bold mb-0">confirm password</label><input type="password" formcontrolname="new_password_re" class="form-control ng-untouched ng-pristine ng-invalid"><!----></div>
                                            <div class="form-group mt-2"><button type="submit" class="btn cp-btn">change password</button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </app-change-password><!----></div><app-footer class="ng-star-inserted">
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