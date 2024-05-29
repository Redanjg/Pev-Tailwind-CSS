@extends('layouts.default')

@section('content')
<div class="grid place-items-center mx-auto">
    <div class="grid-row-6 w-[22rem] sm:w-[34rem] border-4 border-sky-500 rounded-lg">
        
        <form action="{{url('register')}}" method="POST" class="max-w-sm mx-auto">
          @csrf
          <div class="mb- m-5">
            @if(Session::has('message'))
            <div id="alert-1" class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50 border border border-blue-300 rounded-lg" role="alert">
              <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
              </svg>
              <span class="sr-only">Info</span>
              <div class="ms-3 text-sm font-medium">
                {{Session::get('message')}}
              </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8" data-dismiss-target="#alert-1" aria-label="Close">
                  <span class="sr-only">Close</span>
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
              </button>
            </div>
            @endif
            

          </div>
            <div class="mb-5 m-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Nama</label>
                <input type="name" id="name" name="name" class="shadow-sm  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
              </div>
            <div class="mb-5 m-5">
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Your email</label>
              <input type="email" id="email" name="email" class="shadow-sm  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
            </div>
            <div class="mb-5 m-5">
              <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Your phone number</label>
              <input type="number" id="phone" name="phone" class="shadow-sm  border border-gray-900 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required>
            </div>
            <div class="mb-5 m-5">
              <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Your password</label>
              <input type="password" id="password" name="password" class="shadow-sm  border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
            </div>
            <div class="mb-5 m-5">
              <label for="repeat-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray">Repeat password</label>
              <input type="password" id="rpassword" name="rpassword" class="shadow-sm border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
            </div>
            <div class="flex items-start mb-5 m-5">
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register new account</button>
            </div>

          </form>
        
    </div>
</div>
<br>
@endsection