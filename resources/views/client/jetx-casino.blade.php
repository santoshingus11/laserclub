@php 
$available_credit = 0;
if(Auth::guard('client')->user()){
$available_credit=QueryHelper::total_availablecredit(Auth::guard('client')->user()->id,Auth::guard('client')->user()->role_id);
}


@endphp
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('layouts.client-header-url')
</head>
<?php $page = 'Home';
 ?>
@include('layouts.client-header')

  @include('layouts.client-buttons',['page' => 'aviator_jetx'])

<section id="home-pages" class="home_pages">
  <div class="banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-md-12 col-sm-12">
          <div class="All-pages-left-side-bar  d-none d-sm-block">
            @include('layouts.client-left-side-bar')
          </div>
        </div>
        <div class="col-lg-7 col-md-12 col-sm-12">
          <div class="Home_pages_main_section">
            <div class="sports-wrapper block">
              <div class="events">
                   <h1 class="event_Cricket">Aviator & JetX
                  <span class="starts-in-label d-block d-sm-none">Balance: {{$available_credit}}</span>
                </h1>
               <div class="row mb-5 mt-3">
                    <div class="btn-group-container" style="overflow-x: auto; white-space: nowrap; width: 100%;">
                        <div class="btn-group align-item-center" style="display: flex; justify-content: space-between;">
                           
                            <button type="button" class="btn btn-dark btn-sm btn-block me-1 pricebtn" onclick="filterGames('jetx')">JetX</button>
                            <button type="button" class="btn btn-dark btn-sm btn-block me-1 pricebtn" onclick="filterGames('aviator')">Aviator</button>
                           
                        </div>
                    </div>
                   
                   

                           
             </div>
                <div class="events-row">
                  <div class="row" id="gamesContainer">
                <!--  @foreach($data['games'] as $game)-->
                <!--        <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6">-->
                <!--            <div class="Lottery">-->
                <!--                <div class="d-inline-block casino-image">-->
                <!--                    <a href="{{ url('/slot/game/lounch') }}/{{ $game->id }}">-->
                <!--                        <img src="{{$game->img}}" class="img-fluid">-->
                <!--                    </a>-->
                <!--                </div>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--@endforeach-->
                   

                   
                   

                   
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12">
          <div class="homepages-right-section">
            <div class="account-overview">
              <div data-bs-toggle="collapse" class="Credit_home_button" href="#collapseExample" role="button"
                aria-expanded="false" aria-controls="collapseExample"><span><strong>Available Credit: </strong> <span
                    class="value">{{$available_credit}}</span></span>
                <i class="fas fa-angle-down m-l-5 toggle-icon"></i>
              </div>
              <div class="collapse Available-Credit" id="collapseExample">
                <ul class="credit-boxs">
                  <!--<li><strong>Credit Limit: </strong> <span>0.00</span></li>-->
                  <!--<li><strong>Winnings:</strong> <span>0.00</span></li>-->
                  <!--<li><strong>Total Net Exposure: </strong> <span>0.00</span></li>-->
                </ul>
              </div>
            </div>

            <div class="user-settings">
              <div class="d-flex">
                <div class="switchToggle float-left">
                  <input type="checkbox" id="switch"> <label for="switch"></label>
                </div>
                <label class="float-left m-l-10 m-t-5">1 Click Betting</label>
              </div>
              <div id="hiddenSection" class="hidden-section">
                <button class="btn btn-primary float-right m-b-5 m-r-5 edit-save-btn">Edit</button>
                <div class="one-click-bet float-left w-100 m-b-5">
                  <button class="btn btn-primary m-b-5 m-b-5">2000</button>
                  <button class="btn btn-primary m-b-5 m-b-5">5000</button>
                  <button class="btn btn-primary m-b-5 m-b-5">7000</button>
                </div>

                <div class="edit-section hidden">
                  <input type="text" class="edit-input wd-100 no_bc active selected" value="2000">
                  <input type="text" class="edit-input wd-100 no_bc" value="5000">
                  <input type="text" class="edit-input wd-100 no_bc" value="7000">
                </div>
              </div>
            </div>

            <div class="bet-manager_Betslip">
              <h4>Betslip</h4>
              <div class="Betslip_-section">
                <ul class="nav nav-pills Betslip_tab-menu" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                      data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                      aria-selected="true">Betslip</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                      data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                      aria-selected="false">Open Bets</button>
                  </li>
                  <li>
                    <button class="btn btn-primary fix-right-side-bar" id="editButton" type="button">Edit
                      Stakes</button>
                  </li>
                </ul>
                <div class="tab-content extra-data-height-scroll" id="pills-tabContent">
                  <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                    aria-labelledby="pills-home-tab" tabindex="0">
                    <div class="bets betslip center">
                      <div class="sc-content">
                        <ul class="content relative">
                          <div class="overlay edit-stakes-buttons" id="editButton" style="display:none"></div>
                          <li class="input-table-value">
                            <div class="betslip bets py-0">
                              <div class="betslipContent">
                                <div class="bets betslip center">
                                  <p>Click on the odds to add selections to the betslip.</p>
                                </div>
                              </div>
                            </div>
                          </li>
                          <li class="edite-table-value">
                            <div class="edit-stakes-buttons">
                              <div class="buttons-div">
                                <input type="number" value="2000" class="form-control" id="">
                                <input type="number" value="50000" class="form-control" id="">
                                <input type="number" value="7000" class="form-control" id="">
                                <input type="number" value="10000" class="form-control" id="">
                                <input type="number" value="25000" class="form-control" id="">
                                <input type="number" value="50000" class="form-control" id="">

                                <div class="text-center m-t-10">
                                  <button class="btn btn-link text-right" id="cancelButton" class="hide">Cancel</button>
                                  <button class="btn btn-primary" id="saveButton">Save</button>
                                </div>
                              </div>
                            </div>
                          </li>
                          <div id="successMessage" class="hidden">Successfully Updated</div>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">
                    <div class="sc-content scrollcontent">
                      <ul class="content" style="position: relative;">
                        <li>
                          <div class="bets">
                            <div class="show-bet  betslip"><label class="confirmation-checkbox">
                                <div class="custom-control custom-checkbox Matched_Bets"><input id="checkbox-1"
                                    type="checkbox" name="checkbox-1" autocomplete="off" class="custom-control-input"
                                    value="true"><label for="checkbox-1" class="custom-control-label">
                                    Show Bet Info
                                  </label></div>
                              </label></div>
                            <div class="matched-bets">
                              <div class="toggleable-list-title"><span>Unmatched Bets</span> <i
                                  class="fas fa-angle-down m-l-5 toggle-icon"></i></div>
                              <p class="empty-list-info"><span>
                                  You Have
                                  no Unmatched Bet</span></p>
                            </div>
                            <div class="matched-bets">
                              <div class="toggleable-list-title"><span>Matched Bets</span> <i
                                  class="fas fa-angle-down m-l-5 toggle-icon"></i></div>
                              <div class="filter">
                                <div id="radios2" role="group" tabindex="-1" class="d-flex Matched_Bets">
                                  <div class="custom-control custom-control-inline custom-checkbox Matched_Bets">
                                    <input type="checkbox" name="radioSubComponent" autocomplete="off"
                                      class="custom-control-input" value="bet" id="__BVID__87"><label
                                      class="custom-control-label" for="__BVID__87">Consolidate</label>
                                  </div>
                                  <div class="custom-control custom-control-inline custom-checkbox Matched_Bets">
                                    <input type="checkbox" name="radioSubComponent" autocomplete="off"
                                      class="custom-control-input" value="average" id="__BVID__88"><label
                                      class="custom-control-label" for="__BVID__88">Average Odd</label>
                                  </div>
                                  <div class="custom-control custom-control-inline custom-checkbox Matched_Bets">
                                    <input type="checkbox" name="radioSubComponent" autocomplete="off"
                                      class="custom-control-input" value="date" id="__BVID__89"><label
                                      class="custom-control-label" for="__BVID__89">Order By Date</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>


                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
