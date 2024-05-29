<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
<style>
    body, h1, h2, h3, h4, h5, h6 {
            font-family: 'Rubik', sans-serif !important;
        }
</style>
    
    @vite('resources/css/app.css')
{{-- 
    
    @if (session()->has('message'))

    <div id="toast-warning" class="flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow m-2 z-50" role="alert">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg ">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM10 15a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm1-4a1 1 0 0 1-2 0V6a1 1 0 0 1 2 0v5Z"/>
            </svg>
            <span class="sr-only">Warning icon</span>
        </div>
        <div class="ms-3 text-sm font-normal">{{ session('message') }}</div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-300 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#toast-warning" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>


@endif --}}

</head>
<body class="bg-gradient-to-l from-blue-600 to-blue-300">
    <div class="grid grid-row-1 grid-col-1 ">
        <div class=" my-auto mx-auto sm:mt-56 m-5">
            <a href="{{ url('/') }}">
                <img  src="https://pevs.s3.ap-southeast-1.amazonaws.com/logo-putih.png" class="mx-auto d-block" width="310" alt="Periklindo Electric Vehicle Show Logo" style="height:5rem !mportant">
            </a>
           <center><h3 class="text-white font-thin font-sans" style="font-size: xx-large">Login</h3>
                </center>
                <div>
                    <form class="max-w-sm mx-auto" method="POST" action="{{url('loginpost')}}" >
                        @csrf

                        <div class="mb-5">
                        <label for="email" class="@error('email') block mb-2 text-sm font-medium text-red-600 @enderror block mb-2 text-sm font-medium text-gray-900">Your email</label>
                        <input type="email" id="email" name="email" class="@error('email') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required>
                        @if($errors->has('email'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $errors->first('email') }}</p>
                        @endif
                        </div>
                        <div class="mb-5">
                        <label for="password" class="@error('password') block mb-2 text-sm font-medium text-red-600 @enderror block mb-2 text-sm font-medium text-gray-900">Your password</label>
                        <input type="password" id="password" name="password" class=" @error('password') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        @if($errors->has('password'))
                            <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $errors->first('password') }}</p>
                        @endif
                    </div>
                        <div class="flex items-start mb-5">
                        <div class="flex items-center h-5">
                            <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
                        </div>
                        <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                        </div>
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-full px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        <div class="mt-5 grid grid-row-2">
                            <div class="mb-5 text-white">
                                <h1>Forgot your pasword? <a href="{{route('forget.password.get')}}" class="font-bold hover:underline underline-offset-7 ">Reset Password</a></h1>
                                
                            </div>
                            <div class="text-white">
                                <h1>Dont have an account? <a href="{{ url('register') }}" class="font-bold hover:underline underline-offset-7 ">Sign up</a></h1>
                                
                            </div>

                        </div>
                        
                    </form>
  
                </div>
            </div>
    </div>





    
<script
src="https://code.jquery.com/jquery-3.7.1.js"
integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

</body>
</html>