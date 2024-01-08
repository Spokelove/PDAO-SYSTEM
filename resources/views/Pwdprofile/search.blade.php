
@include('partials.header')
<?php  $array = array('title' => 'V-ABLE   SYSTEM') ;?>
  <x-nav :data="$array"/>
  


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
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" data-slot="icon" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>

                    PwdProfile
                    </a>
                </li>
            </ol>



            <div class = "grow h-full flex items-center justify-center "></div>
           <div class = "grow h-full flex items-center justify-center "></div>

             <div class="relative mb-0 flex justify-end" data-te-input-wrapper-init>
                
             <form action="{{ route('pwdprofile.search') }}"  method="GET" class="flex items-center">

                   <input
                      type="search" name="query"
                        class=" flex justify-end peer block min-h-[auto] w-full rounded border-0 bg-white-200 px-20 py-[0.50rem] leading-[1.9] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-black data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-blue-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                         id=""  placeholder="search" />
                         <label
                          
                                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-blue-900 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-green-200 dark:peer-focus:text-blue-900"
                                       >Search</label>                                           
                </form>        
            </div>
        </nav>

        <!-- <start of content> -->
      
    <form action ="/"  method="POST" class=" w-full flex flex-col space-y-4 text-gray-70  bg-white-100">
       @csrf
  
            <start for personal information>
           <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

           <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.3.x/dist/index.js"></script>

 


                <button onclick="window.print()" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-2 border border-gray-400 rounded shadow  mt-2 ml-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.72 13.829c-.24.03-.48.062-.72.096m.72-.096a42.415 42.415 0 0110.56 0m-10.56 0L6.34 18m10.94-4.171c.24.03.48.062.72.096m-.72-.096L17.66 18m0 0l.229 2.523a1.125 1.125 0 01-1.12 1.227H7.231c-.662 0-1.18-.568-1.12-1.227L6.34 18m11.318 0h1.091A2.25 2.25 0 0021 15.75V9.456c0-1.081-.768-2.015-1.837-2.175a48.055 48.055 0 00-1.913-.247M6.34 18H5.25A2.25 2.25 0 013 15.75V9.456c0-1.081.768-2.015 1.837-2.175a48.041 48.041 0 011.913-.247m10.5 0a48.536 48.536 0 00-10.5 0m10.5 0V3.375c0-.621-.504-1.125-1.125-1.125h-8.25c-.621 0-1.125.504-1.125 1.125v3.659M18 10.5h.008v.008H18V10.5zm-3 0h.008v.008H15V10.5z" />
            </svg>
           
        </button>

 <!-- content-->

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .custom-table {
            border-collapse: collapse; 
            border: 2px solid black; 
        }

        
        .custom-table td, .custom-table th {
            border: 1px solid black; 
            padding: 8px; 
        }
        p {
            text-align: center;
        }
        .custom-table
        {
           margin-left:auto;
           margin-right:auto;
           text-align:center;
         
        }

        
    </style>

</head>
<body>
    <br>
    <p><strong>DEPARTMENT OF HEALTH</strong></p>
        <p><strong>Philippine Register for Persons with Disabilities Version 4.0</strong></p>
        <p><strong>APPLICATION FORM</strong></p>
        <table class="custom-table" width="1500">
        <br>
        <tr>
        @foreach ($results as $result)

        <?php
        $dateApplied = new DateTime($result->date_applied);
        $expirationDate = clone $dateApplied;
        $expirationDate->modify('+5 years');
        $expirationDateString = $expirationDate->format('Y-m-d');
        ?>





            <td>1</td>  
             <td colspan="2"> <strong> APPLICANTION  </td></strong>
            <td>{{ $result->application }}</td>
            
            <td><strong></td></strong>
            
            <td colspan="2">picture 1X1</td>
            
        </tr>
        <tr>
        <td>2.</td>
            <td colspan="3"> <STRONG>PERSONS WITH DISABILITY NUMBER (RR-PPMM-BBB-NNNNNNN):          </STRONG>{{ $result->pwd_no }}</td>

            <td><STRONG> 3. Date Applied:</STRONG> {{ $result->date_applied }}</td>
            <td rowspan="3" colspan="2">picture here</td>
        </tr>
        <tr>
            <td>4.</td>
            <td colspan="4">PERSONAL INFORMATION *</td>
            
        </tr>
    
        <tr>
            <td></td>
            <td><STRONG>LAST NAME:</STRONG>   {{ strtoupper($result->last_name) }} </td>
            <td><STRONG>FIRST NAME: </STRONG> {{ strtoupper($result->first_name) }}</td>
            <td><STRONG>MIDDLE NAME:</STRONG> {{ strtoupper($result->middle_name) }}</td>
            <td><STRONG>SUFFIX: </STRONG></td>
        </tr>
    
      
        <tr>
            <td>5.</td>
            <td colspan="3"> <STRONG> DATE OF BIRT: </STRONG>{{ $result->birthday }} </td>
            
            <td>6.<STRONG> GENDER:</STRONG> {{ $result->gender }}</td>
            <td><STRONG>AGE:</STRONG> {{ $result->age }}</td> 
            <!-- <td>MALE: *</td>  -->

        </tr>
    
        <tr>
            <td>7.</td>
            <td colspan="6"><strong>CIVIL STATUS: </strong> {{ $result->status }}</td>
        </tr>
    
        <tr>
            <td></td>
             <td><STRONG>ACTIVE/DECEASED: </STRONG>{{ $result->middle_name_of_reporting_unit }} </td>
            <td><STRONG>Expiration Date:</STRONG> {{ $expirationDateString }}</td>
            <!-- <td>Cohabitation (live-in) *</td>
            <td>Married   *</td>
            <td colspan="2">Widow/er   *</td> -->
        </tr>
    
    <tr>
        <td>8.</td>
        <td colspan="2"><strong>8. TYPE OF DISABILITY:  </strong>
                                                    @php
                                                        $types = json_decode($result->types_of_disability, true);
                                                    @endphp

                                                    @if(is_array($types))
                                                        {{ implode(', ', $types) }}
                                                    @else
                                                        {{ $result->types_of_disability }}
                                                    @endif
                                                </p>
