<x-app-layout layout="simple" :assets="$assets ?? []">
    <span class="uisheet screen-darken"></span>
    <div class="header"
        style="background: url({{ asset('images/dashboard/top-image.jpg') }}); background-size: cover; background-repeat: no-repeat; height: 100vh; position: relative;">
        
        <!-- Logo Section -->
        <div class="logo-container" style="text-align: center; padding-top: 20px;">
            <img src="{{ asset('images/logo/diapest-logo.png') }}" alt="Diapest App Logo" style="max-width: 150px;">
        </div>

        <div class="main-img">
            <div class="container">
                <h1 class="my-4 text-center">
                    <span>Welcome to Diapest App</span>
                </h1>

                <!-- Content Section -->
                <div class="content text-center" style="margin-top: 20px;">
                    <p>
                        Diapest App is your ultimate solution for managing and preventing pest issues. Track, monitor, 
                        and receive real-time alerts for pest activity. Our advanced tools will help you stay ahead and 
                        maintain a healthy environment.
                    </p>
                    <p>
                        Get started today by exploring the features of the Diapest App that will make managing pests 
                        effortless and efficient.
                    </p>
                </div>

                <!-- Login and Sign Up Section Centered -->
                <div class="d-flex justify-content-center align-items-center" style="margin-top: 50px;">
                    <!-- Login Button -->
                    <div class="me-3">
                        <a class="bg-white btn btn-light d-flex" target="_blank" href="{{ route('dashboard') }}" style="align-items: center;">
                            <svg width="22" height="22" class="me-1" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            Login now
                        </a>
                    </div>
                    <!-- Sign Up Button -->
                    <div>
                        <a class="bg-primary btn btn-light d-flex" href="{{ route('auth.signup') }}" style="align-items: center; color: white;">
                            Sign up
                        </a>
                    </div>
                </div>

                <!-- Sign Up Text Link -->
                <div class="text-center mt-3">
                    Don’t have an account? <a href="{{ route('auth.signup') }}" class="text-underline">Click here to sign up.</a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
