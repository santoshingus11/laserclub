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
        <div class="container-fluid"><router-outlet></router-outlet><app-account-statement class="ng-star-inserted">
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
                                                    <option value="ALL" class="ng-star-inserted">All Sports </option>
                                                    <option value="4" class="ng-star-inserted">Cricket </option>
                                                    <option value="1" class="ng-star-inserted">Football </option>
                                                    <option value="2" class="ng-star-inserted">Tennis </option>
                                                    <option value="99999" class="ng-star-inserted">Casino </option>
                                                    <option value="7" class="ng-star-inserted">Horse Racing </option>
                                                    <option value="4339" class="ng-star-inserted">Greyhound Racing </option>
                                                    <option value="99994" class="ng-star-inserted">Kabaddi </option>
                                                    <option value="2378961" class="ng-star-inserted">Politics </option>
                                                    <option value="99991" class="ng-star-inserted">Sports book </option>
                                                    <option value="99998" class="ng-star-inserted">Int Casino </option>
                                                    <option value="99990" class="ng-star-inserted">Binary </option>
                                                    <option value="26420387" class="ng-star-inserted">Mixed Martial Arts </option>
                                                    <option value="998917" class="ng-star-inserted">Volleyball </option>
                                                    <option value="7524" class="ng-star-inserted">Ice Hockey </option>
                                                    <option value="7522" class="ng-star-inserted">Basketball </option>
                                                    <option value="7511" class="ng-star-inserted">Baseball </option>
                                                    <option value="3503" class="ng-star-inserted">Darts </option>
                                                    <option value="29" class="ng-star-inserted">Futsal </option>
                                                    <option value="20" class="ng-star-inserted">Table Tennis </option>
                                                    <option value="5" class="ng-star-inserted">Rugby </option><!---->
                                                </select></div>
                                            <div class="col-md-3"><label>&nbsp;</label><button type="submit" class="btn btn-gets"> get statement</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <h2>Account Statement</h2>
                                        <div class="table-responsive">
                                            <table class="table mb-0 table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>date</th>
                                                        <th>Total</th>
                                                        <th>balance</th>
                                                        <th>D/C</th>
                                                        <th>Sports</th>
                                                        <th>Description</th>
                                                        <th>Details</th>
                                                    </tr>
                                                </thead><!---->
                                                <tbody class="ng-star-inserted">
                                                    <tr>
                                                        <td colspan="10" class="noData"> No Data Found</td>
                                                    </tr>
                                                </tbody><!----><!---->
                                            </table>
                                            <div class="pagination ng-star-inserted">
                                                <nav aria-label="pagination example" class="Pager1">
                                                    <ul class="pagination pagination-circle justify-content-center">
                                                        <li class="page-item disabled ng-star-inserted"><a href="javascript:void(0)" class="page-link">« Previous</a></li>
                                                        <li class="page-item active ng-star-inserted"><a href="javascript:void(0)" class="page-link">1</a></li>
                                                        <li class="page-item disabled ng-star-inserted"><a href="javascript:void(0)" class="page-link">Next »</a></li><!---->
                                                    </ul>
                                                </nav>
                                            </div><!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header">Deposit Request</div>
                                <table id="" class="table dt-responsive">
                                    <thead>
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Person Name</th>
                                            <th>Person Email</th>
                                            <th>Username</th>
                                            <th>Balance</th>
                                            <!-- <th>Image</th> -->
                                            <th>Created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($deposits))
                                        @foreach ($deposits as $dataa)

                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $dataa['user']['username'] ?? "" }}</td>
                                            <td>{{ $dataa['email'] ?? "" }}</td>
                                            <td>{{ $dataa['username'] ?? "" }}</td>
                                            <td>{{ $dataa['amount'] ?? "" }}</td>
                                            <!-- <td>{{ url('/assets/images/Deposit/').$dataa['image_name'] ?? "" }}</td> -->
                                            <!-- /assets/images/Deposit/ -->
                                            <td>{{ $dataa['created_at'] ?? "" }}</td>

                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header">Withdraw Request</div>
                                <table id="" class="table dt-responsive">
                                    <thead>
                                        <tr>
                                            <th>User Id</th>
                                            <th>username</th>
                                            <!-- <th>email</th> -->
                                            <th>bank_name</th>
                                            <th>account_holder_name</th>
                                            <th>account_number</th>
                                            <th>account_type</th>
                                            <th>branch</th>
                                            <th>Balance</th>
                                            <th>Created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(!empty($withdraw))
                                        @foreach ($withdraw as $dataa)

                                        <tr>
                                            <td>{{ $dataa['user_id'] }}</td>
                                            <td>{{ $dataa['username'] ?? "" }}</td>
                                            <!-- <td>{{ $dataa['email'] ?? "" }}</td> -->
                                            <td>{{ $dataa['bank_name'] ?? "" }}</td>
                                            <td>{{ $dataa['account_holder_name'] ?? "" }}</td>
                                            <td>{{ $dataa['account_number'] ?? "" }}</td>
                                            <td>{{ $dataa['account_type'] ?? "" }}</td>
                                            <td>{{ $dataa['branch'] ?? "" }}</td>
                                            <td>{{ $dataa['amount'] ?? "" }}</td>
                                            <td>{{ $dataa['created_at'] ?? "" }}</td>

                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </app-account-statement><!----></div><app-footer _nghost-mnc-c52="" class="ng-star-inserted">
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