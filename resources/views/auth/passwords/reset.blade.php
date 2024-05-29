@extends('layouts.default')

@section('content')
<div class="grid place-items-center mx-auto">
    <div class="grid-row-6 w-[22rem] sm:w-[34rem] border-4 border-sky-500 rounded-lg">
        
        <form action="{{ route('reset.password.post') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="email" value="{{ $email->email }}">
            <div class="mb-5 m-5">
                <label for="password" class="@error('password') block mb-2 text-sm font-medium text-red-600 @enderror block mb-2 text-sm font-medium text-gray-900">Your password</label>
                <input type="password" id="password" name="password" class=" @error('password') bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500 @enderror bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                @if($errors->has('password'))
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $errors->first('password') }}</p>
                @endif
            </div>

            
            <div class="mb-5 m-5">
                <label for="password_re" class="block mb-2 text-sm font-medium text-gray-900">Repeat your password</label>
                <input type="password" id="password_re" name="password_re" class="  bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                @if($errors->has('password_re'))
                    <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> {{ $errors->first('password_re') }}</p>
                @endif
            </div>
           
            <div class="flex items-start mb-5 m-5">
                <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Reset Password</button>
            </div>

          </form>
        
    </div>
</div>
<br>
@endsection