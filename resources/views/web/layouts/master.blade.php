<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Live casino Betting">
    <meta name="keywords" content="sports, cricket, casino, betting">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - {{ config('app.name') }}</title>
    @yield('meta')
    @stack('before-styles')
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('new/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('new/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('new/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('new/css/plyr.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('new/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('new/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('new/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('new/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('after-styles')
    
    @yield('page-styles')
   
</head>
@include('web.chat.chaticon')
<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

   <!-- Header Section Begin -->
    @include('web.layouts.header')
   <!-- Header Section End -->
   @yield('content')
   

    

<!-- Footer Section Begin -->
@include('web.layouts.footer')
<!-- Search model end -->

<!-- Js Plugins -->
<script src="{{asset('new/js/jquery-3.3.1.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
<script src="{{asset('new/js/bootstrap.min.js')}}"></script>
<script src="{{asset('new/js/player.js')}}"></script>
<script src="{{asset('new/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('new/js/mixitup.min.js')}}"></script>
<script src="{{asset('new/js/jquery.slicknav.js')}}"></script>
<script src="{{asset('new/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('new/js/main.js')}}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@yield('page-script')

</body>

</html>