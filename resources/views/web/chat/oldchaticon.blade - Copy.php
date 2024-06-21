
<div id="chat-widget" style="position: fixed; bottom: 20px; right: 20px; z-index: 999;">
  <img src="{{ asset('new/chat.png') }}" alt="Chat Icon" id="chat-icon">
</div>




<section id="chat-section" style="display: none; position: fixed; bottom: 80px; right: 20px; z-index: 998;">
<div class="card" id="chat1" style="border-radius: 15px;">
    <div
            class="card-header d-flex justify-content-between align-items-center bg-info text-white border-bottom-0"
            style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
            <i class="fas fa-angle-left"></i>
            <p class="mb-0 fw-bold">Live chat</p>
            <i class="fas fa-times"></i>
          </div>
</div> 


<div class="container">

    <div class="row d-flex justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-4">

        <div class="card" id="chat1" style="border-radius: 15px;">
          <div
            class="card-header d-flex justify-content-between align-items-center p-3 bg-info text-white border-bottom-0"
            style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
            <i class="fas fa-angle-left"></i>
            <p class="mb-0 fw-bold">Live chat</p>
            <i class="fas fa-times"></i>
          </div>
          <div class="card-body">

            <div class="d-flex flex-row justify-content-start mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                alt="avatar 1" style="width: 45px; height: 100%;">
              <div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">
                <p class="small mb-0">Hello and thank you for visiting MDBootstrap. Please click the video
                  below.</p>
              </div>
            </div>

            <div class="d-flex flex-row justify-content-end mb-4">
              <div class="p-3 me-3 border" style="border-radius: 15px; background-color: #fbfbfb;">
                <p class="small mb-0">Thank you, I really like your product.</p>
              </div>
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava2-bg.webp"
                alt="avatar 1" style="width: 45px; height: 100%;">
            </div>

            <div class="d-flex flex-row justify-content-start mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                alt="avatar 1" style="width: 45px; height: 100%;">
              <div class="ms-3" style="border-radius: 15px;">
                <div class="bg-image">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/screenshot1.webp"
                    style="border-radius: 15px;" alt="video">
                  <a href="#!">
                    <div class="mask"></div>
                  </a>
                </div>
              </div>
            </div>

            <div class="d-flex flex-row justify-content-start mb-4">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                alt="avatar 1" style="width: 45px; height: 100%;">
              <div class="p-3 ms-3" style="border-radius: 15px; background-color: rgba(57, 192, 237,.2);">
                <p class="small mb-0">...</p>
              </div>
            </div>

            <div class="form-outline">
              <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
              <label class="form-label" for="textAreaExample">Type your message</label>
            </div>

          </div>
        </div>

      </div>
    </div>

  </div>
  
</section>


<style>
    #chat-widget {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
      cursor: pointer;
    }

    /* Adjustments for chat section */
    #chat-section {
      display: none;
      position: fixed;
      bottom: 80px;
      right: 20px;
      z-index: 998;
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 2px 4px rgba(0,0,0,0.2);
      padding: 20px;
      width: 300px; /* Adjust as needed */
      max-height: 70vh; /* Adjust as needed */
      overflow-y: auto;
    }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const chatIcon = document.getElementById('chat-icon');
    const chatSection = document.getElementById('chat-section');
    const closeButton = document.getElementById('close-chat');

    // Toggle chat section visibility when the chat icon is clicked
    chatIcon.addEventListener('click', function() {
      if (chatSection.style.display === 'none') {
        chatSection.style.display = 'block';
        chatIcon.src = "{{ asset('new/close.png') }}";
      } else {
        chatSection.style.display = 'none';
        chatIcon.src = "{{ asset('new/chat.png') }}";
      }
    });

    // Close chat section when the close button is clicked
    closeButton.addEventListener('click', function() {
      chatSection.style.display = 'none';
      chatIcon.src = "{{ asset('new/chat.png') }}";
    });
  });
</script>