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
                                        <h4 class=" mb-0"> Payment Methods</h4>
                                    </div>
                                    
                                </div>
                                <div class="Pand-l-Statement mt-3">
                                    <div class="card-body_agent-listing-demoag5">
                                        <div class="Agent_-Listing height30vh mt-1">
                                            <div class="table-responsive border-bottom">
                                                <table class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="align-C">Method</th>
                                                            <th class="align-C">Bank Name</th>
                                                            <th class="align-C">Account Holder</th>
                                                            
                                                            <th class="align-C">Account Number</th>
                                                            <th class="align-C">Branch</th>
                                                            <th class="align-C">IFSC</th>
                                                            <th class="align-C">Action</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody id="searchresult">
                                                    @foreach($accounts as $account)
                                                    <form method="POST" action="{{ route('agent.update.account') }}">
                                                        @csrf
                                                        @if($account->id == 2)
                                                        <tr>
                                                        <td class="text-center">{{$account->name}} <input type="hidden" value="{{$account->id}}" name="id"></td>
                                                        <td class="text-center">
                                                                <input type="text" name="b_name" value="{{ $account->b_name }}" class="form-control">
                                                            </td>
                                                        
                                                            <td class="text-center">
                                                                <input type="text" name="account_title" value="{{ $account->title }}" class="form-control">
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="text" name="account_number" value="{{ $account->number }}" class="form-control">
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="text" name="branch" value="{{ $account->branch }}" class="form-control">
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="text" name="ifsc" value="{{ $account->ifsc }}" class="form-control" >
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="submit" class="btn btn-primary">Update</button>
                                                            </td>
                                                        </tr>
                                                        @else
                                                        <tr>
                                                        <td class="text-center">{{$account->name}} <input type="hidden" value="{{$account->id}}" name="id"></td>
                                                        <td class="text-center">
                                                                <input type="hidden" name="b_name" value="" class="form-control" readonly>
                                                            </td>
                                                        
                                                            <td class="text-center">
                                                                <input type="text" name="account_title" value="{{ $account->title }}" class="form-control">
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="text" name="account_number" value="{{ $account->number }}" class="form-control">
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="hidden" name="branch" value="" class="form-control" readonly>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="hidden" name="ifsc" value="" class="form-control" readonly>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="submit" class="btn btn-primary">Update</button>
                                                            </td>
                                                        </tr>
                                                        @endif
                                                        
                                                    </form>
                                                       @endforeach
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

      
        @include('layouts.footer')