<script>

 $(document).ready(function() {
   filterGames('jetx');
});



   let gamesData = {!! json_encode($data['games']) !!};
let filteredGames = [];

function filterGames(label) {
    filteredGames = gamesData.filter(game => game.label === label);
    renderGames(filteredGames);
    document.getElementById('loadMoreBtn').style.display = 'none'; // Hide the load more button
}

function renderGames(games) {
    const gamesContainer = document.getElementById('gamesContainer');
    gamesContainer.innerHTML = '';
    games.forEach(game => {
        const gameItem = document.createElement('div');
        gameItem.classList.add('col-md-6', 'col-lg-3', 'col-sm-6', 'col-xs-6');

        const lotteryDiv = document.createElement('div');
        lotteryDiv.classList.add('Lottery');

        const casinoImageDiv = document.createElement('div');
        casinoImageDiv.classList.add('d-inline-block', 'casino-image');

        const gameUrl = "{{ url('/slot/game/lounch') }}/" + game.id;
        const gameImage = document.createElement('img');
        gameImage.setAttribute('src', game.img);
        gameImage.classList.add('img-fluid');

        const gameLink = document.createElement('a');
        gameLink.setAttribute('href', gameUrl);
        gameLink.appendChild(gameImage);

        casinoImageDiv.appendChild(gameLink);
        lotteryDiv.appendChild(casinoImageDiv);
        gameItem.appendChild(lotteryDiv);
        
        gamesContainer.appendChild(gameItem);
    });
}

// Initially, display all games
filterGames('evolution_lobby');
</script>

  @include('layouts.client-footer')