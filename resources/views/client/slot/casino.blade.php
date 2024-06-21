<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('layouts.client-header-url')
</head>
<?php $page = 'Casino Games';
 ?>
 @include('layouts.client-header')
 @include('client.slot.styles')
 @if(Auth::guard('client')->user())
 <div class="Welcometo-section">
          @include('layouts.client-balance-section')
        </div>
 @endif
  @include('layouts.client-buttons',['page' => 'live_casino'])






 <div class="ag-format-container  mt-5">
  <div class="ag-courses_box">
    

  @foreach($data['games'] as $game)
  
    <div class="ag-courses_item">
      <a href="{{ url('/slot/game/lounch') }}/{{ $game->id }}" class="ag-courses-item_link" style="background-image: url('{{$game->img}}');">
        <div class="ag-courses-item_bg"></div>

        <div class="ag-courses-item_title">
       
        </div>

        <div class="ag-courses-item_date-box">
          
          <span class="ag-courses-item_date">
            Click to Play
          </span>
        </div>
      </a>
    </div>
   
  
    @endforeach
  </div>
</div>
















<section id="home-pages" class="home_pages">

  @include('layouts.client-footer')