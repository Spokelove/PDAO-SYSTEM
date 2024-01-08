
@include('partials.header')
<?php  $array = array('title' => 'V-ABLE   SYSTEM') ;?>
  <x-nav :data="$array"/>
<x-messages />

<script src="../path/to/chartjs.min.js"></script>

<body class = "body bg-lime-500 rounded-lg shadow-2xl dark:bg-[#0F172A]">
    <div class = " mt-2 fixed w-full z-30 flex bg-white-100 dark:bg-[#0F172A] p-2 items-center justify-center h-16 px-8">
        <div class = "logo ml-12 dark:text-white  transform ease-in-out duration-500 flex-none h-full flex items-center justify-center ">
            ADMIN
        </div>
        <!-- SPACER -->
        <!-- SPACER -->
        <div class = "grow h-full flex items-center justify-center "></div>
        <div class = "grow h-full flex items-center justify-center "></div>



<!-- ============================user log in================================================================================ -->


<!-- 
      <name of user> -->
      <!-- <div class = "flex space-x-3 items-center px-3 ">

        <div x-data="{ dropdownOpen: false }" class="relative">

              <button @click="dropdownOpen = ! dropdownOpen"
              class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
              <img src="{{url('/build/logo.png')}}" alt="..." class="   max-w-50 rounded h-8 w-8">
            
              </button>
     

       
        <div class = "hidden md:block text-sm md:text-md text-black dark:text-white "> {{ Auth::user()->name }}</div> 



        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"
              style="display: none;"></div>
              
        <div x-show="dropdownOpen"
              class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
              style="display: none;">
                                                                                
              <a href="/"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Home</a> 
              <a href="/Management"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Account Management</a> 
                  
             <a href="/register"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Add User</a> 


                  <a href="/registration/create"
                  class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">PWD Registration</a> 

  
                </div>    
              </div>
          </div>
      </div> -->
      <div class="flex space-x-3 items-center px-3">

<div x-data="{ dropdownOpen: false }" class="relative">

    <button @click="dropdownOpen = !dropdownOpen"
        class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
        <img src="{{ url('/build/logo.png') }}" alt="..." class="max-w-50 rounded h-8 w-8">
    </button>

    <div class="hidden md:block text-sm md:text-md text-black dark:text-white">
        @auth
        {{ Auth::user()->name }}
        @endauth
    </div>

    <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"
        style="display: none;"></div>

    <div x-show="dropdownOpen"
        class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
        style="display: none;">

        @auth
            <a href="/" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z" />
                </svg>
                Home
            </a>

            <a href="/Management" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                </svg>
                Account Management
            </a>

            <a href="/register" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                </svg>
                Add User
            </a>

            <a href="/registration/create" class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                </svg>
                PWD Registration
            </a>

            <form action="/logout" method="post">
                @csrf
                <button class=" block py-2 pr-3 pl-2 text-black transition duration-300 hover:text-red-900  flex items-center font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h- ml-2 mr-2">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1012.728 0M12 3v9" />
                </svg>

                    Log Out
                </button>
            </form>

        @else
            <li>
                <a href="/login" class="block py-2 pr-4 pl-3">Sign In</a>
            </li>
            <li>
                <a href="/register" class="block py-2 pr-4 pl-3">Sign Up</a>
            </li>
        @endauth

           </div>
       </div>
    </div>
</div>

<!-- =============================================================================================================================== -->


    <aside class = " w-60 -translate-x-48 fixed transition transform ease-in-out duration-1000 z-50 flex h-screen bg-white-500  shadow-lg shadow-green-500/50 ">
        <!-- open sidebar button -->
        <div class = "max-toolbar translate-x-24 scale-x-0 w-full -right-6 transition transform ease-in duration-300 flex items-center justify-between border-4 border-white dark:border-[#0F172A] bg-stone-200  absolute top-2 rounded-full h-12">
            
            <div class="flex pl-4 items-center space-x-2 ">
                <div>
                <div onclick="setDark('dark')" class="moon text-black hover:text-blue-500 dark:hover:text-[#38BDF8]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3} stroke="currentColor" class="w-4 h-4">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M21.752 15.002A9.718 9.718 0 0118 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 003 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 009.002-5.998z" />
                    </svg>
                </div>
                <div onclick="setDark('dark')" class = "sun hidden text-black hover:text-black-500 dark:hover:text-[#38BDF8]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                      </svg>                      
                </div>
            </div >
                <div class = "text-black hover:text-blue-500 dark:hover:text-[#38BDF8]">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3} stroke="currentColor" class="w-4 h-4">
                        <path strokeLinecap="round" strokeLinejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </div>
            </div>
            <div  class = " shadow-lg shadow-green-500/50 flex items-center space-x-3 group bg-gradient-to-r dark:from-cyan-500 dark:to-blue-900 from-gray-200 via-stone-200 to-white-100  pl-10 pr-2 py-1 rounded-full text-black  ">
                <div class= "transform ease-in-out duration-300 mr-12">
                  V-ABLE
                </div>
            </div>
        </div>
        <div onclick="openNav()" class = "-right-6 transition transform ease-in-out duration-500 flex border-4 border-white dark:border-[#0F172A] bg-green-900 dark:hover:bg-green-900 hover:bg-green-600 absolute top-2 p-3 rounded-full text-white hover:rotate-45">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={3} stroke="currentColor" class="w-4 h-4">
                <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z" />
            </svg>
        </div>


        
        <!-- MAX SIDEBAR-->
        <div class= " bg-green-700 max hidden text-black  text-white  mt-20 flex-col space-y-2 w-full h-[calc(100vh)]">


        <h1 class= " font-bold ml-4 w-full  text-black text-white-500 text-white bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">PWD Transactions</h1>
            <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-5 h-5">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>    
                <div >
                <a href ="{{url('/')}}" class="text-base leading-4">Home</a>

                </div>
                
            </div>
            
            <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>                      
                <div>
                <a href ="{{url('/Profilling')}}" class="text-base leading-4">Profilling</a>

                </div>
            </div>



            <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
               <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>

                     
               <div>
                <a href ="{{url('Pwdprofile')}}" class="text-base leading-4">PWD Profile</a>
                </div>
             </div>


             
            <hr class="border-1 border-black-200 hover:border-green-500 drop-shadow-xl"/>

           <h1 class= " font-bold ml-4 w-full text-black text-white-500 text-white bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">Account Management</h1>
           <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
               <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                   </svg>


                     
                <div>
                <a href ="{{url('Management')}}" class="text-base leading-4">User Profile</a>

                </div>
            </div>

  
            <hr class="border-1 border-black-200 hover:border-green-500 drop-shadow-xl"/>

           <h1 class= " font-bold ml-4 w-full text-black text-white-500 text-white bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">Assistance Transactions</h1>
           <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
        </svg>

                     
                <div>
                <a href ="{{url('/Assistance')}}" class="text-base leading-4"> Assistance Ledger</a>

             </div>
        </div>
       
       

         <div class="hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
              </svg>


        <div>
            <a href="" class="text-base leading-4">Assistance Master List</a>
        </div>
            </div>



            

            <div class="hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
        </svg>

        <div>
            <a href="{{ url('/PdaoAssistance/create') }}" class="text-base leading-4">Assistance Given Form</a>
        </div>
            </div>



            <hr class="border-1 border-black-200 hover:border-green-500 drop-shadow-xl"/>

           <h1 class= " font-bold ml-4 w-full text-black text-white-500 text-white bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">Assistance Report</h1>
           <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 00-2.25-2.25H15a3 3 0 11-6 0H5.25A2.25 2.25 0 003 12m18 0v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 9m18 0V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v3" />
</svg>


                     
                <div>
                <a href ="" class="text-base leading-4">Assistance Given </a>

                </div>
            </div>

       <hr class="border-1 border-black-200 hover:border-green-500 drop-shadow-xl"/>
 

         <h1 class= " font-bold ml-4 w-full text-black text-white-500 text-white bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">Setting</h1>
         <div class="hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
         <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
           <path stroke-linecap="round" stroke-linejoin="round" d="M9 3.75H6.912a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859M12 3v8.25m0 0l-3-3m3 3l3-3" />
             </svg>

    <div>
        <a href="{{url('/TypesofAssistance/create')}}" class="text-base leading-4">Types of Assistance</a>
    </div>
</div>

          <div role="button" tabindex="0" class="hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3" title="Click to access settings">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
          </svg>

              <div>
                  <a href="{{url('/ProgramAssistance/create')}}" class="text-base leading-4">Types of Program</a>
              </div>
          </div>


      </div>

 </div>
        



        <!-- MINI SIDEBAR-->
        <div class= "mini mt-20 flex flex-col space-y-2 w-full h-[calc(100vh)]">

                 <!-- 1stlink -->
                <a href="{{ url('/') }}" class="hover:ml-4 justify-end pr-5 text-black hover:text-black dark:hover:text-blue-500 w-full bg-green-600 p-3 transform ease-in-out duration-300 flex">
            <div class="text-base leading-4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
            </div>
        </a>

            <!-- 2nd link -->
        <a href="{{ url('/Profilling') }}" >
            <div class= "hover:ml-4 justify-end pr-5 text-black hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3  transform ease-in-out duration-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>                 
            </div>
         </a>


             <!-- 3rd link -->
        <a href ="{{url('Pwdprofile')}}">
            <div class= "hover:ml-4 justify-end pr-5 text-black hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3 r transform ease-in-out duration-300 flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
          </svg>     
       </div>
   </a>

           <!-- 4th link -->
       <a href ="{{url('Management')}}">
            <div class= "hover:ml-4 justify-end pr-5 text-black hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3 r transform ease-in-out duration-300 flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
            </svg>
      </div>
