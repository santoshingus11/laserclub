<app-footer _nghost-jui-c51="">
    <nav class="mobile-footer-menu">
        <ul>
            <li><a href="{{route('bet_history_client')}}" class="ui-link"><img src="{{asset('/')}}/assets/trophy.svg" class="icon-sports">Bet History</a></li>
            <li><a href="{{route('profit_loss_')}}" class="ui-link"><img src="{{asset('/')}}/assets/timer.svg" class="icon-inplay">Profit/Loss</a></li>
            <li class="main-nav"><a href="{{route('/')}}" routerlink="/home" class="ui-link active"><img src="{{asset('/')}}/assets/home.svg" class="icon-home">Home</a></li>
            <li><a href="{{route('profile')}}" class="ui-link"><img src="{{asset('/')}}/assets/pin-white-footer.svg" class="icon-pin">Profile</a></li><!---->
            <li><a href="{{route('logout_account_page')}}" class="ui-link"><img src="{{asset('/')}}/assets/user.svg" class="icon-account">Account</a></li><!---->
        </ul>
    </nav><!---->
</app-footer>