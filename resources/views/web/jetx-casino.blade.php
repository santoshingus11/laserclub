@extends('web.layouts.master')
@section('title', 'Aviator & JetX')

@section('content')
<style>
    #palynowbtn:hover{
        cursor:pointer;
        color:red;
    }
</style>

<div class="container">
    <div class="row mt-5">
       <div class="btn-group-container" style="overflow-x: auto; white-space: nowrap; width: 100%;">
        <div class="btn-group align-item-center" style="display: flex; justify-content: space-between;">
            @foreach($data['labels'] as $label)
            <button class="btn btn-dark btnclass" id="label_{{$label['id']}}" onclick="filterGames('{{$label['id']}}')">{{strtoupper($label['name'])}}</button>
            @endforeach
        </div>
       </div>
    </div>

    <div class="row mt-5" id="gameContainer">
                       @foreach($data['games'] as $game)
                       
                    <div class="col-lg-4 col-md-6 col-sm-6" data-catid="{{$game->cat_id}}">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{$game->img}}">
                                        <!-- <div class="ep">18 / 18</div> -->
                                        <div class="comment"><i class="fa fa-comments"></i> 11</div>
                                        <div class="view"><i class="fa fa-eye"></i> {{$game->id}}</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>Live Casino</li>
                                            <li>Game</li>
                                        </ul>
                                        <h5><a href="{{ url('/slot/game/lounch') }}/{{ $game->id }}" id="palynowbtn">Play Now</a></h5>
                                    </div>
                                </div>
                            </div>
                       
                     @endforeach
    </div>

</div>




 





 


@stop

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        filterGames('{{$data["labels"][0]['id']}}');
    });

    function filterGames(labelId) {
    // Hide all games
    var games = document.querySelectorAll('#gameContainer .col-lg-4');
    games.forEach(function(game) {
        game.style.display = 'none';
    });

    // Show games with matching label id
    var filteredGames = document.querySelectorAll('#gameContainer .col-lg-4[data-catid="' + labelId + '"]');
    filteredGames.forEach(function(game) {
        game.style.display = 'block';
    });
}
</script>