</a>
<!-- 

               5th link -->
          <a href ="{{url('/Assistance')}}">
             <div class= "hover:ml-4 justify-end pr-5 text-black hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3 r transform ease-in-out duration-300 flex">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
               <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
              </svg>    
      </div>
</a>




               <!-- 6th link -->
               <a href="">
             <div class= "hover:ml-4 justify-end pr-5 text-black hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3 r transform ease-in-out duration-300 flex">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                   </svg>
          </div>
      </a>




             
               <!-- 7th link -->
               <a href="{{ url('/PdaoAssistance/create') }}">
             <div class= "hover:ml-4 justify-end pr-5 text-black hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3 r transform ease-in-out duration-300 flex">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
           <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
          </svg>     
             </div>
</a>

                   <!-- 8th link -->
             <div class= "hover:ml-4 justify-end pr-5 text-black hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3 r transform ease-in-out duration-300 flex">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a2.25 2.25 0 00-2.25-2.25H15a3 3 0 11-6 0H5.25A2.25 2.25 0 003 12m18 0v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 9m18 0V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v3" />
                </svg>
             </div>


               <!-- 9th link -->
               <a href="{{url('/TypesofAssistance/create')}}">
             <div class= "hover:ml-4 justify-end pr-5 text-black hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3 r transform ease-in-out duration-300 flex">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M9 3.75H6.912a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859M12 3v8.25m0 0l-3-3m3 3l3-3" />
                   </svg>
             </div>
        </a>
                 
               <!-- 10th link -->
               <a href="{{url('/ProgramAssistance/create')}}">
                  <div class= "hover:ml-4 justify-end pr-5 text-black hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3 r transform ease-in-out duration-300 flex">
                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                   <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                     </svg>
             </div>
          </a>
      </div>      
</aside>
    <!-- CONTENT -->
    <div class = "content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">
        <nav class = " flex px-5 py-3 text-gray-700  rounded-lg bg-stone-100 dark:bg-[#1E293B] " aria-label="Breadcrumb">
            <ol class = "inline-flex items-center space-x-1 md:space-x-3">
                <li class = "inline-flex items-center">             
                   <button class=" carousel-button " onclick="previousSlide()">&#8249;</button>
                   <button class=" carousel-button " onclick="showSlide(0)">PWD Member Information</button>
                   <button class=" carousel-button" onclick="showSlide(1)">Residence And Employment Information</button>
                   <button class=" carousel-button" onclick="showSlide(2)">Family Background And ID References</button>
                   <button class=" carousel-button" onclick="showSlide(3)">Types of Disability And Cause of Disability</button>
                   <button class=" carousel-button" onclick="showSlide(4)">Organization  And Accomplished</button>
                   <button class=" carousel-button" onclick="showSlide(5)">PDAO Approving Officers</button>
                   <button class=" carousel-button" onclick="showSlide(6)"> PDAO Approving Sections</button>
                   <button class=" carousel-button" onclick="showSlide(7)"> Assistance Given And Status  </button>
                   <button class=" carousel-button" onclick="nextSlide()">Next</button>
                </li>
            </ol>
        </nav>
    </div>
  <br>
        
    
        <!-- <start of content> -->
                
        <div class="content ml-12 pb-1 ">
    @if($errors->any())
        <div class="bg-white text-white-500 font-bold rounded-t px-4 py-2">
            Something's Wrong Please  Check your Information .?
        </div>

        <ul class="border border-t-0 border-white rounded-b bg-white px-4 py-2 text-red-700">
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    @endif
</div>


 <form action ="{{ route('registration.store') }}" method="POST" enctype="multipart/form-data class=" >
      @csrf

     

         <!-- <start for personal information>
              <!-- script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.3.x/dist/index.js"></script> -->
                        <!-- <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3"> 
                           
                           <input type="file"  name="image_path" class="hidden" x-ref="photo" x-on:change="
                              photoName = $refs.photo.files[0].name;
                                 const reader = new FileReader();
                                 reader.onload = (e) => {
                                 photoPreview = e.target.result;
                                };
                                reader.readAsDataURL($refs.photo.files[0]);">

                                     <label  name="image_path"class="block text-gray-700 text-sm font-bold mb-2 text-center" for="photo">
                                         Member Photo <span class="text-red-600"> </span>
                                        </label>
    
                                 <div class="text-center">
                                      <div class="mt-2" x-show="! photoPreview">
                                         <img src="{{url('/build/logo.png')}}" alt="..."   class="w-40 h-40 m-auto rounded-full shadow">
                                           </div>
                                <div class="mt-2" x-show="photoPreview" style="display: none;">
                                     <span class="block w-40 h-40 rounded-full m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
                                        </span>
                                     </div>
                                              <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
                                                  Select New Photo
                                                    </button> 
                        -->



                       <style>

                          .carousel {
                                      position: relative;
                                      max-width: 1000px;
                                      margin: 0 auto;
                                    }

                          .carousel-content {
                                      display: flex;
                                      overflow: hidden;
                                    }

                            .slide {
                                      flex: 0 0 100%;
                                   }

                               img {
                                      max-width: 100%;
                                      height: auto;
                                    }

                 .carousel-buttons {
                                      display: flex;
                                      justify-content: center;
                                      margin-top: 10px;
                                   }

                  .carousel-button {
                                      margin: 0 5px;
                                      padding: 5px 10px;
                                      font-size: 16px;
                                      background-color:#54B435;
                                      border: none;
                                      cursor: pointer;
                                      border-radius: 20px;
                                      color:white;
                                   }

                           .active {
                                      background-color:	#A9A9A9;

                                   }
                 </style>

     <!-- </head> -->

 <!-- Implement the carousel -->   
  <!-- start1     Member  Information              -->
  <h6 class="text-blueGray-400 text-xl  font-bold uppercase ml-5  text-black-600 text-center">DEPARTMENT OF HEALTH</h6>
  <div class=" text-center   px-4  font- uppercase text-xl">Philippines Registry For Persons with Disabilities Version 4.0</div> 
  <h6 class="text-blueGray-400 text-xl  mb-10 font-bold uppercase ml-5  text-black-600 text-center">Application Form</h6>


  <div class="carousel">
    <div class="carousel-content">
        <div class="slide relative border border-gray-500 rounded-lg bg-white mt-5" id="slide1">
        <h6 class="text-blueGray-400 text-xl mt-3 mb-10 font-bold uppercase ml-5  text-black-600 text-center">Member Information</h6>

            <hr class="border-1 border-stone-500 hover:border-green-500 drop-shadow-xl" />

                    <div class="flex flex-wrap mt-5">
                    <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3 mt-5">
                            <input
                                autocomplete="off"
                                name="pwd_no"
                                id="pwd_no"
                                type="integer"
                                value="10-1321-000-"
