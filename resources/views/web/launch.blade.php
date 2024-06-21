@extends('web.layouts.master')
@section('title', 'Game Launcher')

@section('content')



 

 @if (isset($gameUrl))
       <div class="container-fluid">
            <iframe id="frame" src="{{ $gameUrl }}" allowfullscreen></iframe>
       </div>
    @else
        <p>Game not found.</p>
    @endif



 


@stop

 <style type="text/css">
        iframe {
            left: 0px;
            top: 0px;
            position: relative;
            display: flex;
            align-items: center;
            background-color: black;
            margin: 0px;
            padding: 0px;
            width: 100%;
            height: 100%;
            border: 0px;
        }
        
         @media screen and (max-width: 767px) {
        #frame {
            position: relative;
            top: -12px; /* Move the iframe 10px up */
        }
        .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }
    }
    </style>
    <script>
        function closeGame() {
            window.location.href = "{{url('slot/games') }}";
        }
        window.gclose = closeGame;
        window.close = closeGame;
        window.onmessage = function(event) {
            if (event.data == 'closeGame' || event.data == 'close' || event.data.indexOf("GAME_MODE:LOBBY") >= 0) {
                closeGame();
            }
        }
    </script>


