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

<section id="home-pages" class="home_pages">

<div class="container">
    <div class="container mt-4" style="border:1px solid black !important; padding-right:0px !important; padding-left: 0px !important;">
    <h4 class="text-center p-2 bg-dark" style=" color: white !important">Deposit</h4>
        <div class="row mt-3">
            <div class="col-md-4 p-3">
               <div class="container p2">
               <div class="d-flex flex-column mt-5">
               <a href="{{route('client.depsoist_bank_view')}}" class="btn btn-dark mt-5 ">
                       BANK TRANSFER
                       
                    </a>
                    <a href="{{route('deposit_funds')}}" class="btn btn-dark mt-2 ">
                        PAYTM
                       
                    </a>
                    <a href="{{route('client.depsoist_phonepe_view')}}" class="btn btn-dark mt-2 active">
                        PHONEPE
                       
                    </a>
                    <a href="{{route('client.depsoist_gpay_view')}}" class="btn btn-dark mt-2">
                        GPAY
                       
                    </a>
                    <a href="{{route('client.depsoist_upi_view')}}" class="btn btn-dark mt-2">
                        UPI
                       
                    </a>
                    
                   
                </div>
               </div>
            </div>
            <div class="col-md-8 p-3">
            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                <div class="container p-2" >
                        <div class="row">
                            <h3 class="text-center text-white"><span class="bg-dark p-2">Select Amount</span></h3>
                        </div>
                        <div class="container-fluid mt-5">
                            <div class="row">

                            <div class="btn-group">
                                <button type="button" class="btn btn-dark btn-sm btn-block me-1 pricebtn" onclick="setValue(this,500)">500</button>
                                <button type="button" class="btn btn-dark btn-sm btn-block me-1 pricebtn" onclick="setValue(this,5000)">5000</button>
                                <button type="button" class="btn btn-dark btn-sm btn-block me-1 pricebtn" onclick="setValue(this,10000)">10000</button>
                                <button type="button" class="btn btn-dark btn-sm btn-block me-1 pricebtn" onclick="setValue(this,20000)">20000</button>
                                <button type="button" class="btn btn-dark btn-sm btn-block me-1 pricebtn" onclick="setValue(this,50000)">50000</button>
                                <button type="button" class="btn btn-dark btn-sm btn-block pricebtn" onclick="setValue(this,100000)">100000</button>
                            </div>
                            </div>
                        </div>
                        <form action="{{ route('depositrequestsubmit') }}" method="POST" id="deposit-form" enctype="multipart/form-data">
                            @csrf
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="col">
                                    <input type="text" id="price" name="price" class="form-control" placeholder="Amount" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col">
                                    <input type="text" id="bonus" name="bonus" class="form-control" placeholder="Bonus Code">
                                </div>
                                <input type="hidden" value="{{$account->id}}" name="id">
                            </div>
                        </div>
                        
                        <div class="row">
                          
                            <div class="card">
                                <div class="card-header bg-dark">
                                    <h4 class="text-white">Wallet</h4>
                                </div>
                                    <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h4 id="wallet-number" class="mb-0 text-bold"><span style="font-weight: bold;">{{$account->number}}</h4>
                                        <a id="copy-button" class="btn btn-warning ms-3" onclick="copyText()">Copy</a>
                                    
                                    </div>  
                                    <p>Account title: <span style="font-weight: bold;">{{$account->title}}</p>
                                    </div>
                            </div>

                            <div class="card">
                                <div class="card-header bg-dark">
                                    <h4 class="text-white">Payment Proof Screen Shot</h4>
                                </div>
                                <div class="card-header">
                                    <input type="file" name="image" required>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="container mt-5">
                <button class="btn btn-lg btn-primary">Submit</button>
            </div>
            </form>
                </div>
            </div>  
            
            
        </div>
    </div>
</div>












 


 <script>
     function setValue(button , value) {
      document.getElementById('price').value = value;
     
    }
    function copyText() {
    // Select the text within the h4 element
    var text = document.getElementById('wallet-number').innerText;

    // Create a temporary textarea element to hold the text
    var textarea = document.createElement('textarea');
    textarea.value = text;

    // Append the textarea to the body
    document.body.appendChild(textarea);

    // Select the text within the textarea
    textarea.select();

    // Copy the selected text to the clipboard
    document.execCommand('copy');

    // Remove the temporary textarea
    document.body.removeChild(textarea);
    var copyButton = document.getElementById('copy-button');
    copyButton.innerText = 'Copied';
    // Optionally provide feedback to the user
    
}
 </script>
  @include('layouts.client-footer')