"
                                class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
                                placeholder="Pwd No."
                                value="{{ old('pwd_no') }}"
                            >
                            <label for="pwd_no"
                                class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"
                            >Pwd No. *</label>
                            
                            @error('pwd_no')
                                <p class="text-red-500 text-xs p-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
              
                                        <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3 mt-7">
                            <input
                                autocomplete="off"
                                name="date_applied"
                                id="date_applied"
                                type="date"
                                class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
                                placeholder="Date Applied"
                                value="{{ old('date_applied') }}"
                            >
                            <label for="date_applied"
                                class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"
                            >Date Applied *</label>
                        
                            @error('date_applied')
                                <p class="text-red-500 text-xs p-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>


                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                            for="grid-password"></label>
                            <select name="application" id="application" class="focus:ring-1 focus:ring-blue-600 block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                <option value="NEW" {{ old('application') === 'NEW' ? 'selected' : '' }}>NEW</option>
                                <option value="RENEW" {{ old('application') === 'RENEW' ? 'selected' : '' }}>RENEW</option>
                                <option value="TRANSFERED" {{ old('application') === 'TRANSFERED' ? 'selected' : '' }}>TRANSFERED</option>       
                                <option value="DEATH" {{ old('application') === 'DEATH' ? 'selected' : '' }}>DEATH</option>
                            </select>



                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>





                             <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3 mt-5">
                                <input
                                    autocomplete="off"
                                    id="last_name"
                                    name="last_name"
                                    type="text"
                                    class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
                                    placeholder="Last Name *"
                                    value="{{ strtoupper(old('last_name')) }}"
                                />
                                <label for="last_name"
                                    class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"
                                >Last Name *</label>
                            
                                @error('last_name')
                                    <p class="text-red-500 text-xs p-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                                                    <div class="w-full lg:w-4/12 px-4">
                                <div class="relative w-full mb-3 mt-5">
                                    <input
                                        autocomplete="off"
                                        id="first_name"
                                        name="first_name"
                                        type="text"
                                        class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
                                        placeholder="First Name *"
                                        value="{{ strtoupper(old('first_name')) }}" 
                                    />
                                    <label for="first_name"
                                        class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"
                                    >First Name *</label>
                                
                                    @error('first_name')
                                        <p class="text-red-500 text-xs p-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>


                                                    <div class="w-full lg:w-4/12 px-4">
                            <div class="relative w-full mb-3 mt-5">
                                <input
                                    autocomplete="off"
                                    id="middle_name"
                                    name="middle_name"
                                    type="text"
                                    class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
                                    placeholder="Middle Name / None *"
                                    value="{{ strtoupper(old('middle_name')) }}" 
                                />
                                <label for="middle_name"
                                    class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"
                                >Middle Name / N/A *</label>
                            
                                @error('middle_name')
                                    <p class="text-red-500 text-xs p-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>


                                        <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password"> </label>
                        <select name="suffix_of_applicant" id="suffix_of_applicant" class="focus:ring-1 focus:ring-blue-600 block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="" {{ old('suffix_of_applicant') == "" ? 'selected' : '' }}>Select Suffix</option>
                            <option value="Jr" {{ strtoupper(old('suffix_of_applicant')) == "JR" ? 'selected' : '' }}>Jr</option>
                            <option value="Sr" {{ strtoupper(old('suffix_of_applicant')) == "SR" ? 'selected' : '' }}>Sr</option>
                            <option value="I" {{ strtoupper(old('suffix_of_applicant')) == "I" ? 'selected' : '' }}>I</option>
                            <option value="II" {{ strtoupper(old('suffix_of_applicant')) == "II" ? 'selected' : '' }}>II</option>
                            <option value="III" {{ strtoupper(old('suffix_of_applicant')) == "III" ? 'selected' : '' }}>III</option>
                            <option value="IV" {{ strtoupper(old('suffix_of_applicant')) == "IV" ? 'selected' : '' }}>IV</option>
                            <option value="V" {{ strtoupper(old('suffix_of_applicant')) == "V" ? 'selected' : '' }}>V</option>
                        </select>

                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>


                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" id="birthday" name="birthday" type="date" value="{{ old('birthday') }}"
                            class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
                            value="{{ old('birthday') }}">
                        <label for="birthday"
                            class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Birthday
                            *</label>
                            @error('birthday')
                                    <p class="text-red-500 text-xs p-1">{{ $message }}</p>
                              @enderror
                     </div>
                </div>



                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-50 mt-7">
                        <input type="integer" id="age" name="age"
                            class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                            placeholder="Age">

                            @error('age')
                                    <p class="text-red-500 text-xs p-1">{{ $message }}</p>
                              @enderror
                     </div>
                </div>

                            <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3 mt-7">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password"></label>
                    <select name="gender" id="gender"
                        class="focus:ring-1 focus:ring-blue-600 block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-state">
                        <option value="" {{ strtoupper(old('gender')) == "" ? 'selected' : '' }}>Select Gender *</option>
                        <option value="Male" {{ strtoupper(old('gender')) == "MALE" ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ strtoupper(old('gender')) == "FEMALE" ? 'selected' : '' }}>Female</option>
                    </select>
                    
                    @error('gender')
                        <p class="text-red-500 text-xs p-1">{{ $message }}</p>
                    @enderror
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>
            </div>


                                <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3 mt-7">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password"> </label>
                            <select name="status" id="status"
                                class="focus:ring-1 focus:ring-blue-600 block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="grid-state">
                                <option value="" {{ strtoupper(old('status')) == "" ? 'selected' : '' }}>Select Status *</option>
                                <option value="Single" {{ strtoupper(old('status')) == "SINGLE" ? 'selected' : '' }}>Single</option>
                                <option value="Separated" {{ strtoupper(old('status')) == "SEPARATED" ? 'selected' : '' }}>Separated</option>
                                <option value="Cohabotation / (live-in)"
                                    {{ strtoupper(old('status')) == "COHABOTATION / (LIVE-IN)" ? 'selected' : '' }}>Cohabitation / (live-in)</option>
                                <option value="Married" {{ strtoupper(old('status')) == "MARRIED" ? 'selected' : '' }}>Married</option>
                                <option value="Widow/er" {{ strtoupper(old('status')) == "WIDOW/ER" ? 'selected' : '' }}>Widow / er</option>
                            </select>

                            @error('status')
                                <p class="text-red-500 text-xs p-1">{{ $message }}</p>
                            @enderror

                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>
                    </div>




                                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="email_add" id="email_add" type="text"
                            class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
                            placeholder="Email Address " 
                            value="{{ strtoupper(old('email_add')) }}" 
                        />
                        <label for="email_add"
                            class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Email
                            Address </label>

                        @error('email_add')
                            <p class="text-red-500 text-xs p-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

            </div>
          
        </div>
    <!-- </div> -->
<!-- </div> -->
<!-- end1 -->


<!-- start 2 RESIDENCE AND EMPLOYMENT INFORMATION-->

<!-- <div class="carousel"> -->
<div class="carousel-content ">
    <div class=" text-center  w-100 h-100 slide relative border border-gray-500 rounded-lg bg-white mt-5" id="slide2">
   
      <h6 class="text-blueGray-400 text-xl mt-3 mb-6 font-bold uppercase ml-5">RESIDENCE AND EMPLOYMENT INFORMATION</h6>
      <hr class="border-1 border-stone-500 hover:border-green-500 drop-shadow-xl" />

      <div class="flex flex-wrap mt-5">
      <div class="w-full lg:w-4/12 px-4">
          <div class="relative w-full mb-3 mt-7">
            <label
              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
              for="grid-password"
            ></label>
            <select
              name="barangay"
              id="barangay"
              class="focus:ring-1 focus:ring-blue-600 block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-state"
            >
              <option value="">Select Barangay *</option>
              @foreach($barangays as $barangay)
              <option value="{{ $barangay->barangay }}">{{ $barangay->barangay }}</option>
              @endforeach()
            </select>
            <div
              class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
            >
              <svg
                class="fill-current h-4 w-4"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                />
              </svg>
            </div>
          </div>
        </div>

   

        <div class="w-full lg:w-4/12 px-4">
          <div class="relative w-full mb-3 mt-7">
            <label
              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
              for="grid-password"
            ></label>
            <select
              name="purok"
              id="purok"
              class="focus:ring-1 focus:ring-blue-600 block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-state"
            >
              <option value="">Select Purok *</option>
              @foreach($puroks as $purok)
              <option value="{{ $purok->purok }}">{{ $purok->purok }}</option>
              @endforeach()
            </select>
            <div
              class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
            >
              <svg
                class="fill-current h-4 w-4"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                />
              </svg>
            </div>
          </div>
        </div>




        <div class="w-full lg:w-4/12 px-4">
          <div class="relative w-full mb-3 mt-7">
            <input
              autocomplete="off"
              name="house_and_street"
              id="house_and_street"
              type="text"
              class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
              placeholder="House No. and Street *"
            />
            <label
              for="house_and_street"
              class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"
            >
              House No. and Street *
            </label>
          </div>
        </div>

     
        <div class="w-full lg:w-4/12 px-4">
          <div class="relative w-full mb-3 mt-5">
            <label
              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
              for="grid-password"
            ></label>
            <select
              name="municipality"
              id="municipality"
              class="focus:ring-1 focus:ring-blue-600 block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-state"
            >
            <option value="">Select Municipality *</option>
               @foreach($municipalities as $municipality)
                <option value="{{ $municipality->municipality }}" {{ $municipality->municipality == 'VALENCIA CITY' ? 'selected' : '' }}>
                    {{ $municipality->municipality }}
                </option>
              @endforeach()
            </select>
            <div
              class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
            >
              <svg
                class="fill-current h-4 w-4"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                />
              </svg>
            </div>
          </div>
        </div>



        <div class="w-full lg:w-4/12 px-4">
          <div class="relative w-full mb-3 mt-5">
            <input
              autocomplete="off"
              name="province"
              id="province"
              type="text"
              value="Bukidnon"
              class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
              placeholder="Province *"
            />
            <label
            for="province"
              class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"
            >
              Province *
            </label>
          </div>
        </div>

        <div class="w-full lg:w-4/12 px-4">
          <div class="relative w-full mb-3 mt-5">
            <input
              autocomplete="off"
              name="region"
              id="10"
              type="text"
              value="10"
              class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
              placeholder="Region *"
            />
            <label
              for="region"
              class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"
            >
              Region *
            </label>
          </div>
        </div>

        <div class="w-full lg:w-4/12 px-4">
          <div class="relative w-full mb-3 mt-5">
            <input
              autocomplete="off"
              name="landline"
              id="landline"
              type="integer"
              class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
              placeholder="Landline_No"
            />
            <label
              for="landline"
              class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"
            >
              Landline_No
            </label>
          </div>
        </div>

        <div class="w-full lg:w-4/12 px-4">
          <div class="relative w-full mb-3 mt-5">
            <input
              autocomplete="off"
              name="mobile_no"
              id="mobile_no"
              type="integer"
              value="+63 - "
              class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
              placeholder="Mobile_No *"
            />
            <label
              for="mobile_no"
              class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"
            >
              Mobile_No *
            </label>
          </div>
        </div>

        <div class="w-full lg:w-4/12 px-4">
          <div class="relative w-full mb-3 mt-5">
            <label
              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
              for="grid-password"
            ></label>
            <select
              name="educational_attain"
              id="educational_attain"
              class="focus:ring-1 focus:ring-blue-600 block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-state"
            >
              <option value="">Educational Attainment *</option>
              @foreach($attainments as $attainment)
              <option value="{{ $attainment->attainment }}">{{ $attainment->attainment }}</option>
              @endforeach()
            </select>
            <div
              class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
            >
              <svg
                class="fill-current h-4 w-4"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                />
              </svg>
            </div>
          </div>
        </div>
      </div>

      <div class="flex flex-wrap mt-5 w-full">
        <div class="w-full lg:w-4/12 px-4">
          <div class="relative w-full mb-3 mt-5">
            <label
              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
              for="grid-password"
            ></label>
            <select
              name="status_of_employment"
              id="status_of_employment"
              class="focus:ring-1 focus:ring-blue-600 block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-state"
            >
              <option value="">Status of Employment *</option>
              @foreach($employments as $employment)
              <option value="{{ $employment->employment }}">{{ $employment->employment }}</option>
              @endforeach()
            </select>
            <div
              class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
            >
              <svg
                class="fill-current h-4 w-4"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                />
              </svg>
            </div>
          </div>
        </div>

        <div class="w-full lg:w-4/12 px-4">
          <div class="relative w-full mb-3 mt-5">
            <label
              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
              for="grid-password"
            ></label>
            <select
              name="category_of_employment"
              id="category_of_employment"
              class="focus:ring-1 focus:ring-blue-600 block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-state"
            >
              <option value="">Category of Employment *</option>
              @foreach($categorys as $category)
              <option value="{{ $category->category }}">{{ $category->category }}</option>
              @endforeach()
            </select>
            <div
              class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
            >
              <svg
                class="fill-current h-4 w-4"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                />
              </svg>
            </div>
          </div>
        </div>

        <div class="w-full lg:w-4/12 px-4">
          <div class="relative w-full mb-3 mt-5">
            <label
              class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
              for="grid-password"
            ></label>
            <select
              name="types_of_employment"
              id="types_of_employment"
              class="focus:ring-1 focus:ring-blue-600 block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="grid-state"
            >
              <option value="">Types of Employment *</option>
              @foreach($types as $type)
              <option value="{{ $type->type }}">{{ $type->type }}</option>
              @endforeach()
            </select>
            <div
              class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700"
            >
              <svg
                class="fill-current h-4 w-4"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                />
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- </div> -->
<!-- </div> -->

