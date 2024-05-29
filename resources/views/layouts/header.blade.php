<div id="wrapper" class="clearfix">
  <div id="top-bar" class="transparent-topbar dark" style="background-color: #a2e5f6">
      <div class="container-fluid clearfix">
          <div class="grid  justify-content-end">
              <div class="col-md-auto">
                  {{-- <div class="top-links">
                      <ul class="top-links-container">
                          <li class="top-links-item" style="color: white">
                              <a href="mailto:iims@dyandra.com"
                                  style="color: white; font-style: italic; font-weight: 300">
                                  MAIL US PEVS@DYANDRA.COM
                              </a>
                          </li>
                      </ul>
                  </div> --}}
              </div>
              <div class="my-2" style="padding: 0px 30px;">
                
<ul class="flex flex-wrap items-center justify-end text-gray-900 dark:text-gray">
  <li>
      <a href="{{ url('buy-ticket') }}" class="me-4 hover:underline md:me-6">Buy Ticket</a>
  </li>
  <li>
      <a href="{{ url('home') }}" class="me-4 hover:underline md:me-6">My Account</a>
  </li>
  <li class="me-4 md:me-6">
      <a href="https://twitter.com/pevs_id" class="">
        <svg class="w-6 h-6 text-gray-800 dark:text-gray" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd" d="M22 5.9c-.7.3-1.5.5-2.4.6a4 4 0 0 0 1.8-2.2c-.8.5-1.6.8-2.6 1a4.1 4.1 0 0 0-6.7 1.2 4 4 0 0 0-.2 2.5 11.7 11.7 0 0 1-8.5-4.3 4 4 0 0 0 1.3 5.4c-.7 0-1.3-.2-1.9-.5a4 4 0 0 0 3.3 4 4.2 4.2 0 0 1-1.9.1 4.1 4.1 0 0 0 3.9 2.8c-1.8 1.3-4 2-6.1 1.7a11.7 11.7 0 0 0 10.7 1A11.5 11.5 0 0 0 20 8.5V8a10 10 0 0 0 2-2.1Z" clip-rule="evenodd"/>
      </svg>  
      </a>
  </li>
  <li class="me-4 md:me-6 ">
    
      <a href="https://www.instagram.com/pevs_id/" >
        <i class="fa-brands fa-instagram fa-xl"></i></a>
  </li>
  <li class="me-1 sm:me-6">
      <a href="https://www.youtube.com/@dyandra">
        <svg class="w-6 h-6 text-gray-800 dark:text-gray" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd" d="M21.7 8c0-.7-.4-1.3-.8-2-.5-.5-1.2-.8-2-.8C16.2 5 12 5 12 5s-4.2 0-7 .2c-.7 0-1.4.3-2 .9-.3.6-.6 1.2-.7 2l-.2 3.1v1.5c0 1.1 0 2.2.2 3.3 0 .7.4 1.3.8 2 .6.5 1.4.8 2.2.8l6.7.2s4.2 0 7-.2c.7 0 1.4-.3 2-.9.3-.5.6-1.2.7-2l.2-3.1v-1.6c0-1 0-2.1-.2-3.2ZM10 14.6V9l5.4 2.8-5.4 2.8Z" clip-rule="evenodd"/>
      </svg>
      </a>
  </li>
</ul>

              </div>
          </div>
      </div>
  </div>