</td>
        <td></td>
        <td colspan="6"><strong>9. CAUSE OF DISABILITY: </strong> @php
                                                $causes = json_decode($result->cause_of_disability, true);
                                            @endphp

                                            @if(is_array($causes))
                                                {{ implode(', ', $causes) }}
                                            @else
                                                {{ $result->cause_of_disability }}
                                            @endif</td>

        
    </tr>
 
    <tr>
        <td>10.</td>
        <td colspan="6"><strong>RESIDENCE ADDRESS*</strong></td>
    </tr>
    <tr>
        <td></td>
         <td><strong>House No. and street</strong></td>
         <td><strong>Purok:  </strong>  {{ $result->purok }}</td>
        <td><strong>Barangay:  </strong>{{ $result->barangay }}</td>
        <td><strong>Municipalit: </strong>VALENCIA CITY</td>
        <td><STRONG>Province:   </strong>BUKIDNON</td>
        <td colspan="2"><STRONG>Region:  </STRONG>10</td>
      
    </tr>

    <tr>
        <td>11.</td>
        <td colspan="6"><strong>CONTACT DETAILS</strong></td>
    </tr>

    <tr>
        <td></td>
         <td>Landline No.: </td>
        <td> Mobile No.:</td>
        <td colspan="6">Email Address:</td>
    </tr>

        <tr>
           
            <td colspan="4"><strong>12. EDUCATION ATTAINMENT</strong></td>
            <td colspan="3"><strong>14. OCCUPATION:  </strong> {{ $result->middle_name_of_control_unit }}</td>
        </tr>

        <tr>
            
            <td colspan="2"><strong>13. STATUS EMPLOYMENT:*</strong></td>
            <td colspan="2"><strong>13. CATEGORY OF EMPLOYMENT:*</strong></td>
            <td colspan="3"><strong>13. TYPES OF EMPLOYMENT:*</strong></td>
        </tr>

        <tr>
            <td>15.</td>
            <td colspan="6"><strong>ORGANIZATION INFORMATION:</strong></td>
        </tr>
        <tr>
            
             <td colspan="3">Organization Affiliated:</td>
            <td>Contact Person:</td>
            <td>Office Address:</td>
            <td colspan="2">Tel. Nos.:</td>
        </tr>

        <tr>
            <td>16.</td>
            <td colspan="6"><strong>ID REFFERENCE NO.:</strong></td>
        </tr>
        <tr>
            
             <td colspan="2"><STRONG>SSS NO.</STRONG>{{ $result->sss_no }}</td>
            <td><sTRONG>GSIS NO.</STRONG>{{ $result->gsis_no }}</td>
            <td><STRONG>PAG-IBIG NO </STRONG>{{ $result->pag_ibig_no }}</td>
            <td><STRONG>PSN NO.</STRONG></td>
            <td colspan="2"><STRONG>PhilHealth No</STRONG>{{ $result->philhealth }}</td>
        </tr>

        <tr>
            <td>17.</td>
            <td colspan="2"><strong> FAMILY BACKGROUND:</strong></td>
            <td ><strong>LAST NAME </strong></td>
            <td ><strong>FIRST NAME</strong></td>
            <td colspan="2"><strong>MIDDLE NAME</strong></td>
        </tr>
        
       
        <tr>
           
            <td colspan="3"><strong>FATHER'S NAME:</strong></td>
            <td ><strong></strong>{{ $result->father_last_name }}</td>
            <td ><strong></strong>{{ $result->father_first_name }}</td>
            <td colspan="2"><strong></strong>{{ $result->father_middle_name }}</td>
        </tr>
        <tr>
            
            <td colspan="3"><strong>MOTHER'S NAME:</strong></td>
            <td ><strong></strong>{{ $result->mother_last_name }}</td>
            <td ><strong></strong>{{ $result->mother_first_name }}</td>
            <td colspan="2"><strong></strong>{{ $result->mother_middle_name }}</td>
        </tr>
        <tr>
            
            <td colspan="3"><strong>GAUARDIAN:</strong></td>
            <td ><strong></strong></td>
            <td ><strong></strong></td>
            <td colspan="2"><strong></strong></td>
        </tr>

        <tr>
            <td>18.</td>
            <td colspan="2"><strong> ACCOMPLISHED BY:*</strong></td>
            <td ><strong>LAST NAME</strong></td>
            <td ><strong>FIRST NAME</strong></td>
            <td colspan="2"><strong>MIDDLE NAME</strong></td>
        </tr>
        
        
        <tr>
            
            <td colspan="3"><strong>APPLICANT:</strong></td>
            <td ><strong></strong></td>
            <td ><strong></strong></td>
            <td colspan="2"><strong></strong></td>
        </tr>
        <tr>
            
            <td colspan="3"><strong>GAUARDIAN:</strong></td>
            <td ><strong></strong></td>
            <td ><strong></strong></td>
            <td colspan="2"><strong></strong></td>
        </tr>
        <tr>
            
            <td colspan="3"><strong>REPRESENTATIVE:</strong></td>
            <td ><strong></strong></td>
            <td ><strong></strong></td>
            <td colspan="2"><strong></strong></td>
        </tr>

        <tr>
            <td>19.</td>
            <td colspan="2"><strong> NAME OF CERTIFYING PHYSICIAN:</strong></td>
            <td ><strong></strong></td>
            <td ><strong></strong></td>
            <td colspan="2"><strong></strong></td>
        </tr>

        <tr>
            
            <td colspan="3"><strong> LICENSE NO.:</strong></td>
        </tr>
        <tr>
            <td>20.</td>
            <td colspan="2"><strong> PROCESSING OFFICER:</strong></td>
            <td ><strong></strong>INGGALING</td>
            <td ><strong></strong>PATRICIO</td>
            <td colspan="2">I.</td>
        </tr>

        <tr>
            <td>21.</td>
            <td colspan="2"><strong> APPROVING SECTION:</strong></td>
            <td ><strong></strong></td>
            <td ><strong></strong></td>
            <td colspan="2"><strong></strong></td>
        </tr>

        <tr>
            <td>22.</td>
            <td colspan="2"><strong>ENCODER:</strong></td>
            <td ><strong></strong></td>
            <td ><strong></strong></td>
            <td colspan="2"><strong></strong></td>
        </tr>

        <tr>
            <td>23.</td>
            <td colspan="2"><strong> LICENSE NO.:</strong></td>
            <td colspan="4" ><strong></strong></td>
        </tr>

        <tr>
            <td>24.</td>
            <td colspan="2"><strong> CONTROL NO.:</strong></td>
            <td colspan="4"><strong></strong></td>
        </tr>
        @endforeach
    </table>
  
    </form>
