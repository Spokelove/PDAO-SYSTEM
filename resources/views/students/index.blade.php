
@include('partials.header')
<?php  $array = array('title' => 'V-ABLE   SYSTEM') ;?>
  <x-nav :data="$array"/>
  
<!-- 
    <header class="max-w-lg mx-auto mt-1 ">
           <a href="#">
                    <div class=" bg-gray-00  text-8xl font-extrabold ">
       
                       <p class="font-sans  text-center text-2xl  text-black font-bold mb-4"> PERSONS WITH DISABILITY LIST</p>   
                  </div>  
           </a>
      
   </header>  -->
<!-- 
<div class="max-w-2xl mx-auto mt-10"> -->
<!-- full tailwind config using javascript -->
<!-- https://github.com/neurolinker/popice -->

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
<!-- 
      <name of user> -->
                     <div class = "flex space-x-3 items-center px-3 ">

                     <div x-data="{ dropdownOpen: false }" class="relative">
          
                           <button @click="dropdownOpen = ! dropdownOpen"
                            class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                            <img src="{{url('/build/logo.png')}}" alt="..." class="   max-w-50 rounded h-8 w-8">
                          
                            </button>
                          
                       <div class = "hidden md:block text-sm md:text-md text-black dark:text-white ">{{ Auth::user()->name }}</div> 

                       <div class = "hidden md:block text-sm md:text-md text-black dark:text-white"></div> 
    
                     <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"
                            style="display: none;"></div>
                            
                     <div x-show="dropdownOpen"
                            class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                            style="display: none;">
                                                                                             
                            <a href="/"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a> 
                            <a href="/Management"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Account Management</a> 
                                
                            <a href="/Management"
                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Login History</a> 
                    
                      
                   </div>    
                 </div>
                </div>
             </div>
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

        


        <div class= " bg-green-700 max hidden text-black mt-20 flex-col space-y-2 w-full h-[calc(100vh)]">

        <style>
                    /* Default text color (black) */
                    a {
                        color: black;
                    }

                    /* Text color on hover (white) */
                    a:hover {
                        color: white;
                    }
                </style>




        <h1 class= " font-bold ml-4 w-full text-white text-white-500 text-black-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">PWD Transactions</h1>
            <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-4 h-4">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>    
                <div >
                <a href ="{{url('/')}}" class="text-base leading-4">Home</a>

                </div>
                
            </div>
            
            <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>                      
                <div>
                <a href ="{{url('/Profilling')}}" class="text-base leading-4">Profilling</a>

                </div>
            </div>



            <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
               <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>

                     
               <div>
                <a href ="{{url('Pwdprofile')}}" class="text-base leading-4">PWD Profile</a>

                </div> 

