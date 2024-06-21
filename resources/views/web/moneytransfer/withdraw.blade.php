@extends('web.layouts.master')
@section('title', 'Withdraw | BANK')
@section('content')
<div class="container">
    <div class="container mt-4" style="border:1px solid black !important; padding-right:0px !important; padding-left: 0px !important;">
    <h4 class="text-center p-2 bg-dark" style=" color: white !important">Withdraw</h4>
        <div class="row mt-3">
           <div class="col-md-2"></div>
            <div class="col-md-8 p-3">
            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                <div class="container p-2" >
                        
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




@stop
 


 <script>
     function setValue(button , value) {
      document.getElementById('price').value = value;
     
    }
    function copyText(text) {
    // Create a temporary textarea element
    var textarea = document.createElement('textarea');
    // Set the value of the textarea to the text to be copied
    textarea.value = text;
    // Make the textarea invisible
    textarea.style.position = 'fixed';
    textarea.style.opacity = 0;
    // Append the textarea to the DOM
    document.body.appendChild(textarea);
    // Select the text in the textarea
    textarea.select();
    // Copy the selected text to the clipboard
    document.execCommand('copy');
    // Remove the textarea from the DOM
    document.body.removeChild(textarea);
}
 </script>
 