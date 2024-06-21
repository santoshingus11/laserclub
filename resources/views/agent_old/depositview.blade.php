<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="">
    @include('layouts.header-url')
</head>

<body>
    <div class="main-wrapper Dashboard-bg admin-bg customResponsive">
        <!-- partial:partials/_sidebar.html -->
        <div class="left-side-bar">@include('layouts.left-side-bar')</div>
        <div class="page-wrapper bg-none">
            <!-- partial:partials/_navbar.html -->
            <div class="top-header-section">@include('layouts.header')</div>
            <!-- partial -->
            <div class="page-content">
                <div class="Welcometo-section">
                    @include('layouts.top-balance-section')
                </div>
                <div class="row">
                    <div class="col-xl-12 grid-margin stretch-card">
                        <div class="card overflow-hidden">
                            <div class="card-body pt-2">
                                <div id="logoutsuccessMessage" class="center_error_message_all_section relative">
                                </div>
                                <div
                                    class="d-flex justify-content-between align-items-center pb-2 border-bottom mobile_port_change-new">
                                    <div class="d-inline-flex align-items-center">
                                        <h4 class=" mb-0"> Deposit Requests</h4>
                                    </div>
                                    <form class="forms-sample d-flex align-items-center">
                                        <div class="mb-1">
                                            <label for="exampleInputUsername1" class="form-label">User Name</label>
                                            <input type="text" class="form-control event-search w-300"
                                                id="exampleInputUsername1" autocomplete="off"
                                                placeholder="Search By User name or user_id">
                                        </div>

                                        <div class="mt-4">
                                            <button type="button"
                                                class="btn btn-primary Refresh btn-icon-text mb-2 mb-md-0 mx-2"
                                                onclick="searchdetails(document.getElementById('exampleInputUsername1').value, 'online-user', 'searchresult')">
                                                <i data-feather="search"></i> Search
                                            </button>
                                           
                                        </div>
                                    </form>
                                </div>
                                <div class="Pand-l-Statement mt-3">
                                    <div class="card-body_agent-listing-demoag5">
                                        <div class="Agent_-Listing height30vh mt-1">
                                            <div class="table-responsive border-bottom">
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="align-C">Sr.No</th>
                                                            <th class="align-C">UserName</th>
                                                            <th class="align-C">Balance</th>
                                                            <th class="align-C">Proof</th>
                                                            @if(Auth::guard('agent')->user()->role_id ==1 || Auth::guard('agent')->user()->role_id==4)
                                                            <th class="align-C">Action</th>
                                                            <th class="align-C">Remove</th>
                                                            @endif
                                                            
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody id="searchresult">
                                                    @if(count($data)>0)
                                                        @foreach ($data as $key => $sc)
                                                        <tr>
                                                            <td class="text-center">{{ $key + 1 }}</td>
                                                            <td class="text-center">{{$sc->username}}</td>
                                                            <td class="text-center">
                                                                {{$sc->price}}
                                                            </td>
                                                            <td class="text-center">
                                                            <!-- <img src="{{ asset('deposit/' . $sc->img) }}" alt="" width="30" height="30">  -->
                                                            <img src="{{ asset('deposit/' . $sc->img) }}" alt="" width="30" height="30" class="full-image" data-image="{{ asset('deposit/' . $sc->img) }}" onclick="openFullImage(this)">
                                                            </td>
                                                            @if(Auth::guard('agent')->user()->role_id ==1)
                                                                @if($sc->approve == 0)
                                                                <td class="text-center"><a class="btn btn-primary" href="{{route('super_admin_approve_deposit', ['id' => $sc->id]) }}">Approve</a></td>
                                                               <td class="text-center"><a class="btn btn-danger" href="{{route('cancel_deposit_request', ['id' => $sc->id]) }}" onclick="showAlert()">Cancel</a></td>
                                                                @else
                                                                <td class="text-center"><span class="bg-success">Approved</span></td>
                                                                <td></td>
                                                                @endif
                                                            @elseif(Auth::guard('agent')->user()->role_id==4)
                                                                @if($sc->approve == 0 || $sc->approve == 1)
                                                                <td class="text-center"><a class="btn btn-primary" href="{{route('master_admin_approve_deposit', ['id' => $sc->id]) }}">Approve</a></td>
                                                                <td class="text-center"><a class="btn btn-danger" href="{{route('cancel_deposit_request', ['id' => $sc->id]) }}" onclick="showAlert()">Cancel</a></td>
                                                                
                                                                @else
                                                                <td class="text-center"><span class="bg-success">Approved</span></td>
                                                                <td class="text-center"></td>
                                                                @endif
                                                            @endif
                                                           
                                                        </tr>
                                                        @endforeach
                                                        @else
                                                        <tr>No Result found!</tr>
                                                        @endif
                                                    </tbody>
                                                </table>
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
     <!-- Button trigger modal -->


</div>
<script>
    function openFullImage(imageElement) {
        var imageUrl = imageElement.getAttribute('data-image');
        window.open(imageUrl, '_blank');
    }
</script>
<script>
  function showAlert() {
    alert("Are you sure you want to cancel?");
  }
</script>
      
        @include('layouts.footer')
