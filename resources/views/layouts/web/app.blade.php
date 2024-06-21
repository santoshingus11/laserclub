<!DOCTYPE html>
<html lang="en">
@include('layouts.web.head')

<body class="" data-layout="{&quot;mode&quot;: &quot;light&quot;, &quot;width&quot;: &quot;fluid&quot;, &quot;menuPosition&quot;: &quot;fixed&quot;, &quot;sidebar&quot;: { &quot;color&quot;: &quot;light&quot;, &quot;size&quot;: &quot;default&quot;, &quot;showuser&quot;: false}, &quot;topbar&quot;: {&quot;color&quot;: &quot;dark&quot;}, &quot;showRightSidebarOnPageLoad&quot;: true}">
    <app-root ng-version="12.1.5"><router-outlet></router-outlet>
        <app-home>
            @include('layouts.web.header')
            <?php $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>
            <?php if (strpos($url, 'cricket') !== false) { ?>
                @include('layouts.web.app_side_bar')
            <?php }elseif(strpos($url, 'football') !== false){   ?>
                @include('layouts.web.app_side_bar')
            <?php }elseif(strpos($url, 'tennis') !== false){   ?>
                @include('layouts.web.app_side_bar')
            <?php }elseif(strpos($url, 'bet_history_client') !== false){   ?>
                @include('layouts.web.app_side_bar')
           
            <?php }elseif(strpos($url, 'horse_racing') !== false){   ?>
                @include('layouts.web.app_side_bar')
         
            <?php }elseif(strpos($url, 'grey_hound') !== false){   ?>
                @include('layouts.web.app_side_bar')
                 <?php }elseif(strpos($url, 'change_pass') !== false){   ?>
                @include('layouts.web.app_side_bar')
                  <?php }elseif(strpos($url, 'profit_loss') !== false){   ?>
                @include('layouts.web.app_side_bar')
                  <?php }elseif(strpos($url, 'account_statement') !== false){   ?>
                @include('layouts.web.app_side_bar')
                  <?php }elseif(strpos($url, 'profile') !== false){   ?>
                @include('layouts.web.app_side_bar')
            <?php }  ?>
            
            @if(Session::has('message'))
                <div><p class="alert alert-success"><strong>{{Session::get('message')}}</strong></p></div>
            @endif
                        
            @yield('content')
            @include('layouts.web.footer')
        </app-home><!---->
    </app-root>
    @yield('script')
</body>

</html>