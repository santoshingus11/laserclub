<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Chat</title>
  </head>
  	<body>
		<div class="container-fluid h-100">
			<div class="row justify-content-center h-100">
				<div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
					<div class="card-header">
						<div class="input-group">
							<input type="text" placeholder="Search..." name="" class="form-control search">
							<div class="input-group-prepend">
								<span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
							</div>
						</div>
					</div>
					<div class="card-body contacts_body">
						<ui class="contacts chat-list">
					
					
						
						</ui>
					</div>
					<div class="card-footer"></div>
				</div></div>
				<div class="col-md-8 col-xl-6 chat">
					<div class="card">
						<div class="card-header msg_head">
							<div class="d-flex bd-highlight">
								<div class="img_cont">
									<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img">
									<span class="online_icon"></span>
								</div>
								<div class="user_info">
									<span class="chat-partner">Click On Any chat</span>
									<!--<p>1767 Messages</p>-->
								</div>
								<div class="video_cam">
									<!--<span><i class="fas fa-video"></i></span>-->
									<!--<span><i class="fas fa-phone"></i></span>-->
								</div>
							</div>
							<span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
							<div class="action_menu">
								<ul>
									<li><i class="fas fa-user-circle"></i> View profile</li>
									<li><i class="fas fa-users"></i> Add to close friends</li>
									<li><i class="fas fa-plus"></i> Add to group</li>
									<li><i class="fas fa-ban"></i> Block</li>
								</ul>
							</div>
						</div>
						<div class="card-body msg_card_body chat-messages">
						
						
						</div>
						<div class="card-footer">
							<div class="input-group">
								<div class="input-group-append">
									<span class="input-group-text attach_btn"></span>
								</div>
								<textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
								<div class="input-group-append">
									<span class="input-group-text send_btn send-message"><i class="fas fa-location-arrow"></i></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

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
   
   <script>
       
        $(document).ready(function(){
             var activeChatId = null;
           
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
                        var ChatItemHtml = '<h6 style="text-align:center; color:white; background-color:red; padding:8px;">Pending Chats</h6>'
                        $('.chat-list').append(ChatItemHtml);
						newChats.forEach(function(chat){
						    var chatName = "New User " + chat.user;
						    var ChatItemHtml = '<li class="hovercursor chat-item" data-chat="' + chat.chat_id + '"><div class="d-flex bd-highlight">';
						    ChatItemHtml +='<div class="img_cont">	<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img"></div>'; 
						     ChatItemHtml +='<div class="user_info">';
						      ChatItemHtml +='<span class="flex-grow-1">'+ chatName +'</span>';
						      ChatItemHtml +='</div></div></li>';
						       $('.chat-list').append(ChatItemHtml);
						});
                       
                        var chatItemHtml = '</hr>';
                            chatItemHtml += "<h6 style='text-align:center; color:white;  background-color:green; padding:8px;'>Old Chats</h6>";
                            chatItemHtml += '</hr>';
                        $('.chat-list').append(chatItemHtml);
                        oldChats.forEach(function(chat){
                             var chatName = "Old User " + chat.user;
						    var ChatItemHtml = '<li  class="hovercursor chat-item" data-chat="' + chat.chat_id + '"><div class="d-flex bd-highlight">';
						    ChatItemHtml +='<div class="img_cont">	<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img"></div>'; 
						     ChatItemHtml +='<div class="user_info">';
						      ChatItemHtml +='<span class="flex-grow-1">'+ chatName +'</span>';
						      ChatItemHtml +='<p>'+chat.latest_message_time +'</p>';
						      ChatItemHtml +='</div></div></li>';
						       $('.chat-list').append(ChatItemHtml);
                        }); 
                       if (activeChatId !== null) {
                    $('.chat-item[data-chat="' + activeChatId + '"]').addClass('active');
                }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error loading chats:', error);
                    }
                });
            }
            
            
            
            
            
            
           $(document).on('click', '.chat-item', function() {
              $('.chat-item').removeClass('active');
               $(this).addClass('active');
                var chatId = $(this).data('chat');
                activeChatId = $(this).data('chat');
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
							     if(msg.sender_type === "admin"){
							          messagesHtml += '<div class="d-flex justify-content-end mb-4">';
							         messagesHtml += '	<div class="msg_cotainer_send">'+ msg.body;
							          messagesHtml += '	<span class="msg_time">'+timestamp+'</span></div>';
							          messagesHtml +='<div class="img_cont_msg"><img src="https://i.pinimg.com/originals/ac/b9/90/acb990190ca1ddbb9b20db303375bb58.jpg" class="rounded-circle user_img_msg"></div></div>';
							     }else{
							         messagesHtml += '<div class="d-flex justify-content-start mb-4"><div class="img_cont_msg">	<img src="https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg" class="rounded-circle user_img_msg"></div>';
							         messagesHtml += '	<div class="msg_cotainer">'+ msg.body;
							          messagesHtml += '	<span class="msg_time">'+timestamp+'</span></div>	</div>';
							     }
							});
                           
                            
                            $('.chat-messages').html(messagesHtml);
                        
                        
                    },
                    error: function(xhr, status, error) {
                        console.error('Error loading chats:', error);
                    }
                });
            }
            
            
            
            
            
            $('.send-message').click(function(){
                var message = $('.type_msg').val();
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
                $('.type_msg').val('');
                
                
                // Here you would send the message via AJAX to the appropriate chatId
                // For now, let's just add the message to the chat-messages div
                
               
                var messagesHtml = '<div class="d-flex justify-content-end mb-4">';
							         messagesHtml += '	<div class="msg_cotainer_send">'+ message;
							          messagesHtml += '	<span class="msg_time">Now</span></div>';
							          messagesHtml +='<div class="img_cont_msg"><img src="" class="rounded-circle user_img_msg"></div></div>';
                
                $('.chat-messages').append(messagesHtml);
                $('.type_msg').val('');
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
   
   </script>
    
    
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
	.chat{
			margin-top: auto;
			margin-bottom: auto;
		}
		.card{
			height: 500px;
			border-radius: 15px !important;
			background-color: rgba(0,0,0,0.4) !important;
		}
		.contacts_body{
			padding:  0.75rem 0 !important;
			overflow-y: auto;
			white-space: nowrap;
		}
		.msg_card_body{
			overflow-y: auto;
		}
		.card-header{
			border-radius: 15px 15px 0 0 !important;
			border-bottom: 0 !important;
		}
	 .card-footer{
		border-radius: 0 0 15px 15px !important;
			border-top: 0 !important;
	}
		.container{
			align-content: center;
		}
		.search{
			border-radius: 15px 0 0 15px !important;
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color:white !important;
		}
		.search:focus{
		     box-shadow:none !important;
           outline:0px !important;
		}
		.type_msg{
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color:white !important;
			height: 60px !important;
			overflow-y: auto;
		}
			.type_msg:focus{
		     box-shadow:none !important;
           outline:0px !important;
		}
		.attach_btn{
	border-radius: 15px 0 0 15px !important;
	background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.send_btn{
	border-radius: 0 15px 15px 0 !important;
	background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.search_btn{
			border-radius: 0 15px 15px 0 !important;
			background-color: rgba(0,0,0,0.3) !important;
			border:0 !important;
			color: white !important;
			cursor: pointer;
		}
		.contacts{
			list-style: none;
			padding: 0;
		}
		.contacts li{
			width: 100% !important;
			padding: 5px 10px;
			margin-bottom: 15px !important;
		}
	.active{
			background-color: rgba(0,0,0,0.3);
	}
	.hovercursor:hover{
	    cursor:pointer;
	    background-color: rgba(0,0,0,0.3);
	}
		.user_img{
			height: 70px;
			width: 70px;
			border:1.5px solid #f5f6fa;
		
		}
		.user_img_msg{
			height: 40px;
			width: 40px;
			border:1.5px solid #f5f6fa;
		
		}
	.img_cont{
			position: relative;
			height: 70px;
			width: 70px;
	}
	.img_cont_msg{
			height: 40px;
			width: 40px;
	}
	.online_icon{
		position: absolute;
		height: 15px;
		width:15px;
		background-color: #4cd137;
		border-radius: 50%;
		bottom: 0.2em;
		right: 0.4em;
		border:1.5px solid white;
	}
	.offline{
		background-color: #c23616 !important;
	}
	.user_info{
		margin-top: auto;
		margin-bottom: auto;
		margin-left: 15px;
	}
	.user_info span{
		font-size: 20px;
		color: white;
	}
	.user_info p{
	font-size: 10px;
	color: rgba(255,255,255,0.6);
	}
	.video_cam{
		margin-left: 50px;
		margin-top: 5px;
	}
	.video_cam span{
		color: white;
		font-size: 20px;
		cursor: pointer;
		margin-right: 20px;
	}
	.msg_cotainer{
		margin-top: auto;
		margin-bottom: auto;
		margin-left: 10px;
		border-radius: 25px;
		background-color: #82ccdd;
		padding: 10px;
		position: relative;
	}
	.msg_cotainer_send{
		margin-top: auto;
		margin-bottom: auto;
		margin-right: 10px;
		border-radius: 25px;
		background-color: #78e08f;
		padding: 10px;
		position: relative;
	}
	.msg_time{
		position: absolute;
		left: 0;
		bottom: -15px;
		color: rgba(255,255,255,0.5);
		font-size: 10px;
	}
	.msg_time_send{
		position: absolute;
		right:0;
		bottom: -15px;
		color: rgba(255,255,255,0.5);
		font-size: 10px;
	}
	.msg_head{
		position: relative;
	}
	#action_menu_btn{
		position: absolute;
		right: 10px;
		top: 10px;
		color: white;
		cursor: pointer;
		font-size: 20px;
	}
	.action_menu{
		z-index: 1;
		position: absolute;
		padding: 15px 0;
		background-color: rgba(0,0,0,0.5);
		color: white;
		border-radius: 15px;
		top: 30px;
		right: 15px;
		display: none;
	}
	.action_menu ul{
		list-style: none;
		padding: 0;
	margin: 0;
	}
	.action_menu ul li{
		width: 100%;
		padding: 10px 15px;
		margin-bottom: 5px;
	}
	.action_menu ul li i{
		padding-right: 10px;
	
	}
	.action_menu ul li:hover{
		cursor: pointer;
		background-color: rgba(0,0,0,0.2);
	}
	@media(max-width: 576px){
	.contacts_card{
		margin-bottom: 15px !important;
	}
	}

 </style>