<!-- end 2-->


 <!-- start3Family Background  And ID References -->
  <!-- <div class="carousel"> -->
  <div class="carousel-content">
        <div class="slide relative border border-gray-500 rounded-lg bg-white mt-5" id="slide3">
            <h6 class=" text-center text-blueGray-400 text-xl mt-3 mb-6 font-bold uppercase ml-5">Family Background and ID References</h6>
            <hr class="border-1 border-stone-500 hover:border-green-500 drop-shadow-xl"/>

    
            <div class=" mt-5 text-center w-full lg:w-12/12 px-4  font- uppercase text-sm"> FATHER'S NAME</div> 

            <div class="flex flex-wrap">
                <!-- Father's Information -->
                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="father_last_name" id="father_last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Father last name" />
                        <label for="father_last_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last name</label>
                    </div>
                </div>
                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="father_first_name" id="father_first_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Father first name" />
                        <label for="father_first_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First name</label>
                    </div>
                </div>
                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="father_middle_name" id="father_middle_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Father middle name" />
                        <label for="father_middle_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle name</label>
                    </div>
                </div>
                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <select name="suffix_of_father" class="focus:ring-1 focus:ring-blue-600 block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option value="" {{ old('suffix_of_father') == "" ? 'selected' : '' }}>Select Suffix</option>
                            <option value="Jr" {{ old('suffix_of_father') == "Jr" ? 'selected' : '' }}>Jr</option>
                            <option value="Sr" {{ old('suffix_of_father') == "Sr" ? 'selected' : '' }}>Sr</option>
                            <option value="I" {{ old('suffix_of_father') == "I" ? 'selected' : '' }}>I</option>
                            <option value="II" {{ old('suffix_of_father') == "II" ? 'selected' : '' }}>II</option>
                            <option value="III" {{ old('suffix_of_father') == "III" ? 'selected' : '' }}>III</option>
                            <option value="IV" {{ old('suffix_of_father') == "IV" ? 'selected' : '' }}>IV</option>
                            <option value="V" {{ old('suffix_of_father') == "V" ? 'selected' : '' }}>V</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>

                
                <!-- Mother's Information -->


                
            <div class=" mt-5 text-center w-full lg:w-12/12 px-4  font- uppercase text-sm"> MOTHER'S NAME</div> 

                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" name="mother_last_name" id="mother_last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Mother last name" />
                        <label for="mother_last_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last name</label>
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" name="mother_first_name" id="mother_first_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Mother first name" />
                        <label for="mother_first_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First Name</label>
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" name="mother_middle_name" id="mother_middle_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Mother middle name" />
                        <label for="mother_middle_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle Name</label>
                    </div>
                </div>




                    
            <div class=" mt-5 text-center w-full lg:w-12/12 px-4  font- uppercase text-sm"> GUARDIAN'S NAME</div> 
                <!-- Guardian's Information -->
                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" name="guardian_last_name" id="guardian_last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Guardian last name" />
                        <label for="guardian_last_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last name</label>
                    </div>
                </div>
                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" name="guardian_first_name" id="guardian_first_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Guardian first name" />
                        <label for="guardian_first_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First name</label>
                    </div>
                </div>
                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" name="guardian_middle_name" id="guardian_middle_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Guardian middle name" />
                        <label for="guardian_middle_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle name</label>
                    </div>
                </div>
                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <!-- <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Suffix of Guardian</label> -->
                        <select name="suffix_of_guardian" id="suffix_of_guardian" class="focus:ring-1 focus:ring-blue-600 block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="" {{ old('suffix_of_guardian') == "" ? 'selected' : '' }}>Select Suffix</option>
                            <option value="Jr." {{ old('suffix_of_guardian') == "Jr." ? 'selected' : '' }}>Jr.</option>
                            <option value="Sr." {{ old('suffix_of_guardian') == "Sr." ? 'selected' : '' }}>Sr.</option>
                            <option value="I" {{ old('suffix_of_guardian') == "I" ? 'selected' : '' }}>I</option>
                            <option value="II" {{ old('suffix_of_guardian') == "II" ? 'selected' : '' }}>II</option>
                            <option value="III" {{ old('suffix_of_guardian') == "III" ? 'selected' : '' }}>III</option>
                            <option value="IV" {{ old('suffix_of_guardian') == "IV" ? 'selected' : '' }}>IV</option>
                            <option value="V" {{ old('suffix_of_guardian') == "V" ? 'selected' : '' }}>V</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>

<!-- 

                <div class=" mt-5 text-center w-full lg:w-12/12 px-4  font- uppercase text-sm"> ID REFERENCES</div>  -->
          
      
                <div class=" mt-5 text-center w-full lg:w-12/12 px-4  font- uppercase text-sm"> ID REFERENCES</div> 
                <hr class="border-1 border-stone-200 hover:border-green-500 drop-shadow-xl"/>

                <!-- Other ID References -->
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="sss_no" id="sss_no" type="integer" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="SSS No." />
                        <label for="sss_no" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">SSS No.</label>
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="gsis_no" id="gsis_no" type="integer" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="GSIS No." />
                        <label for="gsis_no" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">GSIS No.</label>
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="pag_ibig_no" id="pag_ibig_no" type="integer" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="PAG-IBIG No." />
                        <label for="pag_ibig_no" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">PAG-IBIG No.</label>
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="psn_no" id="psn_no" type="integer" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="PSN No." />
                        <label for="psn_no" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">PSN No.</label>
                    </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="philhealth" id="philhealth" type="integer" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="PHILHEALTH No." />
                        <label for="philhealth" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">PHILHEALTH No.</label>
                    </div>
                </div>

                <!-- Occupation -->
                <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 ">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Occupation</label>
                     
                        <select name="occupations"  id="occupations"  class=" focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                              <option value="">Select Occupation *</option>      
                                              @foreach($occupations as $occupation)
                                                <option value="{{ $occupation->occupation }}">{{ $occupation->occupation }}</option>       
                                              @endforeach()
                                         </select>

                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>

                                         <!-- middle name of  control unit -->
                <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="middle_name_of_control_unit"  id="middle_name_of_control_unit" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="middle_name_of_control_unit" />
                                           <label for="middle_name_of_control_unit" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Other Specify *</label>
                                    </div>
                                 </div>

            </div>
        </div>
    <!-- </div> -->
<!-- </div> -->
 
<!-- end3 -->
<!--    

 start4Types of Disability  -->
 <!-- <div class="carousel"> -->
 <div class="carousel-content p-5">
            <div class="slide relative border border-gray-500 rounded-lg bg-white mt-5" id="slide4">
                <h6 class=" text-center text-blueGray-400 text-xl mb-6 font-bold uppercase ml-5">Types of Disability</h6>
                <hr class="border-1 border-stone-500 hover:border-green-500 drop-shadow-xl"/>
                <div class="grid grid-cols-5 gap-4 mt-5">
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox1" name="types_of_disability[]" value="DEAF OR HARD HEARING" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>Deaf or Hard Of Hearing</span>
                        </label>
                    </div>
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox2" name="types_of_disability[]" value="INTELLECTUAL DISABILITY" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>Intellectual Disability</span>
                        </label>
                    </div>
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox3" name="types_of_disability[]" value="LEARNING DISABILITY" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>Learning Disability</span>
                        </label>
                    </div>
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox4" name="types_of_disability[]" value="MENTAL DISABILITY" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>Mental Disability</span>
                        </label>
                    </div>
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox5" name="types_of_disability[]" value="PHYSICAL DISABILITY (ORTHOPEDIC)" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>Physical Disability (Orthopedic)</span>
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-5 gap-4 mt-3">
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox6" name="types_of_disability[]" value="PSYCHOSOCIAL DISABILITY" class="w-4 h-4 text-blue-600  bg-gray-100 border-gray-100 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>Psychosocial Disability</span>
                        </label>
                    </div>
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox7" name="types_of_disability[]" value="SPEECH AND LANGUAGE IMPAIRMENT" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>Speech and Language Impairment</span>
                        </label>
                    </div>
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox8" name="types_of_disability[]" value="VISUAL DISABILITY" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>Visual Disability</span>
                        </label>
                    </div>
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox9" name="types_of_disability[]" value="CANCER (RA11215)" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>Cancer (RA11215)</span>
                        </label>
                    </div>
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox10" name="types_of_disability[]" value="RARE DISEASE (RA10747)" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>Rare Disease (RA10747)</span>
                        </label>
                    </div>
                </div>
