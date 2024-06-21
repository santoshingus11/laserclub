
        $(document).ready(function(){
            
           
            loadChats();
            
            setInterval(loadChats, 2000);
            
            function loadChats() {
              
                $.ajax({
                    url: '/admin/load/chat/ajax', 
                    type: 'GET',
                    success: function(response) {
                        var newChats = response.data.newChats;
                        var oldChats = response.data.oldChats;
                        $('.chat-list').empty();
                        // Append new chats
                        newChats.forEach(function(chat){
                            var chatName = "New User " + chat.user;
                            var chatItemHtml = '<a href="#" class="list-group-item list-group-item-action border-0 chat-item" data-chat="' + chat.chat_id + '">';
                            chatItemHtml += '<div class="badge bg-success float-right">' + chat.count + '</div>';
                            chatItemHtml += '<div class="d-flex align-items-start">';
                           
                            chatItemHtml += '<div class="flex-grow-1 ml-3">' + chatName;
                            chatItemHtml += '<div class="small"><span class="fas fa-circle chat-online"></span> Online</div>';
                            chatItemHtml += '</div></div></a>';
                            
                            $('.chat-list').append(chatItemHtml);
                        }); 
                        var chatItemHtml = '</hr>';
                            chatItemHtml += "<h6 style='text-align:center;'>Old Chats</h6>";
                            chatItemHtml += '</hr>';
                        $('.chat-list').append(chatItemHtml);
                        oldChats.forEach(function(chat){
                            var chatName = "Anonymous " + chat.user;
                            var chatItemHtml = '<a href="#" class="list-group-item list-group-item-action border-0 chat-item sidebarchatbox" data-chat="' + chat.chat_id + '">';
                            
                            chatItemHtml += '<div class="d-flex align-items-start ">';
                           
                            chatItemHtml += '<div class="flex-grow-1 ml-3">' + chatName;
                            chatItemHtml += '<div class="small"><span class="fas fa-circle chat-online"></span> Online</div>';
                            chatItemHtml += '</div></div></a>';
                            
                            $('.chat-list').append(chatItemHtml);
                        }); 
                       
                    },
                    error: function(xhr, status, error) {
                        console.error('Error loading chats:', error);
                    }
                });
            }
            
            
            
            
            
            
           $(document).on('click', '.chat-item', function() {
                var chatId = $(this).data('chat');
                $('#hidden_id').val(chatId);
                 var chatPartner = $(this).find('.flex-grow-1').text();
                 $('.chat-partner').text(chatPartner);
                
                loadMessages();
                
                
                
               
            });
            loadMessages();
            setInterval(loadMessages, 2000);
            
            function loadMessages(){
                var chatId = $('#hidden_id').val();
                 $.ajax({
                    url: '/admin/get/chat/messages/'+chatId, 
                    type: 'GET',
                    success: function(response) {
                        // console.log(response.messages);
                        var messages = response.messages;
                         var messagesHtml = '';
                            messages.forEach(function(msg){
                                var timestamp = formatDateTime(msg.created_at);
                                var messageClass = (msg.sender_type === "admin") ? "chat-message-right" : "chat-message-left";
                                 var forbg = (msg.sender_type === "admin") ? "adminbg" : "userbg";
                                 
                                messagesHtml += '<div class="' + messageClass + ' pb-4">';
                                messagesHtml += '<div>';
                                messagesHtml += '<div class="text-muted small text-nowrap mt-2">' + timestamp + '</div></div>';
                                messagesHtml += '<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3 '+ forbg +'">';
                            //   if(msg.sender_type === "user"){
                            //         messagesHtml += '<div class="font-weight-bold mb-1 " style="font-size:small;"> User</div>';
                            //   }else{
                            //         messagesHtml += '<div class="font-weight-bold mb-1 " style="font-size:small;">You</div>';
                            //   }
                                messagesHtml += '<span style="font-size:small;">'+ msg.body +'</span>';
                                messagesHtml += '</div></div>';
                            });
                            
                            $('.chat-messages').html(messagesHtml);
                        
                        
                    },
                    error: function(xhr, status, error) {
                        console.error('Error loading chats:', error);
                    }
                });
            }
            
            
            
            
            
            $('.send-message').click(function(){
                var message = $('.message-input').val();
                var chatId = $('#hidden_id').val();
                console.log(chatId);
                var data = {
                    message: message,
                    chat_id: chatId
                };
                var csrfToken = $('meta[name="csrf-token"]').attr('content');
                var headers = {
                    'X-CSRF-TOKEN': csrfToken
                };
                
                $.ajax({
                    url: '/admin/send/message/store',
                    type: 'POST',
                    headers: headers,
                    data: data,
                    success: function(response) {
                        // Handle success response
                        console.log('Message sent successfully:', response);
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        console.error('Error sending message:', error);
                    }
                });
        
                // Clear message input field
                $('.message-input').val('');
                
                
                // Here you would send the message via AJAX to the appropriate chatId
                // For now, let's just add the message to the chat-messages div
                
                var messageHtml = '<div class="chat-message-right pb-4">';
                messageHtml += '<div><img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="rounded-circle mr-1" alt="You" width="40" height="40">';
                messageHtml += '<div class="text-muted small text-nowrap mt-2">Now</div></div>';
                messageHtml += '<div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">';
                messageHtml += '<div class="font-weight-bold mb-1">You</div>';
                messageHtml += message;
                messageHtml += '</div></div>';
                
                $('.chat-messages').append(messageHtml);
                $('.message-input').val('');
            });
            
            
            
            
    function formatDateTime(dateTimeString) {
        var messageDate = new Date(dateTimeString);
        var currentDate = new Date();
        
        // Check if message was sent today
        if (messageDate.toDateString() === currentDate.toDateString()) {
            // Return time only
            return messageDate.toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
        } else {
            // Return human-readable date and time
            return messageDate.toLocaleString([], {month: 'short', day: 'numeric', hour: '2-digit', minute: '2-digit'});
        }
    }        
            
            
        });
   