</div>





            <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                </svg>                     
                <div>
                <a href ="{{url('/Assistance')}}" class="text-base leading-4">Assistance</a>

                </div>
            </div>

            <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                </svg>                      
                <div>
                <a href ="{{url('/Assistance')}}" class="text-base leading-4"> Types of Disease</a>

                </div>
            </div>

            <!-- <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
           <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
          </svg>
                     
                <div>
                <a href ="{{url('/')}}" class="text-base leading-4">Reports</a>

                </div>
            </div> -->

            <hr class="border-1 border-black-200 hover:border-green-500 drop-shadow-xl"/>

           <h1 class= " font-bold ml-4 w-full text-black text-white-500 text-white bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">Account Management</h1>
           <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
               <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                   </svg>


                     
                <div>
                <a href ="{{url('Management')}}" class="text-base leading-4">User Profile</a>

                </div>
            </div>

  
            <hr class="border-1 border-black-200 hover:border-green-500 drop-shadow-xl"/>

           <h1 class= " font-bold ml-4 w-full text-black text-white-500 text-white bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">General Reports</h1>
           <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
           <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
          </svg>
                     
                <div>
                <a href ="{{url('/')}}" class="text-base leading-4">Reports</a>

                </div>
                </div>
       
       

       <hr class="border-1 border-black-200 hover:border-green-500 drop-shadow-xl"/>
 

         <h1 class= " font-bold ml-4 w-full text-black text-white-500 text-white bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">Setting</h1>
          <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
 
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path d="M18.75 12.75h1.5a.75.75 0 000-1.5h-1.5a.75.75 0 000 1.5zM12 6a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 0112 6zM12 18a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 0112 18zM3.75 6.75h1.5a.75.75 0 100-1.5h-1.5a.75.75 0 000 1.5zM5.25 18.75h-1.5a.75.75 0 010-1.5h1.5a.75.75 0 010 1.5zM3 12a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 013 12zM9 3.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5zM12.75 12a2.25 2.25 0 114.5 0 2.25 2.25 0 01-4.5 0zM9 15.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
               </svg>
          
        <div>
            <a href ="{{url('/')}}" class="text-base leading-4">Settings</a>
  
          </div>
        </div>
       </div>
        
        <!-- MINI SIDEBAR-->
        <div class= "mini mt-20 flex flex-col space-y-2 w-full h-[calc(100vh)]">
            <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-black dark:hover:text-blue-500 w-full bg-green-600 p-3  transform ease-in-out duration-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-4 h-4">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>                  
            </div>
            <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3  transform ease-in-out duration-300 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
                </svg>                 
            </div>
            <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3 r transform ease-in-out duration-300 flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
               <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                   </svg>
          
            </div>


            <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3 r transform ease-in-out duration-300 flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 9h3.75M15 12h3.75M15 15h3.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5zm6-10.125a1.875 1.875 0 11-3.75 0 1.875 1.875 0 013.75 0zm1.294 6.336a6.721 6.721 0 01-3.17.789 6.721 6.721 0 01-3.168-.789 3.376 3.376 0 016.338 0z" />
                </svg>       
             </div>



             <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3 r transform ease-in-out duration-300 flex">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                </svg>     
             </div>


             <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3 r transform ease-in-out duration-300 flex">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
               <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                   </svg>
   
             </div>



             <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3 r transform ease-in-out duration-300 flex">
             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
           <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
          </svg>     
             </div>

             <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3 r transform ease-in-out duration-300 flex">
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
              <path d="M18.75 12.75h1.5a.75.75 0 000-1.5h-1.5a.75.75 0 000 1.5zM12 6a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 0112 6zM12 18a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 0112 18zM3.75 6.75h1.5a.75.75 0 100-1.5h-1.5a.75.75 0 000 1.5zM5.25 18.75h-1.5a.75.75 0 010-1.5h1.5a.75.75 0 010 1.5zM3 12a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 013 12zM9 3.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5zM12.75 12a2.25 2.25 0 114.5 0 2.25 2.25 0 01-4.5 0zM9 15.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
               </svg>  
</div>


         </div>      
    </aside>

    <!-- CONTENT -->
   <div class = "content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">
        <nav class = "flex px-5 py-3 text-gray-700 rounded-lg bg-stone-100 dark:bg-[#1E293B] " aria-label="Breadcrumb">
              <ol class = "inline-flex items-center space-x-1 md:space-x-3">
                  <li class = "inline-flex items-center">
                      <a href="#" class = "inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                        <svg class = "w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                            Home
                    </a>
                </li>
             <li>
                        <div class = "flex items-center">
                        <svg class = "w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clipRule="evenodd"></path></svg>

                        <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white"> Dashboard</a>
                   </div>
           </li>

          </ol>

          <!-- <div class = "grow h-full flex items-center justify-center "></div> -->
           <!-- <div class = "grow h-full flex items-center justify-center "></div>

             <div class="relative mb-0 flex justify-end" data-te-input-wrapper-init>
                
             <form action="{{ route('pwdmember.search') }}"  method="GET" class="flex items-center">

                   <input
                      type="search" name="query"
                        class=" flex justify-end peer block min-h-[auto] w-full rounded border-0 bg-white-200 px-20 py-[0.50rem] leading-[1.9] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 peer-focus:text-black data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-blue-200 dark:placeholder:text-neutral-200 dark:peer-focus:text-primary [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                         id=""  placeholder="search" />
                         <label
                          
                                class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-blue-900 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-green-200 dark:peer-focus:text-blue-900"
                                       >Search</label>                                           
                </form>        
            </div> -->
        </nav>
     

 <!-- <start of content> -->
  