<!-- 
                                                     reporting unit first name -->
                <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="first_name_of_reporting_unit"  id="first_name_of_reporting_unit" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="first_name_of_reporting_unit" />
                                           <label for="first_name_of_reporting_unit" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Other Specify *</label>
                                    </div>
                                 </div>




                <hr class="border-1 border-stone-200 hover:border-green-500 drop-shadow-xl"/>
                <h6 class=" text-center text-blueGray-400 text-xl mt-3 mb-6 font-bold uppercase ml-5">Cause of Disability</h6>
                <hr class="border-1 border-stone-200 hover:border-green-500 drop-shadow-xl"/>
                <div class="grid grid-cols-5 gap-4 mt-5">
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox11" name="cause_of_disability[]" value="CONGENITAL/INBORN" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>Congenital /Inborn</span>
                        </label>
                    </div>
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox12" name="cause_of_disability[]" value="AUTISM" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>Austism</span>
                        </label>
                    </div>
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox13" name="cause_of_disability[]" value="ADHD" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>ADHD</span>
                        </label>
                    </div>
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox12" name="cause_of_disability[]" value="CEREBRAL PALSY" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>Cerebral Palsy</span>
                        </label>
                    </div>
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox14" name="cause_of_disability[]" value="DOWN SYNDROME" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>Down Syndrome</span>
                        </label>
                    </div>
                </div>

                <div class="grid grid-cols-5 gap-4  mt-3">
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox15" name="cause_of_disability[]" value="ACQUIRED" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>Acquired</span>
                        </label>
                    </div>
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox16" name="cause_of_disability[]" value="CHRONICE ILLNESS" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>Chronic Illness</span>
                        </label>
                    </div>
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox17" name="cause_of_disability[]" value="CEREBRAL PALSY" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>Cerebral Palsy</span>
                        </label>
                    </div>
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox18" name="cause_of_disability[]" value="INJURY" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <span>Injury</span>
                        </label>
                    </div>
                    <div class="bg-slate-100 p-4">
                        <label class="flex items-center space-x-2">
                            <input type="checkbox" id="checkbox19" name="cause_of_disability[]" value="OTHER" class="form-checkbox text-blue-500">
                            <span>Other</span>
                            <!-- <input type="text" class="ml-1 p-1 border border-gray-300 rounded" placeholder="Specify..."> -->
                        </label>
                    </div>
                </div>
<!-- 
                                       Control unit first name -->
                <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="first_name_of_control_unit"  id="first_name_of_control_unit" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="first_name" />
                                           <label for="first_name_of_control_unit" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Other Specify *</label>
                          </div>
                  </div>
            </div>
          

        <!-- </div>
    </div> -->




    
<!-- start5 ORGANIZATION AND ACCOMPLISHED BY-->
<!-- <div class="carousel"> -->
<div class="carousel-content">
        <div class="slide relative border border-gray-500 rounded-lg bg-white mt-5" id="slide5">
          
            <h6 class=" text-center text-centertext-blueGray-400 text-xl mt-3 mb-6 font-bold uppercase ml-5 ">ORGANIZATION AND ACCOMPLISHED   </h6>
            <hr class="border-1 border-stone-500 hover:border-green-500 drop-shadow-xl"/>





            <h6 class="mt-5 text-center w-full lg:w-12/12 px-4  font-bold- uppercase text-l"> ORGANIZATION AFFLIATED </h6> 

            <div class="flex flex-wrap">
                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" name="organizational_affliated_name" id="organizational_affliated_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="organizational_affliated_name" />
                        <label for="organizational_affliated_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Org. 
                        Affliated</label>
                    </div>
                </div>

                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" name="contact_person" id="contact_person" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="contact_person" />
                        <label for="contact_person" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Contact Person</label>
                    </div>
                </div>

                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" name="office_address" id="office_address" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="office_address" />
                        <label for="office_address" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Office Address</label>
                    </div>
                </div>

                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-2">
                        <input autocomplete="off" name="tel_no" id="tel_no" type="integer" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="tel_no" />
                        <label for="tel_no" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Tel No</label>
                    </div>
                </div>


              <hr class="border-1 border-stone-200 hover:border-green-500 drop-shadow-xl"/>              
              <div class="mt-5 w-full lg:w-12/12 px-4  text-center  font-bold text-l"> ACCOMPLISHED BY: </div> 

            


              <div class=" mt-5 text-center w-full lg:w-12/12 px-4  font- uppercase text-sm">APPLICANT NAME</div> 
                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" name="applicant_last_name" id="applicant_last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="applicant_last_name" />
                        <label for="applicant_last_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last name</label>
                    </div>
                </div>

                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" name="applicant_first_name" id="applicant_first_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="applicant_first_name" />
                        <label for="applicant_first_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First Name</label>
                    </div>
                </div>

                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" name="applicant_middle_name" id="applicant_middle_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="applicant_middle_name" />
                        <label for="applicant_middle_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle Name</label>
                    </div>
                </div>

                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"> </label>
                        <select name="suffix_of_applicant" id="suffix_of_applicant" class="focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option value="" {{ old('suffix_of_applicant') == "" ? 'selected' : '' }}>Suffix</option>
                            <option value="Jr." {{ old('suffix_of_applicant') == "Jr." ? 'selected' : '' }}>Jr.</option>
                            <option value="Sr." {{ old('suffix_of_applicant') == "Sr." ? 'selected' : '' }}>Sr.</option>
                            <option value="I" {{ old('suffix_of_applicant') == "I" ? 'selected' : '' }}>I</option>
                            <option value="II" {{ old('suffix_of_applicant') == "II" ? 'selected' : '' }}>II</option>
                            <option value="III" {{ old('suffix_of_applicant') == "III" ? 'selected' : '' }}>III</option>
                            <option value="IV" {{ old('suffix_of_applicant') == "IV" ? 'selected' : '' }}>IV</option>
                            <option value="V" {{ old('suffix_of_applicant') == "V" ? 'selected' : '' }}>V</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>



                <div class="text-center w-full lg:w-12/12 px-4  font- uppercase text-sm">GUARDIAN NAME</div> 

                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="guardian_last_name" id="guardian_last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="guard_last_name" />
                        <label for="guard_last_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last Name</label>
                    </div>
                </div>

                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" name="guardian_first_name" id="guardian_first_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="guard_first_name" />
                        <label for="guardian_first_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First name</label>
                    </div>
                </div>

                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" name="guard_middle_name" id="guard_middle_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="guard_middle_name" />
                        <label for="guard_middle_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle name</label>
                    </div>
                </div>

                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"> </label>
                        <select name="guardian_suffix" id="guardian_suffix" class="focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option value="" {{ old('guardian_suffix') == "" ? 'selected' : '' }}>Suffix</option>
                            <option value="Jr." {{ old('guardian_suffix') == "Jr." ? 'selected' : '' }}>Jr.</option>
                            <option value="Sr." {{ old('guardian_suffix') == "Sr." ? 'selected' : '' }}>Sr.</option>
                            <option value="I" {{ old('guardian_suffix') == "I" ? 'selected' : '' }}>I</option>
                            <option value="II" {{ old('guardian_suffix') == "II" ? 'selected' : '' }}>II</option>
                            <option value="III" {{ old('guardian_suffix') == "III" ? 'selected' : '' }}>III</option>
                            <option value="IV" {{ old('guardian_suffix') == "IV" ? 'selected' : '' }}>IV</option>
                            <option value="V" {{ old('guardian_suffix') == "V" ? 'selected' : '' }}>V</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>



        

                <div class="text-center w-full lg:w-12/12 px-4  font- uppercase text-sm">REPRESENTATIVE NAME</div> 

                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="representative_last_name" id="representative_last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="representative_last_name" />
                        <label for="representative_last_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last Name</label>
                    </div>
                </div>

                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="representative_first_name" id="representative_first_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="representative_first_name" />
                        <label for="representative_first_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First Name</label>
                    </div>
                </div>

                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="representative_middle_name" id="representative_middle_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="representative_middle_name" />
                        <label for="representative_middle_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle Name</label>
                    </div>
                </div>

                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"> </label>
                        <select name="representative_suffix" id="representative_suffix" class="focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option value="" {{ old('representative_suffix') == "" ? 'selected' : '' }}>Suffix</option>
                            <option value="Jr." {{ old('representative_suffix') == "Jr." ? 'selected' : '' }}>Jr.</option>
                            <option value="Sr." {{ old('representative_suffix') == "Sr." ? 'selected' : '' }}>Sr.</option>
                            <option value="I" {{ old('representative_suffix') == "I" ? 'selected' : '' }}>I</option>
                            <option value="II" {{ old('representative_suffix') == "II" ? 'selected' : '' }}>II</option>
                            <option value="III" {{ old('representative_suffix') == "III" ? 'selected' : '' }}>III</option>
                            <option value="IV" {{ old('representative_suffix') == "IV" ? 'selected' : '' }}>IV</option>
                            <option value="V" {{ old('representative_suffix') == "V" ? 'selected' : '' }}>V</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  <!-- </div> 
</div>
         -->
 <!-- end 5-->


