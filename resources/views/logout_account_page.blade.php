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
    <div class="content" style="margin-bottom: 100px !important;">
        <div class="container-fluid"><router-outlet></router-outlet>
            <app-mobile-menu _nghost-txj-c69="" class="ng-star-inserted">
                <div class="mobile-menus-screen">
                    <h3><i class="mdi mdi-account-circle"></i> @if(Auth::guard('client')->check()){{Auth::guard('client')->user()->username}} @endif <span class="time-zone">GMT+5:30</span></h3>
                    <h3><i class="mdi mdi-account-circle"></i> Bal :  @if(Auth::guard('client')->check()){{Auth::guard('client')->user()->balance}} @endif</h3>
                
                    <ul><!---->
                        <li><a href="{{route('profile')}}">my profile</a></li>
                        <li><a href="{{route('account_statement_')}}">account statement</a></li>
                        <li><a href="{{route('unsettled')}}">Unsettles bets</a></li>
                        <li><a href="{{route('profit_loss_')}}">profit/loss</a></li>
                        <li><a href="{{route('change_pass')}}">Change Password</a></li>
                    </ul><a href="{{route('client-logout')}}" class="mbl-logout-btn">LOGOUT <i class="mdi mdi-login-variant"></i></a>
                </div>
                <div id="MobileStake" bsmodal="" tabindex="-1" role="dialog" aria-labelledby="dialog-static-name" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 id="MobileStakeLabel" class="modal-title"><i class="mdi mdi-cog"></i> &nbsp; Setting</h3><button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div><app-stakes _nghost-txj-c60="">
                                <div style="position: relative;">
                                    <div class="stakeDiv">
                                        <h3>stake <!----></h3>
                                        <dl id="" class="setting-block stake-setting">
                                            <dd class="ng-star-inserted"><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                                            <dd class="ng-star-inserted"><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                                            <dd class="ng-star-inserted"><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                                            <dd class="ng-star-inserted"><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                                            <dd class="ng-star-inserted"><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                                            <dd class="ng-star-inserted"><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                                            <dd class="ng-star-inserted"><input type="number" class="ng-untouched ng-pristine ng-valid"></dd>
                                            <dd class="ng-star-inserted"><input type="number" class="ng-untouched ng-pristine ng-valid"></dd><!---->
                                            <dd class="col-stake_edit"><a href="javascript:;" id="save" class="btn-send ui-link">Save</a></dd>
                                        </dl>
                                    </div><!---->
                                </div>
                            </app-stakes><!---->
                        </div>
                    </div>
                </div><!---->
            </app-mobile-menu>
        </div>
    </div>
</div>




@endsection