</body>
</html>



<!--     
 <!DOCTYPE html>
<html>
<head>
    <style>
        /* Define a CSS class for the table */
        .custom-table {
            border-collapse: collapse; /* Collapse borders into a single border */
            border: 2px solid black; /* Set the border color to red */
        }

        /* Define a CSS class for table cells */
        .custom-table td, .custom-table th {
            border: 1px solid black; /* Set the border color for table cells */
            padding: 8px; /* Add padding for better spacing */
        }
        p {
            text-align: center;
        }
    </style>
</head>
<body>

<br>
<p><strong>DEPARTMENT OF HEALTH</strong></p>
    <p><strong>Philippine Register for Persons with Disabilities Version 4.0</strong></p>
    <p><strong>APPLICATION FORM</strong></p>
    <table class="custom-table" width="1000">
   
    <tr>
        <td>1</td>  Numbers in the leftmost column -->
        <!-- <td colspan="2"> <strong>NEW APPLICANT</td></strong>
        <td><strong>RENEW</td></strong>
        
        <td><strong>TRANSFER</td></strong>
        
        <td colspan="2">picture 1X1</td>
    </tr>
    <tr>
    <td>2.</td>
        <td colspan="3">PERSONS WITH DISABILITY NUMBER (RR-PPMM-BBB-NNNNNNN) *</td>
        <td> 3. Date Applied *(mm/dd/yyyy)</td>
        <td rowspan="3" colspan="2">pictutreh here</td>
    </tr>
    <tr>
        <td>4.</td>
        <td colspan="4">PERSONAL INFORMATION *</td>
        
    </tr>

    <tr>
        <td></td>
        <td>LAST NAME: * </td>
        <td>FIRST NAME: *</td>
        <td>MIDDLE NAME: *</td>
        <td>SUFFIX: *</td>
    </tr>

  
    <tr>
        <td>5.</td>
        <td colspan="3"> DATE OF BIRTH: * (mm/dd/yyyy) </td>
        
        <td>6 GENDER *</td>
        <td>FEMALE: *</td>
        <td>MALE: *</td>
    </tr>


    <tr>
        <td>7.</td>
        <td colspan="6"><strong>CIVIL STATUS: *</strong></td>
    </tr>


    <tr>
        <td></td>
        <td>Single  * </td>
        <td>Separated  *</td>
        <td>Cohabitation (live-in) *</td>
        <td>Married   *</td>
        <td colspan="2">Widow/er   *</td>
    </tr>