<!-- {{-- <start> --}} -->
               
    
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4 mt-5">
                    <!-- First Card -->
                    <div class="bg-white-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-green-200 dark:border-gray-600 text-black font-medium group">
                        <!-- You can uncomment this part if needed -->
                      
                      <!-- <div class="flex justify-center items-center w-14 h-14 bg-slate-100 rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                       -->
                        <div class="text-right text-blue-900">
                            <p class="text-l">{{$maleCount}}</p>
                            <p class="italic">Male</p>
                        </div>
                        <div class="text-right text-pink-900">
                            <p class="text-l">{{$femaleCount}}</p>
                            <p class="italic">Female</p>
                            
                        </div>
                        <div class="text-right">
                        <p class="text-2xl text-black rounded-full bg-green-300 h-12 w-12 flex items-center justify-center">{{$totalNew}}</p>
                            <p>New</p>
                        </div>
                    </div>

                    <!-- Second Card -->
                    <div class="bg-white-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-green-200 dark:border-gray-600 text-black font-medium group">
                        <!-- You can uncomment this part if needed -->
                        
                        <!-- <div class="flex justify-center items-center w-14 h-14 bg-slate-100 rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                            </svg>
                        </div>
                        -->
                        <div class="text-right text-blue-900">
                            <p class="text-l">{{ $rmaleCount }}</p>
                            <p class="italic">Male</p>
                        </div>
                        <div class="text-right text-pink-900">
                            <p class="text-l">{{$rfemaleCount}}</p>
                            <p class="italic">Female</p>
                        </div>
                        <div class="text-right text-black">
                            <p class="text-2xl text-black rounded-full bg-green-300 h-12 w-12 flex items-center justify-center">{{$totalRenewal}}</p>
                            <p class="italic">Renewal</p>
                        </div>
                    </div>

                    <!-- Third Card -->
                    <div class="bg-white-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-green-200 dark:border-gray-600 text-black font-medium group">
                        <!-- You can uncomment this part if needed -->
                        
                        <!-- <div class="flex justify-center items-center w-14 h-14 bg-slate-100 rounded-full transition-all duration-300 transform group-hover:rotate-12">
                            <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div> -->
                       
                        <div class="text-right text-blue-900">
                            <p class="text-l">{{ $tmaleCount }}</p>
                            <p class="italic font-serif-bold">Male</p>
                        </div>

                        <div class="text-right text-blue-900">
                            <p class="text-l">{{ $tfemaleCount }}</p>
                            <p class="italic font-serif-bold  text-pink-900">Female</p>
                        </div>
                        <div class="text-right">
                            <p class="text-2xl text-black rounded-full bg-green-300 h-12 w-12 flex items-center justify-center">{{$totalTransfer}}</p>
                            <p>Transfer</p>
                        </div>
                    </div>

                    <!-- Fourth Card -->

                
                    <div class="bg-white-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-green-200 dark:border-gray-600 text-black font-medium group">
                        <div class="text-right text-blue-900">
                            <p class="text-l">{{$smaleCount}}</p>
                            <p class="italic">Male</p>
                        </div>
                        <div class="text-right text-pink-900">
                            <p class="text-l">{{$sfemaleCount}}</p>
                            <p class="italic">Female</p>
                        </div>
                        <div>
                            <p class="text-2xl text-black rounded-full bg-green-300 h-12 w-12 flex items-center justify-center">{{$totalMembers}}</p>
                            <p> PWDMembers</p>
                        </div>
                    </div>
                </div>


