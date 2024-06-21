<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  @include('layouts.client-header-url')
</head>
<?php $page = 'Withdraw';
 ?>
 @include('layouts.client-header')

<section id="home-pages" class="home_pages">

<div class="container mb-5">
    <div class="container mt-4" style="border:1px solid black !important; padding-right:0px !important; padding-left: 0px !important;">
    <h4 class="text-center p-2 bg-dark" style=" color: white !important">Your Account Balance: {{Auth::guard('client')->user()->balance}}</h4>
        <div class="row mt-3">
           <div class="col-md-2"></div>
            <div class="col-md-8 p-3">
            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                <div class="container p-2" >
                        <div class="row">
                            <h3 class="text-center text-white"><span class="bg-dark p-2">Make Withdraw</span></h3>
                        </div>
                       
                        <form action="{{ route('withdrawrequestsubmit') }}" method="POST" id="deposit-form" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-4">
        <div class="col-md-6">
            <div class="col">
                <input type="text" id="bank_name" name="bank_name" class="form-control" placeholder="Bank Name" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="col">
                <input type="text" id="account_number" name="account_number" class="form-control" placeholder="Account Number" required>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="col">
                <input type="text" id="account_holder" name="account_holder" class="form-control" placeholder="Account Holder" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="col">
                <input type="text" id="balance" name="balance" class="form-control" placeholder="Balance" required>
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