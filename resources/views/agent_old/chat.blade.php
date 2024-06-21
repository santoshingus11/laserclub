<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Chat</title>
  </head>
  <body>
  <main class="content">
    <div class="container p-0">
        <h1 class="h3 mb-3">Messages</h1>

        <div class="card">
            <div class="row g-0">
                <div class="col-12 col-lg-5 col-xl-3 border-right">
                    <div class="px-4 d-none d-md-block">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <input type="text" class="form-control my-3" placeholder="Search...">
                            </div>
                        </div>
                    </div>
                   <div class="chat-list">
                        
                    
                   </div>
                </div>

                <div class="col-12 col-lg-7 col-xl-9" >
                    <div class="py-2 px-4 border-bottom d-none d-lg-block">
                        <div class="d-flex align-items-center py-1">
                            <div class="position-relative">
                                
                            </div>
                            <div class="flex-grow-1 pl-3">
                                <strong class="chat-partner">Chat</strong>
                            </div>
                        </div>
                    </div>

                    <div class="position-relative chat-messages-container">
                        <div class="chat-messages p-4">
                            <!-- Messages will be appended here dynamically -->
                        </div>
                    </div>

                    <div class="flex-grow-0 py-3 px-4 border-top">
                        <div class="input-group">
                            <input type="text" class="form-control message-input" placeholder="Type your message">
                            <button class="btn btn-primary send-message">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<input type="hidden" id="hidden_id">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    var chatAjaxUrl = "{{ url('/admin/load/chat/ajax') }}";
</script>
    <script src="{{asset('new/js/agentchat.js')}}"></script>
    
    
  </body>
</html>



 <style>
     body,html{
			height: 100%;
			margin: 0;
			background: #7F7FD5;
	       background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
	        background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
		}

.chat-online {
    color: #34ce57
}

.chat-offline {
    color: #e4606d
}

.chat-messages {
    display: flex;
    flex-direction: column;
    max-height: 800px;
    overflow-y: scroll
}

.chat-message-left,
.chat-message-right {
    display: flex;
    flex-shrink: 0
}

.chat-message-left {
    margin-right: auto
}

.chat-message-right {
    flex-direction: row-reverse;
    margin-left: auto
}
.py-3 {
    padding-top: 1rem!important;
    padding-bottom: 1rem!important;
}
.px-4 {
    padding-right: 1.5rem!important;
    padding-left: 1.5rem!important;
}
.flex-grow-0 {
    flex-grow: 0!important;
}
.border-top {
    border-top: 1px solid #dee2e6!important;
}
.sidebarchatbox{
    border:1px solid black !important;
}
.adminbg{
    background-color:green;
}

 </style>