<!-- start6 APPROVING OFFICERS-->
 <!-- <div class="carousel"> -->
 <div class="carousel-content">  
        <div class="slide relative border border-gray-500 rounded-lg bg-white mt-5" id="slide6">
        <h6 class="text-center text-blueGray-400 text-xl mt-3 mb-6 font-bold uppercase ml-5" style="line-height: 1.5;">APPROVING OFFICERS</h6>

            <hr class="border-1 border-stone-500 hover:border-green-500 drop-shadow-xl" />

            <!-- Name of Certifying Physician -->
            <div class=" text-center w-full lg:w-12/12 px-4 font-uppercase font-underline text-sm mt-5">NAME OF CERTIFYING PHYSICIAN</div>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="licensed_no_of_physician" id="licensed_no_of_physician"
                            type="text"
                            class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
                            placeholder="licensed_no_of_physician" />
                        <label for="licensed_no_of_physician"
                            class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Licensed 
                            No *</label>
                    </div>
                </div>

                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="last_name_of_physician" id="last_name_of_physician"
                            type="text"
                            class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
                            placeholder="Last name *" />
                        <label for="last_name_of_physician"
                            class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last
                            name *</label>
                    </div>
                </div>

                <div class="w-full lg:w-2/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="first_name_of_physician" id="first_name_of_physician"
                            type="text"
                            class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
                            placeholder="First name *" />
                        <label for="first_name_of_physician"
                            class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First
                            name *</label>
                    </div>
                </div>

                <div class="w-full lg:w-2/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="middle_name_of_physician" id="middle_name_of_physician"
                            type="text"
                            class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
                            placeholder="Middle name *" />
                        <label for="middle_name_of_physician"
                            class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle
                            name *</label>
                    </div>
                </div>

                <div class="w-full lg:w-2/12 px-4 mt-5">
                    <div class="relative w-full mb-5">
                        <select name="suffix_of_physician" id="suffix_of_physician"
                            class="focus:ring-1 focus:ring-blue-600 block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state">
                            <option value=""
                                {{ old('suffix_of_physician') == "" ? 'selected' : '' }}>Suffix</option>
                            <option value="Jr."
                                {{ old('suffix_of_physician') == "Jr." ? 'selected' : '' }}>Jr.</option>
                            <option value="Sr."
                                {{ old('suffix_of_physician') == "Sr." ? 'selected' : '' }}>Sr.</option>
                            <option value="I"
                                {{ old('suffix_of_physician') == "I" ? 'selected' : '' }}>I</option>
                            <option value="II"
                                {{ old('suffix_of_physician') == "II" ? 'selected' : '' }}>II</option>
                            <option value="III"
                                {{ old('suffix_of_physician') == "III" ? 'selected' : '' }}>III</option>
                            <option value="IV"
                                {{ old('suffix_of_physician') == "IV" ? 'selected' : '' }}>IV</option>
                            <option value="V"
                                {{ old('suffix_of_physician') == "V" ? 'selected' : '' }}>V</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROCESSING OFFICER -->
            <div class="text-center w-full lg:w-12/12 px-4 font-uppercase text-sm"> PROCESSING OFFICER</div>
            <div class="flex flex-wrap">
                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="last_name_of_processing_officer" id="last_name_of_processing_officer"
                            type="text"
                            class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
                            placeholder="Last name *" />
                        <label for="last_name_of_processing_officer"
                            class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last
                            name *</label>
                    </div>
                </div>

                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="first_name_of_processing_officer" id="first_name_of_processing_officer"
                            type="text"
                            class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
                            placeholder="First name *" />
                        <label for="first_name_of_processing_officer"
                            class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First
                            name *</label>
                    </div>
                </div>

                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="middle_name_of_processing_officer" id="middle_name_of_processing_officer"
                            type="text"
                            class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
                            placeholder="Middle name *" />
                        <label for="middle_name_of_processing_officer"
                            class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle
                            name *</label>
                    </div>
                </div>

                <div class="w-full lg:w-3/12 px-4 mt-5">
                    <div class="relative w-full mb-5">
                        <select name="suffix_of_processing_officer" id="suffix_of_processing_officer"
                            class="focus:ring-1 focus:ring-blue-600 block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="grid-state">
                            <option value=""
                                {{ old('suffix_of_processing_officer') == "" ? 'selected' : '' }}>Suffix</option>
                            <option value="Jr."
                                {{ old('suffix_of_processing_officer') == "Jr." ? 'selected' : '' }}>Jr.</option>
                            <option value="Sr."
                                {{ old('suffix_of_processing_officer') == "Sr." ? 'selected' : '' }}>Sr.</option>
                            <option value="I"
                                {{ old('suffix_of_processing_officer') == "I" ? 'selected' : '' }}>I</option>
                            <option value="II"
                                {{ old('suffix_of_processing_officer') == "II" ? 'selected' : '' }}>II</option>
                            <option value="III"
                                {{ old('suffix_of_processing_officer') == "III" ? 'selected' : '' }}>III</option>
                            <option value="IV"
                                {{ old('suffix_of_processing_officer') == "IV" ? 'selected' : '' }}>IV</option>
                            <option value="V"
                                {{ old('suffix_of_processing_officer') == "V" ? 'selected' : '' }}>V</option>
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- APPROVING OFFICER -->
            <div class=" text-center w-full lg:w-12/12 px-4 font-uppercase text-sm">APPROVING OFFICER</div>
            <div class="flex flex-wrap">
                
                <div class="w-full lg:w-3/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" name="last_name_of_approving_officer" id="last_name_of_approving_officer"
                            type="text" value="INGALING"
                            class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
                            placeholder="last_name_of_approving_officer *" />
                        <label for="last_name_of_approving_officer"
                            class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last
                            name *</label>
                    </div>
                </div>

            <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3 mt-7">
                    <input autocomplete="off" name="first_name_of_approving_officer"
                        id="first_name_of_approving_officer" type="text" value="PATRICIO"
                        class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
                        placeholder="first_name_of_approving_officer *" />
                    <label for="first_name_of_approving_officer"
                        class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First
                        name *</label>
                </div>
            </div>

            <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3 mt-7">
                    <input autocomplete="off" name="middle_name_of_approving_officer"
                        id="middle_name_of_approving_officer" type="text" value="G."
                        class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
                        placeholder="middle_name_of_approving_officer *" />
                    <label for="middle_name_of_approving_officer"
                        class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle
                        name *</label>
                </div>
            </div>

            <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3 mt-7">
                    <select name="suffix_of_approving_officer" id="suffix_of_approving_officer"
                        class="focus:ring-1 focus:ring-blue-600 block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-state">
                        <option value=""
                            {{ old('suffix_of_approving_officer') == "" ? 'selected' : '' }}>Suffix</option>
                        <option value="Jr."
                            {{ old('suffix_of_approving_officer') == "Jr." ? 'selected' : '' }}>Jr.</option>
                        <option value="Sr."
                            {{ old('suffix_of_approving_officer') == "Sr." ? 'selected' : '' }}>Sr.</option>
                        <option value="I"
                            {{ old('suffix_of_approving_officer') == "I" ? 'selected' : '' }}>I</option>
                        <option value="II"
                            {{ old('suffix_of_approving_officer') == "II" ? 'selected' : '' }}>II</option>
                        <option value="III"
                            {{ old('suffix_of_approving_officer') == "III" ? 'selected' : '' }}>III</option>
                        <option value="IV"
                            {{ old('suffix_of_approving_officer') == "IV" ? 'selected' : '' }}>IV</option>
                        <option value="V"
                            {{ old('suffix_of_approving_officer') == "V" ? 'selected' : '' }}>V</option>
                    </select>
                    <div
                        class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- </div> -->

 <!-- end6 -->
 <!-- start7 APPROVING  SECTION  -->
 <div class="carousel">
            <div class="carousel-content">
                      <div class="slide relative border border-gray-500 rounded-lg bg-white mt-5 "id="slide7">
                            <!-- <img src="slide1.jpg" alt="Slide 1"> -->
                            <h6 class= " text-center text-blueGray-400 text-xl mt-3 mb-6 font-bold uppercase ml-5 "> APPROVING  SECTION  </h6>                                      

                             <hr class="border-1 border-stone-500 hover:border-green-500 drop-shadow-xl"/>              
                             <div class=" mt-5 text-center w-full lg:w-12/12 px-4  font- uppercase text-sm"> ENCODER</div> 

                             <div class="flex flex-wrap">
                           
                                    <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-7">
                                            <input autocomplete="off"  name="last_name_of_encoder"   id="last_name_of_encoder" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="last_name_of_encoder" />
                                            <label for="last_name_of_encoder" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last name *</label>
                                        </div>
                                      </div>

                                 
                                      <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-7">
                                            <input autocomplete="off"  name="first_name_of_encoder" id="first_name_of_encoder" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="first_name_of_encoder" />
                                            <label for="first_name_of_encoder" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First name *</label>
                                        </div>
                                      </div>

                                      <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-7">
                                            <input autocomplete="off"  name="middle_name_of_encoder"  id="middle_name_of_encoder" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="middle_name_of_encoder" />
                                            <label for="middle_name_of_encoder" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle name *</label>
                                        </div>
                                      </div>

                                    <div class="w-full lg:w-3/12 px-4 mt-5">
                                    <div class="relative w-full mb-5">

                                           <select name="suffix_of_encoder" class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                           <option value=""    {{old('suffix_of_encoder') == "" ?    'selected' : ''}}> Suffix </option>
                                           <option value="Jr." {{old('suffix_of_encoder') == "Jr." ? 'selected' : ''}}>Jr.</option>
                                           <option value="Sr." {{old('suffix_of_encoder') == "Sr." ? 'selected' : ''}}>Sr.</option>
                                           <option value="I"   {{old('suffix_of_encoder') == "I" ?   'selected' : ''}}>I</option>
                                           <option value="II"  {{old('suffix_of_encoder') == "II" ?  'selected' : ''}}>II</option>
                                           <option value="III" {{old('suffix_of_encoder') == "III" ? 'selected' : ''}}>III</option>
                                           <option value="IV"  {{old('suffix_of_encoder') == "IV" ?  'selected' : ''}}>IV</option>
                                           <option value="V"   {{old('suffix_of_encoder') == "V" ?   'selected' :''}}>V</option>           
                                           </select>
                                           <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                       </div>    
                                    </div>
                                </div>
                     


                                <div class=" mt-5 text-center w-full lg:w-12/12 px-4  font- uppercase text-sm">  NAME OF REPORTING UNIT:(OFFICE / SECTION)  </div> 
                                      <div class="w-full lg:w-3/12 px-4">
                                     <div class="relative w-full mb-3 mt-5  text-center">
                                             <input autocomplete="off" name="last_name_of_reporting_unit" id="last_name_of_reporting_unit" type="text" value="PDAO"
                                              class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="last_name__of_reporting_unit" />
                                             <label for="last_name_of_reporting_unit" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Office/Division</label>
                                        </div>
                                       </div>
                    

                                        <!-- use to  types of disability -->
                              <!-- <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="first_name__of_reporting_unit"  id="first_name__of_reporting_unit" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="first_name__of_reporting_unit" />
                                           <label for="first_name__of_reporting_unit" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First Name *</label>
                                    </div>
                                 </div> -->

