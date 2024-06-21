@extends('web.layouts.master')
@section('title', 'Lobby')

@section('content')
<style>
    #palynowbtn:hover{
        cursor:pointer;
        color:red;
    }
</style>

<div class="container">
   

    <div class="row mt-5" id="gameContainer">
                       @foreach($data as $game)
                       
                    <div class="col-lg-4 col-md-6 col-sm-6" data-catid="">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{$game->picture}}">
                                        <!-- <div class="ep">18 / 18</div> -->
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> {{$game->gameId}}</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Live Casino</li>
                                            <li>Game</li>
                                        </ul>
                                        <h5><a href="#" class="play-now-btn" data-game-id="{{$game->gameId}}" data-group="{{$game->gameGroup}}">Play Now</a></h5>
                                    </div>
                                </div>
                            </div>
                       
                     @endforeach
    </div>

</div>
<style>
    #spinner {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
    }
    #loading {
  display: inline-block;
  width: 50px;
  height: 50px;
  border: 3px solid rgba(255,255,255,.3);
  border-radius: 50%;
  border-top-color: #fff;
  animation: spin 1s ease-in-out infinite;
  -webkit-animation: spin 1s ease-in-out infinite;
}

@keyframes spin {
  to { -webkit-transform: rotate(360deg); }
}
@-webkit-keyframes spin {
  to { -webkit-transform: rotate(360deg); }
}
</style>
<div id="spinner">
    <div id="loading"></div>
</div>

@stop

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    
    $(document).ready(function() {
        
        $('.play-now-btn').click(function(e) {
            e.preventDefault(); 
            
            $('#spinner').show();
            
            var gameId = $(this).data('game-id');
            var group = $(this).data('group');
            $.ajax({
                url: '/loginlobbyController', 
                method: 'POST',
                 headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                data: { gameId: gameId,group:group }, 
                success: function(response) {
                   if(response.status=='notauth'){
                       $('#spinner').hide();
                       alert('Please Login First!');
                   }else{
                      $('#spinner').hide();
                       launch(response.data,response.gameID,response.group);
                   }
                    
                },
                error: function(xhr, status, error) {
                    
                    console.error(xhr.responseText);
                }
            });
        });
        
        function launch(response,gid,gname){
             const { token, lobbyURL } = response;

            // Constructing the redirect URL with the token
            let redirectURL = `${lobbyURL}?token=${token}`;
    
            // Checking if GAME_REQUESTED parameter is provided
            const GAME_REQUESTED = "gameid"; // Replace with your actual parameter name
            const gameID = gid // Replace with the actual game ID if provided
    
            // if (gameID) {
            //     redirectURL += `&GAME_REQUESTED=${gameID}`;
            // }
    
            // Checking if GAME_GROUP_REQUESTED parameter is provided
            const GAME_GROUP_REQUESTED = "groupname"; // Replace with your actual parameter name
            const groupName = gname; // Replace with the actual group name if provided
    
            if (groupName) {
                redirectURL += `&GAME_GROUP_REQUESTED=${groupName}`;
            }
    
            // Redirecting the browser to the constructed URL
            window.open(redirectURL, '_blank');
        }
        
    });
</script>

