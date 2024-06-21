@extends('web.layouts.master')
@section('title', 'Deposit | BANK')
@section('content')

<div class="container p-5">
    <div class="container border border-danger p-0">
        <h4 class="text-center bg-danger text-white p-2">Deposit</h4>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="d-flex flex-column">
                    <a href="{{ route('client.depsoist_bank_view') }}" class="btn btn-dark mb-2 active">BANK TRANSFER</a>
                    <a href="{{ route('deposit_funds') }}" class="btn btn-dark mb-2 ">PAYTM</a>
                    <a href="{{ route('client.depsoist_phonepe_view') }}" class="btn btn-dark mb-2">PHONEPE</a>
                    <a href="{{ route('client.depsoist_gpay_view') }}" class="btn btn-dark mb-2">GPAY</a>
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
                            <div class="col-md-7">
                                <div class="card">
                                    <div class="card-header bg-dark">
                                        <h6 class="text-white">Transfer Detail</h6>
                                    </div>
                                    <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 text-bold">Bank: <span style="font-weight: bold;">{{$account->b_name}}</span></h6>
                                        <a class="btn btn-warning ms-3" onclick="copyText('{{$account->b_name}}')">Copy</a>
                                    </div> 
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 text-bold">Account Title: <span style="font-weight: bold;">{{$account->title}}</span></h6>
                                        <a class="btn btn-warning ms-3" onclick="copyText('{{$account->title}}')">Copy</a>
                                    </div>     
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 text-bold">Account: <span style="font-weight: bold;">{{$account->number}}</span></h6>
                                        <a class="btn btn-warning ms-3" onclick="copyText('{{$account->number}}')">Copy</a>
                                    </div>  
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 text-bold">Account Type: <span style="font-weight: bold;">{{$account->Account_type}}</span></h6>
                                        <a class="btn btn-warning ms-3" onclick="copyText('{{$account->Account_type}}')">Copy</a>
                                    </div>  
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 text-bold">IFSC Number: <span style="font-weight: bold;">{{$account->ifsc}}</span></h6>
                                        <a class="btn btn-warning ms-3" onclick="copyText('{{$account->ifsc}}')">Copy</a>
                                    </div> 
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 text-bold">Branch: <span style="font-weight: bold;">{{$account->branch}}</span></h6>
                                        <a class="btn btn-warning ms-3 mr-3" onclick="copyText('{{$account->branch}}')">Copy</a>
                                    </div> 
                                </div>
                                </div>
                            </div>
                            <div class="col-md-5">
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
 