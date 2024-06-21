
<div id='whatsapp-chat' class='hide'>
    <div class='header-chat'>
        <div class='head-home'>
            <h3 style="color: white !important">Live Chat!</h3>
            
        </div>
        <div class='get-new hide'>
            <div id='get-label'></div>
            <div id='get-nama'></div>
        </div>
    </div>
   
    <div class='start-chat'>
        <div class='first-msg' >
            <span id="first-msg" style="text-align:right;">Hello! What can I do for you?</span>
            <div class="mb-2" id="chat-messages">
            <!-- Chat messages will be dynamically inserted here -->
        </div>
        </div>
        
        <div class='blanter-msg'>
            <textarea id='chat-input' placeholder='Write a response' maxlength='120' row='1'></textarea>
            <a href='javascript:void;' id='send-it'>Send</a>
        </div>
    </div>
    <div id='get-number'></div>
    <a class='close-chat' href='javascript:void'>×</a>
</div>
<a class='blantershow-chat' href='javascript:void' title='Show Chat'>
   <img src="{{asset('new/chat.png')}}" width="20px" height="20px"> How can I help you?
</a>







<style>
   /* Global styles */



.credit {
    background: #fff;
    position: relative;
    display: inline-block;
    padding: 10px 20px;
    border: 1px solid #ddd;
    border-radius: 20px;
}

/* WhatsApp Chat styles */
#whatsapp-chat {
    position: fixed;
    background: #fff;
    width: 350px;
    border-radius: 10px;
    box-shadow: 0 1px 15px rgba(32, 33, 36, .28);
    bottom: 90px;
    right: 30px;
    overflow: hidden;
    z-index: 99;
    animation-name: showchat;
    animation-duration: 1s;
    transform: scale(1);
}

a.blantershow-chat {
    background: linear-gradient(to right top, #6f96f3, #164ed2);
    color: #fff;
    position: fixed;
    z-index: 98;
    bottom: 25px;
    right: 30px;
    font-size: 15px;
    padding: 10px 20px;
    border-radius: 30px;
    box-shadow: 0 1px 15px rgba(32, 33, 36, .28);
}

a.blantershow-chat i {
    transform: scale(1.2);
    margin: 0 10px 0 0;
}

.header-chat {
    background: linear-gradient(to right top, #6f96f3, #164ed2);
    color: #fff;
    padding: 20px;
}

.header-chat h3 {
    margin: 0 0 10px;
}

.header-chat p {
    font-size: 14px;
    line-height: 1.7;
    margin: 0;
}

.info-avatar {
    position: relative;
}

.info-avatar img {
    border-radius: 100%;
    width: 50px;
    float: left;
    margin: 0 10px 0 0;
}

.info-avatar:before {
    content: '\f232';
    z-index: 1;
    font-family: "Font Awesome 5 Brands";
    background: #23ab23;
    color: #fff;
    padding: 4px 5px;
    border-radius: 100%;
    position: absolute;
    top: 30px;
    left: 30px;
}

a.informasi {
    padding: 20px;
    display: block;
    overflow: hidden;
    animation-name: showhide;
    animation-duration: 2.5s;
}

a.informasi:hover {
    background: #f1f1f1;
}

.info-chat span {
    display: block;
}

#get-label,
span.chat-label {
    font-size: 12px;
    color: #888;
}

#get-nama,
span.chat-nama {
    margin: 5px 0 0;
    font-size: 15px;
    font-weight: 700;
    color: #222;
}

#get-label,
#get-nama {
    color: #fff;
}

span.my-number {
    display: none;
}

.blanter-msg {
    color: #444;
    padding: 20px;
    font-size: 12.5px;
    text-align: center;
    border-top: 1px solid #ddd;
}

textarea#chat-input {
    border: none;
    font-family: 'Arial', sans-serif;
    width: 100%;
    height: 20px;
    outline: none;
    resize: none;
}

