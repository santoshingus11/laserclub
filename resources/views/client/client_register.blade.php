<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @include('layouts.client-header-url')

    <style>
        .flash__message {
            padding: 12px;
            background-color: aliceblue;
            border-radius: 4px;
        }
        .flash__message.error {
    color: #fff;
    background-color: #a94442;
    border-color: #a94442;
    text-align: center;
    font-size: larger;
}
    </style>
</head>

<body>
    <div class="fullpage-loader">
        <div class="fullpage-loader__logo">
            <img src="{{ asset('frontend/assets/images/logo-login.png') }}" />
        </div>
    </div>

    <section id="login" class="login_pages">
        <div class="container">
            <div class="login_logo">
                <div class="card">
                    <img src="{{ asset('frontend/assets/images/logo-login.png') }}" alt="logo" class="img-fluid" />
                    <h1 style="background-color: goldenrod;text-align:center;margin-top:10px;padding-top:5px;padding-bottom:5px;">Register</h1>
                    <form class="mt-4" id="registerForm">


                        @csrf
                        {{-- <div class="form-group position-relative"> <!-- Add a container for positioning --> --}}
                        <div class="flash__wrapper">
                            <div role="alert" aria-live="polite" id="usernameError" aria-atomic="true"
                                class="error flash__message relative">
                                <div class="flash__message-content">
                                <button type="button" class="flash__close-button" data-dismiss="alert"
                                    aria-label="alertClose">
                                    <span aria-hidden="true">×</span>
                                </button></div>
                            </div>
                        </div>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" >
                        {{-- <div id="usernameError" class="error-popup"></div> <!-- Container for error popup --> --}}
                        {{-- </div> --}}
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" >
                        <input type="password" class="form-control" id="confirm_password" name="password_confirmation" placeholder="Confirm Password" >
                        <input type="number" class="form-control" id="phone" name="phone" placeholder="Mobile Number with Country Code" >
                </div>


                        <div class="buttons">
                            <button type="submit" class="login-button">Register</button>
                        </div>
                    </form>
                    <p class="m-b-0"><small class="recaptchaTerms">This site is protected by reCAPTCHA and the
                            Google
                            <a href="#">Privacy Policy</a> and
                            <a href="#">Terms of Service</a> apply.
                        </small></p>
                </div>
            </div>
        </div>
    </section>
    <!-- login Modal -->
    <div class="modal fade" id="loginexampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content login_wid">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Please Confirm</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <P>Underage gambling is prohibited. Please confirm if you are 18 years old and above as of today</P>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn Exit_red" data-bs-dismiss="modal">Exit</button>
                    <button type="button" class="btn btn-primary Confirm_other">Confirm</button>
                </div>
            </div>
        </div>
    </div>




    <script>
        $(document).ready(function() {
            // Hide the error message initially
            $('#usernameError').hide();

            // Intercept form submission
            $('#registerForm').submit(function(event) {
                event.preventDefault(); // Prevent the form from submitting the traditional way

                // Reset the previous error message
                $('#usernameError').text('');

                // Perform form validation here
                var username = $('#username').val();
                var password = $('#password').val();
                if (username.trim() === '' && password.trim() === '') {
                    showFlashMessage('Please fill Username and Password');
                    return;
                }
                // Check if username and password are empty
                if (username.trim() === '') {
                    showFlashMessage('The Username field is required');
                    return;
                }

                if (password.trim() === '') {
                    showFlashMessage('The Password field is required');
                    return;
                }

                // Display the modal if the form is valid
                $('#loginexampleModal').modal('show');
            });

            // Handle modal confirmation button click
            $('#loginexampleModal .btn-primary').click(function() {
                // Get form data
                var formData = $('#registerForm').serialize();

                // Submit form data to the 'login_submit' route using AJAX
                $.ajax({
                    type: 'POST',
                    url: '{{ route('register_submit') }}',
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            // Redirect on success
                            window.location.href = response.redirect;
                            toastr.success(response.message);
                        } else if (response.message) {
                            // Handle failure, show error message in flash
                            showFlashMessage(response.message);

                            // Set a separate timeout for incorrect login attempts
                            setTimeout(function() {
                                $('#usernameError').removeClass('flash__wrapper').hide();
                            }, 3000); // Adjust the timeout as needed for incorrect attempts
                        }
                    },
                    error: function(error) {
                        // Handle the AJAX error
                        console.error(error);
                        alert('An error occurred. Please try again.');
                    }
                });

                // Close the modal
                $('#loginexampleModal').modal('hide');
            });

            function showFlashMessage(message) {
                // Set flash message content
                $('#usernameError').text(message);

                // Show the flash message
                $('#usernameError').show().addClass('flash__wrapper');

                // Set a timeout to hide the flash message after 3 seconds
                setTimeout(function() {
                    $('#usernameError').removeClass('flash__wrapper').hide();
                }, 5000);
            }
        });
    </script>





    @include('layouts.client-footer')