<!-- --------------------------------------------------------------free to use---------------------------------------------------------------------------------------- -->
                                         <!-- free pa -->
                                 <!-- <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="middle_name_of_reporting_unit" id="middle_name_of_reporting_unit" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="middle_name_of_reporting_unit" />
                                           <label for="middle_name_of_reporting_unit" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Middle Name *</label>
                                    </div>
                                 </div> -->


                <!-- <div class="w-full lg:w-3/12 px-4">
                      <div class="relative w-full mb-3 mt-5">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"> </label>                                        
                <select  name="suffix_of_reporting_unit"    class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                   <option value="" {{old('suffix_of_reporting_unit') == "" ?        'selected' : ''}}> Suffix </option>
                   <option value="Jr." {{old('suffix_of_reporting_unit') == "Jr." ? 'selected' : ''}}>Jr.</option>
                   <option value="Sr."  {{old('suffix_of_reporting_unit') == "Sr." ? 'selected' : ''}}>Sr.</option>
                   <option value="I"   {{old('suffix_of_reporting_unit') == "I" ?   'selected' : ''}}>I</option>
                   <option value="II"  {{old('suffix_of_reporting_unit') == "II" ?  'selected' : ''}}>II</option>
                    <option value="III" {{old('suffix_of_reporting_unit') == "III" ? 'selected' : ''}}>III</option>
                    <option value="IV"  {{old('suffix_of_reporting_unit') == "IV" ?  'selected' : ''}}>IV</option>
                    <option value="V"   {{old('suffix_of_reporting_unit') ==  "V" ?   'selected' :''}}>V</option>           
                   </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                       <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>    
                 </div>
               </div> -->


<!-- -------------------------------------------------------------------------------------------------------------------------------------- -->

              <div class=" text-center mt-5 w-full lg:w-12/12 px-4  font- uppercase text-sm">   CONTROL UNIT NO. </div> 
               <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="last_name_of_control_unit"   id="last_name_of_control_unit" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="last_name_of_control_unit" />
                                           <label for="last_name_of_control_unit" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Control No. *</label>
                                   </div>
                              </div>
          

               <!-- <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="first_name_of_control_unit"  id="first_name_of_control_unit" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="first_name" />
                                           <label for="first_name_of_control_unit" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Other Specify *</label>
                                    </div>
                                 </div> -->
          

               <!-- <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="middle_name_of_control_unit"  id="middle_name_of_control_unit" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="middle_name_of_control_unit" />
                                           <label for="middle_name_of_control_unit" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Other/None</label>
                                    </div>
                                 </div> -->

                                 <!-- <div class="w-full lg:w-3/12 px-4">
                               <div class="relative w-full mb-3 mt-5">
               <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                         
                          </label>
                           <select name="suffix_of_control_unit" class="focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                           <option value="" {{old('suffix_of_reporting_unit') == "" ?        'selected' : ''}}> Suffix </option>
                   <option value="Jr." {{old('suffix_of_reporting_unit') == "Jr." ? 'selected' : ''}}>Jr.</option>
                   <option value="Sr."  {{old('suffix_of_reporting_unit') == "Sr." ? 'selected' : ''}}>Sr.</option>
                   <option value="I"   {{old('suffix_of_reporting_unit') == "I" ?   'selected' : ''}}>I</option>
                   <option value="II"  {{old('suffix_of_reporting_unit') == "II" ?  'selected' : ''}}>II</option>
                    <option value="III" {{old('suffix_of_reporting_unit') == "III" ? 'selected' : ''}}>III</option>
                    <option value="IV"  {{old('suffix_of_reporting_unit') == "IV" ?  'selected' : ''}}>IV</option>
                    <option value="V"   {{old('suffix_of_reporting_unit') ==  "V" ?   'selected' :''}}>V</option>           
                         
                             </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>    
               </div>
           </div>  -->
     <!-- </div>   
                             -->
    

<!-- 

    <h4 class="text-center">Devices</h4>
    <div class="grid grid-cols-5 gap-4 mt-5">
        <div class="bg-slate-100 p-4">
            <label class="flex items-center space-x-2">
                <input type="checkbox" id="checkbox1" name="device_given[]" value="cane"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <span>cane</span>
            </label>
        </div>
        <div class="bg-slate-100 p-4">
            <label class="flex items-center space-x-2">
                <input type="checkbox" id="checkbox2" name="device_given[]" value="crutches"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <span>crutches</span>
            </label>
        </div>
        <div class="bg-slate-100 p-4">
            <label class="flex items-center space-x-2">
                <input type="checkbox" id="checkbox3" name="device_given[]" value="Hearing Aide"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <span>Hearing Aide</span>
            </label>
        </div>
        <div class="bg-slate-100 p-4">
            <label class="flex items-center space-x-2">
                <input type="checkbox" id="checkbox4" name="device_given[]" value="Quadcane"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <span>Quadcane</span>
            </label>
        </div>
        <div class="bg-slate-100 p-4">
            <label class="flex items-center space-x-2">
                <input type="checkbox" id="checkbox5" name="device_given[]" value="Walker"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <span>Walker</span>
            </label>
        </div>
        <div class="bg-slate-100 p-4">
            <label class="flex items-center space-x-2">
                <input type="checkbox" id="checkbox7" name="device_given[]" value="White Cane"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <span>White Cane</span>
            </label>
        </div>
        <div class="bg-slate-100 p-4">
            <label class="flex items-center space-x-2">
                <input type="checkbox" id="checkbox8" name="device_given[]" value="WheelChair Adult"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <span>WheelChair Adult</span>
            </label>
        </div>
        <div class="bg-slate-100 p-4">
            <label class="flex items-center space-x-2">
                <input type="checkbox" id="checkbox9" name="device_given[]" value="WheelChair Pedia"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <span>WheelChair Pedia</span>
            </label>
        </div>
        
        <div class="bg-slate-100 p-4">
            <label class="flex items-center space-x-2">
                <input type="checkbox" id="checkbox10" name="device_given[]" value="none"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <span>None</span>
            </label>
        </div>
    <div class="text-center ml-5 mt-5">
        <!-- <button class="float-left px-4  mb-3 py-2 bg-blue-500 text-white rounded">back</button> -->
        <!-- <button class="text-right px-4 mb-3 py-2 bg-green-500 text-white rounded" type="submit">Save</button>
    </div>  -->

       </div>
 </div>

    
  <!-- start7 given devices -->
 <div class="carousel">
            <div class="carousel-content">
                      <div class="slide relative border border-gray-500 rounded-lg bg-white mt-5 "id="slide8">
                            <!-- <img src="slide1.jpg" alt="Slide 1"> -->
                            <h6 class= " text-center text-blueGray-400 text-xl mt-3 mb-6 font-bold uppercase ml-5 ">DEVICES GIVEN </h6>                                      
                            <hr class="border-1 border-stone-500 hover:border-green-500 drop-shadow-xl"/>     
                           


                            <!-- <h4 class="text-center">Devices</h4> -->
                            <div class="grid grid-cols-5 gap-4 mt-5">
                                <div class="bg-slate-100 p-4">
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" id="checkbox1" name="device_given[]" value="CANE"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <span>cane</span>
                                    </label>
                                </div>
                                <div class="bg-slate-100 p-4">
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" id="checkbox2" name="device_given[]" value="CRUTCHES"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <span>crutches</span>
                                    </label>
                                </div>
                                <div class="bg-slate-100 p-4">
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" id="checkbox3" name="device_given[]" value="HEARING AID"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <span>Hearing Aide</span>
                                    </label>
                                </div>
                                <div class="bg-slate-100 p-4">
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" id="checkbox4" name="device_given[]" value="QUADCANE"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <span>Quadcane</span>
                                    </label>
                                </div>
                                <div class="bg-slate-100 p-4">
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" id="checkbox5" name="device_given[]" value="WALKER"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <span>Walker</span>
                                    </label>
                                </div>
                                <div class="bg-slate-100 p-4">
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" id="checkbox7" name="device_given[]" value="WHITE CANE"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <span>White Cane</span>
                                    </label>
                                </div>
                                <div class="bg-slate-100 p-4">
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" id="checkbox8" name="device_given[]" value="WHEELCHAIR ADULT"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <span>WheelChair Adult</span>
                                    </label>
                                </div>
                                <div class="bg-slate-100 p-4">
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" id="checkbox9" name="device_given[]" value="WHEELCHAIR PEDIA"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <span>WheelChair Pedia</span>
                                    </label>
                                </div>
                                
                                <div class="bg-slate-100 p-4">
                                    <label class="flex items-center space-x-2">
                                        <input type="checkbox" id="checkbox10" name="device_given[]" value="NONE"
                                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <span>None</span>
                                    </label>
                                </div>
                         
                        </div>


                        <hr class="border-1 border-stone-500 hover:border-green-500 drop-shadow-xl mt-5"/>
                        <h6 class= " text-center text-blueGray-400 text-xl mt-3 mb-6 font-bold uppercase ml-5 ">STATUS OF THE PWD MEMBER </h6>       
                         

                    <!-- <div class="w-full lg:w-3/12 px-4">
                                                <div class="relative w-full mb-3 mt-5">
                                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                                            
                                            </label>
                                            <select name="suffix_of_control_unit" class="focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                            <option value="" {{old('suffix_of_reporting_unit') == "" ?        'selected' : ''}}> Assistance </option>
                                    <option value="PDAO MEMBER" {{old('suffix_of_reporting_unit') == "Jr." ? 'selected' : ''}}>PDAO MEMBER</option> -->
                                            
