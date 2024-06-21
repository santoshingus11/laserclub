@extends('web.layouts.master')
@section('title', 'Fancy')

@section('content')
 <div id='content' class='row-fluid mt-3 mb-3'>
     
     <div class="row">
  <div class="col-md-2 pl-3 wrapper">
      <div class="sidebar">
        
        <ul>
            @foreach($data as $game)
                 <!--<li><a href="#"><i style='font-size:16px' class='fa'>{!! $game->unicode !!}</i>{{$game->sports_name}}</a></li>-->
                  <li class="dropdown">
                        <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">
                            <i style='font-size:16px' class='fa'>{!! $game->unicode !!}</i>{{$game->sports_name}}
                        </a>
                        <ul class="dropdown-menu">
                           
                            <li><a href="#"><i style='font-size:16px' class='fa'></i>oneitem</a></li>
                           
                        </ul>
                    </li>
            @endforeach
           
           
        </ul> 

    </div>
      
      
  </div>
  <div class="col-md-7" style="background-color:white; margin: 0px; padding: 0px;">
    <!-- content goes here -->
  </div>
  <div class="col-md-3">
    <!-- content goes here -->
  </div>
</div>
     
   <style>
       .wrapper{
  display: flex;
  position: relative;
  padding:0px;
}

.wrapper .sidebar{
  width: 250px;
  height: 100%;
  background: #000;
 
  /*position: fixed;*/
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #bdb8d7;
  display: block;
}

.wrapper .sidebar ul li a .fa{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #7d777717;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 
.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a {
    display: block;
    width: 40px;
    height: 40px;
    background: transparent;
    line-height: 45px;
    text-align: center;
    margin: 0 5px;
    color: #bdb8d7;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
}
   </style> 
    
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.dropdown-toggle').dropdown();
        });
    </script>
@endpush
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
@stop
<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>-->

  
