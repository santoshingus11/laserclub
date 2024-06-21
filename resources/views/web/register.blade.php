@extends('web.layouts.master')
@section('title', 'Register')

@section('content')

@if (session('error'))
<div class="alert alert-danger">
    <ul>
        @foreach (session('error') as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
 <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Registration</h3>
                        <form id="loginForm" action="{{route('register_submit')}}" method="POST">
                            @csrf
                            <div class="input__item">
                               <input type="text" id="username" name="username" placeholder="Username" required>
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                 <input type="password"  id="password" name="password" placeholder="Password" required>
                                <span class="icon_lock"></span>
                            </div>
                            <div class="input__item">
                                <input type="password" id="confirm_password" name="password_confirmation" placeholder="Confirm Password" required>
                                <span class="icon_lock"></span>
                            </div>
                            <div class="input__item">
                                <input type="number" id="phone" name="phone" placeholder="Mobile Number with Country Code" required>
                                 <span class="">+91</span>
                            </div>
                            <button type="submit" class="site-btn login-button">Register Now</button>
                           
                        </form>
                        <p class="m-b-0"><small class="recaptchaTerms">This site is protected by reCAPTCHA and the
                            Google
                            <a href="#">Privacy Policy</a> and
                            <a href="#">Terms of Service</a> apply.
                        </small></p>
                        <!--<a href="#" class="forget_pass">Forgot Your Password?</a>-->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Already Have An Account?</h3>
                        <a href="{{route('login')}}" class="primary-btn">Login Now</a>
                    </div>
                </div>
            </div>
        <!--    <div class="login__social">-->
        <!--        <div class="row d-flex justify-content-center">-->
        <!--            <div class="col-lg-6">-->
        <!--                <div class="login__social__links">-->
        <!--                    <span>or</span>-->
        <!--                    <ul>-->
        <!--                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With-->
        <!--                        Facebook</a></li>-->
        <!--                        <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>-->
        <!--                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a>-->
        <!--                        </li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
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


 





 


@stop


 <script>
        $(document).ready(function() {
            // Hide the error message initially
            $('#usernameError').hide();

            // Intercept form submission
            $('#loginForm').submit(function(event) {
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
                var formData = $('#loginForm').serialize();

                // Submit form data to the 'login_submit' route using AJAX
                $.ajax({
                    type: 'POST',
                    url: '{{ route('login_submit') }}',
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            // Redirect on success
                            window.location.href = response.redirect;
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
                }, 2000);
            }
        });
    </script>


