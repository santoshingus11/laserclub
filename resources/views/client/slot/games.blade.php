<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('layouts.client-header-url')
  
</head>
<style>
    .active {
    background-color: #007bff;
    color: #fff;
}
</style>
<?php $page = 'Slot Games';
 ?>
 @include('layouts.client-header')
 @include('client.slot.styles')
 @if(Auth::guard('client')->user())
 <div class="Welcometo-section">
          @include('layouts.client-balance-section')
        </div>
 @endif
  @include('layouts.client-buttons',['page' => 'casino'])

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="container">
    <div class="row">
        <div class="btn-group" style="display: flex; flex-wrap: nowrap; overflow-x: auto; max-width: 100%;">
            @foreach($data['labels'] as $label)
                @if($label!="evolution_lobby")
                <button type="button" class="btn btn-dark btn-sm btn-block me-1 pricebtn" onclick="filterGames('{{$label}}')">{{ strtoupper($label) }}</button>
                @endif
            @endforeach
        </div>
    </div>
</div>



<div class="ag-format-container text-center">
    <div class="ag-courses_box" id="gamesContainer">
        <!-- Games will be dynamically loaded here -->
    </div>
</div>







<section id="home-pages" class="home_pages">
<script>
    let gamesData = {!! json_encode($data['games']) !!};

    function filterGames(label) {
        const filteredGames = gamesData.filter(game => game.label === label);
        renderGames(filteredGames);
        const buttons = document.querySelectorAll('.btn-dark');
    buttons.forEach(button => {
        button.classList.remove('active');
    });
    
    // Add active class to the selected button
    const selectedButton = document.querySelector(`button[data-label="${label}"]`);
    selectedButton.classList.add('active');
    }

    function renderGames(games) {
        const gamesContainer = document.getElementById('gamesContainer');
        gamesContainer.innerHTML = '';
        games.forEach(game => {
            const gameItem = document.createElement('div');
            gameItem.classList.add('ag-courses_item');
            const gameUrl = "{{ url('/slot/game/lounch') }}/" + game.id;
            gameItem.innerHTML = `
                <a href="${gameUrl}" class="ag-courses-item_link" style="background-image: url('${game.img}');">
                    <div class="ag-courses-item_bg"></div>
                    <div class="ag-courses-item_title"></div>
                    <div class="ag-courses-item_date-box">
                        <span class="ag-courses-item_date">Click to Play</span>
                    </div>
                </a>`;
            gamesContainer.appendChild(gameItem);
        });
    }

    // Initially, display all games for the first label
    filterGames('{{ $data["labels"][0] }}');
</script>
  @include('layouts.client-footer')