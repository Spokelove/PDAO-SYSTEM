
@include('partials.header')
<?php  $array = array('title' => 'V-ABLE   SYSTEM') ;?>
  <x-nav :data="$array"/>
  

<!-- 
<div class="max-w-2xl mx-auto mt-10"> -->
<!-- full tailwind config using javascript -->
<!-- https://github.com/neurolinker/popice -->
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet"/> -->

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
        <nav class = "flex px-5 py-3 text-gray-700 rounded-lg bg-stone-100 dark:bg-[#1E293B] " aria-label="Breadcrumb">
            <ol class = "inline-flex items-center space-x-1 md:space-x-3">
                <li class = "inline-flex items-center">
                    <a href="#" class = "inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <!-- <svg class = "w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg> -->
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6  mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                            </svg>

                   Add User for PDAO
                    </a>
                </li>
                <!-- <li>
                    <div class = "flex items-center">
                        <svg class = "w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clipRule="evenodd"></path></svg>

                        <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Registration</a>
                    </div>
                </li> -->
         </ol>

                
        </nav>
        <!-- <start of content> -->

        <main class=" ">

         <section class="mt-10 ">

                <form action="/store"  method="post" class= "flex flex-col">
                    @csrf
             
                                           
                          <div class="max-w-3lg py-6 flex flex-col justify-center sm:py-12 ">
                              
                              <div class=" shadow-lg shadow-blue-500/50 relative py-3 sm:max-w-xl sm:mx-auto w-full  bg-blue-500 rounded-xl">
                                <div
                                  class="  shadow-lg shadow-green-500/50 absolute inset-0 bg-gradient-to-r from-green-600 to-green-900 rounded-lg shadow-2xl transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                                </div>
                                <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                                  <div class="max-w-md mx-auto">
                                    <div>
                                      <h1 class=" font-sans-saref text-center text-xl font-bold shadow-lg shadow-green-200/50"> Registration for PDAO Users</h1>
                                     <!-- <img src="{{url('/build/title.png')}}" alt="">  -->
                                    </div>
                                    <div class="divide-y divide-gray-200  mt-5">
                                      <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                        <div class="relative">
                                          <input autocomplete="off" id="name" name="name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" value={{old('name')}}>
                                          <label for="name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Name</label>
                                                     @error('name')

                                                        <p class="text-red-500 text-xs  p-1">{{$message}} </p>
                                                            @enderror   

                                        <div class="divide-y divide-gray-200 ">
                                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                               <div class="relative">
                                                    <input autocomplete="off" id="email" name="email" type="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" value={{old('email')}}>
                                                      <label for="email" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Email</label>

                                                        @error('email')

                                                            <p class="text-red-500 text-xs  p-1">{{$message}} </p>
                                                                    @enderror
                                                        </div>

                                    <div class="divide-y divide-gray-200 ">
                                      <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                        <div class="relative">
                                          <input autocomplete="off"   id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" value={{old('password')}}>
                                          <label for="password" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Password</label>  
                                          @error('password')

                                            <p class="text-red-500 text-xs  p-1">{{$message}} </p>
                                               @enderror  
                                        </div>
                                


                                        <div class="relative flex items-center mt-1 text-sm">
                                    <div class=" mt-3 absolute left-0 top-1/2 transform -translate-y-1/2">
                                        <input type="checkbox" id="showPassword" class="mr-2" onchange="togglePasswordVisibility()"/>
                                        <label for="showPassword">Show Password</label>
                                    </div>
                                </div>

                                <script>
                                    function togglePasswordVisibility() {
                                        const passwordInput = document.getElementById('password');
                                        const showPasswordCheckbox = document.getElementById('showPassword');

                                        passwordInput.type = showPasswordCheckbox.checked ? 'text' : 'password';
                                    }
                                </script>




                                        <div class="divide-y divide-gray-200 ">
                                      <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7 mt-5">
                                        <div class="relative mt-5">
                                          <input autocomplete="off"   id="password_confirmation"   name="password_confirmation" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" value={{old('confirm_password')}}>
                                          <label for="password_confirmation" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs"> Confirm_Password</label>  
                                                 @error('confirm_password')
                                    
                                                 <p class="text-red-500 text-xs  p-1">{{$message}} </p>
                                                   @enderror 
                                       </div>

                                       
                                        

                                             <div class="w-full lg:w-12/12 px-4">
                                             <div class="relative w-full mb-3 mt-7">
                                               <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
        
                                                </label>
                                            
                                                      <select  name="status" class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                                      <option value="" {{old('status') == "" ? 'selected' : ''}}>Select Status</option>
                                                      <option value="Admin" {{old('status') == "Admin" ? 'selected' : ''}}>Admin</option>
                                                      <option value="User" {{old('status') == "User" ? 'selected' : ''}}>User</option>
                                                                               
                                                      </select>


                                                      @error('status')
                                    
                                                     <p class="text-red-500 text-xs  p-1">{{$message}} </p>
                                                           @enderror 
                                                       <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                                      
                                                   </div>    
                                                  </div>
                                                 </div>
                                                 </div>
                                                                       
                                        <div class="relative">
                                            
                                          <button class="bg-blue-500 text-white rounded-md px-2 py-1 hover:bg-green-700 text-white w-full py-2 rounded-lg shadow-2xl hover: shadow-xl transition duration-200" type="submit">Register</button>
                                
                                       </div>   
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>         
                      </form>
   </section>   
</main>        



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

<!-- </div> -->



 