a#send-it {
    color: #555;
    width: 70px;
    margin: -5px 0 0 5px;
    font-weight: 700;
    padding: 8px;
    background: #eee;
    border-radius: 10px;
}

.first-msg {
    background: #f5f5f5;
    padding: 30px;
    text-align: center;
}

.first-msg span {
    background: #e2e2e2;
    color: #333;
    font-size: 14.2px;
    line-height: 1.7;
    border-radius: 10px;
    padding: 15px 20px;
    display: inline-block;
}

.start-chat .blanter-msg {
    display: flex;
}

#get-number {
    display: none;
}

a.close-chat {
    position: absolute;
    top: 5px;
    right: 15px;
    color: #fff;
    font-size: 30px;
}

/* Animation */
@keyframes showhide {
    from {
        transform: scale(.5);
        opacity: 0;
    }
}

@keyframes showchat {
    from {
        transform: scale(0);
        opacity: 0;
    }
}

/* Responsive styles */
@media screen and (max-width: 480px) {
    #whatsapp-chat {
        width: auto;
        left: 5%;
        right: 5%;
        font-size: 80%;
    }
}

.hide {
    display: none;
    animation-name: showhide;
    animation-duration: 1.5s;
    transform: scale(1);
    opacity: 1;
}

.show {
    display: block;
    animation-name: showhide;
    animation-duration: 1.5s;
    transform: scale(1);
    opacity: 1;
}
.message {
    margin-bottom: 10px;
}

.body.user {
    background-color: #e6f2ff;
    border-radius: 10px;
    padding: 5px 10px;
     /* Float user messages to the right */
}

.body.admin {
    background-color: #f2f2f2;
    border-radius: 10px;
    padding: 5px 10px;
    /* Float admin messages to the left */
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).on("click", ".close-chat", function() {
    $("#whatsapp-chat").addClass("hide").removeClass("show");
});

$(document).on("click", ".blantershow-chat", function() {
    $("#whatsapp-chat").addClass("show").removeClass("hide");
});

</script>

<script>
    $(document).ready(function() {
    // Function to load chat messages from the server
    function loadMessages() {
    $.ajax({
        url: '/messages',
        method: 'GET',
        success: function(response) {
            // Clear previous messages
            if (response.length > 0) {
                $("#first-msg").css("display",'none');
                $('#chat-messages').html('');
            
            // Loop through the messages and append them to the chat interface
            response.forEach(function(message) {
                var messageHTML = '<div class="message">';
                
                // Determine sender type and adjust message layout accordingly
                if (message.sender_type=='user') {
                    // User message
                    messageHTML += '<h5 class="body user text-right">' + message.body + '</h5>';
                } else {
                    // Admin message
                    messageHTML += '<h5 class="body admin text-left">' + message.body + '</h5>';
                }
                
                
                messageHTML += '</div>';
                $('#chat-messages').append(messageHTML);
                });
            }
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}

    // Load messages when the page loads
    loadMessages();
    setInterval(loadMessages, 2000);

    // Function to send a new message
   
    $('#send-it').click(function(e) {
        e.preventDefault(); // Prevent default form submission
        
        var message = $('#chat-input').val();
        
        // Check if the user is logged in
        var isLoggedIn = "{{ Auth::guard('client')->user() }}";
        var requestData = {};
        
        if (isLoggedIn) {
            // If user is logged in, send the message along with the user ID
            requestData = {
                message: message,
                user_id: 14,
                
            };
        } else {
            // If user is not logged in, send the message along with the IP address
            requestData = {
                message: message,
                ip_address: "{{ request()->ip() }}"
            };
        }
        
        // Send AJAX request to store the message
        $.ajax({
            url: '/messages',
            method: 'POST',
            headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
            data: requestData,
            success: function(response) {
                // If the message is stored successfully, reload the chat messages
                loadMessages();
                // Clear the input field
                $('#chat-input').val('');
            },
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });







    // end function to send message
});

</script>