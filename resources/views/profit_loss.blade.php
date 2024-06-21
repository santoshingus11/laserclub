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
        <div class="container-fluid"><router-outlet></router-outlet><app-profit-loss class="ng-star-inserted">
                <div class="container-fluid">
                    <div class="row my-1">
                        <div class="col-md-12">
                            <div class="userTables">
                                <div class="searchForm">
                                    <form novalidate="" class="ng-untouched ng-pristine ng-valid">
                                        <div class="row">
                                            <div class="col-md-3"><label>From Date</label><input type="date" name="" formcontrolname="start_date" class="form-control ng-untouched ng-pristine ng-valid"></div>
                                            <div class="col-md-3"><label>To Date</label><input type="date" name="" formcontrolname="end_date" class="form-control ng-untouched ng-pristine ng-valid"></div>
                                            <div class="col-md-3"><label>Sports</label><select formcontrolname="event_type_id" class="form-control ng-untouched ng-pristine ng-valid">
                                                    <option class="ng-star-inserted" value="ALL">All Sports </option>
                                                    <option class="ng-star-inserted" value="4">Cricket </option>
                                                    <option class="ng-star-inserted" value="1">Football </option>
                                                    <option class="ng-star-inserted" value="2">Tennis </option>
                                                    <option class="ng-star-inserted" value="99999">Casino </option>
                                                    <option class="ng-star-inserted" value="7">Horse Racing </option>
                                                    <option class="ng-star-inserted" value="4339">Greyhound Racing </option>
                                                    <option class="ng-star-inserted" value="99994">Kabaddi </option>
                                                    <option class="ng-star-inserted" value="2378961">Politics </option>
                                                    <option class="ng-star-inserted" value="99991">Sports book </option>
                                                    <option class="ng-star-inserted" value="99998">Int Casino </option>
                                                    <option class="ng-star-inserted" value="99990">Binary </option>
                                                    <option class="ng-star-inserted" value="26420387">Mixed Martial Arts </option>
                                                    <option class="ng-star-inserted" value="998917">Volleyball </option>
                                                    <option class="ng-star-inserted" value="7524">Ice Hockey </option>
                                                    <option class="ng-star-inserted" value="7522">Basketball </option>
                                                    <option class="ng-star-inserted" value="7511">Baseball </option>
                                                    <option class="ng-star-inserted" value="3503">Darts </option>
                                                    <option class="ng-star-inserted" value="29">Futsal </option>
                                                    <option class="ng-star-inserted" value="20">Table Tennis </option>
                                                    <option class="ng-star-inserted" value="5">Rugby </option><!---->
                                                </select></div>
                                            <div class="col-md-3"><label>&nbsp;</label><button type="submit" class="btn btn-gets"><i class="mdi mdi-search-web"></i> get Profit Loss</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h2>profit loss <span class="total-pl">Total P/L : IR <b class="profit"> 0</b></span></h2>
                                        <div class="table-responsive">
                                            <table class="table mb-0 table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Date</th>
                                                        <th>Event</th>
                                                        <th>Comm In</th>
                                                        <th>Comm Out</th>
                                                        <th>Amount</th>
                                                        <th>Total</th>
                                                        <th>Info</th>
                                                    </tr>
                                                </thead><!---->
                                                <tbody class="ng-star-inserted">
                                                    <tr>
                                                        <td colspan="8" class="noData"> No Data Found</td>
                                                    </tr>
                                                </tbody><!----><!---->
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </app-profit-loss><!----></div><app-footer class="ng-star-inserted">
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