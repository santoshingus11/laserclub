<app-topnav>
    <div id="mainNav" class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-end mb-0">
                <li class="dropdown d-none d-lg-inline-block">
                    <form novalidate="" class="ng-untouched ng-pristine ng-valid"></form>
                </li>
                <li class="dropdown notification-list topbar-dropdown">
                    <app-login-page1>
                        <button type="button" class="btn btn-login btn-register py-1" style="margin-top: 10px;">demo</button><!---->
                        <div bsmodal="" tabindex="-1" role="dialog" aria-labelledby="dialog-static-name" class="modal fade">
                            <div class="modal-dialog land-login-modal">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 id="change-password" class="modal-title pull-left">Change Password
                                        </h5><button type="button" data-bs-dismiss="modal" aria-label="Close" class="close"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="modal-body"><app-change-password class="modal-change-pwd" _nghost-jui-c47="">
                                            <div class="container-fluid">
                                                <div class="row my-1">
                                                    <div class="col-md-12">
                                                        <div class="userTables"><!---->
                                                            <form novalidate="" class="new-cp-form ng-untouched ng-pristine ng-invalid">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group"><label for="" class="text-capitalize font-weight-bold mb-0">old
                                                                                password</label><input type="password" id="" formcontrolname="old_password" class="form-control ng-untouched ng-pristine ng-invalid"><!----></div>
                                                                        <div class="form-group"><label for="" class="text-capitalize font-weight-bold mb-0">new
                                                                                password</label><input type="password" formcontrolname="new_password" class="form-control ng-untouched ng-pristine ng-invalid"><!----></div>
                                                                        <div class="form-group"><label for="" class="text-capitalize font-weight-bold mb-0">confirm
                                                                                password</label><input type="password" formcontrolname="new_password_re" class="form-control ng-untouched ng-pristine ng-invalid"><!----></div>
                                                                        <div class="form-group mt-2"><button type="submit" class="btn cp-btn">change
                                                                                password</button></div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </app-change-password>
                                    </div>
                                </div>
                            </div>
                        </div><!----><!----><!----><!---->
                    </app-login-page1><!----></li>
                <li class="dropdown notification-list topbar-dropdown">
                    <app-login-page1>
                        <?php

                        use Illuminate\Support\Facades\Auth;

                        if (!Auth::guard('client')->user()) { ?>
                            <form id="loginForm" action="{{route('login_submit')}}" method="POST" novalidate="" class="userloginform ng-untouched ng-pristine ng-invalid">
                                @csrf
                                <div class="row align-items-center">
                                    <div class="col-auto d-flex px-1"><i class="mdi mdi-account text-light" style="margin-right: 4px; font-size: 17px;"></i><input type="text" id="username" name="username" placeholder="Username" class="form-control ng-untouched ng-pristine ng-invalid"><!----></div>
                                    <div class="col-auto px-0">
                                        <div class="input-group"><input type="password" id="password" name="password" placeholder="Passsword" class="form-control ng-untouched ng-pristine ng-invalid"><!----></div>
                                    </div>
                                    <div class="col-auto px-1"><button type="submit" class="btn btnlogin">Login <i class="mdi mdi-arrow-right"></i><!----><!----></button><button type="button" class="btn btnlogin">Login with Demo ID <i class="mdi mdi-arrow-right"></i><!----><!----></button></div>
                                </div>
                            </form>
                        <?php } else { ?>
                            <ul class="list-unstyled topnav-menu float-end mb-0">
                                <li class="dropdown d-none d-lg-inline-block">
                                    <form novalidate="" class="ng-untouched ng-pristine ng-valid"></form>
                                </li>
                                <li class="dropdown notification-list topbar-dropdown"><!----></li>
                                <li class="dropdown notification-list topbar-dropdown"><!---->
                                    <div class="main-exposure ng-star-inserted">
                                        <div class="be_div"><a href="javascript:void(0)">Bal <b> @if(Auth::guard('client')->check()) {{Auth::guard('client')->user()->balance}} @endif </b></a><a href="#/market-analysis" routerlink="/market-analysis">Exp <b> 0 </b></a></div><b class="head-username"><i class="mdi mdi-account"></i>@if(Auth::guard('client')->check()) {{Auth::guard('client')->user()->username}} @endif</b><a data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false" class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light"><span class="pro-user-name ms-1"><i class="mdi mdi-account"></i> My Account </span></a>
                                        <div class="dropdown-menu dropdown-menu-end profile-dropdown">
                                            <div class="dropdown-header noti-title">
                                                <h6 class="text-overflow m-0">@if(Auth::guard('client')->check()) {{Auth::guard('client')->user()->username}} @endif</h6>
                                            </div>
                                            <a href="{{route('profile')}}" class="dropdown-item notify-item"> profile </a>
                                            <a href="{{route('account_statement_')}}" class="dropdown-item notify-item"> account statement </a>
                                            <a href="{{route('bet_history_client')}}" class="dropdown-item notify-item"> Bets History </a>
                                            <a href="{{route('profit_loss_')}}" class="dropdown-item notify-item"> profit/loss </a>
                                            <a href="{{route('change_pass')}}" class="dropdown-item notify-item"> Change Password </a>
                                            <a href="javascript:void(0)" class="dropdown-item notify-item"> Rules </a><a href="{{route('client_logout')}}" class="dropdown-item notify-item logout-btn"> Logout <i class="fe-log-out"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown notification-list topbar-dropdown"><!----></li>
                                <li class="dropdown notification-list topbar-dropdown"><!----></li>
                                <li class="mobile-section ng-star-inserted">
                                    <div class="mo_user-blnc"><b class="head-username"><i class="mdi mdi-account"></i>@if(Auth::guard('client')->check()){{Auth::guard('client')->user()->username}} @endif</b>
                                        <ul>
                                            <li><span> Bal @if(Auth::guard('client')->check()){{Auth::guard('client')->user()->balance}} @endif</span></li>
                                            <li><a href="#/market-analysis" routerlink="/market-analysis" class="exp-topcount">Exp <a class="text-white">(<span style="color: red !important;">0</span>)</a></a></li>
                                        </ul>
                                    </div>
                                </li><!---->
                            </ul>
                        <?php } ?>
                        <div bsmodal="" tabindex="-1" role="dialog" aria-labelledby="dialog-static-name" class="modal fade">
                            <div class="modal-dialog land-login-modal">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 id="change-password" class="modal-title pull-left">Change Password
                                        </h5><button type="button" data-bs-dismiss="modal" aria-label="Close" class="close"><i class="mdi mdi-close"></i></button>
                                    </div>
                                    <div class="modal-body">
                                        <app-change-password class="modal-change-pwd" _nghost-jui-c47="">
                                            <div class="container-fluid">
                                                <div class="row my-1">
                                                    <div class="col-md-12">
                                                        <div class="userTables"><!---->
                                                            <form novalidate="" class="new-cp-form ng-untouched ng-pristine ng-invalid">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group"><label for="" class="text-capitalize font-weight-bold mb-0">old
                                                                                password</label><input type="password" id="" formcontrolname="old_password" class="form-control ng-untouched ng-pristine ng-invalid"><!----></div>
                                                                        <div class="form-group"><label for="" class="text-capitalize font-weight-bold mb-0">new
                                                                                password</label><input type="password" formcontrolname="new_password" class="form-control ng-untouched ng-pristine ng-invalid"><!----></div>
                                                                        <div class="form-group"><label for="" class="text-capitalize font-weight-bold mb-0">confirm
                                                                                password</label><input type="password" formcontrolname="new_password_re" class="form-control ng-untouched ng-pristine ng-invalid"><!----></div>
                                                                        <div class="form-group mt-2"><button type="submit" class="btn cp-btn">change
                                                                                password</button></div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </app-change-password>
                                    </div>
                                </div>
                            </div>
                        </div><!----><!----><!----><!---->
                    </app-login-page1><!----><!---->
                    
                    
                    
                    <?php if (!Auth::guard('client')->user()) { ?>
                        <a href="{{route('mobile_login')}}" class="btn btn-login py-1" style="margin-top: 16px;"><i class="mdi mdi-account"></i> Login</a><!---->
                    <?php } else { ?>
                        <a type="button" href="{{route('client-logout')}}" class="btn btn-login py-1" style="margin-top: 16px;"><i class="mdi mdi-account"></i> Logout</a><!---->
                    <?php } ?>
                    
                    
                    
                    
                </li>
                <li class="dropdown notification-list topbar-dropdown"><!----></li>
                <li class="dropdown notification-list topbar-dropdown"><!----></li><!---->
            </ul>
            <div class="logo-box"><a href="{{route('/')}}" class="logo logo-light text-center"><span class="logo-sm"><img alt="" src="{{asset('/')}}assets/logo.gif"></span><span class="logo-lg"><img alt="" class="img-fluid" src="{{asset('/')}}assets/logo.gif"></span></a></div>
            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li><a data-bs-toggle="collapse" data-bs-target="#topnav-menu-content" class="navbar-toggle nav-link">
                        <div class="lines"><span></span><span></span><span></span></div>
                    </a></li><!----><!----><!----><!----><!---->
            </ul>
            <div class="clearfix"></div><!----><!---->
        </div>
    </div>
    <div class="topnav">
        <div class="container-fluid px-0">
            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                <div id="topnav-menu-content" class="collapse navbar-collapse">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{route('/')}}" routerlinkactive="active">home</a></li>
                        <li class="nav-item"><a class="hightlight-menus new-tag-menus" href="{{route('cricket-frontend')}}">
                                IPL 2024 </a></li>
                        <li class="nav-item"><a class="hightlight-menus new-tag-menus" href="{{route('cricket-frontend')}}"> LOK SABHA 2024 </a></li>
                        <li class="nav-item"><a href="{{route('cricket-frontend')}}" routerlinkactive="active">in-play</a></li>
                        <li class="nav-item"><a href="{{route('cricket-frontend')}}" routerlinkactive="active">Cricket <em>new</em></a><!----><!----></li>
                        <li class="nav-item"><a href="{{route('football-frontend')}}" routerlinkactive="active">Football <em>new</em></a><!----><!----></li>
                        <li class="nav-item"><a href="{{route('tennis-frontend')}}" routerlinkactive="active">Tennis <em>new</em></a><!----><!----></li>
                        <li class="nav-item"><a href="{{route('home')}}" routerlinkactive="active" class="hightlight-menus">Casino <em>new</em></a><!----><!----></li>
                        <li class="nav-item"><a href="{{route('home')}}" routerlinkactive="active" class="hightlight-menus">Int Casino <em>new</em></a><!----><!----></li>
                        <li class="nav-item"><a href="{{route('horse_racing')}}" routerlinkactive="active">Horse Racing <em>new</em></a><!----><!----></li>
                        <li class="nav-item"><a href="{{route('grey_hound')}}" routerlinkactive="active">Greyhound Racing <em>new</em></a><!----><!----></li>
                        <li class="nav-item"><a href="{{route('cricket-frontend')}}" routerlinkactive="active">Kabaddi <em>new</em></a><!----><!----></li>
                        <li class="nav-item"><a href="{{route('cricket-frontend')}}" routerlinkactive="active">Politics <em>new</em></a><!----><!----></li>
                        <li class="nav-item"><!----><a href="{{route('cricket-frontend')}}" routerlinkactive="active" class="new-tag-menus sb-menus">Sports book <em>new</em></a><!----></li>
                        <li class="nav-item"><a href="{{route('cricket-frontend')}}" routerlinkactive="active" class="new-tag-menus">Binary <em>new</em></a><!----><!----></li><!---->
                    </ul><!----><!---->
                </div>
            </nav>
        </div><!---->
    </div>
    <div bsmodal="" tabindex="-1" role="dialog" aria-labelledby="" class="modal fade force-change-password-popup afterLoginModal">
        <div class="modal-dialog bookModal app_version">
            <div class="modal-content modal-content-padding-custom">
                <div class="modal-body p-0"><button type="button" data-bs-dismiss="modal" aria-label="Close" class="close" style="position: absolute; right: 13px; top: 1px; color: #fff; font-size: 21px;"><span aria-hidden="true">×</span></button><a><img src="{{url('/')}}/urls/notice.jpeg" style="width: 100%;"></a></div>
            </div>
        </div>
    </div><!---->
</app-topnav>