<!--                                             
                                                </select>
                                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                        </div>    
                                </div>
                            </div>   
 -->

                    <!-- <div class="w-full lg:w-3/12 px-4">
                                <div class="relative w-full mb-3 mt-5">
                                    <input autocomplete="off" name="middle_name_of_reporting_unit" id="middle_name_of_reporting_unit" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="middle_name_of_reporting_unit" />
                                    <label for="middle_name_of_reporting_unit" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">STATUS:</label>
                            </div>
                            </div> -->
                          
     
                             <div class="w-full lg:w-3/12 px-4">
                            <div class="relative w-full mb-3 mt-5">
                                <select
                                     name="middle_name_of_reporting_unit"
                                     id="middle_name_of_reporting_unit"

                                    class="peer h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600"
                                >
                                           <option value=""    {{old('middle_name_of_reporting_unit') == "" ?    'selected' : ''}}>Status </option>
                                           <option value="ACTIVE" {{old('middle_name_of_reporting_unit') == "ACTIVE" ? 'selected' : ''}}>ACTIVE</option>
                                           <option value="DECEASED" {{old('middle_name_of_reporting_unit') == "DECEASED" ? 'selected' : ''}}>DECEASED</option>
                                </select>
                                <label for="middle_name_of_reporting_unit" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"></label>
                            </div>
                        </div>





                <div class="text-center ml-5 mt-5">
                    <!-- <button class="float-left px-4  mb-3 py-2 bg-blue-500 text-white rounded">back</button> -->
                    <button class="text-right px-4 mb-3 py-2 bg-green-500 text-white rounded" type="submit">Save</button>
                </div>

                
                    </form>










<!-- ---------------------------------------------------------------------------------------------------------------------- -->
<!-- 
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<script>
        function saveData() {
            var inputData = document.getElementById("inputField").value;
            if (inputData.trim() === "") {
                alert("Input required. Hindi maaring mag-save na walang input.");
            } else {
                // Dito mo maaring isalaysay ang code para mag-save sa database.
                // Ito ay isang placeholder lamang.
                alert("Data successfully saved to the database: " + inputData);
            }
        }

        function decline() {
            alert("Save declined");
        }
    </script> -->
<!-- --------------------------------------------------------------------------------------------------------------------------------- -->







<!-- typesdisability -->
<!-- 
<script>

// Kunin ang lahat ng checkboxes
var checkboxes = document.querySelectorAll('input[name="types_of_disability[]"]');

// Kung magkakaroon ng pagbabago sa mga checkboxes, i-update ang total count
checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        var checkedCheckboxes = document.querySelectorAll('input[name="types_of_disability[]"]:checked');
        var totalCount = checkedCheckboxes.length;
        console.log("Kabuuang bilang ng mga na-check na checkboxes: " + totalCount);
    });
});

</script>



Add this JavaScript code to your Blade view -->
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Initialize an object to store the total counts
        var totalCounts = {
            'Austim': 0,
            'ADHD': 0,
            'Cerebral Palsy': 0,
            'Down Syndrome': 0,
            'Acquired': 0,
            'Chronic Illness': 0,
            'Injury': 0,
            'Other': 0
        }; -->

        <!-- // Function to update the total counts
//         function updateTotalCounts() {
//             // Loop through each checkbox
//             $('input[name="cause_of_disability[]"]:checked').each(function () {
//                 var value = $(this).val();
//                 if (typeof totalCounts[value] !== 'undefined') {
//                     totalCounts[value]++;
//                 }
//             });

//             // Update the total counts in the HTML
//             $.each(totalCounts, function (key, value) {
//                 $('#' + key + '-total').text(value);
//             });
//         }

//         // Listen for changes in the checkboxes
//         $('input[name="cause_of_disability[]"]').change(function () {
//             updateTotalCounts();
//         });

//         // Initial update of total counts
//         updateTotalCounts();
//     });
// </script>
  -->


  
   <!-- ----------------------------------------calculate the age automatically-------------------------------------------------------------------- -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
    $(document).ready(function() {
        $('#birthday').on('change', function() {
            var birthday = $(this).val();
            if (birthday) {
                var birthDate = new Date(birthday);
                var today = new Date();
                var age = today.getFullYear() - birthDate.getFullYear();

                // Check if the birthdate for this year has already occurred
                if (today.getMonth() < birthDate.getMonth() || (today.getMonth() === birthDate.getMonth() && today.getDate() < birthDate.getDate())) {
                    age--;
                }

                $('#age').val(age);
            } else {
                $('#age').val('');
            }
        });
    });
</script>


<!-- --------------------------------end age------------------------------------------------------------------------------------------------------------------------------------- -->


<!-- expired years -->

<script>
        $(document).ready(function() {
            $('#date_applied').on('change', function() {
                var dateApplied = new Date($(this).val());
                if (dateApplied) {
                    // Calculate the expiration date (5 years from the date applied)
                    var expirationDate = new Date(dateApplied);
                    expirationDate.setFullYear(expirationDate.getFullYear() + 5);

                    // Format the expiration date as 'YYYY-MM-DD'
                    var expirationDateString = expirationDate.toISOString().split('T')[0];

                    $('#expiration_date').val(expirationDateString);
                } else {
                    $('#expiration_date').val('');
                }
            });

            // Automatically calculate expiration date on page load
            var dateApplied = new Date($('#date_applied').val());
            if (dateApplied) {
                var expirationDate = new Date(dateApplied);
                expirationDate.setFullYear(expirationDate.getFullYear() + 5);
                var expirationDateString = expirationDate.toISOString().split('T')[0];
                $('#expiration_date').val(expirationDateString);
            }
        });
    </script>



<!-- ==================-expired years--------------------------------------------------------------------------------------------------------------------- -->





    <!-- Javascript code -->
    <script>

 let currentSlide = 0;

function showSlide(slideIndex) {
  const slides = document.querySelectorAll('.slide');
  const buttons = document.querySelectorAll('.carousel-button');

  slides[currentSlide].style.display = 'none';
  buttons[currentSlide + 1].classList.remove('active');

  slides[slideIndex].style.display = 'block';
  buttons[slideIndex + 1].classList.add('active');

  currentSlide = slideIndex;
}

function nextSlide() {
  const totalSlides = document.querySelectorAll('.slide').length;
  const nextIndex = (currentSlide + 1) % totalSlides;
  showSlide(nextIndex);
}

function previousSlide() {
  const totalSlides = document.querySelectorAll('.slide').length;
  const prevIndex = (currentSlide - 1 + totalSlides) % totalSlides;
  showSlide(prevIndex);
}

showSlide(currentSlide);
    </script>
</body>

</html>

<!-- end -->
                          
    <script>
        const sidebar = document.querySelector("aside");
        const maxSidebar = document.querySelector(".max")
        const miniSidebar = document.querySelector(".mini")
        const roundout = document.querySelector(".roundout")
        const maxToolbar = document.querySelector(".max-toolbar")
        const logo = document.querySelector('.logo')
        const content = document.querySelector('.content')
        const moon = document.querySelector(".moon")
        const sun = document.querySelector(".sun")

        function setDark(val){
            if(val === "dark"){
                document.documentElement.classList.add('dark')
                moon.classList.add("hidden")
                sun.classList.remove("hidden")
            }else{
                document.documentElement.classList.remove('dark')
                sun.classList.add("hidden")
                moon.classList.remove("hidden")
            }
        }

        function openNav() {
            if(sidebar.classList.contains('-translate-x-48')){
                // max sidebar 
                sidebar.classList.remove("-translate-x-48")
                sidebar.classList.add("translate-x-none")
                maxSidebar.classList.remove("hidden")
                maxSidebar.classList.add("flex")
                miniSidebar.classList.remove("flex")
                miniSidebar.classList.add("hidden")
                maxToolbar.classList.add("translate-x-0")
                maxToolbar.classList.remove("translate-x-24","scale-x-0")
                logo.classList.remove("ml-12")
                content.classList.remove("ml-12")
                content.classList.add("ml-12","md:ml-60")
            }else{
                // mini sidebar
                sidebar.classList.add("-translate-x-48")
                sidebar.classList.remove("translate-x-none")
                maxSidebar.classList.add("hidden")
                maxSidebar.classList.remove("flex")
                miniSidebar.classList.add("flex")
                miniSidebar.classList.remove("hidden")
                maxToolbar.classList.add("translate-x-24","scale-x-0")
                maxToolbar.classList.remove("translate-x-0")
                logo.classList.add('ml-12')
                content.classList.remove("ml-12","md:ml-60")
                content.classList.add("ml-12")

            }

        }
    </script>

 </div>
 
