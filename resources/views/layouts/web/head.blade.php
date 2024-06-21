<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>LaserClub</title>
    <!--<base href="/">-->
    <base href=".">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=5.0" /> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <link rel="icon" type="image/x-icon" href="favicon.ico"> -->
    <script type="text/javascript" src="{{asset('/')}}/assets/flashphoner.bundle.min.js.download"></script>
    <link rel="stylesheet" href="{{asset('/')}}/assets/flashphoner.bundle.min.css">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}/favicon.ico">
    <!-- Plugins css -->
    <link href="{{asset('/')}}/assets/flatpickr.min.css" rel="stylesheet" type="text/css" media="all" onload="this.media=&#39;all&#39;"><noscript>
        <link rel="stylesheet" href="{{asset('/')}}/assets/css/flatpickr.min.css">
    </noscript>
    <link href="{{asset('/')}}/assets/selectize.bootstrap3.css" rel="stylesheet" type="text/css" media="all" onload="this.media=&#39;all&#39;"><noscript>
        <link rel="stylesheet" href="{{asset('/')}}/assets/css/selectize.bootstrap3.css">
    </noscript>
    <style>
        @charset "UTF-8";
        @import url(https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap);

        :root {
            --bs-blue: #4a81d4;
            --bs-indigo: #675aa9;
            --bs-purple: #6658dd;
            --bs-pink: #f672a7;
            --bs-red: #f1556c;
            --bs-orange: #fd7e14;
            --bs-yellow: #f7b84b;
            --bs-green: #1abc9c;
            --bs-teal: #02a8b5;
            --bs-cyan: #4fc6e1;
            --bs-white: #fff;
            --bs-gray: #98a6ad;
            --bs-gray-dark: #343a40;
            --bs-gray-100: #f7f8f9;
            --bs-gray-200: #eceff1;
            --bs-gray-300: #dee2e6;
            --bs-gray-400: #ced4da;
            --bs-gray-500: #adb5bd;
            --bs-gray-600: #98a6ad;
            --bs-gray-700: #6c757d;
            --bs-gray-800: #343a40;
            --bs-gray-900: #323a46;
            --bs-primary: #6658dd;
            --bs-secondary: #6c757d;
            --bs-success: #1abc9c;
            --bs-info: #4fc6e1;
            --bs-warning: #f7b84b;
            --bs-danger: #f1556c;
            --bs-light: #eceff1;
            --bs-dark: #323a46;
            --bs-pink: #f672a7;
            --bs-blue: #4a81d4;
            --bs-primary-rgb: 102, 88, 221;
            --bs-secondary-rgb: 108, 117, 125;
            --bs-success-rgb: 26, 188, 156;
            --bs-info-rgb: 79, 198, 225;
            --bs-warning-rgb: 247, 184, 75;
            --bs-danger-rgb: 241, 85, 108;
            --bs-light-rgb: 236, 239, 241;
            --bs-dark-rgb: 50, 58, 70;
            --bs-pink-rgb: 246, 114, 167;
            --bs-blue-rgb: 74, 129, 212;
            --bs-white-rgb: 255, 255, 255;
            --bs-black-rgb: 0, 0, 0;
            --bs-body-color-rgb: 108, 117, 125;
            --bs-body-bg-rgb: 245, 245, 245;
            --bs-font-sans-serif: "Roboto", sans-serif;
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            --bs-body-font-family: Roboto, sans-serif;
            --bs-body-font-size: 0.875rem;
            --bs-body-font-weight: 400;
            --bs-body-line-height: 1.5;
            --bs-body-color: #6c757d;
            --bs-body-bg: #f5f5f5
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box
        }

        @media (prefers-reduced-motion:no-preference) {
            :root {
                scroll-behavior: smooth
            }
        }

        body {
            margin: 0;
            font-family: var(--bs-body-font-family);
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-color: var(--bs-body-bg);
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent
        }

        body {
            padding-right: 0 !important;
            padding-left: 0 !important
        }

        body.loading {
            visibility: hidden;
            opacity: 0
        }
    </style>
    <link href="{{asset('/')}}/assets/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" media="all" onload="this.media=&#39;all&#39;"><noscript>
        <link rel="stylesheet" href="{{asset('/')}}/assets/css/bootstrap.min.css">
    </noscript>
    <style>
        @charset "UTF-8";
        @import url(https://fonts.googleapis.com/css?family=Nunito:400,600,700,900);
        @import url(https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap);

        html {
            position: relative;
            min-height: 100%
        }

        body {
            overflow-x: hidden
        }

        @media (max-width:991.98px) {
            body {
                overflow-x: hidden;
                padding-bottom: 80px
            }
        }

        @media print {
            body {
                padding: 0;
                margin: 0
            }
        }

        @media screen and (-webkit-min-device-pixel-ratio:0) {}
    </style>
    <link href="{{asset('/')}}/assets/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" media="all" onload="this.media=&#39;all&#39;"><noscript>
        <link rel="stylesheet" href="{{asset('/')}}/assets/css/app.min.css">
    </noscript>
    <link href="{{asset('/')}}/assets/icons.min.css" rel="stylesheet" type="text/css" media="all" onload="this.media=&#39;all&#39;"><noscript>
        <link rel="stylesheet" href="{{asset('/')}}/assets/css/icons.min.css">
    </noscript>
    <style>
        body {
            touch-action: none
        }

        body {
            touch-action: none
        }

        body {
            font-family: Helvetica, sans-serif !important
        }

        body {
            background: #ededed
        }

        body {
            overflow: auto !important
        }

        @media (max-width: 991px) {
            body {}
        }
    </style>
    <link href="{{asset('/')}}/assets/themes.css" rel="stylesheet" type="text/css" media="all" onload="this.media=&#39;all&#39;"><noscript>
        <link rel="stylesheet" href="{{asset('/')}}/assets/css/themes.css">
    </noscript>
    <style>
        body {
            touch-action: none
        }

        body {
            touch-action: none
        }

        body {
            padding-bottom: 55px !important
        }
    </style>
    <link href="{{asset('/')}}/assets/login.css" rel="stylesheet" type="text/css" media="all" onload="this.media=&#39;all&#39;"><noscript>
        <link rel="stylesheet" href="{{asset('/')}}/assets/css/login.css">
    </noscript>

    <!-- <script src="assets/js/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js"></script> -->

    <!-- Vendor js -->
    <script src="{{asset('/')}}/assets/vendor.min.js.download"></script>
    <script src="{{asset('/')}}/assets/flatpickr.min.js.download"></script>
    <script src="{{asset('/')}}/assets/selectize.min.js.download"></script>
    <script src="{{asset('/')}}/assets/app.min.js.download"></script>

    <!-- <script type="text/javascript">
    document.addEventListener('touchmove', function (event) {
      event = event.originalEvent || event;
      if (event.scale !== 1) {  event.preventDefault(); }
    }, { passive: false });
    </script> -->

    <!-- <script src="assets/js/js.js"></script> -->

    <!-- <link href="{{asset('/')}}/assets/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="{{asset('/')}}/assets/widget.js.download" defer=""></script>
    <style>
        :root {
            touch-action: pan-x pan-y;
            height: 100%
        }
    </style>
    <link rel="stylesheet" href="{{asset('/')}}/assets/styles.2e1bef282aa247b0a916.css" media="all" onload="this.media=&#39;all&#39;"><noscript>
        <link rel="stylesheet" href="styles.2e1bef282aa247b0a916.css">
    </noscript>
    <style></style>
    <link rel="stylesheet" href="{{asset('/')}}/assets/theme-master.css">
    <style>
        .ipl-loksabha {
            display: none
        }

        a.mail-link {
            text-transform: uppercase;
            font-weight: 600;
            color: #000;
            text-align: center;
            display: block;
            font-size: 11px
        }

        .popularDiv {
            position: relative;
            margin-bottom: 0
        }

        .popularDiv svg {
            position: absolute;
            width: 100%;
            height: auto;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            background: #02020282
        }

        .popularDiv svg text {
            text-transform: uppercase;
            animation: stroke 3s infinite alternate;
            stroke-width: 3;
            stroke: red;
            font-size: 90px;
            font-family: fangsong
        }

        .popularDiv i {
            position: absolute;
            right: 23%;
            top: 20px;
            font-size: 55px;
            color: #fff;
            animation: bounce 3s infinite cubic-bezier(.445, .05, .55, .95);
            height: auto;
            padding: 0
        }

        @keyframes bounce {
            50% {
                transform: translate(-15px);
                color: #ff0
            }
        }

        @keyframes stroke {
            0% {
                fill: #fff700;
                stroke: #fff;
                stroke-dashoffset: 25%;
                stroke-dasharray: 0 50%;
                stroke-width: 4
            }

            70% {
                fill: #fff200;
                stroke: #fff
            }

            80% {
                fill: #00ff07;
                stroke: #fff;
                stroke-width: 4px
            }

            to {
                fill: #d4ff00;
                stroke: #fff;
                stroke-dashoffset: -25%;
                stroke-dasharray: 50% 0;
                stroke-width: 0
            }
        }

        .home-navigation-bar {
            text-align: center;
            margin: 0;
            display: inline-block;
            padding: 0;
            background: #000;
            display: block;
            width: 100%;
            white-space: nowrap;
            overflow-x: auto
        }

        .home-navigation-bar li {
            list-style: none;
            display: inline-block
        }

        .home-navigation-bar li a {
            padding: 7px 10px;
            text-transform: capitalize;
            font-size: 14px;
            display: block;
            color: #fff !important;
            border-right: 1px solid #333
        }

        .home-navigation-bar li:last-child {
            border-right: none
        }

        .blinker {
            animation: blinker 1s linear infinite
        }

        @keyframes blinker {
            50% {
                opacity: 0
            }
        }

        @media (min-width: 991px) {
            .home-navigation-bar {
                display: none
            }
        }

        @media (max-width: 991px) {
            .popularDiv i {
                right: 50px;
                top: -4px;
                font-size: 25px
            }

            .mobile-hide {
                display: none !important
            }

            .ipl-loksabha {
                width: 100%;
                background: linear-gradient(180deg, #3729fa 0%, #2f64f6 80%, #2f67f6 100%);
                box-shadow: inset 0 -10px 20px #01929f;
                display: inline-flex
            }

            .ipl-loksabha a {
                width: calc(50% - 1px);
                text-align: center;
                font-size: 14px;
                text-transform: uppercase;
                font-weight: 600;
                padding: 5px;
                color: #fff;
                margin: 0 1px
            }

            .ipl-loksabha .ipl {
                box-shadow: 0 0 2px 1px #fff
            }

            .ipl-loksabha .loksabha {
                box-shadow: 0 0 2px 1px #fff
            }
        }
    </style>
    <style>
        .ab_rae_btns {
            text-align: center;
            padding: 5px 0;
            border-top: 1px solid;
            border-bottom: 1px solid
        }

        .ab_rae_btns button {
            width: 70%;
            display: block
        }

        .ab_btns {
            border: 1px solid var(--theme-color);
            background: none;
            text-transform: uppercase;
            border-radius: 100px;
            color: var(--theme-color);
            padding: 2px;
            font-size: 11px;
            margin: 0 auto
        }

        .ab_btns span {
            color: var(--theme-color);
            margin-left: 15px
        }

        .rae_btns {
            background: var(--theme-color);
            text-transform: uppercase;
            border-radius: 100px;
            color: #fff;
            padding: 5px 18px;
            font-size: 12px;
            margin: 5px auto 0;
            border: none
        }

        a.whatsapp_link {
            position: fixed;
            right: 4%;
            bottom: 8%
        }

        a.whatsapp_link img {
            width: 75px;
            animation: simple-scale 1s 1s linear infinite alternate
        }

        @keyframes simple-scale {
            to {
                transform: scale(1.2)
            }
        }

        .balance-information {
            margin: 10px 0
        }

        .balance-row {
            display: flex;
            justify-content: left;
            padding: 0 10px;
            font-size: 13px
        }

        .balance-text-left {
            width: 50%;
            color: #000;
            font-weight: 500
        }

        .balance-price {
            margin-left: 10px;
            width: 50%;
            color: #000;
            font-weight: 600
        }

        @media (max-width: 767px) {
            .btn-login {
                margin-top: 10px !important
            }

            a.whatsapp_link {
                bottom: 51px
            }
        }
    </style>
    <style>
        .theme-loader {
            width: 100%;
            height: 100%;
            flex: 0 0 25%;
            border: 1px solid rgba(255, 255, 255, .1);
            box-sizing: border-box;
            margin: 0;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden
        }

        .cm-spinner {
            height: 50px;
            width: 50px;
            border: 3px solid transparent;
            border-radius: 50%;
            border-top: 4px solid #243a48;
            animation: spin 1s linear infinite;
            position: relative
        }

        .cm-spinner:before,
        .cm-spinner:after {
            content: "";
            position: absolute;
            top: 6px;
            bottom: 6px;
            left: 6px;
            right: 6px;
            border-radius: 50%;
            border: 4px solid transparent
        }

        .cm-spinner:before {
            border-top-color: #00ff6d;
            animation: 3s spin linear infinite
        }

        .cm-spinner:after {
            border-top-color: #00cdfa;
            animation: spin 1.5s linear infinite
        }

        @keyframes spin {
            0% {
                transform: rotate(0)
            }

            to {
                transform: rotate(360deg)
            }
        }

        @keyframes spinBack {
            0% {
                transform: rotate(0)
            }

            to {
                transform: rotate(-720deg)
            }
        }

        @keyframes spinBorder {
            0% {
                transform: rotate(0);
                border-width: 15px
            }

            50% {
                transform: rotate(180deg);
                border-width: 3px
            }

            to {
                transform: rotate(360deg);
                border-width: 15px
            }
        }

        .loading-wrap {
            top: 30%;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 5px 10px #0000007f;
            z-index: 50;
            position: absolute;
            width: 190px;
            left: 0;
            right: 0;
            margin: 0 auto;
            text-align: center
        }

        .loading {
            padding: 5% 0;
            margin: 0
        }

        .loading li {
            list-style: none;
            font-size: 11px;
            color: #243a48;
            margin-bottom: 3px
        }

        .loading img {
            background-position: -42px -415px;
            height: 22px;
            width: 38px
        }

        @media (max-width: 767px) {
            .loading-wrap {
                top: 40vh
            }

            .loading-wrap img {
                height: auto;
                width: auto
            }

            .loading-wrap li {
                font-size: 14px
            }
        }
    </style>
    <style>
        .handicon {
            width: 30px !important;
            position: absolute;
            left: 15px
        }

        .slide-right {
            animation: slide-right 2s cubic-bezier(.785, .135, .15, .86) infinite alternate both
        }

        @keyframes slide-right {
            0% {
                transform: translate(0)
            }

            to {
                transform: translate(20px)
            }
        }

        .social_connect {
            display: flex;
            text-align: center;
            justify-content: center;
            border-top: 1px dashed #00c6f3;
            margin-top: 10px;
            padding-top: 5px
        }

        .social_connect a {
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 3%;
            color: #fff
        }

        .social_connect a span {
            font-size: 14px;
            font-weight: 900;
            margin-left: 5px;
            color: #fff;
            text-transform: uppercase
        }

        .social_connect a:hover span {
            color: #00c6f3 !important
        }

        .social_connect a svg {
            height: 30px;
            width: 30px
        }

        .loginright .form-group .mobile_forgot_link {
            color: red;
            display: block
        }

        .loginright {
            margin-top: 60px
        }

        .login-page1 {
            height: 100vh;
            overflow: hidden;
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
            background-size: cover;
            background-position: center
        }

        .login-page1 p {
            font-size: 22px;
            text-align: center;
            text-transform: capitalize;
            color: #fff;
            font-weight: 600
        }

        .login-page1 .modal-dialog {
            max-width: 700px;
            margin: 10% auto
        }

        .login-page1 .modal-body {
            padding: 40px
        }

        .login-page1 .modal-copntent {
            box-shadow: 0 0 9px 1px #9b6d00
        }

        .login-page1 form .form-group {
            margin-bottom: 15px
        }

        .login-page1 input,
        .login-page1 input:focus {
            background: #ffffff;
            box-shadow: none;
            border-bottom: 1px solid #fff;
            color: #111;
            font-size: 14px;
            border-radius: 4px;
            font-style: normal
        }

        .login-page1 input::placeholder {
            color: #111;
            font-style: italic;
            font-size: 14px
        }

        .loginleft .logoLoginPage {
            width: 150px;
            margin: 0 auto;
            display: block
        }

        .loginleft .filterlogin {
            margin-top: 20px
        }

        .login-page1 .custom-control-input {
            height: auto !important
        }

        .login-page1 label.custom-control-label {
            font-size: 12px;
            font-weight: 600 !important;
            vertical-align: text-bottom
        }

        .login-page1 small a {
            color: #fff;
            text-decoration: underline
        }

        .login-page1 .btn-login {
            margin: 0 0 0 auto;
            display: block;
            padding: 5px 30px;
            text-transform: uppercase;
            font-size: 16px
        }

        .login-page1 input:-webkit-autofill,
        .login-page1 input:-webkit-autofill:hover,
        .login-page1 input:-webkit-autofill:focus,
        .login-page1 textarea:-webkit-autofill,
        .login-page1 textarea:-webkit-autofill:hover,
        .login-page1 textarea:-webkit-autofill:focus {
            -webkit-text-fill-color: #111;
            -webkit-box-shadow: 0 0 0px 1000px #fff inset;
            -webkit-transition: background-color 5000s ease-in-out 0s;
            transition: background-color 5000s ease-in-out 0s
        }

        @media (max-width: 767px) {
            .loginleft .filterlogin {
                display: none
            }

            .login-page1 .modal-body {
                padding: 60px 10px !important;
                display: initial
            }

            .login-page1 .btn-login {
                margin: 0;
                width: 100%;
                background: #000 !important;
                color: #00c6f3;
                text-transform: capitalize;
                padding: 7px
            }

            .login-page1 .modal-dialog {
                margin: 0
            }

            .login-page1 p {
                font-size: 18px;
                margin-bottom: 7px;
                display: none
            }

            .login-page1 form .form-group {
                margin-bottom: 7px
            }

            .loginleft .logoLoginPage {
                height: 110px;
                width: auto
            }

            .login-page1 input,
            .login-page1 input:focus {
                height: 40px
            }
        }

        .down-apk {
            display: flex;
            justify-content: center;
            align-items: center;
            color: inherit;
            text-decoration: none
        }

        .fp-link {
            color: #fff !important;
            text-transform: capitalize;
            margin-bottom: 3%;
            font-size: 15px;
            background: #000 !important;
            padding: 8px 18px;
            border-radius: 4px;
            display: block;
            width: 100%;
            justify-content: center;
            display: flex;
            align-items: center
        }

        .fp-link small {
            font-size: 15px;
            border-bottom: 1px solid
        }

        .fp-link svg {
            color: #fff;
            margin: 0 10px
        }
        
        @media only screen and (max-width: 600px) {
          .mobile-section {
            display: none;
          }
        }
        
    </style>
</head>