<section id="nav">

    <nav class="bg-white border-white-200 dark:bg-white-900 dark:border-white-700">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="{{ url('/') }}" class="flex items-left space-x-3 rtl:space-x-reverse">
            <div>
            <img src="https://pevs.s3.ap-southeast-1.amazonaws.com/logo-pev.png"
            alt="Periklindo Electric Vehicle Show Logo" style="width:auto;height:5rem; !Important">
            </div>
              
          </a>
          <button data-collapse-toggle="navbar-multi-level" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-multi-level" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-white-100 rounded-lg bg-white-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-white-800 md:dark:bg-white-900 dark:border-white-700">
              <li>
                <a href="{{ url('/') }}" class=" block py-2 px-3 text-gray  rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-gray-900  md:dark:bg-transparent hover:text-blue-500 " aria-current="page">HOME</a>
              </li>
              <li>
                  <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar1" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-grey md:dark:hover:text-blue-500 dark:focus:text-grey dark:hover:bg-blue-600 md:dark:hover:bg-transparent">EXHIBITORS <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg></button>
                  <!-- Dropdown menu -->
                  <div id="dropdownNavbar1" class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-cyan-200 dark:divide-gray-600">
                      <ul class="py-2 text-sm text-gray-700 dark:text-gray-900" aria-labelledby="dropdownLargeButton">
                        <li>
                          <a href="{{ url('exhibitor-sponsor') }}" class="block px-4 py-2 hover:bg-white dark:hover:text-gray-900">Sponsor</a>
                        </li>
                       
                        <li>
                          <a href="{{ url('exhibitor-list') }}" class="block px-4 py-2 hover:bg-white dark:hover:text-gray-900">Exhibitor List</a>
                        </li>
                        <li>
                            <a href="{{ url('floorplan') }}" class="block px-4 py-2 hover:bg-white dark:hover:text-gray-900">Floorplan</a>
                          </li>
                          <li>
                            <a href="{{ url('offical-partners') }}" class="block px-4 py-2 hover:bg-white dark:hover:text-gray-900">Official Partner</a>
                          </li>
                      </ul>
                      
                  </div>
              </li>
    
              <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar2" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-grey md:dark:hover:text-blue-500 dark:focus:text-grey dark:hover:bg-blue-600 md:dark:hover:bg-transparent">MEDIA <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
      </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar2" class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-cyan-200 dark:divide-gray-600">
                    <ul class="py-2 text-sm text-gray-900 dark:text-gray-900" aria-labelledby="dropdownLargeButton">
                      <li>
                        <a href="{{ url('our-partners') }}" class="block px-4 py-2 hover:bg-white dark:hover:text-gray-900">Media Partner</a>
                      </li>
                     
                      <li>
                        <a href="{{ url('press-release') }}" class="block px-4 py-2 hover:bg-white dark:hover:text-gray-900">Press Release</a>
                      </li>
                      <li>
                          <a href="{{ url('press-registration') }}" class="block px-4 py-2 hover:bg-white dark:hover:text-gray-900">Press Registration</a>
                        </li>
                    </ul>
                    
                </div>
            </li>
    
             
    
    
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar3" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-grey md:dark:hover:text-blue-500 dark:focus:text-grey dark:hover:bg-blue-600 md:dark:hover:bg-transparent">SHOW GUIDE <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
      </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar3" class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-cyan-200 dark:divide-gray-600">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-900" aria-labelledby="dropdownLargeButton">
                      <li>
                        <a href="{{ url('auction') }}" class="block px-4 py-2 hover:bg-white dark:hover:text-gray-900">Auction</a>
                      </li>
                     
                      <li>
                        <a href="{{ url('e-catalogue') }}" class="block px-4 py-2 hover:bg-white dark:hover:text-gray-900">E-Catalogue</a>
                      </li>
                      <li>
                          <a href="{{ url('e-showd') }}" class="block px-4 py-2 hover:bg-white dark:hover:text-gray-900">E-Show Directory</a>
                        </li>
                        <li>
                          <a href="{{ url('materi-seminar') }}" class="block px-4 py-2 hover:bg-white dark:hover:text-gray-900">Seminar & Talk Show</a>
                        </li>
                        <li>
                            {{-- <a href="#" class="block px-4 py-2 hover:bg-white dark:hover:text-gray-900">Shuttle Bus</a> --}}
                          </li>
                          <li>
                            <a href="{{ url('visitor-service') }}" class="block px-4 py-2 hover:bg-white dark:hover:text-gray-900">Visitor Services</a>
                          </li>
                    </ul>
                    
                </div>
            </li>
    
            <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar4" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gret md:dark:hover:text-blue-500 dark:focus:text-grey dark:hover:bg-blue-600 md:dark:hover:bg-transparent">LOGIN/REGISTER <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
      </svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownNavbar4" class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-cyan-200 dark:divide-gray-600">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-900" aria-labelledby="dropdownLargeButton">
                      <li>
                        <a href="{{ url('login') }}" class="block px-4 py-2 hover:bg-white dark:hover:text-gray-900">VISITOR LOGIN</a>
                      </li>
                     
                      <li>
                        <a href="{{ url('register') }}" class="block px-4 py-2 hover:bg-white dark:hover:text-gray-900">VISITOR REGISTRATION</a>
                      </li>
                    
                    </ul>
                    
                </div>
                
            </li>
              <li class="text-sky-500 block py-2 px-3 rounded md:bg-transparent  md:p-0  md:dark:bg-transparent  ">
                @if(Auth::check()) 
                Welcome Back, {{ auth()->user()->name }}
                
              </li>
              <a href="{{ url('/logout') }}">
                <button href="" class="hover:bg-gray-700 rounded-lg p-1">          
                  <svg class="w-6 h-6 text-gray-800 hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H8m12 0-4 4m4-4-4-4M9 4H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h2"/>
                  </svg>
                </button>
              </a>
              @endif
            </ul>
          
          </div>
        </div>
      </nav>
      

</section>