<tr>
    <td>8.</td>
    <td colspan="2">8. TYPE OF DISABILITY: *</td>
    <td></td>
    <td colspan="6"><strong>9. CAUSE OF DISABILITY: *</strong></td>
</tr>
<tr>
    <td></td>
    <td colspan="2"><input type="checkbox" name="type">Deaf or Hard of Hearing</td>
    <td><input type="checkbox" name="type">Psychosocial Disability</td>
</tr>
<tr>
    <td></td>
    <td colspan="2"><input type="checkbox" name="type">Intellectual Disability</td>
    <td><input type="checkbox" name="type">Speech and Language Impairment</td>
</tr>
<tr>
    <td></td>
    <td colspan="2"><input type="checkbox" name="type">Learning Disability</td>
    <td><input type="checkbox" name="type">Visual Disability</td>
</tr>
<tr>
    <td></td>
    <td colspan="2"><input type="checkbox" name="type">Mental Disability</td>
    <td><input type="checkbox" name="type">Cancer (RA11215)</td>
</tr>
<tr>
    <td></td>
    <td colspan="2"><input type="checkbox" name="type">Physical Disability (Orthopedic)</td>
    <td><input type="checkbox" name="type">Rare Disease (RA10747)</td>
</tr>



</table>

</body>
</html> -->

                   




   
     <!-- The previous button -->
    <!-- <a class="absolute left-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
        onclick="moveSlide(-1)">❮</a>

     The next button -->
    <!-- <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
        onclick="moveSlide(1)">❯</a>

</div>
<br> -->

<!-- The dots -->
<!-- <div class="flex justify-center items-center space-x-5">
    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(1)"></div>
    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(4)"></div>
    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(5)"></div>
    <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(6)"></div>
</div> -->







<!-- --------------------expiration year------------------------------------------------------------- -->


<!-- -------------------------------------------------------------------------------------- -->
<!-- Javascript code -->
<script>
    // set the default active slide to the first one
    let slideIndex = 1;
    showSlide(slideIndex);

    // change slide with the prev/next button
    function moveSlide(moveStep) {
        showSlide(slideIndex += moveStep);
    }

    // change slide with the dots
    function currentSlide(n) {
        showSlide(slideIndex = n);
    }

    function showSlide(n) {
        let i;
        const slides = document.getElementsByClassName("slide");
        const dots = document.getElementsByClassName('dot');
        
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }

        // hide all slides
        for (i = 0; i < slides.length; i++) {
            slides[i].classList.add('hidden');
        }

        // remove active type from all dots
        for (i = 0; i < dots.length; i++) {
            dots[i].classList.remove('bg-yellow-500');
            dots[i].classList.add('bg-green-600');
        }

        // show the active slide
        slides[slideIndex - 1].classList.remove('hidden');

        // highlight the active dot
        dots[slideIndex - 1].classList.remove('bg-green-600');
        dots[slideIndex - 1].classList.add('bg-yellow-500');
    }
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


 
