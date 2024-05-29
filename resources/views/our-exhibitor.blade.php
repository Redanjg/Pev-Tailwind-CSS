


@extends('layouts.default')

@section('ext-css')
<style>

    .Page{

    }

</style>
@endsection

@section('content')
    <section id="about" style="background-image: linear-gradient(#a2e5f6, white);">

        
        <div class="container mx-auto">
            <p class="text-center mb-0 pt-2" style="font-style: italic; font-weight: 900; font-size: xx-large">PEVS 2024</p>
            <h3 class="text-center" style="font-style: italic; font-weight: 900; font-size: xx-large">OFFICIAL PEVS
                EXHIBITORS
            </h3>
            <center>
            <hr style="width: 20%;color: black;border: 1px solid;">
            </center>
            <div class="row mt-5">
                @foreach ($banner as $key)
            <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12 mx-auto mt-5">
                <img src="{{ asset('storage/banner/' . $key->id . '/' . $key->img) }}" alt=""
                    class="mx-auto d-block">
            </div>
                @endforeach
                <br>
            </div>
        </div>

        {{-- <div class="container mx-auto">
            <section class=" p-3 sm:p-5">
                <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
                    <!-- Start coding here -->
                    <div class="relative shadow-md sm:rounded-lg overflow-hidden">
                        <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 p-4">
                            <div class="w-full md:w-1/2">
                                <form class="flex items-center">
                                    <label for="simple-search" class="sr-only">Search</label>
                                    <div class="relative w-full">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input type="text" id="simple-search" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search" required="">
                                    </div>
                                </form>
                            </div>
                            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                                <button type="button" class="flex items-center justify-center text-gray bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">
                                    <svg class="h-3.5 w-3.5 mr-2" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                                    </svg>
                                    Add product
                                </button>
                                
                            </div>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-sm text-left text-gray-900 dark:text-gray-900">
                                <thead class="text-xs text-gray-900 uppercase dark:text-gray-900 border-y border-blue-700">
                                    <tr>
                                        <th scope="col" class="px-4 py-3">BRAND</th>
                                        <th scope="col" class="px-4 py-3">LOCATION</th>
                                        <th scope="col" class="px-4 py-3">BOOTH/STAN</th>   
                                        <th scope="col" class="px-4 py-3">CATEGORY</th>
                                        
                                        <th scope="col" class="px-4 py-3">
                                            <span class="sr-only">Actions</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="border-b dark:border-blue-700">
                                        <th scope="row" class="px-4 py-3 font-medium text-gray whitespace-nowrap dark:text-gray">A</th>
                                        <td class="px-4 py-3">Hall A</td>
                                        <td class="px-4 py-3">A1</td>
                                        <td class="px-4 py-3">Passenger Cars</td>
                                        
                                        <td class="px-4 py-3 flex items-center justify-end">
                                            <button id="apple-imac-27-dropdown-button" data-dropdown-toggle="apple-imac-27-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                </svg>
                                            </button>
                                            <div id="apple-imac-27-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="apple-imac-27-dropdown-button">
                                                    <li>
                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                    </li>
                                                </ul>
                                                <div class="py-1">
                                                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b dark:border-blue-700">
                                        <th scope="row" class="px-4 py-3 font-medium text-gray whitespace-nowrap dark:text-gray">B</th>
                                        <td class="px-4 py-3">Hall B</td>
                                        <td class="px-4 py-3">B1</td>
                                        <td class="px-4 py-3">Sport Cars</td>

                                        <td class="px-4 py-3 flex items-center justify-end">
                                            <button id="apple-imac-20-dropdown-button" data-dropdown-toggle="apple-imac-20-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                </svg>
                                            </button>
                                            <div id="apple-imac-20-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="apple-imac-20-dropdown-button">
                                                    <li>
                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                    </li>
                                                </ul>
                                                <div class="py-1">
                                                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-b dark:border-blue-700">
                                        <th scope="row" class="px-4 py-3 font-medium text-gray whitespace-nowrap dark:text-gray">C</th>
                                        <td class="px-4 py-3">Hall C</td>
                                        <td class="px-4 py-3">C1</td>
                                        <td class="px-4 py-3">Luxury Cars</td>
                                        
                                        <td class="px-4 py-3 flex items-center justify-end">
                                            <button id="apple-iphone-14-dropdown-button" data-dropdown-toggle="apple-iphone-14-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none dark:text-gray-400 dark:hover:text-gray-100" type="button">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                                </svg>
                                            </button>
                                            <div id="apple-iphone-14-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="apple-iphone-14-dropdown-button">
                                                    <li>
                                                        <a href="#" class="block py-2 px-4 hover:bg-blue-200 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                                    </li>
                                                </ul>
                                                <div class="py-1">
                                                    <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                        <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
                            <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                Showing
                                <span class="font-semibold text-gray-900 dark:text-gray">1-3</span>
                                of
                                <span class="font-semibold text-gray-900 dark:text-gray">3</span>
                            </span>
                            <ul class="inline-flex items-stretch -space-x-px">
                                <li>
                                    <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500  rounded-l-lg border border-blue-700 hover:bg-blue-300 hover:text-gray-700  dark:border-blue-700 dark:text-gray-900 dark:hover:bg-blue-300 dark:hover:text-white">
                                        <span class="sr-only">Previous</span>
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-900 border border-blue-500 hover:bg-blue-300 hover:text-gray-700 dark:border-blue-500 dark:text-gray-900 dark:hover:bg-blue-300 dark:hover:text-white">1</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-900 border border-blue-500 hover:bg-blue-300 hover:text-gray-700 dark:border-blue-500 dark:text-gray-900 dark:hover:bg-blue-300 dark:hover:text-white">2</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-900 rounded-r-lg border border-gray-300 hover:bg-blue-300 hover:text-gray-900 dark:border-blue-700 dark:text-gray-900 dark:hover:bg-blue-300 dark:hover:text-white">
                                        <span class="sr-only">Next</span>
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                </section>


            {{-- <div class="">

                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>BRAND</th>
                            <th>LOCATION</th>
                            <th>BOOTH/STAN</th>
                            <th>CATEGORY</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>BRAND</th>
                            <th>LOCATION</th>
                            <th>BOOTH/STAN</th>
                            <th>CATEGORY</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>A</td>
                            <td>Hall A</td>
                            <td>A1</td>
                            <td>PASSENGER CARS</td>
                        </tr>
                        <tr>
                            <td>B</td>
                            <td>Hall A</td>
                            <td>A1</td>
                            <td>PASSENGER CARS</td>
                        </tr>
                        <tr>
                            <td>C</td>
                            <td>Hall A</td>
                            <td>A1</td>
                            <td>PASSENGER CARS</td>
                        </tr>
                        <tr>
                            <td>D</td>
                            <td>Hall A</td>
                            <td>A1</td>
                            <td>PASSENGER CARS</td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div> --}}

        <img src="https://pevs.s3.ap-southeast-1.amazonaws.com/bawahan.png" width="100%" alt="">
    </section>
@endsection