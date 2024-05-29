<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    @vite('resources/css/app.css')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title></title>
    
    <link rel="canonical" href="">
    
    
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
    @yield('ext-css')

    <title>Invitation - {{ $data->name }}</title>
    
</head>

<body class="bg-gray-900">


<main class="mt-10 md:mt-0 p-4 h-auto pt-20">
   
  <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-auto text-white">
    <div class="row">
        <div class="col-md-12 my-2">
            <img src="{{ url('image/logo.png') }}" class="mx-auto d-block mb-4" width="280" alt="">
        </div>
        <div class="col-md-12 my-2">
            <strong>Hello, {{ $data->name }}!</strong>
        </div>
        <div class="col-md-12 my-2">
            @php
                $gap = 1;
                $dist = intdiv($data->qty, 50);
                $mod = fmod($data->qty, 50);
            @endphp
            <div class="row">
                @for ($i = 1; $i <= $dist; $i++)
                    <div class="col-md-3">
                        <a href="" class="btn btn-primary btn-block">Download File from </a>
                    </div>
                @endfor
            </div>
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Code
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date Scan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Link Download
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Scan This
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data->dt as $key) 
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th class="p-8">{{$loop->iteration}}</th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$key->barcode}}
                        </th>
                        <td class="px-6 py-4">
                            @if ($key->scan_in == 1)
                                        USED
                                    @else
                                        AVAILABLE
                                    @endif
                        </td>
                        <td class="px-6 py-4">
                            @if ($key->scan_in == 1)
                            {{ Carbon\Carbon::parse($key->updated_at)->addHour(7)->format('d F H:i') }}
                        @else
                            -
                        @endif
                        </td>
                        <td class="px-6 py-4">
                            @if ($key->scan_in == 0)
                            <a class=""
                                href="{{ url('invitation/download/' . $key->barcode . '/' . md5($key->barcode)) }}">
                                {{ url('invitation/download/' . $key->barcode . '/' . md5($key->barcode)) }}</a>
                            @else
                                LINK HAS BEEN USED
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <img src="data:image/png;base64, {!! DNS2D::getBarcodePNG(url('invitation/download/' . $key->barcode . '/' . md5($key->barcode)), 'QRCODE', 5, 5) !!}" alt="">
                        </td>
                        <td class="px-6 py-4">      
                            @if ($key->scan_in == 0)
                            <a class="btn btn-danger text-white btn-sm"
                                href="{{ url('invitation/download/' . $key->barcode . '/' . md5($key->barcode)) }}"><i
                                    class="fa fa-arrow-down"></i> Download</a>
                        @else
                            <button class="btn btn-secondary text-white btn-sm">
                                USED</button>
                        @endif           
                        </td>
                    </tr>
                    @endforeach
                    
                  
                </tbody>
            </table>

        </div>
    
  </div>
    
    
    
    

@include('layouts.dashboard.footer')
</main>
@yield('ext-js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>

<script
      src="https://code.jquery.com/jquery-3.7.1.js"
      integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

<script>
    // Check if the user prefers dark mode
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        // Add a class to the body to force dark mode
        document.body.classList.add('dark');
    }
</script>

</body>


</html>