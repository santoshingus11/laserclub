@extends('web.layouts.master')
@section('title', 'Deposit | GPAY')
@section('content')

<div class="container p-5">
    <div class="container border border-danger p-0">
        <h4 class="text-center bg-danger text-white p-2">Deposit</h4>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex flex-column">
                    <a href="{{ route('client.depsoist_bank_view') }}" class="btn btn-dark mb-2">BANK TRANSFER</a>
                    <a href="{{ route('deposit_funds') }}" class="btn btn-dark mb-2 ">PAYTM</a>
                    <a href="{{ route('client.depsoist_phonepe_view') }}" class="btn btn-dark mb-2 ">PHONEPE</a>
                    <a href="{{ route('client.depsoist_gpay_view') }}" class="btn btn-dark mb-2 active">GPAY</a>
                    <a href="{{ route('client.depsoist_upi_view') }}" class="btn btn-dark mb-2">UPI</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="container">
                    <div class="row">
                        <div class="btn-group">
                            <div class="col">
                                <button type="button" class="btn btn-dark btn-sm mb-2" onclick="setValue(this, 500)">500</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-dark btn-sm btn-block me-1 pricebtn" onclick="setValue(this,5000)">5000</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-dark btn-sm btn-block me-1 pricebtn" onclick="setValue(this,10000)">10000</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-dark btn-sm btn-block me-1 pricebtn" onclick="setValue(this,20000)">20000</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-dark btn-sm btn-block me-1 pricebtn" onclick="setValue(this,50000)">50000</button>
                            </div>
                            <div class="col">
                                <button type="button" class="btn btn-dark btn-sm btn-block pricebtn" onclick="setValue(this,100000)">100000</button>
                            </div>
                            <!-- Repeat similar button structure for other amounts -->
                        </div>
                    </div>
                    <form action="{{ route('depositrequestsubmit') }}" method="POST" id="deposit-form" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <input type="text" id="price" name="price" class="form-control" placeholder="Amount" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" id="bonus" name="bonus" class="form-control" placeholder="Bonus Code">
                                <input type="hidden" value="{{$account->id}}" name="id">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-dark">
                                        <h6 class="text-white">Wallet</h6>
                                    </div>
                                    <div class="card-body">
                                        <h4 id="wallet-number" class="mb-0">{{$account->number}}</h4>
                                        <p class="mt-2">Account title: <strong>{{$account->title}}</strong></p>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-warning" onclick="copyText()">Copy</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-dark">
                                        <h6 class="text-white">Payment Proof Screen Shot</h6>
                                    </div>
                                    <div class="card-body">
                                        <input type="file" name="image" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
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
 