<!-- ======================================================================================================================================================================================================================================================================= -->

 



                          <div class="min-w-50 min-h-50 bg-white-300 flex items-center justify-center px-5 py-5">
                              
                          <div class="min-w-full min-h-100 bg-white-300 flex items-center justify-center px-5 py-5">
                              
                              <div class="bg-white-100 text-gray-500 rounded shadow-xl py-5 px-5 w-full lg:w-1/2" x-data="{chartData: chartDataPwDMember()}" x-init="chartData.fetch()">
                            <div class="antialiased sans-serif bg-white-200 w-lg  w-full ">
                            <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
                            <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
                            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
                            <style>
                              body {
                                font-family: 'IBM Plex Mono', sans-serif;
                              }
                              [x-cloak] {
                                display: none;
                              }

                              .line {
                                background: repeating-linear-gradient(
                                  to bottom,
                                  #eee,
                                  #eee 1px,
                                  #fff 1px,
                                  #fff 8%
                                );
                              }
                              .tick {
                                background: repeating-linear-gradient(
                                  to right,
                                  #eee,
                                  #eee 1px,
                                  #fff 1px,
                                  #fff 5%
                               );
                             }
                                      /* Default text color (black) */
                            a {
                                color: black;
                            }

                            /* Text color on hover (white) */
                            a:hover {
                                color: white;
                    }
                            </style>



                            <div x-data="app()" x-cloak class="px-4">
                              <div class="max-w-lg mx-auto py-10">
                                <div class="shadow p-6 rounded-lg bg-white">
                                  <div class="md:flex md:justify-between md:items-center">
                                    <div>
                                      <h2 class="text-xl text-gray-800 font-bold leading-tight">PWDMEMBER </h2>
                                      <p class="mb-2 text-gray-600 text-sm">Monthly Report</p>
                                    </div>

                                    <!-- Legends -->
                                    <div class="mb-4">
                                      <div class="flex items-center">
                                        <div class="w-2 h-2 bg-blue-600 mr-2 rounded-full"></div>
                                        <div class="text-sm text-gray-700">Members</div>
                                      </div>
                                    </div>
                                  </div>


                                  <div class="line my-8 relative">
                                    <!-- Tooltip -->
                                    <template x-if="tooltipOpen == true">
                                      <div x-ref="tooltipContainer" class="p-0 m-0 z-10 shadow-lg rounded-lg absolute h-auto block"
                                          :style="`bottom: ${tooltipY}px; left: ${tooltipX}px`"
                                          >
                                        <div class="shadow-xs rounded-lg bg-white p-2">
                                          <div class="flex items-center justify-between text-sm">
                                            <div>PWDMember:</div>
                                            <div class="font-bold ml-2">
                                              <span x-html="tooltipContent"></span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </template>

                                    <!-- Bar Chart -->
                                    <div class="flex -mx-2 items-end mb-2">
                                      <template x-for="data in chartData">

                                        <div class="px-2 w-full">
                                          <div :style="`height: ${data}px`" 
                                              class="transition ease-in duration-200 bg-blue-600 hover:bg-blue-400 relative"
                                              @mouseenter="showTooltip($event); tooltipOpen = true" 
                                              @mouseleave="hideTooltip($event)"
                                              >
                                            <div x-text="data" class="text-center absolute top-0 left-0 right-0 -mt-6 text-gray-800 text-sm"></div>
                                          </div>
                                        </div>

                                      </template>
                                    </div>

                                    <!-- Labels -->
                                    <div class="border-t border-gray-400 mx-auto" :style="`height: 1px; width: ${ 100 - 1/chartData.length*100 + 3}%`"></div>
                                    <div class="flex -mx-2 items-end">
                                      <template x-for="data in labels">
                                        <div class="px-2 w-1/6">
                                          <div class="bg-red-600 relative">
                                            <div class="text-center absolute top-0 left-0 right-0 h-2 -mt-px bg-gray-400 mx-auto" style="width: 1px"></div>
                                            <div x-text="data" class="text-center absolute top-0 left-0 right-0 mt-3 text-gray-700 text-sm"></div>
                                          </div>
                                        </div>
                                      </template>	
                                    </div>

                                  </div>
                                </div>
                              </div>
                            </div>

                            <script>
                              function app() {
                                return {
                                  chartData: [112, 10, 225, 134, 101, 80, 50, 100, 200],
                                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],

                                  tooltipContent: '',
                                  tooltipOpen: false,
                                  tooltipX: 0,
                                  tooltipY: 0,
                                  showTooltip(e) {
                                    console.log(e);
                                    this.tooltipContent = e.target.textContent
                                    this.tooltipX = e.target.offsetLeft - e.target.clientWidth;
                                    this.tooltipY = e.target.clientHeight + e.target.clientWidth;
                                  },
                                  hideTooltip(e) {
                                    this.tooltipContent = '';
                                    this.tooltipOpen = false;
                                    this.tooltipX = 0;
                                    this.tooltipY = 0;
                                  }
                                }
                              }
                            </script>
                      </div>
               </div>
          </div>  
     </div>



        <!-- ./Statistics Cards -->
      <hr class=" mt-20">
        <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4 mt-10">
    
          <!-- Data of Members -->
          <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
            <div class="rounded-t mb-0 px-0 border-0">
              <div class="flex flex-wrap items-center px-4 py-2">
                <div class="relative w-full max-w-full flex-grow flex-1">
                  <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50"> Disability Data</h3>
                </div>
                <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                  <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button>
                </div>
              </div>
              <div class="block w-full overflow-x-auto">
                <table class="items-center w-full bg-transparent border-collapse">
                  <thead>
                    <tr>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">data field</th>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Male</th>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">FEMALE</th>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">total</th>
                      
                      
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">  No. of Children with Disabilities issued with ID's ( below 18 years old ) </th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 font-bold">{{ $totalMaleBelow18}}</td>

                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">{{$totalFemaleBelow18}} </span>
                          <div class="relative w-full">               
                           </div>
                          </div>
                        </div>
                      </td>
                   
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                      <div class="flex items-center">
                          <span class="mr-2">{{ $totalBelow18->total_below_18 }}</span>
                          <div class="relative w-full">
                              <!-- Other content here -->
                          </div>
                      </div>
                      </td>
  
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"> No. of Youth with Disabilities issued with ID's (  18-30 years old )</th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{$eighteenToThirtyMale}}</td>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                      <div class="flex items-center">
                          <span class="mr-2">{{$eighteenToThirtyFemale}}</span>
                          <div class="relative w-full">               
                           </div>
                          </div>
                        </div>
                      </td>
                 
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">{{$eighteenToThirty}}</span>
                          <div class="relative w-full">               
                           </div>
                          </div>
                        </div>
                      </td>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">No. of Persons with Disabilities issued with ID's ( 31-59 years old )</th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{$thirtyOneToFiftyNineMale}} </td>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                      <div class="flex items-center">
                          <span class="mr-2">{{ $thirtyOneToFiftyNineFemale }}</span>
                          <div class="relative w-full">               
                           </div>
                          </div>
                        </div>
                      </td>

                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">{{$thirtyOneToFiftyNineCount}}</span>
                          <div class="relative w-full">               
                           </div>
                          </div>
                        </div>
                      </td>


                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">No. of Senior with Disabilities issued with ID's ( 60 years old ) </th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{$sixtyAndAboveMaleCount}}</td>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                        <div class="flex items-center">
                          <span class="mr-2">{{$sixtyAndAboveFemaleCount }}</span>
                          <div class="relative w-full">               
                           </div>
                          </div>
                        </div>
                      </td>
                    
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">{{$sixtyAndAboveCount}}</span>
                          <div class="relative w-full">               
                           </div>
                          </div>
                        </div>
                      </td>


                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">PWD provided with assistive devices by LGU ( RA 7277 and GAA )  </th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">{{$maleDeviceGivenCount}}</td>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                      <div class="flex items-center">
                          <span class="mr-2">{{$femaleDeviceGivenCount}}</span>
                          <div class="relative w-full">               
                           </div>
                          </div>
                        </div>
                      </td>
                   
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">{{$totalDevicesCount}}</span>
                          <div class="relative w-full">               
                           </div>
                          </div>
                        </div>
                      </td>


                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- ./Social Traffic -->
    
          <!-- Recent Activities -->
          <div class="relative flex flex-col min-w-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
          <!-- <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">
     -->
    <!-- Data of Members -->
    <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
      <div class="rounded-t mb-0 px-0 border-0">
        <div class="flex flex-wrap items-center px-4 py-2">
          <div class="relative w-full max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50"> Congenital / Inborn</h3>
          </div>
          <div class="relative w-full max-w-full flex-grow flex-1 text-right">
            <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button>
          </div>
        </div>
        <div class="block w-full overflow-x-auto">
          <table class="items-center w-full bg-transparent border-collapse">
            <thead>
              
              <tr>
                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">data field</th>
                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Male</th>
                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">Female</th>
                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px">total</th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-gray-700 dark:text-gray-100">
                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">autism </th>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4"></td>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                      <div class="flex items-center">
                          <span class="mr-2"></span>
                          <div class="relative w-full">               
                           </div>
                          </div>
                        </div>
                      </td>
                   
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">{{ $totalAutism}}</span>
                          <div class="relative w-full">               
                           </div>
                          </div>
                        </div>
                      </td>







              
              <tr class="text-gray-700 dark:text-gray-100">
                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"> ADHD</th>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">3,380</td>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                
              <tr class="text-gray-700 dark:text-gray-100">
                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Cerebral Palsy</th>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">4,105</td>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
           

              <tr class="text-gray-700 dark:text-gray-100">
                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"> Down Syndrome</th>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">2,250</td>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
               
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- <acquired> -->
      <hr>
    <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
      <div class="rounded-t mb-0 px-0 border-0">
        <div class="flex flex-wrap items-center px-4 py-2">
          <div class="relative w-full max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50"> ACQUIRED</h3>
          </div>
          <div class="relative w-full max-w-full flex-grow flex-1 text-right">
            <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button>
          </div>
        </div>
        <div class="block w-full overflow-x-auto">
          <table class="items-center w-full bg-transparent border-collapse">
            <thead>
              <tr>
                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">data field</th>
                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">total</th>
                <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px"></th>
              </tr>
            </thead>
            <tbody>
              <tr class="text-gray-700 dark:text-gray-100">
                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Chronic vIllness</th>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">5,480</td>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                  <div class="flex items-center">
                    <span class="mr-2">70%</span>
                    <div class="relative w-full">
                      <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                        <div style="width: 70%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-600"></div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="text-gray-700 dark:text-gray-100">
                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"> Cerebral Palsy</th>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">3,380</td>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                  <div class="flex items-center">
                    <span class="mr-2">40%</span>
                    <div class="relative w-full">
                      <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                        <div style="width: 40%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"></div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="text-gray-700 dark:text-gray-100">
                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Injury</th>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">4,105</td>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                  <div class="flex items-center">
                    <span class="mr-2">45%</span>
                    <div class="relative w-full">
                      <div class="overflow-hidden h-2 text-xs flex rounded bg-pink-200">
                        <div style="width: 45%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-pink-500"></div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>


              <tr class="text-gray-700 dark:text-gray-100">
                <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left"> Other Specify</th>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">2,250</td>
                <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                  <div class="flex items-center">
                    <span class="mr-2">30%</span>
                    <div class="relative w-full">
                      <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                        <div style="width: 30%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-700"></div>
                      </div>
                    </div>
                  </div>
                </td>
               </tr>
            </tbody>
          </table>
        </div>
     
 
    <!-- <div class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                 Acquired
                </div>
                <ul class="my-1">
                  <li class="flex px-4">
                    <div class="w-9 h-9 rounded-full flex-shrink-0 bg-green-500 my-2 mr-3">
                      <svg class="w-9 h-9 fill-current text-light-blue-50" viewBox="0 0 36 36"><path d="M23 11v2.085c-2.841.401-4.41 2.462-5.8 4.315-1.449 1.932-2.7 3.6-5.2 3.6h-1v2h1c3.5 0 5.253-2.338 6.8-4.4 1.449-1.932 2.7-3.6 5.2-3.6h3l-4-4zM15.406 16.455c.066-.087.125-.162.194-.254.314-.419.656-.872 1.033-1.33C15.475 13.802 14.038 13 12 13h-1v2h1c1.471 0 2.505.586 3.406 1.455zM24 21c-1.471 0-2.505-.586-3.406-1.455-.066.087-.125.162-.194.254-.316.422-.656.873-1.028 1.328.959.878 2.108 1.573 3.628 1.788V25l4-4h-3z"></path></svg>
                    </div>
                    <div class="flex-grow flex items-center border-gray-100 text-sm text-gray-600 dark:text-gray-50 py-2">
                      <div class="flex-grow flex justify-between items-center">
                        <div class="self-center">
                          <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">240+</a> users have subscribed to <a class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Newsletter #1</a>
                        </div>
                        <div class="flex-shrink-0 ml-2">
                          <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                            View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>          
              </div>
              </div> -->
      <!-- end  -->
    <!-- <div class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                 Acquired
                </div>
                <ul class="my-1">
                  <li class="flex px-4">
                    <div class="w-9 h-9 rounded-full flex-shrink-0 bg-green-500 my-2 mr-3">
                      <svg class="w-9 h-9 fill-current text-light-blue-50" viewBox="0 0 36 36"><path d="M23 11v2.085c-2.841.401-4.41 2.462-5.8 4.315-1.449 1.932-2.7 3.6-5.2 3.6h-1v2h1c3.5 0 5.253-2.338 6.8-4.4 1.449-1.932 2.7-3.6 5.2-3.6h3l-4-4zM15.406 16.455c.066-.087.125-.162.194-.254.314-.419.656-.872 1.033-1.33C15.475 13.802 14.038 13 12 13h-1v2h1c1.471 0 2.505.586 3.406 1.455zM24 21c-1.471 0-2.505-.586-3.406-1.455-.066.087-.125.162-.194.254-.316.422-.656.873-1.028 1.328.959.878 2.108 1.573 3.628 1.788V25l4-4h-3z"></path></svg>
                    </div>
                    <div class="flex-grow flex items-center border-gray-100 text-sm text-gray-600 dark:text-gray-50 py-2">
                      <div class="flex-grow flex justify-between items-center">
                        <div class="self-center">
                          <a class="font-medium text-gray-800 hover:text-gray-900 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">240+</a> users have subscribed to <a class="font-medium text-gray-800 dark:text-gray-50 dark:hover:text-gray-100" href="#0" style="outline: none;">Newsletter #1</a>
                        </div>
                        <div class="flex-shrink-0 ml-2">
                          <a class="flex items-center font-medium text-blue-500 hover:text-blue-600 dark:text-blue-400 dark:hover:text-blue-500" href="#0" style="outline: none;">
                            View<span><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor" class="transform transition-transform duration-500 ease-in-out"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>          
              </div>
              </div> -->
          <!-- ./Recent Activities -->
       

{{-- end --}}
   

  


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

