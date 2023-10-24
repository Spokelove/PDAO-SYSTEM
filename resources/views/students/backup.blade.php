
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

<body class = "body bg-lime-500 rounded-lg shadow-2xl dark:bg-[#0F172A]">
    <div class = " mt-2 fixed w-full z-30 flex bg-white-100 dark:bg-[#0F172A] p-2 items-center justify-center h-16 px-8">
        <div class = "logo ml-12 dark:text-white  transform ease-in-out duration-500 flex-none h-full flex items-center justify-center ">
            ADMIN
        </div>
        <!-- SPACER -->
        <!-- SPACER -->
        <div class = "grow h-full flex items-center justify-center "></div>
        <div class = "flex-none h-full text-center flex items-center justify-center">
            
                <div class = "flex space-x-3 items-center px-3 ">
                    <div class = "flex-none flex justify-center">
                    <div class="w-8 h-8 flex bg-white-100 rounded-lg shadow-2xl ">
                          <img src="{{url('/build/logo.png')}}" alt="..." class="   max-w-50 rounded h-8 w-8"> 
                    </div>
                    </div>

                    <div class = "hidden md:block text-sm md:text-md text-black dark:text-white">tweetybird</div>
                </div>
                
        </div>
    </div>
    </div>
    <aside class = " mt-3 w-60 -translate-x-48 fixed transition transform ease-in-out duration-1000 z-50 flex h-screen bg-white-500  shadow-lg shadow-green-500/50 ">
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
        <div class= "max hidden text-black mt-20 flex-col space-y-2 w-full h-[calc(100vh)]">
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
                <a href ="{{url('/Assistance')}}" class="text-base leading-4"> Types of Desease</a>

                </div>
            </div>

            <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
           <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
          </svg>
                     
                <div>
                <a href ="{{url('/')}}" class="text-base leading-4">Reports</a>

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
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                </svg>           
            </div>


            <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3 r transform ease-in-out duration-300 flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
           <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
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

                        <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white"> Data Reports</a>
                    </div>
                </li>
            </ol>
        </nav>


        <!-- <start of content> -->

{{-- <start> --}}
 
    
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 p-4 gap-4">
<div class="bg-white-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-green-200 dark:border-gray-600 text-black font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-slate-100 rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
            </div>
            <div class="text-right">
              <p class="text-2xl">1,257</p>
              <p>New Members
            </div>
          </div>
          <div class="bg-white-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-green-200 dark:border-gray-600 text-black font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-slate-100 rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
            </div>
            <div class="text-right">
              <p class="text-2xl">557</p>
              <p>Renew</p>
            </div>
          </div>
          <div class="bg-white-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-green-200 dark:border-gray-600 text-black font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-slate-100 rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
            </div>
            <div class="text-right">
              <p class="text-2xl">$11,257</p>
              <p>Devices Given</p>
            </div>
          </div>
          <div class="bg-white-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-green-200 dark:border-gray-600 text-black font-medium group">
            <div class="flex justify-center items-center w-14 h-14 bg-slate-100 rounded-full transition-all duration-300 transform group-hover:rotate-12">
              <svg width="30" height="30" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current text-blue-800 dark:text-gray-800 transform transition-transform duration-500 ease-in-out"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div class="text-right">
              <p class="text-2xl">$75,257</p>
              <p>Total of all Members</p>
            </div>
          </div>
        </div>
        <!-- ./Statistics Cards -->
    
        <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">
    
          <!-- Data of Members -->
          <div class="relative flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
            <div class="rounded-t mb-0 px-0 border-0">
              <div class="flex flex-wrap items-center px-4 py-2">
                <div class="relative w-full max-w-full flex-grow flex-1">
                  <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50 bg-gray-50">Data of Members</h3>
                </div>
                <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                  <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button>
                </div>
              </div>
              <div class="block w-full overflow-x-auto">
                <table class="items-center w-full bg-transparent border-collapse">
                  <thead>
                    <tr>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">AGE bracket</th>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">total</th>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">0-17 yrs old</th>
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
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">18- 30 yrs old</th>
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
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">31-50 yrs old</th>
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
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">51-60 yrs old</th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">4,985</td>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">60%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                              <div style="width: 60%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">61- up </th>
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
            </div>
          </div>
          <!-- ./Social Traffic -->
    
          <!-- Recent Activities -->
          <div class="relative flex flex-col min-w-0 break-words bg-gray-50 dark:bg-gray-800 w-full shadow-lg rounded">
            <div class="rounded-t mb-0 px-0 border-0">
              <div class="flex flex-wrap items-center px-4 py-2">
                <div class="relative w-full max-w-full flex-grow flex-1">
                  <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">  
                    Cause of Disabilities
                  </h3>
                </div>
                <div class="relative w-full max-w-full flex-grow flex-1 text-right">
                  <button class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">See all</button>
                </div>
              </div> 
              </div>

              <div class="block w-full overflow-x-auto">
                <table class="items-center w-full bg-transparent border-collapse">
                  <thead>
                    <tr>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">inborn</th>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">total</th>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Austim</th>
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
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">ADHD</th>
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
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Celebral Palsy</th>
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
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Down Syndrome</th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">4,985</td>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">60%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                              <div style="width: 60%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    </tr>
                  </tbody>
                </table>
                </div>
<!--                 
  <Acquired> -->

                 <div class="block w-full overflow-x-auto">
                <table class="items-center w-full bg-transparent border-collapse">
                  <thead>
                    <tr>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">Acquired    </th>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">total</th>
                      <th class="px-4 bg-gray-100 dark:bg-gray-600 text-black-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left min-w-140-px"></th>
                    </tr>
                  </thead>
                    
                  <tbody>
                    <tr class="text-gray-700 dark:text-gray-100">
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Chronic Illness</th>
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
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Cerebral Palsy</th>
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
                      <th class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">Down Syndrome</th>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">4,985</td>
                      <td class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                        <div class="flex items-center">
                          <span class="mr-2">60%</span>
                          <div class="relative w-full">
                            <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                              <div style="width: 60%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    </tr>
                  </tbody>
                </table>         
        </div>
   
{{-- end --}}
   

     <!-- start   search  -->
  
 <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-9 lg:-mx-8 pr-10 lg:px-10 bg-white w-max ">

    <div class="align-middle rounded-tl-lg rounded-tr-lg inline-block w-full py-4 overflow-hidden bg-white shadow-lg px-12 mt-10">
        <div class="flex justify-between">
            <div class="inline-flex border  lg:-mx-0 rounded lg:w-full px-0 lg:px-2 h-12 bg-transparent">
                <div class="flex flex-wrap items-stretch w-full h-full mb-6 relative">
                    <div class="flex">
                        <span class="flex items-center leading-normal bg-transparent rounded rounded-r-none border border-r-0 border-none lg:px-3 py-2 whitespace-no-wrap text-grey-dark text-sm">
                            <svg width="18" height="18" class="w-4 lg:w-auto" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.11086 15.2217C12.0381 15.2217 15.2217 12.0381 15.2217 8.11086C15.2217 4.18364 12.0381 1 8.11086 1C4.18364 1 1 4.18364 1 8.11086C1 12.0381 4.18364 15.2217 8.11086 15.2217Z" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.9993 16.9993L13.1328 13.1328" stroke="#455A64" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>
                    <input type="text" class="flex-shrink flex-grow flex-auto leading-normal tracking-wide w-px flex-1 border border-none border-l-0 rounded rounded-l-none px-3 relative focus:outline-none text-xxs lg:text-xs lg:text-base text-gray-500 font-thin" placeholder="Search">
                </div>
            </div>
        </div>
    </div> 
 
    


<div class="flex flex-col mt-10">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-left text-sm font-light bg-gray">
            <thead class="border-b font-medium dark:border-neutral-500  bg-gray-100">
              <tr>
                <th scope="col" class="px-6 py-4">#</th>
                <th scope="col" class="px-6 py-4">Lastname</th>
                <th scope="col" class="px-6 py-4">Firstname</th>
                <th scope="col" class="px-6 py-4">Middlename</th>
                <th scope="col" class="px-6 py-4">Suffix</th>
                <th scope="col" class="px-6 py-4">Age</th>
                <th scope="col" class="px-6 py-4">Purok</th>
                <th scope="col" class="px-6 py-4">Address</th>
                <th scope="col" class="px-6 py-4">Status</th>
                <th scope="col" class="px-6 py-4">Type of Deasease</th>
                <th scope="col" class="px-6 py-4">Cause of Deasease</th>
                <th scope="col" class="px-6 py-4">PWD Status</th>
                <th scope="col" class="px-6 py-4">PWD Record</th>
              </tr>
            </thead>
            <tbody>
              <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap px-6 py-4 font-medium">1</td>
                <td class="whitespace-nowrap px-6 py-4">Reyes</td>
                <td class="whitespace-nowrap px-6 py-4">Mark</td>
                <td class="whitespace-nowrap px-6 py-4">Belez</td>
                <td class="whitespace-nowrap px-6 py-4">jr.</td>
                <td class="whitespace-nowrap px-6 py-4">35</td>
                <td class="whitespace-nowrap px-6 py-4">16</td>
                <td class="whitespace-nowrap px-6 py-4">Poblacion</td>
                <td class="whitespace-nowrap px-6 py-4">Married</td>
                <td class="whitespace-nowrap px-6 py-4">Deaf</td>
                <td class="whitespace-nowrap px-6 py-4">injury</td>
                <td class="whitespace-nowrap px-6 py-4">Active</td>
                <td>
                    {{-- <button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">View Details</button>  --}}
                    <a href ="{{url('Addmember')}}" class="px-6 py-2 border-blue-500 border text-black rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none" type="submit">View</a>
                    </td>

              </tr>
              <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="whitespace-nowrap px-6 py-4 font-medium">2</td>
                <td class="whitespace-nowrap px-6 py-4">Jacob</td>
                <td class="whitespace-nowrap px-6 py-4">Thornton</td>
                <td class="whitespace-nowrap px-6 py-4">gray</td>
                <td class="whitespace-nowrap px-6 py-4">sr.</td>
                <td class="whitespace-nowrap px-6 py-4">25</td>
                <td class="whitespace-nowrap px-6 py-4">21</td>
                <td class="whitespace-nowrap px-6 py-4">lumbo</td>
                <td class="whitespace-nowrap px-6 py-4">Single</td>
                <td class="whitespace-nowrap px-6 py-4">Deaf</td>
                <td class="whitespace-nowrap px-6 py-4">injury</td>
                <td class="whitespace-nowrap px-6 py-4">Inactive</td>
                <td>
                    {{-- <button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">View Details</button>  --}}
                    <a href ="{{url('Addmember')}}" class="px-6 py-2 border-blue-500 border text-black rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none" type="submit">View</a>
                    </td>
                
              </tr>
              <tr
                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600 bg-gray">
                <td class="whitespace-nowrap px-6 py-4 font-medium">3</td>
                <td class="whitespace-nowrap px-6 py-4">Larry</td>
                <td class="whitespace-nowrap px-6 py-4">Wild</td>
                <td class="whitespace-nowrap px-6 py-4">twitter</td>
                <td class="whitespace-nowrap px-6 py-4">jr.</td>
                <td class="whitespace-nowrap px-6 py-4">30</td>
                <td class="whitespace-nowrap px-6 py-4">6a</td>
                <td class="whitespace-nowrap px-6 py-4">lilingayon</td>
                <td class="whitespace-nowrap px-6 py-4">Widow</td>
                <td class="whitespace-nowrap px-6 py-4">Deaf</td>
                <td class="whitespace-nowrap px-6 py-4">injury</td>
                <td class="whitespace-nowrap px-6 py-4" >Active</td>
                <td>
                {{-- <button class="px-5 py-2 border-blue-500 border text-blue-500 rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none">View Details</button>  --}}
                <a href ="{{url('Addmember')}}" class=" px-6 py-2 border-blue-500 border text-black rounded transition duration-300 hover:bg-blue-700 hover:text-white focus:outline-none" type="submit">View</a>
                </td>
                {{-- <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500 text-blue-900 text-sm leading-5">September 12</td>
                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-500 text-sm leading-5"> --}}
                 
              </tr>
            </tbody>
          </table>

          <div class="sm:flex-1 sm:flex sm:items-center sm:justify-between mt-4 work-sans">
            <div>
            <p class="text-sm leading-5 text-Black">
                Showing
                <span class="font-medium">1</span>
                to
                <span class="font-medium">200</span>
                of
                <span class="font-medium">2000</span>
                results
            </p>
            </div>
            <div>
            <nav class="relative z-0 inline-flex shadow-sm">
                <div	>
                    <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Previous" v-on:click.prevent="changePage(pagination.current_page - 1)">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
                <div>
                    <a href="#" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-700 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                        1
                    </a>
                  <a href="#" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-600 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                        2
                    </a>
                   <a href="#" class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm leading-5 font-medium text-blue-600 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-tertiary active:text-gray-700 transition ease-in-out duration-150 hover:bg-tertiary">
                        3
                    </a>
                </div>
                <div v-if="pagination.current_page < pagination.last_page">
                    <a href="#" class="-ml-px relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:z-10 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="Next">
                        <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </nav>
            </div>
            </div>


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
 -->


 <!-- Start of creat.blade.ph -->

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

<body class = "body bg-lime-500 rounded-lg shadow-2xl dark:bg-[#0F172A]">
    <div class = " mt-2 fixed w-full z-30 flex bg-white-100 dark:bg-[#0F172A] p-2 items-center justify-center h-16 px-8">
        <div class = "logo ml-12 dark:text-white  transform ease-in-out duration-500 flex-none h-full flex items-center justify-center ">
            ADMIN
        </div>
        <!-- SPACER -->
        <div class = "grow h-full flex items-center justify-center "></div>
        <div class = "flex-none h-full text-center flex items-center justify-center">
            
                <div class = "flex space-x-3 items-center px-3 ">
                    <div class = "flex-none flex justify-center">
                    <div class="w-8 h-8 flex bg-white-100 rounded-lg shadow-2xl ">
                          <img src="{{url('/build/logo.png')}}" alt="..." class="   max-w-50 rounded h-8 w-8"> 
                    </div>
                    </div>

                    <div class = "hidden md:block text-sm md:text-md text-black dark:text-white">tweetybird</div>
                </div>
                
        </div>
    </div>
    <aside class = " mt-3 w-60 -translate-x-48 fixed transition transform ease-in-out duration-1000 z-50 flex h-screen bg-white-500  shadow-lg shadow-green-500/50 ">
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
        <div class= "max hidden text-black mt-20 flex-col space-y-2 w-full h-[calc(100vh)]">
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
                    Profiling
                </div>
            </div>
            <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                </svg>                      
                <div>
                    Assistance
                </div>
            </div>
   
            <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
           <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
          </svg>                 
                <div>
                    Reports
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
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                </svg>           
            </div>


            <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3 r transform ease-in-out duration-300 flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
           <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
           </svg>     
             </div>
         </div>      
    </aside>
    <!-- CONTENT -->
    <div class = "content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">
        <nav class = " flex px-5 py-3 text-gray-700  rounded-lg bg-stone-100 dark:bg-[#1E293B] " aria-label="Breadcrumb">
            <ol class = "inline-flex items-center space-x-1 md:space-x-3">
                <li class = "inline-flex items-center">
                <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(1)"></div>
                       <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white bg-slate-200 rounded w-full text-greay-700 focus:outline-none border-gray-400 px-5 py-2">Member Information</a>
                    </a>    
                </li>

                <li>
                <li class = "inline-flex items-center">
                <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
                       <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white bg-blue-200 rounded w-full text-greay-700 focus:outline-none border-gray-400 px-5 py-2">Contact Details</a>
                    </a>    
                </li>
                </li>

                <li>
                <li class = "inline-flex items-center">
                <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
                       <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white bg-violet-200 rounded w-full text-greay-700 focus:outline-none border-gray-400 px-5 py-2">Types of Desease</a>
                    </a>    
                </li>
                </li>  
              
                <li>
                    <div class = "flex items-center">                      
                    <li class = "inline-flex items-center">
                <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(4)"></div>
                       <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white bg-stone-200 rounded w-full text-greay-700 focus:outline-none border-gray-400 px-5 py-2">ID References</a>
                    </a>    
                </li>
                </li>
                <li>
                    <div class = "flex items-center">                      
                    <li class = "inline-flex items-center">
                <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(5)"></div>
                       <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white bg-emerald-200 rounded w-full text-greay-700 focus:outline-none border-gray-400 px-5 py-2">Accomplished By</a>
                    </a>    
                </li>
                </li>              
                <li>
                    <div class = "flex items-center">                      
                    <li class = "inline-flex items-center">
                <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(6)"></div>
                       <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white bg-rose-200 rounded w-full text-greay-700 focus:outline-none border-gray-400 px-5 py-2">Approving By</a>
                    </a>    
                </li>
                </li>
                <li>

            </ol>
        </nav>
     <br>
        
     <div class="float-right">
            <button class="  space-x-px space-x-36 mb-3  bg-blue-500 text-white active:bg-green-900 text-xs px-2 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
              Save
            </button>
            <button class="  space-x-36 mb-3  bg-blue-500 text-white active:bg-red-600 text-xs px-2 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
               Update
            </button>    
            </div>        
         </div>

        <!-- <start of content> -->
      
    <form action ="/"  method="POST" class=" w-full flex flex-col space-y-4 text-gray-70  bg-white-100 mt-10">
       @csrf
  
   <start for personal information>
   <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

 <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.3.x/dist/index.js"></script>

<!-- 
<div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
   Photo File Input -->
    <!-- <input type="file" class="hidden" x-ref="photo" x-on:change="
                        photoName = $refs.photo.files[0].name;
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            photoPreview = e.target.result;
                        };
                        reader.readAsDataURL($refs.photo.files[0]);">

    <label class="block text-gray-700 text-sm font-bold mb-2 text-center" for="photo">
   Member Photo <span class="text-red-600"> </span>
    </label>
    
    <div class="text-center">
  
        <div class="mt-2" x-show="! photoPreview">
            <img src="https://images.unsplash.com/photo-1531316282956-d38457be0993?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80" class="w-40 h-40 m-auto rounded-full shadow">
        </div>
 
        <div class="mt-2" x-show="photoPreview" style="display: none;">
            <span class="block w-40 h-40 rounded-full m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
            </span>
        </div>
        <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
            Select New Photo
        </button>
    </div>
</div> 
<!doctype html>
<html> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title></title>
</head>


  

    <!-- Implement the carousel -->

       <div class="relative w-[1000px]   mx-auto">
    
        <div class="slide relative shadow-lg rounded-lg bg-white">
          <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4">  
          </div> 
       </div> 
   

       
       <!-- <start of member info>           -->
     <div class="w-full lg:w-6/12 px-4">
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
             Member  Information
              </h6>
      </div>

      <hr class="border-4 border-stone-200 hover:border-green-500 drop-shadow-xl"/>
    
      <div class="flex flex-wrap mt-5">
         <div class="flex flex-wrap">
          <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3 mt-7">
              <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
              <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Pwd No.</label>
            </div>
          </div>
          
        
          <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3 mt-7">
              <input autocomplete="off" id="first name" name="first name" type="date" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
              <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Date Applied</label>
            </div>
          </div>
          
          <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
           Kind of Application
              </label>
              <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option>New</option>
                <option>Renew</option>
                <option>Transfer</option>
               
               
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </div>    
            </div>
          </div>

                
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                        <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last Name</label>
                      </div>
                    </div>
                    
                  
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                        <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First Name</label>
                      </div>
                    </div>
                    
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                              <label for="email" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle Name</label>
                      </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                       Suffix
                        </label>
                        <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                          <option>Jr.</option>
                          <option>Sr.</option>
                          <option>I</option>
                          <option>II</option>
                          <option>III</option>
                           <option>IV</option>
                          <option>V</option>
                          <option>VI</option>
                          <option>VII</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>    
                      </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" id="first name" name="first name" type="date" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" />
                        <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Birthday</label>
                      </div>
                    </div>
                  
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-50 mt-7">
                      
                      <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"  placeholder="Age">
                    </div>
                  </div>
                </div> 

          
       
                   <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                           Gender
                          </label>
                           <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>    
                      </div>
                    </div>



                        <div class="w-full lg:w-4/12 px-4">
                          <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        Civil Status
                            </label>
                            <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                              <option>Single</option>
                              <option>Separated</option>
                              <option>Cohabitation (live-in)</option>
                              <option>Married</option>
                              <option>Widow/ er</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>    
                          </div>
                        </div>



                        <div class="w-full lg:w-/12 px-4">
                          <hr class="border-4 border-stone-200 hover:border-green-500 drop-shadow-xl"/>
                          
                     </div>
                      
                  <div class="w-full lg:w-6/12 px-4">
                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                  RESIDENCE DETAILS
                          </h6>   
                          
                          
                       </div>   
                       
                      
 
                       <div class="flex flex-wrap">
                      <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3 mt-7">                     
                      <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                      <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">House No. and Street</label>
                    </div>
                  </div>
                  
              
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                      Purok
                      </label>
                      <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                         <option>6</option>
                        <option>6A</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                         <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>16A</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>20B</option>
                        <option>21</option>
                      </select>
                      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                      </div>    
                    </div>
                  </div>

                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                      <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                      <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Barangay</label>
                    </div>
                  </div>




                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                      <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                      <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Municipality</label>
                    </div>
                  </div>



                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7 ">
                      <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                            <label for="email" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Province</label>
                    </div>
                  </div>



  
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3  mt-7">
                      <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                            <label for="email" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Region</label>
                    </div>
                  </div>
                </div> 
               </div>

                                      <div class="w-full lg:w-4/12 px-4 mt-9">
                                      <!-- <button class=" space-x-36 mb-3  bg-blue-500 text-white active:bg-red-600 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150 <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
            onclick="moveSlide(1)">❯</a> Next</button> -->
                                      <!-- <button class=" space-x-36 mb-3  bg-blue-500 text-white active:bg-red-600 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                       Update
                                      </button>     -->
                                    </div>        
                                   </div>
    {{-- end --}}


                    
{{--  
   <start contact details> --}}
    
  
    <div class="relative w-[1000px]   mx-auto">
    
      <div class="slide relative shadow-lg rounded-lg bg-white">
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">  
        </div> 
     </div>             
   <div class="w-full lg:w-6/12 px-4 mb-3 mt-5">
    
         CONTACT DETAILS
            </h6>
    </div>
    <hr class="border-4 border-stone-200 hover:border-green-500 drop-shadow-xl"/>
    <div class="flex flex-wrap mt-5">
       <div class="flex flex-wrap">
        <div class="w-full lg:w-4/12 px-4">
          <div class="relative w-full mb-3 mt-7">
            <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
            <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Landline No.</label>
          </div>
        </div>
        
      
        <div class="w-full lg:w-4/12 px-4">
          <div class="relative w-full mb-3 mt-7">
            <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
            <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Mobile No.</label>
          </div>
        </div>
        
       
              
                  {{-- <div class="w-full lg:w-4/12 px-4">
                   
                  </div> --}}
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                      <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                      <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Email Address</label>
                    </div>
                  </div>
                  
                
                
                  {{-- START OF RESIDENCE --}}
                
                
            
                  
              <div class="w-full lg:w-6/12 px-4 mt-7">
              
                EDUCATIONAL  ATTAINMENT
                      </h6>    
                   </div>                      
              </div>
              <div class="w-full lg:w-4/12 px-4">            
                <div class="relative w-full mb-3  mt-7">               
                 <label class="block uppercase text-blueGray-600 text-xs font-sans-serif mb-2" htmlfor="grid-password">
                  EDUCATIONAL  ATTAINMENT
                  </label>
                  <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option>None</option>
                    <option>Kindergarten</option>
                    <option>Elementary</option>
                    <option>Junior High School</option>
                    <option>Senior High School</option>
                    <option>College</option>
                    <option>Vocational</option>
                    <option>Post Graduate</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>    
                </div>
              </div>
            

              <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3  mt-7">
                  <label class="block uppercase text-blueGray-600 text-xs font-sans-serif mb-2" htmlfor="grid-password">
                    STATUS OF  EMPLOYMENT
                    </label>
                     <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                      <option>Employed</option>
                      <option>Unemployed</option>
                      <option>Self-employed</option>
                    
                    </select>
                      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>    
                </div>
              </div>

                 <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3  mt-7">
                      <label class="block uppercase text-blueGray-600 text-xs font-sans-serif mb-2" htmlfor="grid-password">
                        TYPES OF  EMPLOYMENT
                        </label>
                         <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                          <option>Permanent / Regular</option>
                          <option>Seasonal</option>
                          <option>Casual</option>
                          <option>Emergency</option>
                        </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                      </div>    
                    </div>
                  </div>
               

            

                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3  mt-7">
                      <label class="block uppercase text-blueGray-600 text-xs font-sans-serif mb-2" htmlfor="grid-password">
                       CATEGORY OF EMPLOYMENT
                        </label>
                         <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                          <option>Government</option>
                          <option>Private</option>
                         
                        </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                      </div>    
                    </div>
                  </div>
               

                <div class="w-full lg:w-5/12 px-4">
                  <div class="relative w-full mb-3  mt-7">
                    <label class="block uppercase text-blueGray-600 text-xs font-sans-serif mb-2" htmlfor="grid-password">
                   OCCUPATIONS
                      </label>
                       <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option>Manager</option>
                        <option>Proffessionals</option>
                        <option>Technicians and Associate Profesionals</option>
                        <option>Clerical Support Workers</option>
                        <option>Service and Sales Workers</option>
                        <option>Skilled Agricultural,Forestry, and Fishery Workers</option>                      
                        <option>Craft  and  Related Trade Workers</option>
                        <option>Plant and Machine Operators and Assemblers</option>
                        <option>Elementary Occupation</option>
                        <option>Armed Forces Occupations</option>
                        <option>Other, Specify</option>
                      </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>    
                  </div>
                </div>
              </div>
                   
                                 <div class="flex flex-wrap">
                                   <div class="w-full lg:w-4/12 px-4 mt-12">
                                       <!-- <button class="space-x-px space-x-36 mb-1  bg-blue-500 text-white active:bg-green-900 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                          Save
                                    </button>
                                       <button class=" space-x-36 mb-3  bg-blue-500 text-white active:bg-red-600 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                           Update
                                    </button>     -->
                                  </div>        
                                 </div>
                                </div>
                           
{{-- end --}}



                   {{-- start of Disabilities --}}
                   
                                 <div class="relative w-[1000px]   mx-auto">
    
                                  <div class="slide relative shadow-lg rounded-lg bg-white">
                                    <div class="flex flex-wrap">
                                      <div class="w-full lg:w-6/12 px-4">  
                                    </div> 
                                 </div> 
                                   
                                 <h6 class="text-blueGray-400 text-sm mt-3 mb-3 font-bold uppercase">
                                  Types OF DESEASE
                                 </h6>

                                 <div class="flex flex-wrap">                           
                                    </div> 
                                                             
                                    <h3 class=" flex mb-4 font-semibold text-gray-900 dark:text-white px-2"></h3>
                                              
                                    <ul class= "  shadow-lg rounded-lg bg-blueGray-100 border-0  items-center w-full text-sm font-medium text-gray-900 
                                     border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                      <li class="  w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                          <div class="  flex items-center pl-3">
                                              <input id="vue-checkbox-list" type="checkbox" value="" class=" w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                              <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deaf or Hard of Hearing</label>
                                          </div>
                                      </li>
                                    

                                      <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center pl-3">
                                            <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="react-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Intellectual Disability</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center pl-3">
                                            <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="angular-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Learning Disability</label>
                                        </div>
                                    </li>
                                  
                             
                                    <li class="w-full dark:border-gray-600">
                                      <div class="flex items-center pl-3">
                                          <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                          <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mental Disability</label>
                                      </div>
                                  </li>
                              
                                  <li class="w-full dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Physical Disability (Orthopedic)</label>
                                    </div>
                                </li>
                              </ul>
                              
                              <ul class="  shadow-lg rounded-lg bg-blueGray-100 border-0  items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <li class="  w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class=" flex items-center pl-3">
                                        <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Psychosocial Disability</label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="react-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Speech and Language Impairment</label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="angular-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Visual Disability</label>
                                    </div>
                                </li>
                                                               


                                
                                <li class="w-full dark:border-gray-600">
                                  <div class="flex items-center pl-3">
                                      <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                      <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cancer (RA11215)</label>
                                  </div>
                              </li>
                            
                              <li class="w-full dark:border-gray-600">
                                <div class="flex items-center pl-3">
                                    <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rare Disease (RA10747)</label>
                                </div>
                            </li>
                            
                            </ul>





                   
                  <hr class="border-b-1 border-blueGray-300">
          
                 <h6 class="text-blueGray-400 text-sm mt-3 mb-3 font-bold uppercase">
                  CAUSE OF DESEASE
                 </h6>
                 <div class="flex flex-wrap">
               
                 </div>                   
                <ul class= "shadow-lg rounded-lg bg-blueGray-100 border-0   items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="  flex items-center pl-3">
                            <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Congenital /Inborn</label>
                        </div>
                    </li>



                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center pl-3">
                          <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="react-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Austim</label>
                      </div>
                  </li>

                  <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                      <div class="flex items-center pl-3">
                          <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="angular-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">ADHD</label>
                      </div>
                  </li>

                  <li class="w-full dark:border-gray-600">
                      <div class="flex items-center pl-3">
                          <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cerebral Palsy</label>
                      </div>
                  </li>
              
                  <li class="w-full dark:border-gray-600">
                    <div class="flex items-center pl-3">
                        <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Down Syndrome</label>
                    </div>
                </li>
              </ul>
              
              <ul class= "shadow-lg rounded-lg bg-blueGray-100 border-0   items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                    <div class="  flex items-center pl-3">
                        <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Acquired</label>
                    </div>
                </li>



            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                    <div class="flex items-center pl-3">
                      <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="react-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Chronic Illness</label>
                  </div>
              </li>

              <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                  <div class="flex items-center pl-3">
                      <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="angular-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Celebral Palsy</label>
                  </div>
              </li>

              <li class="w-full dark:border-gray-600">
                  <div class="flex items-center pl-3">
                      <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Injury</label>
                  </div>
              </li>
          
              <li class="w-full dark:border-gray-600">
                <div class="flex items-center pl-3">
                    <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other specify________</label>
                </div>
            </li>
          </ul>
          

          <hr class="border-4 border-stone-200 hover:border-green-500 drop-shadow-xl"/>
          
                  <div class="flex flex-wrap">
                  <div class="w-full lg:w-12/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                       Organizational Affliated
                      </label>
                      <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Organizational Affliated Name">
                    </div>
                  </div>
                </div>



                <div class="flex flex-wrap">
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                      <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                      <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Contact Person</label>
                    </div>
                  </div>

                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7 ">
                      <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                            <label for="email" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Office Address</label>
                    </div>
                  </div>



  
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3  mt-7">
                      <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                            <label for="email" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Tel. no.</label>
                    </div>
                  </div>
                </div>
            
                   
            <div class="w-full lg:w-4/12 px-4 mt-9">
              <!-- <button class="space-x-px space-x-36 mb-3  bg-blue-500 text-white active:bg-green-900 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                Save
              </button>
              <button class=" space-x-36 mb-3  bg-blue-500 text-white active:bg-red-600 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
               Update
              </button>     -->
            </div>        
           </div>
       

                                                             
                            
       

{{-- start of cause --}}


  <div class="relative w-[1000px]   mx-auto">
 <div class="slide relative shadow-lg rounded-lg bg-white">
      <div class="flex flex-wrap">
     <div class="w-full lg:w-6/12 px-4">  
    </div> 
  </div> 
                                                                                    
                                                                                                   
<div class="w-full lg:w-6/12 px-4 mt-5 mb-3">
                                                                                      
ID REFERENCE NO.
  </h6>
</div>
                                                                                    
<hr class="border-4 border-stone-200 hover:border-green-500 drop-shadow-xl"/>
                                                                                       
<div class="flex flex-wrap mt-5">
                                                                                          
<div class="flex flex-wrap">
                                                                                           
<div class="w-full lg:w-4/12 px-4">

<div class="relative w-full mb-3 mt-5">
<input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
   <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">SSS No.</label>
     </div>
    </div>
                                                                                            
                                                                                          
<div class="w-full lg:w-4/12 px-4">
  <div class="relative w-full mb-3 mt-5">
<input autocomplete="off" id="first name" name="first name" type="Name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
 <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">GSIS No.</label>
   </div>
  </div>
                                                                                           
                                                                                            
 <div class="w-full lg:w-4/12 px-4">
 <div class="relative w-full mb-3 mt-5">
<input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
<label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">PAG-IBIG No.</label>
 </div>
</div>
                                                                                                  
 {{-- <div class="w-full lg:w-4/12 px-4">
                                                                                                       
 </div> --}}
                                                                                                      
<div class="w-full lg:w-4/12 px-4">
<div class="relative w-full mb-3 mt-5">
 <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">PSN No.</label>
</div>
</div>
                                                                                                      
                                                                                                    
<div class="w-full lg:w-4/12 px-4">
<div class="relative w-full mb-3 mt-5">
<input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
<label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Philhealth No.</label>
  </div>
 </div>
                                                                                                      
 {{-- <div class="w-full lg:w-4/12 px-4">
   <div class="relative w-full mb-3 mt-5">
<input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
 <label for="email" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle Name</label>
    </div>
  </div> --}}

                                                                                                     
               
               <hr class=" mt-6 border-4 border-stone-200 hover:border-green-500 drop-shadow-xl w-full"/> 
              <div class="w-full lg:w-6/12 px-4">
                
               FAMILY BACKGROUND
                      </h6>      
                   </div>        
              </div>
            
              <div class="w-full lg:w-3/12 px-4 mt-5">
                <div class="relative w-full mb-3 ">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Father's Last name</label>
                </div>
              </div>
              
              <div class="w-full lg:w-3/12 px-4 mt-5">
                <div class="relative w-full mb-3 ">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Father's First name</label>
                </div>
              </div>
 
              <div class="w-full lg:w-3/12 px-4 mt-5">
                <div class="relative w-full mb-3 ">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Father's Middle name</label>
                </div>
              </div>

              <div class="w-full lg:w-3/12 px-4 mt-5">
                <div class="relative w-full mb-5">
                 
                  <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option>Jr.</option>
                    <option>Sr.</option>
                    <option>I</option>
                    <option>II</option>
                    <option>III</option>
                    <option>IV</option>
                    <option>V</option>
                   
                   
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>    
                </div>
              </div>
             </div>
          


             <div class="flex flex-wrap">
             <div class="w-full lg:w-4/12 px- mt-5">
              <div class="relative w-full mb-3">
                <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Mother's Last Name</label>
              </div>
            </div>

            <div class="w-full lg:w-4/12 px-4 mt-5">
              <div class="relative w-full mb-3 ">
                <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Mother's First Name</label>
              </div>
            </div>
            
            <div class="w-full lg:w-4/12 px-4 mt-5">
              <div class="relative w-full mb-3 ">
                <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Mother's Middle Name</label>
              </div>
            </div> 


            <div class="w-full lg:w-3/12 px-4 mt-5">
              <div class="relative w-full mb-3 mt-7 ">
                <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Guardian's Last name</label>
              </div>
            </div>
            
            <div class="w-full lg:w-3/12 px-4 mt-5">
              <div class="relative w-full mb-3  mt-7 ">
                <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Guardian's First name</label>
              </div>
            </div>

            <div class="w-full lg:w-3/12 px-4 mt-5">
              <div class="relative w-full mb-3 mt-7 ">
                <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Guardian's Middle name</label>
              </div>
            </div>

            <div class="w-full lg:w-3/12 px-4 mt-5">
              <div class="relative w-full mb-5 ">
               
                <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                  <option>Jr.</option>
                  <option>Sr.</option>
                  <option>I</option>
                  <option>II</option>
                  <option>III</option>
                  <option>IV</option>
                  <option>V</option>
                 
                 
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>    
              </div>
            </div>
           </div>

 
           <div class="relative w-[1000px]   mx-auto">
                                                            
               <div class="slide relative shadow-lg rounded-lg bg-white">
            <div class="w-full lg:w-6/12 px-4">  
                   </div> 
                    </div>                                                                                                    
                    </div>                                                                                                    
                                                      


                                             
                                                                                                                               
       <div class="w-full lg:w-6/12 px-4">
           <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
               ACCOMPLISHED BY:
           </h6>
        </div>
                                                                                                                
      <hr class=" mt-6 border-4 border-stone-200 hover:border-green-500 drop-shadow-xl w-full"/> 
         <div class="flex flex-wrap mt-5">
           <div class="flex flex-wrap">
              <div class="w-full lg:w-3/12 px-7">
                  <div class="relative w-full mb-3">
      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
           {{-- Kind of Application --}}
       </label>
    <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
           <option>Applicant</option>
           <option>Guardian</option>
          <option>Representative</option>
                                                                                                                             
                                                                                                                             
           </select>
             <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                 <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </div>    
             </div>
           </div>



                                                                                                                        
                                                                                                                      

          <div class="w-full lg:w-3/12 px-4">
             <div class="relative w-full mb-3 ">
               <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                   <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last Name</label>
                </div>
             </div>
                                                                                                                        



           <div class="w-full lg:w-2/12 px-4">
              <div class="relative w-full mb-3">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                     <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First Name</label>
                 </div>
               </div>

           <div class="w-full lg:w-2/12 px-4">
              <div class="relative w-full mb-3">
                 <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                    <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle Name</label>
                   </div>
                  </div>

                                                                                                                       
            <div class="w-full lg:w-2/12 px-4">
              <div class="relative w-full">
             {{-- <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                   Suffix
             </label> --}}
               <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                  <option>Jr.</option>
                  <option>Sr.</option>
                  <option>I</option>
                  <option>II</option>
                  <option>III</option>
                  <option>IV</option>
                  <option>V</option>
                  <option>VII</option>
                </select>
                   <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>    
                </div>
              </div>
                                                                                                                      

                                                                                                                              
           {{-- <div class="w-full lg:w-4/12 px-4">
                                                                                                                                   
                    </div> --}}
                                                                                                                                  
           <div class="w-full lg:w-12/12 px-4">
     {{-- <hr class=" mt-6 border-4 border-stone-200 hover:border-green-500 drop-shadow-xl w-full"/>  --}}
           <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
             NAME OF CERTIFYING PHYSICIAN
           </h6>   
         </div>     
      <hr class=" mt-6 border-4 border-stone-200 hover:border-green-500 drop-shadow-xl w-full"/> 
         <div class="flex flex-wrap">
                                                                                                                                        
            <div class="w-full lg:w-3/12 px-4">
           <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
          <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">License No.</label>
       </div>
     </div>

   <div class="w-full lg:w-3/12 px-4">
      <div class="relative w-full mb-3 mt-5">
       <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
         <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last Name</label>
           </div>
          </div>
                                                                                                                                  
                                                                                                                                
    <div class="w-full lg:w-2/12 px-4">
        <div class="relative w-full mb-3 mt-5">
          <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
          <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First Name</label>
        </div>
      </div>
                                                                                                                                  
 <div class="w-full lg:w-2/12 px-4">
 <div class="relative w-full mb-3 mt-5">
<input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
    <label for="email" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle Name</label>
      </div>
    </div>


  <div class="w-full lg:w-2/12 px-4">
  <div class="relative w-full mb-3">
    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
        Suffix
   </label>
    <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
        <option>Jr.</option>
        <option>Sr.</option>
        <option>I</option>
        <option>II</option>
        <option>III</option>
       <option>IV</option>
       <option>V</option>
       <option>VI</option>
       <option>VII</option>
    </select>
   <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
       </div>    
     </div>
    </div>
  </div>  

          

   <hr class="mt-6 border-b-5 border-blueGray300 w-full">   
       <div class="w-full lg:w-6/12 px-4">
         <h6 class="text-blueGray-400 text-sm mt-5 mb-6 font-bold uppercase">
             PROCESSING OFFICER
                      </h6>      
                   </div>        
              </div>
            
              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3 ">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Last name</label>
                </div>
              </div>
              
              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3 ">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First name</label>
                </div>
              </div>
 
              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3 ">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Middle name</label>
                </div>
              </div>

              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-5">
                 
                  <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option>Jr.</option>
                    <option>Sr.</option>
                    <option>I</option>
                    <option>II</option>
                    <option>III</option>
                    <option>IV</option>
                    <option>V</option>
                   
                   
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>    
                </div>
              </div>
            </div>
            </div>
                                                                                                                                            
            <div class="w-full lg:w-4/12 px-4 mt-9">
              <button class="space-x-px space-x-36 mb-3  bg-blue-500 text-white active:bg-green-900 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                Save
              </button>
              <button class=" space-x-36 mb-3  bg-blue-500 text-white active:bg-red-600 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
             Update
              </button>    
            </div>        
           </div>
           

{{--  start of last slide   --}}
                                                                                                                                                                                                                                                                                                                                                             
     
           <div class="relative w-[1000px]   mx-auto">
                                                            
            <div class="slide relative shadow-lg rounded-lg bg-white">
              <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">  
              </div> 
           </div> 
      
                     
         <div class="w-full lg:w-6/12 px-4">
            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                APPROVING OFFICER
                  </h6>
          </div>
      
          <hr class="mt-6 border-b-5 border-blueGray300">
          <div class="flex flex-wrap mt-5">
             <div class="flex flex-wrap">
             


              
            

              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3 ">
                  <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last Name</label>
                </div>
              </div>
              



              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First Name</label>
                </div>
              </div>

              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle Name</label>
                </div>
              </div>

             
              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full">
                  {{-- <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                 Suffix
                  </label> --}}
                  <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option>Jr.</option>
                    <option>Sr.</option>
                    <option>I</option>
                    <option>II</option>
                    <option>III</option>
                     <option>IV</option>
                    <option>V</option>
                    <option>VI</option>
                    <option>VII</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>    
                </div>
              </div>
            

                    
                        <div class="w-full lg:w-4/12 px-4">
                         
                        </div>
                        
                      
                       
                        



<hr class="mt-6 border-b-5 border-blueGray300 w-full">   
<div class="w-full lg:w-6/12 px-4">
<h6 class="text-blueGray-400 text-sm mt-5 mb-6 font-bold uppercase">
PROCESSING OFFICER
</h6>      
</div>        
</div>


<div class="w-full lg:w-3/12 px-4">
<div class="relative w-full mb-3 ">
<input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
<label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Last name</label>
</div>
</div>

<div class="w-full lg:w-3/12 px-4">
<div class="relative w-full mb-3 ">
<input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
<label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First name</label>
</div>
</div>

<div class="w-full lg:w-3/12 px-4">
<div class="relative w-full mb-3 ">
<input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
<label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Middle name</label>
</div>
</div>

<div class="w-full lg:w-3/12 px-4">
<div class="relative w-full mb-5">

<select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
<option>Jr.</option>
<option>Sr.</option>
<option>I</option>
<option>II</option>
<option>III</option>
<option>IV</option>
<option>V</option>


</select>
<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
</div>    
</div>
</div> 
</div>




<div class="w-full lg:w-6/12 px-4">
  <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
ENCODER
     </div>     
     <hr class="mt-6 border-b-5 border-blueGray300">
     <div class="flex flex-wrap">
    
 



 <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-3 mt-7">
  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Last name</label>
  </div>
  </div>
  
  <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-3 mt-7 ">
  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First name</label>
  </div>
  </div>
  
  <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-3 mt-7 ">
  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Middle name</label>
  </div>
  </div>
  
  <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-5 mt-7">
  
  <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
  <option>Jr.</option>
  <option>Sr.</option>
  <option>I</option>
  <option>II</option>
  <option>III</option>
  <option>IV</option>
  <option>V</option>
  
  
  </select>
  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
  </div>    
  </div>
  </div> 
  </div>




     <div class="w-full lg:w-6/12 px-4">
      <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
   NAME OF REPORTING UNIT:(OFFICE/SECTION)
            </h6>   
         </div>     
         <hr class="mt-6 border-b-5 border-blueGray300">
         <div class="flex flex-wrap">
        

 <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-3 mt-7">
  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Last name</label>
  </div>
  </div>
  
  <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-3 mt-7 ">
  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First name</label>
  </div>
  </div>
  
  <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-3 mt-7 ">
  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Middle name</label>
  </div>
  </div>
  
  <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-5 mt-7">
  
  <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
  <option>Jr.</option>
  <option>Sr.</option>
  <option>I</option>
  <option>II</option>
  <option>III</option>
  <option>IV</option>
  <option>V</option>
  
  
  </select>
  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
  </div>    
  </div>
  </div> 
  </div>



         <div class="w-full lg:w-6/12 px-4">
          <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
     CONTROL UNIT
                </h6>   
             </div>     
             <hr class="mt-6 border-b-5 border-blueGray300">
             <div class="flex flex-wrap">
            
 <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-3 mt-7">
  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Last name</label>
  </div>
  </div>
  
  <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-3 mt-7 ">
  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First name</label>
  </div>
  </div>
  
  <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-3 mt-7 ">
  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Middle name</label>
  </div>
  </div>
  
  <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-5 mt-7">
  
  <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
  <option>Jr.</option>
  <option>Sr.</option>
  <option>I</option>
  <option>II</option>
  <option>III</option>
  <option>IV</option>
  <option>V</option>
  
  
  </select>
  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
  </div>    
  </div>
  </div> 
  </div>
                        
<div class="w-full lg:w-4/12 px-4 mt-9">
<button class=" space-x-36 mb-3  bg-blue-500 text-white active:bg-red-600 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"<a class="absolute left-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
            onclick="moveSlide(-1)">❮</a><type="button">
  Next
</button>  
 <button class=" space-x-36 mb-3  bg-blue-500 text-white active:bg-red-600 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150 <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
            onclick="moveSlide(1)">❯</a> <type="button">
Next
</button>    
</div>        
</div>



<br>
       
         <!-- The previous button -->
        <a class="absolute left-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
            onclick="moveSlide(-1)">❮</a>

         <!-- The next button  -->
         <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
            onclick="moveSlide(1)">❯</a>

    </div>
    <br>

   The dots
    <div class="flex justify-center items-center space-x-5">
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(1)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(4)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(5)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(6)"></div>
    </div>


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

            // remove active status from all dots
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

 <!-- end  of photho - -->

          <!-- This is an example component -->
    
       
    {{-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
          <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
          
          
          <section class=" py-1 bg-white-200  "> --}}

      
  {{-- <end> --}}
    
          {{-- <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
              <div class="rounded-t bg-white mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                  <h6 class="text-black text-2xl font-sans-sarif">
                    Member Information
                  </h6> --}}
                  {{-- <button class="bg-blue-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                    Save
                  </button>
                  <button class="bg-blue-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                   Reset
                  </button> --}}
                {{-- </div>
                 </div>

            <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-white  rounded-lg shadow-2xl">
                <form>
                   <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                   
                   </h6>
                  
              <div class="flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="  block uppercase tracking-wide bg-white text-xs font-bold mt-4" for="grid-state"></label>
                         <div class="relative">
                          <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                               <option>New Applicant</option>
                               <option>Renew</option>
                               <option>Transfer</option>
                               </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                         </div>    
                                           </div>
                                               </div>
                                                   </div> 







                                                    --}}



                    {{-- <start of member information> --}}

{{-- </start> --}}

{{-- <end> --}}
<!-- 

                  <div class="flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                          <div class="relative">
                            <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                            <label for="email" class="absolute left-0 -top-3.5 text-blue-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Pwd No.</label>
                             </div>      
                              </div>
                              </div>
                              </div>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                          <div class="relative">
                            <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Date Applied" />
                            <label for="email" class="absolute left-0 -top-3.5 text-blue-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Date Applied</label>
                             </div>      
                              </div>
                              </div>
                              </div>


                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                          <div class="relative">
                            <input autocomplete="off" id="email" name="email" type="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Email address" />
                            <label for="email" class="absolute left-0 -top-3.5 text-blue-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">First Name</label>
                             </div>      
                              </div>
                              </div>
                              </div>


                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                          <div class="relative">
                            <input autocomplete="off" id="email" name="email" type="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Email address" />
                            <label for="email" class="absolute left-0 -top-3.5 text-blue-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Middle Name</label>
                             </div>      
                              </div>
                              </div>
                              </div>

                  <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                      <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                        <div class="relative">
                          <input autocomplete="off" id="email" name="email" type="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Email address" />
                          <label for="email" class="absolute left-0 -top-3.5 text-blue-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Last Name</label>
                           </div>      
                            </div>
                            </div>
                            </div>
              
                  <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3 ">
                      <div class="relative">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                         Suffix
                          </label>
                        <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="grid-state">
                          <option>Sr</option>
                          <option>Jr</option>
                          <option>I</option>
                          <option>II</option>
                          <option>III</option>
                          <option>IV</option>
                          <option>VI</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>    
                      </div>
                    </div>
                  </div>


                  <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                      <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                        <div class="relative">
                          <input autocomplete="off" id="email" name="email" type="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Email address" />
                          <label for="email" class="absolute left-0 -top-3.5 text-blue-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Birthday</label>
                           </div>      
                            </div>
                            </div>
                            </div>
                  <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                      <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                        <div class="relative">
                          <input autocomplete="off" id="email" name="email" type="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Email address" />
                          <label for="email" class="absolute left-0 -top-3.5 text-blue-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Age</label>
                           </div>      
                            </div>
                            </div>
                            </div>


                            
                                    <button class="bg-blue-500 text-white active:bg-pink-600 text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                      Save
                                    </button>
                                    <button class="bg-blue-500 text-white active:bg-pink-600  text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                     Clear
                                    </button>
                                  </div>
                                   </div 
                  
end  -->
                  



   
     <!-- {{-- <start for information> --}}  -->

                  <!-- {{-- <hr class="mt-6 border-b-1 border-blueGray-300">
          
                  <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                    Contact Information
                  </h6>
                  <div class="flex flex-wrap"> --}}
                    {{-- <div class="w-full lg:w-12/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          Address
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                      </div>
                    </div> --}}
                    {{-- <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          Purok
                        </label>
                        <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                           <option>6</option>
                          <option>6A</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                           <option>12</option>
                          <option>13</option>
                          <option>14</option>
                          <option>15</option>
                          <option>16</option>
                          <option>16A</option>
                          <option>17</option>
                          <option>18</option>
                          <option>19</option>
                          <option>20</option>
                          <option>20B</option>
                          <option>21</option>
                         
                 
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>    
                      </div>
                    </div>
                  
                
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        Barangay
                        </label>
                        <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                          <option>Bagontaas</option>
                          <option>Banlag</option>
                          <option>Barobo</option>
                          <option>Catumbalon</option>
                          <option>Colonia</option>
                           <option>Concepcion</option>
                          <option>Dagat Ki Davao</option>
                          <option>Guinoyuran</option>
                          <option>Kahaponan</option>
                          <option>Laligan</option>
                          <option>Lilingayun</option>
                          <option>Lourdes</option>
                          <option>Lumbayao</option>
                           <option>Lumbo</option>
                          <option>Lurogan</option>
                          <option>Maapag</option>
                          <option>Mabuhay</option>
                          <option>Mailag</option>
                          <option>Mt. Nebo</option>
                          <option>Nabag-o</option>
                          <option>Pinatilan</option>
                          <option>Poblacion</option>
                          <option>San Carlos</option>
                          <option>San Isidro</option>
                          <option>Sinabuagan</option>
                          <option>Sugod</option>
                          <option>Tongan Tongan</option>
                          <option>Tugaya</option>
                          <option>Vintar</option>
                 
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>    
                      </div>
                    </div>
                  
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                       Municipality
                        </label>
                        <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Valencia">
                      </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                         Province
                        </label>
                        <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Bukidnon">
                      </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                         Region
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Region X">
                      </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          Postal Code
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="8709">
                      </div>
                    </div>
                  </div> --}}
 -->



         <!-- {{-- <start for contact details>          --}} -->

                  <!-- {{-- <hr class="mt-6 border-b-1 border-blueGray-300">
          
                  <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                    Contact Detials
                  </h6>
                  <div class="flex flex-wrap">
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                   Landline No.
                      </label>
                      <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="088">
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                     Mobile No. / Cellphone No.
                      </label>
                      <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="099-">
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                      Email Address
                      </label>
                      <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Email Address">
                    </div>
                  </div>
                 
                </div> --}}
 -->


            
                 <!-- {{-- <start of sakit--}} -->

                 <!-- {{-- <hr class="border-b-1 border-blueGray-300">
          
                 <h6 class="text-blueGray-400 text-sm mt-3 mb-3 font-bold uppercase">
                  CAUSE OF DESEASE
                 </h6>
                 <div class="flex flex-wrap">
               
                
                    </div> 
                                             
                <ul class= "shadow-lg rounded-lg bg-blueGray-100 border-0   items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="  flex items-center pl-3">
                            <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Congenital /Inborn</label>
                        </div>
                    </li>


                    start

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="react-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Austim</label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="angular-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">ADHD</label>
                        </div>
                    </li>
                    <li class="w-full dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cerebral Palsy</label>
                        </div>
                    </li>
                
                    <li class="w-full dark:border-gray-600">
                      <div class="flex items-center pl-3">
                          <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Down Syndrome</label>
                      </div>
                  </li>
                </ul>
                
                
                <ul class="   shadow-lg rounded-lg bg-blueGray-100 border-0  items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                  <li class=" w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                      <div class=" flex items-center pl-3">
                          <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Acquired</label>
                      </div>
                  </li>
                  <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                      <div class="flex items-center pl-3">
                          <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="react-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Chronic Illness</label>
                      </div>
                  </li>
                  <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                      <div class="flex items-center pl-3">
                          <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="angular-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Injury</label>
                      </div>
                  </li>
                  <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                    <div class="flex items-center pl-3">
                        <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="angular-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
                    </div>
                </li>
                </ul> --}}
                          
                
                
                
                
                
                {{-- end cause of sakit --}}
                               -->



<!-- 
                {{-- start of cause --}} -->

                <!-- {{-- <hr class="mt-6 border-b-1 border-blueGray-300">
          
                <h6 class="text-blueGray-400 text-sm mt-3 mb-3 font-bold uppercase">
                 Types OF DESEASE
                </h6>
                <div class="flex flex-wrap">
              
               
                   </div> 
                                            
                   <h3 class=" flex mb-4 font-semibold text-gray-900 dark:text-white px-2"></h3>
                             
                   <ul class= "  shadow-lg rounded-lg bg-blueGray-100 border-0  items-center w-full text-sm font-medium text-gray-900 
                    border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                     <li class="  w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                         <div class="  flex items-center pl-3">
                             <input id="vue-checkbox-list" type="checkbox" value="" class=" w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                             <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deaf or Hard of Hearing</label>
                         </div>
                     </li>
                     <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                         <div class="flex items-center pl-3">
                             <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                             <label for="react-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Intellectual Disability</label>
                         </div>
                     </li>
                     <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                         <div class="flex items-center pl-3">
                             <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                             <label for="angular-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Learning Disability</label>
                         </div>
                     </li>
                     <li class="w-full dark:border-gray-600">
                         <div class="flex items-center pl-3">
                             <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                             <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mental Disability</label>
                         </div>
                     </li>
                 
                     <li class="w-full dark:border-gray-600">
                       <div class="flex items-center pl-3">
                           <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                           <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Physical Disability (Orthopedic)</label>
                       </div>
                   </li>
                 </ul>
                 
                 <ul class="  shadow-lg rounded-lg bg-blueGray-100 border-0  items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                   <li class="  w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                       <div class=" flex items-center pl-3">
                           <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                           <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Psychosocial Disability</label>
                       </div>
                   </li>
                   <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                       <div class="flex items-center pl-3">
                           <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                           <label for="react-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Speech and Language Impairment</label>
                       </div>
                   </li>
                   <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                       <div class="flex items-center pl-3">
                           <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                           <label for="angular-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Visual Disability</label>
                       </div>
                   </li>
                   <li class="w-full dark:border-gray-600">
                       <div class="flex items-center pl-3">
                           <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                           <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cancer (RA11215)</label>
                       </div>
                   </li>
                 
                   <li class="w-full dark:border-gray-600">
                     <div class="flex items-center pl-3">
                         <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                         <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rare Disease (RA10747)</label>
                     </div>
                 </li>
                 
                 </ul>
                             --}}
             
                {{-- end of cause --}}
                 -->

              <!-- {{-- <hr class="mt-6 border-b-1 border-blueGray-300">
          
              <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                SChOOL AND EMPLOYMENT INFORMATION
              </h6>
              <div class="flex flex-wrap">
    
                <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Educational Attainment
                    </label>
                    <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                      <option>None</option>
                      <option>Kindergarten</option>
                      <option>Elementary</option>
                      <option>Junior High School</option>
                      <option>Senior High School</option>
                       <option>College</option>
                      <option>Vocational</option>
                      <option>Post Graduate</option>
                      
               
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>    
                  </div>
                </div>
              
            
                <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                 Status of Employment
                    </label>
                    <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                      <option>Employed</option>
                      <option>Unemployed</option>
                      <option>Self-employed</option>
                     
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>    
                  </div>
                </div>
              
                <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
               Types of Employment
                    </label>
                    <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                      <option>Permanent</option>
                      <option>Seasonal</option>
                      <option>Casual</option>
                      <option>Emergency</option>
                     >
                  
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>    
                  </div>
                </div>
                 --}}

{{-- 
                 <start for Employment> --}}

                {{-- <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                   Category of Employment
                    </label>
                    <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                      <option>Government</option>
                      <option>Private</option>
                     
                  
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>    
                  </div>
                </div>
                
                <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                   Occupation
                    </label>
                    <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                      <option>Manager</option>
                      <option>Proffessionals</option>
                      <option>Technicians and Associate Proffessionals</option>
                      <option>Clerical Support Workers</option>
                      <option>Skilled Agricultural, Forestry and Fishery Workers </option>
                      <option> Craft and Related Trade Workers</option>
                      <option>Plant and Machine Operators and Assemblers</option>
                       <option>Elementary Occupation</option>
                       <option>Armed Forces Occupations</option>
                       <option></option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>    
                  </div>
                </div>
              </div> --}}



{{--  
                <hr class="mt-6 border-b-1 border-blueGray-300">
          
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
             Organizational Information
                </h6>

                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                 
                     </h6>
                     <div class="flex flex-wrap">
                     <div class="w-full lg:w-12/12 px-4">
                       <div class="relative w-full mb-3">
                         <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          Organizational Affliated
                         </label>
                         <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Organizational Affliated Name">
                       </div>
                     </div>
                <div class="flex flex-wrap">
                <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
             Contact Person
                    </label>
                    <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Mobile">
                  </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
              Office Address
                    </label>
                    <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Celphone">
                  </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
               Telephone No.
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Email">
                  </div>
                </div> 
              </div>       
            </div>
                    
              
                 
          
                  <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                 Id Reference
                  </h6>
                  <div class="flex flex-wrap">
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                     SSS No.
                      </label>
                      <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Mobile">
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                  GSIS No.
                      </label>
                      <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Celphone">
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    PAG-IBIG No.
                      </label>
                      <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Email">
                    </div>
                  </div>
                 
                </div> --}}
        
                {{-- <hr class="mt-6 border-b-1 border-blueGray-300">
          
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase text-center">
               family background
                    </h6>
                    <p class="text-left font-italic mb-5">Father's Name</p>

                    <div class="flex flex-wrap">  
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                           Last Name
                          </label>
                          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Lucky">
                        </div>
                      </div>
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                           First Name
                          </label>
                          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                        </div>
                      </div>
                
  
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        Middle Name
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                      </div>
                    </div>
                
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3 ">
                        <div class="relative">
                          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                           Suffix
                            </label>
                          <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option>Sr</option>
                            <option>Jr</option>
                            <option>I</option>
                            <option>II</option>
                            <option>III</option>
                            <option>IV</option>
                            <option>VI</option>
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>    
                        </div>
                      </div>
                    </div>
  
                      
                             <p class="text-left font-italic mb-5">Mother's Name</p>
         
                             <hr class="mt-6 border-b-1 border-blueGray-300">
          
                 
                  <div class="flex flex-wrap">
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                   Last Name
                      </label>
                      <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Mobile">
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                  First Name
                      </label>
                      <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Celphone">
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                 Middle Name
                      </label>
                      <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Email">
                    </div>
                  </div>              
                </div>
         --}}
                 
                {{-- <hr class="mt-6 border-b-1 border-blueGray-300">
          
                <p class="text-left font-italic mb-5">Guardian</p>
                
                <div class="flex flex-wrap">  
                  <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                       Last Name
                      </label>
                      <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Lucky">
                    </div>
                  </div>
                  <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                       First Name
                      </label>
                      <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                    </div>
                  </div>
            

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Middle Name
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                  </div>
                </div>
            
                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3 ">
                    <div class="relative">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                       Suffix
                        </label>
                      <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option>None</option>
                        <option>Sr</option>
                        <option>Jr</option>
                        <option>I</option>
                        <option>II</option>
                        <option>III</option>
                        <option>IV</option>
                        <option>VI</option>
                      </select>
                      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                      </div>    
                    </div>
                  </div>
                </div>
              </div>
            

                <hr class="mt-6 border-b-1 border-blueGray-300">
          
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase text-center">
               ACCOMPLISHED By
                    </h6>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3 ">
                        <div class="relative">
                          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          
                            </label>
                          <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option>Applicant</option>
                            <option>Guardian</option>
                            <option>Representative</option>
                            
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>    
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-wrap">  
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                           Last Name
                          </label>
                          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Lucky">
                        </div>
                      </div>
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                           First Name
                          </label>
                          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                        </div>
                      </div>
                
  
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        Middle Name
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                      </div>
                    </div>
                
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3 ">
                        <div class="relative">
                          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                           Suffix
                            </label>
                          <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option>None</option>
                            <option>Sr</option>
                            <option>Jr</option>
                            <option>I</option>
                            <option>II</option>
                            <option>III</option>
                            <option>IV</option>
                            <option>VI</option>
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>    
                        </div>
                      </div>
                    </div>
                  </div>
              
                 
       
                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase text-center">
                name of CERTIFYING PHYSICIAN
                        </h6>
                       

                        <div class="flex flex-wrap">  
                          <div class="w-full lg:w-12/12 px-4">
                            <div class="relative w-full mb-3">
                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            License No.
                              </label>
                              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Lucky">
                            </div>
                          </div>

                        <div class="flex flex-wrap">  
                          <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                               Last Name
                              </label>
                              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Lucky">
                            </div>
                          </div>
                          <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                               First Name
                              </label>
                              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                            </div>
                          </div>
                    
      
                        <div class="w-full lg:w-6/12 px-4">
                          <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Middle Name
                            </label>
                            <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                          </div>
                        </div>
                    
                        <div class="w-full lg:w-6/12 px-4">
                          <div class="relative w-full mb-3 ">
                            <div class="relative">
                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                               Suffix
                                </label>
                              <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                <option>None</option>
                                <option>Sr</option>
                                <option>Jr</option>
                                <option>I</option>
                                <option>II</option>
                                <option>III</option>
                                <option>IV</option>
                                <option>VI</option>
                              </select>
                              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                              </div>    
                            </div>
                          </div>
                        </div>
      
              
  

  {{-- @include('partials.footer') --}}

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

 </div> -->
 

 <!--end of creat.blade.ph -->


<!-- 
 register -->
 
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

<body class = "body bg-lime-500 rounded-lg shadow-2xl dark:bg-[#0F172A]">
    <div class = " mt-2 fixed w-full z-30 flex bg-white-100 dark:bg-[#0F172A] p-2 items-center justify-center h-16 px-8">
        <div class = "logo ml-12 dark:text-white  transform ease-in-out duration-500 flex-none h-full flex items-center justify-center ">
            ADMIN
        </div>
        <!-- SPACER -->
        <div class = "grow h-full flex items-center justify-center "></div>
        <div class = "flex-none h-full text-center flex items-center justify-center">
            
                <div class = "flex space-x-3 items-center px-3 ">
                    <div class = "flex-none flex justify-center">
                    <div class="w-8 h-8 flex bg-white-100 rounded-lg shadow-2xl ">
                          <img src="{{url('/build/logo.png')}}" alt="..." class="   max-w-50 rounded h-8 w-8"> 
                    </div>
                    </div>

                    <div class = "hidden md:block text-sm md:text-md text-black dark:text-white">tweetybird</div>
                </div>
                
        </div>
    </div>
    <aside class = " mt-3 w-60 -translate-x-48 fixed transition transform ease-in-out duration-1000 z-50 flex h-screen bg-white-500  shadow-lg shadow-green-500/50 ">
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
        <div class= "max hidden text-black mt-20 flex-col space-y-2 w-full h-[calc(100vh)]">


<h1 class= " font-bold ml-4 w-full text-black text-white-500 text-black-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">PWD Transactions</h1>
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

    <hr class="border-2 border-black-200 hover:border-green-500 drop-shadow-xl"/>

   <h1 class= " font-bold ml-4 w-full text-black text-white-500 text-black-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">Account Information</h1>
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
       <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
           </svg>


             
        <div>
        <a href ="{{url('/')}}" class="text-base leading-4">User Profile</a>

        </div>
    </div>



    <hr class="border-2 border-black-200 hover:border-green-500 drop-shadow-xl"/>

   <h1 class= " font-bold ml-4 w-full text-black text-white-500 text-black-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">General Reports</h1>
   <div class =  "hover:ml-4 w-full text-black hover:text-white-500 dark:hover:text-green-500 bg-white-100 p-2 pl-8 rounded-full transform ease-in-out duration-300 flex flex-row items-center space-x-3">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
   <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
  </svg>
             
        <div>
        <a href ="{{url('/')}}" class="text-base leading-4">Reports</a>

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
            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
        </svg>           
    </div>


    <div class= "hover:ml-4 justify-end pr-5 text-white hover:text-black  dark:hover:text-blue-500 w-full  bg-green-600 p-3 r transform ease-in-out duration-300 flex">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
   <path stroke-linecap="round" stroke-linejoin="round" d="M10.125 2.25h-4.5c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125v-9M10.125 2.25h.375a9 9 0 019 9v.375M10.125 2.25A3.375 3.375 0 0113.5 5.625v1.5c0 .621.504 1.125 1.125 1.125h1.5a3.375 3.375 0 013.375 3.375M9 15l2.25 2.25L15 12" />
   </svg>     
     </div>
 </div>      
</aside>
    <!-- CONTENT -->
    <div class = "content ml-12 transform ease-in-out duration-500 pt-20 px-2 md:px-5 pb-4 ">
        <nav class = " flex px-5 py-3 text-gray-700  rounded-lg bg-stone-100 dark:bg-[#1E293B] " aria-label="Breadcrumb">
            <ol class = "inline-flex items-center space-x-1 md:space-x-3">
                <li class = "inline-flex items-center">
                <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(1)"></div>
                       <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white bg-slate-200 rounded w-full text-greay-700 focus:outline-none border-gray-400 px-5 py-2">Member Information</a>
                    </a>    
                </li>

                <li>
                <li class = "inline-flex items-center">
                <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(2)"></div>
                       <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white bg-blue-200 rounded w-full text-greay-700 focus:outline-none border-gray-400 px-5 py-2">Contact Details</a>
                    </a>    
                </li>
                </li>

                <li>
                <li class = "inline-flex items-center">
                <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(3)"></div>
                       <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white bg-violet-200 rounded w-full text-greay-700 focus:outline-none border-gray-400 px-5 py-2">Types of Desease</a>
                    </a>    
                </li>
                </li>  
              
                <li>
                    <div class = "flex items-center">                      
                    <li class = "inline-flex items-center">
                <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(4)"></div>
                       <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white bg-stone-200 rounded w-full text-greay-700 focus:outline-none border-gray-400 px-5 py-2">ID References</a>
                    </a>    
                </li>
                </li>
                <li>
                    <div class = "flex items-center">                      
                    <li class = "inline-flex items-center">
                <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(5)"></div>
                       <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white bg-emerald-200 rounded w-full text-greay-700 focus:outline-none border-gray-400 px-5 py-2">Accomplished By</a>
                    </a>    
                </li>
                </li>              
                <li>
                    <div class = "flex items-center">                      
                    <li class = "inline-flex items-center">
                <div class="dot w-4 h-4 rounded-full cursor-pointer" onclick="currentSlide(6)"></div>
                       <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white bg-rose-200 rounded w-full text-greay-700 focus:outline-none border-gray-400 px-5 py-2">Approving By</a>
                    </a>    
                </li>
                </li>
                <li>

            </ol>
        </nav>
     <br>
        
     <div class="float-right">
            <button class="  space-x-px space-x-36 mb-3  bg-blue-500 text-white active:bg-green-900 text-xs px-2 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
              Save
            </button>
            <button class="  space-x-36 mb-3  bg-blue-500 text-white active:bg-red-600 text-xs px-2 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
               Update
            </button>    
            </div>        
         </div>

        <!-- <start of content> -->
      
    <form action ="/"  method="POST" class=" w-full flex flex-col space-y-4 text-gray-70  bg-white-100 mt-10">
       @csrf
  
   <start for personal information>
   <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

 <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.3.x/dist/index.js"></script>

<!-- 
<div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
   Photo File Input -->
    <!-- <input type="file" class="hidden" x-ref="photo" x-on:change="
                        photoName = $refs.photo.files[0].name;
                        const reader = new FileReader();
                        reader.onload = (e) => {
                            photoPreview = e.target.result;
                        };
                        reader.readAsDataURL($refs.photo.files[0]);">

    <label class="block text-gray-700 text-sm font-bold mb-2 text-center" for="photo">
   Member Photo <span class="text-red-600"> </span>
    </label>
    
    <div class="text-center">
  
        <div class="mt-2" x-show="! photoPreview">
            <img src="https://images.unsplash.com/photo-1531316282956-d38457be0993?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80" class="w-40 h-40 m-auto rounded-full shadow">
        </div>
 
        <div class="mt-2" x-show="photoPreview" style="display: none;">
            <span class="block w-40 h-40 rounded-full m-auto shadow" x-bind:style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url('null');">
            </span>
        </div>
        <button type="button" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-400 focus:shadow-outline-blue active:text-gray-800 active:bg-gray-50 transition ease-in-out duration-150 mt-2 ml-3" x-on:click.prevent="$refs.photo.click()">
            Select New Photo
        </button>
    </div>
</div> 
<!doctype html>
<html> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title></title>
</head>


  

    <!-- Implement the carousel -->

       <div class="relative w-[1000px]   mx-auto">
    
        <div class="slide relative shadow-lg rounded-lg bg-white">
          <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4">  
          </div> 
       </div> 
   

       
       <!-- <start of member info>           -->
     <div class="w-full lg:w-6/12 px-4">
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
             Member  Information
              </h6>
      </div>

      <hr class="border-4 border-stone-200 hover:border-green-500 drop-shadow-xl"/>
    
      <div class="flex flex-wrap mt-5">
         <div class="flex flex-wrap">
          <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3 mt-7">
              <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
              <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Pwd No.</label>
            </div>
          </div>
          
        
          <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3 mt-7">
              <input autocomplete="off" id="first name" name="first name" type="date" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
              <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Date Applied</label>
            </div>
          </div>
          
          <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3">
              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
           Kind of Application
              </label>
              <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option>New</option>
                <option>Renew</option>
                <option>Transfer</option>
               
               
              </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </div>    
            </div>
          </div>

                
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                        <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last Name</label>
                      </div>
                    </div>
                    
                  
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                        <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First Name</label>
                      </div>
                    </div>
                    
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3 mt-5">
                        <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                              <label for="email" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle Name</label>
                      </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                       Suffix
                        </label>
                        <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                          <option>Jr.</option>
                          <option>Sr.</option>
                          <option>I</option>
                          <option>II</option>
                          <option>III</option>
                           <option>IV</option>
                          <option>V</option>
                          <option>VI</option>
                          <option>VII</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>    
                      </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3 mt-7">
                        <input autocomplete="off" id="first name" name="first name" type="date" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" />
                        <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Birthday</label>
                      </div>
                    </div>
                  
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-50 mt-7">
                      
                      <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"  placeholder="Age">
                    </div>
                  </div>
                </div> 

          
       
                   <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                           Gender
                          </label>
                           <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option>Male</option>
                            <option>Female</option>
                          </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>    
                      </div>
                    </div>



                        <div class="w-full lg:w-4/12 px-4">
                          <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        Civil Status
                            </label>
                            <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                              <option>Single</option>
                              <option>Separated</option>
                              <option>Cohabitation (live-in)</option>
                              <option>Married</option>
                              <option>Widow/ er</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>    
                          </div>
                        </div>



                        <div class="w-full lg:w-/12 px-4">
                          <hr class="border-4 border-stone-200 hover:border-green-500 drop-shadow-xl"/>
                          
                     </div>
                      
                  <div class="w-full lg:w-6/12 px-4">
                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                  RESIDENCE DETAILS
                          </h6>   
                          
                          
                       </div>   
                       
                      
 
                       <div class="flex flex-wrap">
                      <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3 mt-7">                     
                      <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                      <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">House No. and Street</label>
                    </div>
                  </div>
                  
              
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                      Purok
                      </label>
                      <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                         <option>6</option>
                        <option>6A</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                         <option>12</option>
                        <option>13</option>
                        <option>14</option>
                        <option>15</option>
                        <option>16</option>
                        <option>16A</option>
                        <option>17</option>
                        <option>18</option>
                        <option>19</option>
                        <option>20</option>
                        <option>20B</option>
                        <option>21</option>
                      </select>
                      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                      </div>    
                    </div>
                  </div>

                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                      <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                      <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Barangay</label>
                    </div>
                  </div>




                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                      <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                      <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Municipality</label>
                    </div>
                  </div>



                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7 ">
                      <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                            <label for="email" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Province</label>
                    </div>
                  </div>



  
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3  mt-7">
                      <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                            <label for="email" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Region</label>
                    </div>
                  </div>
                </div> 
               </div>

                                      <div class="w-full lg:w-4/12 px-4 mt-9">
                                      <!-- <button class=" space-x-36 mb-3  bg-blue-500 text-white active:bg-red-600 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150 <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
            onclick="moveSlide(1)">❯</a> Next</button> -->
                                      <!-- <button class=" space-x-36 mb-3  bg-blue-500 text-white active:bg-red-600 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                       Update
                                      </button>     -->
                                    </div>        
                                   </div>
    {{-- end --}}


                    
{{--  
   <start contact details> --}}
    
  
    <div class="relative w-[1000px]   mx-auto">
    
      <div class="slide relative shadow-lg rounded-lg bg-white">
        <div class="flex flex-wrap">
          <div class="w-full lg:w-6/12 px-4">  
        </div> 
     </div>             
   <div class="w-full lg:w-6/12 px-4 mb-3 mt-5">
    
         CONTACT DETAILS
            </h6>
    </div>
    <hr class="border-4 border-stone-200 hover:border-green-500 drop-shadow-xl"/>
    <div class="flex flex-wrap mt-5">
       <div class="flex flex-wrap">
        <div class="w-full lg:w-4/12 px-4">
          <div class="relative w-full mb-3 mt-7">
            <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
            <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Landline No.</label>
          </div>
        </div>
        
      
        <div class="w-full lg:w-4/12 px-4">
          <div class="relative w-full mb-3 mt-7">
            <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
            <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Mobile No.</label>
          </div>
        </div>
        
       
              
                  {{-- <div class="w-full lg:w-4/12 px-4">
                   
                  </div> --}}
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                      <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                      <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Email Address</label>
                    </div>
                  </div>
                  
                
                
                  {{-- START OF RESIDENCE --}}
                
                
            
                  
              <div class="w-full lg:w-6/12 px-4 mt-7">
              
                EDUCATIONAL  ATTAINMENT
                      </h6>    
                   </div>                      
              </div>
              <div class="w-full lg:w-4/12 px-4">            
                <div class="relative w-full mb-3  mt-7">               
                 <label class="block uppercase text-blueGray-600 text-xs font-sans-serif mb-2" htmlfor="grid-password">
                  EDUCATIONAL  ATTAINMENT
                  </label>
                  <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option>None</option>
                    <option>Kindergarten</option>
                    <option>Elementary</option>
                    <option>Junior High School</option>
                    <option>Senior High School</option>
                    <option>College</option>
                    <option>Vocational</option>
                    <option>Post Graduate</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>    
                </div>
              </div>
            

              <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3  mt-7">
                  <label class="block uppercase text-blueGray-600 text-xs font-sans-serif mb-2" htmlfor="grid-password">
                    STATUS OF  EMPLOYMENT
                    </label>
                     <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                      <option>Employed</option>
                      <option>Unemployed</option>
                      <option>Self-employed</option>
                    
                    </select>
                      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>    
                </div>
              </div>

                 <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3  mt-7">
                      <label class="block uppercase text-blueGray-600 text-xs font-sans-serif mb-2" htmlfor="grid-password">
                        TYPES OF  EMPLOYMENT
                        </label>
                         <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                          <option>Permanent / Regular</option>
                          <option>Seasonal</option>
                          <option>Casual</option>
                          <option>Emergency</option>
                        </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                      </div>    
                    </div>
                  </div>
               

            

                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3  mt-7">
                      <label class="block uppercase text-blueGray-600 text-xs font-sans-serif mb-2" htmlfor="grid-password">
                       CATEGORY OF EMPLOYMENT
                        </label>
                         <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                          <option>Government</option>
                          <option>Private</option>
                         
                        </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                      </div>    
                    </div>
                  </div>
               

                <div class="w-full lg:w-5/12 px-4">
                  <div class="relative w-full mb-3  mt-7">
                    <label class="block uppercase text-blueGray-600 text-xs font-sans-serif mb-2" htmlfor="grid-password">
                   OCCUPATIONS
                      </label>
                       <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option>Manager</option>
                        <option>Proffessionals</option>
                        <option>Technicians and Associate Profesionals</option>
                        <option>Clerical Support Workers</option>
                        <option>Service and Sales Workers</option>
                        <option>Skilled Agricultural,Forestry, and Fishery Workers</option>                      
                        <option>Craft  and  Related Trade Workers</option>
                        <option>Plant and Machine Operators and Assemblers</option>
                        <option>Elementary Occupation</option>
                        <option>Armed Forces Occupations</option>
                        <option>Other, Specify</option>
                      </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>    
                  </div>
                </div>
              </div>
                   
                                 <div class="flex flex-wrap">
                                   <div class="w-full lg:w-4/12 px-4 mt-12">
                                       <!-- <button class="space-x-px space-x-36 mb-1  bg-blue-500 text-white active:bg-green-900 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                          Save
                                    </button>
                                       <button class=" space-x-36 mb-3  bg-blue-500 text-white active:bg-red-600 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                           Update
                                    </button>     -->
                                  </div>        
                                 </div>
                                </div>
                           
{{-- end --}}



                   {{-- start of Disabilities --}}
                   
                                 <div class="relative w-[1000px]   mx-auto">
    
                                  <div class="slide relative shadow-lg rounded-lg bg-white">
                                    <div class="flex flex-wrap">
                                      <div class="w-full lg:w-6/12 px-4">  
                                    </div> 
                                 </div> 
                                   
                                 <h6 class="text-blueGray-400 text-sm mt-3 mb-3 font-bold uppercase">
                                  Types OF DESEASE
                                 </h6>

                                 <div class="flex flex-wrap">                           
                                    </div> 
                                                             
                                    <h3 class=" flex mb-4 font-semibold text-gray-900 dark:text-white px-2"></h3>
                                              
                                    <ul class= "  shadow-lg rounded-lg bg-blueGray-100 border-0  items-center w-full text-sm font-medium text-gray-900 
                                     border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                      <li class="  w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                          <div class="  flex items-center pl-3">
                                              <input id="vue-checkbox-list" type="checkbox" value="" class=" w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                              <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deaf or Hard of Hearing</label>
                                          </div>
                                      </li>
                                    

                                      <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center pl-3">
                                            <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="react-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Intellectual Disability</label>
                                        </div>
                                    </li>
                                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                        <div class="flex items-center pl-3">
                                            <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                            <label for="angular-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Learning Disability</label>
                                        </div>
                                    </li>
                                  
                             
                                    <li class="w-full dark:border-gray-600">
                                      <div class="flex items-center pl-3">
                                          <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                          <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mental Disability</label>
                                      </div>
                                  </li>
                              
                                  <li class="w-full dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Physical Disability (Orthopedic)</label>
                                    </div>
                                </li>
                              </ul>
                              
                              <ul class="  shadow-lg rounded-lg bg-blueGray-100 border-0  items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                                <li class="  w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class=" flex items-center pl-3">
                                        <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Psychosocial Disability</label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="react-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Speech and Language Impairment</label>
                                    </div>
                                </li>
                                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                                    <div class="flex items-center pl-3">
                                        <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                        <label for="angular-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Visual Disability</label>
                                    </div>
                                </li>
                                                               


                                
                                <li class="w-full dark:border-gray-600">
                                  <div class="flex items-center pl-3">
                                      <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                      <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cancer (RA11215)</label>
                                  </div>
                              </li>
                            
                              <li class="w-full dark:border-gray-600">
                                <div class="flex items-center pl-3">
                                    <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                    <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rare Disease (RA10747)</label>
                                </div>
                            </li>
                            
                            </ul>





                   
                  <hr class="border-b-1 border-blueGray-300">
          
                 <h6 class="text-blueGray-400 text-sm mt-3 mb-3 font-bold uppercase">
                  CAUSE OF DESEASE
                 </h6>
                 <div class="flex flex-wrap">
               
                 </div>                   
                <ul class= "shadow-lg rounded-lg bg-blueGray-100 border-0   items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="  flex items-center pl-3">
                            <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Congenital /Inborn</label>
                        </div>
                    </li>



                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center pl-3">
                          <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="react-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Austim</label>
                      </div>
                  </li>

                  <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                      <div class="flex items-center pl-3">
                          <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="angular-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">ADHD</label>
                      </div>
                  </li>

                  <li class="w-full dark:border-gray-600">
                      <div class="flex items-center pl-3">
                          <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cerebral Palsy</label>
                      </div>
                  </li>
              
                  <li class="w-full dark:border-gray-600">
                    <div class="flex items-center pl-3">
                        <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Down Syndrome</label>
                    </div>
                </li>
              </ul>
              
              <ul class= "shadow-lg rounded-lg bg-blueGray-100 border-0   items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                    <div class="  flex items-center pl-3">
                        <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Acquired</label>
                    </div>
                </li>



            <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                    <div class="flex items-center pl-3">
                      <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="react-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Chronic Illness</label>
                  </div>
              </li>

              <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                  <div class="flex items-center pl-3">
                      <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="angular-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Celebral Palsy</label>
                  </div>
              </li>

              <li class="w-full dark:border-gray-600">
                  <div class="flex items-center pl-3">
                      <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                      <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Injury</label>
                  </div>
              </li>
          
              <li class="w-full dark:border-gray-600">
                <div class="flex items-center pl-3">
                    <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                    <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other specify________</label>
                </div>
            </li>
          </ul>
          

          <hr class="border-4 border-stone-200 hover:border-green-500 drop-shadow-xl"/>
          
                  <div class="flex flex-wrap">
                  <div class="w-full lg:w-12/12 px-4">
                    <div class="relative w-full mb-3 mt-5">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                       Organizational Affliated
                      </label>
                      <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Organizational Affliated Name">
                    </div>
                  </div>
                </div>



                <div class="flex flex-wrap">
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                      <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                      <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Contact Person</label>
                    </div>
                  </div>

                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7 ">
                      <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                            <label for="email" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Office Address</label>
                    </div>
                  </div>



  
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3  mt-7">
                      <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                            <label for="email" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Tel. no.</label>
                    </div>
                  </div>
                </div>
            
                   
            <div class="w-full lg:w-4/12 px-4 mt-9">
              <!-- <button class="space-x-px space-x-36 mb-3  bg-blue-500 text-white active:bg-green-900 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                Save
              </button>
              <button class=" space-x-36 mb-3  bg-blue-500 text-white active:bg-red-600 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
               Update
              </button>     -->
            </div>        
           </div>
       

                                                             
                            
       

{{-- start of cause --}}


  <div class="relative w-[1000px]   mx-auto">
 <div class="slide relative shadow-lg rounded-lg bg-white">
      <div class="flex flex-wrap">
     <div class="w-full lg:w-6/12 px-4">  
    </div> 
  </div> 
                                                                                    
                                                                                                   
<div class="w-full lg:w-6/12 px-4 mt-5 mb-3">
                                                                                      
ID REFERENCE NO.
  </h6>
</div>
                                                                                    
<hr class="border-4 border-stone-200 hover:border-green-500 drop-shadow-xl"/>
                                                                                       
<div class="flex flex-wrap mt-5">
                                                                                          
<div class="flex flex-wrap">
                                                                                           
<div class="w-full lg:w-4/12 px-4">

<div class="relative w-full mb-3 mt-5">
<input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
   <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">SSS No.</label>
     </div>
    </div>
                                                                                            
                                                                                          
<div class="w-full lg:w-4/12 px-4">
  <div class="relative w-full mb-3 mt-5">
<input autocomplete="off" id="first name" name="first name" type="Name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
 <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">GSIS No.</label>
   </div>
  </div>
                                                                                           
                                                                                            
 <div class="w-full lg:w-4/12 px-4">
 <div class="relative w-full mb-3 mt-5">
<input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
<label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">PAG-IBIG No.</label>
 </div>
</div>
                                                                                                  
 {{-- <div class="w-full lg:w-4/12 px-4">
                                                                                                       
 </div> --}}
                                                                                                      
<div class="w-full lg:w-4/12 px-4">
<div class="relative w-full mb-3 mt-5">
 <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">PSN No.</label>
</div>
</div>
                                                                                                      
                                                                                                    
<div class="w-full lg:w-4/12 px-4">
<div class="relative w-full mb-3 mt-5">
<input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
<label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Philhealth No.</label>
  </div>
 </div>
                                                                                                      
 {{-- <div class="w-full lg:w-4/12 px-4">
   <div class="relative w-full mb-3 mt-5">
<input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
 <label for="email" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle Name</label>
    </div>
  </div> --}}

                                                                                                     
               
               <hr class=" mt-6 border-4 border-stone-200 hover:border-green-500 drop-shadow-xl w-full"/> 
              <div class="w-full lg:w-6/12 px-4">
                
               FAMILY BACKGROUND
                      </h6>      
                   </div>        
              </div>
            
              <div class="w-full lg:w-3/12 px-4 mt-5">
                <div class="relative w-full mb-3 ">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Father's Last name</label>
                </div>
              </div>
              
              <div class="w-full lg:w-3/12 px-4 mt-5">
                <div class="relative w-full mb-3 ">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Father's First name</label>
                </div>
              </div>
 
              <div class="w-full lg:w-3/12 px-4 mt-5">
                <div class="relative w-full mb-3 ">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Father's Middle name</label>
                </div>
              </div>

              <div class="w-full lg:w-3/12 px-4 mt-5">
                <div class="relative w-full mb-5">
                 
                  <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option>Jr.</option>
                    <option>Sr.</option>
                    <option>I</option>
                    <option>II</option>
                    <option>III</option>
                    <option>IV</option>
                    <option>V</option>
                   
                   
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>    
                </div>
              </div>
             </div>
          


             <div class="flex flex-wrap">
             <div class="w-full lg:w-4/12 px- mt-5">
              <div class="relative w-full mb-3">
                <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Mother's Last Name</label>
              </div>
            </div>

            <div class="w-full lg:w-4/12 px-4 mt-5">
              <div class="relative w-full mb-3 ">
                <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Mother's First Name</label>
              </div>
            </div>
            
            <div class="w-full lg:w-4/12 px-4 mt-5">
              <div class="relative w-full mb-3 ">
                <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Mother's Middle Name</label>
              </div>
            </div> 


            <div class="w-full lg:w-3/12 px-4 mt-5">
              <div class="relative w-full mb-3 mt-7 ">
                <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Guardian's Last name</label>
              </div>
            </div>
            
            <div class="w-full lg:w-3/12 px-4 mt-5">
              <div class="relative w-full mb-3  mt-7 ">
                <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Guardian's First name</label>
              </div>
            </div>

            <div class="w-full lg:w-3/12 px-4 mt-5">
              <div class="relative w-full mb-3 mt-7 ">
                <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Guardian's Middle name</label>
              </div>
            </div>

            <div class="w-full lg:w-3/12 px-4 mt-5">
              <div class="relative w-full mb-5 ">
               
                <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                  <option>Jr.</option>
                  <option>Sr.</option>
                  <option>I</option>
                  <option>II</option>
                  <option>III</option>
                  <option>IV</option>
                  <option>V</option>
                 
                 
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>    
              </div>
            </div>
           </div>



 
           <div class="relative w-[1000px]   mx-auto">
                                                            
               <div class="slide relative shadow-lg rounded-lg bg-white">
            <div class="w-full lg:w-6/12 px-4">  
                   </div> 
                    </div>                                                                                                    
                    </div>                                                                                                    
  
                                             
                                                                                                                               
       <div class="w-full lg:w-6/12 px-4">
           <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
               ACCOMPLISHED BY:
           </h6>
        </div>
                                                                                                                
      <hr class=" mt-6 border-4 border-stone-200 hover:border-green-500 drop-shadow-xl w-full"/> 
         <div class="flex flex-wrap mt-5">
           <div class="flex flex-wrap">
              <div class="w-full lg:w-3/12 px-7">
                  <div class="relative w-full mb-3">
      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
           {{-- Kind of Application --}}
       </label>
    <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
           <option>Applicant</option>
           <option>Guardian</option>
          <option>Representative</option>
                                                                                                                             
                                                                                                                             
           </select>
             <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                 <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
              </div>    
             </div>
           </div>



                                                                                                                        
                                                                                                                      

          <div class="w-full lg:w-3/12 px-4">
             <div class="relative w-full mb-3 ">
               <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                   <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last Name</label>
                </div>
             </div>
                                                                                                                        



           <div class="w-full lg:w-2/12 px-4">
              <div class="relative w-full mb-3">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                     <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First Name</label>
                 </div>
               </div>

           <div class="w-full lg:w-2/12 px-4">
              <div class="relative w-full mb-3">
                 <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                    <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle Name</label>
                   </div>
                  </div>

                                                                                                                       
            <div class="w-full lg:w-2/12 px-4">
              <div class="relative w-full">
             {{-- <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                   Suffix
             </label> --}}
               <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                  <option>Jr.</option>
                  <option>Sr.</option>
                  <option>I</option>
                  <option>II</option>
                  <option>III</option>
                  <option>IV</option>
                  <option>V</option>
                  <option>VII</option>
                </select>
                   <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>    
                </div>
              </div>
                                                                                                                      

                                                                                                                              
           {{-- <div class="w-full lg:w-4/12 px-4">
                                                                                                                                   
                    </div> --}}
                                                                                                                                  
           <div class="w-full lg:w-12/12 px-4">
     {{-- <hr class=" mt-6 border-4 border-stone-200 hover:border-green-500 drop-shadow-xl w-full"/>  --}}
           <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
             NAME OF CERTIFYING PHYSICIAN
           </h6>   
         </div>     
      <hr class=" mt-6 border-4 border-stone-200 hover:border-green-500 drop-shadow-xl w-full"/> 
         <div class="flex flex-wrap">
                                                                                                                                        
            <div class="w-full lg:w-3/12 px-4">
           <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
          <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">License No.</label>
       </div>
     </div>

   <div class="w-full lg:w-3/12 px-4">
      <div class="relative w-full mb-3 mt-5">
       <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
         <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last Name</label>
           </div>
          </div>
                                                                                                                                  
                                                                                                                                
    <div class="w-full lg:w-2/12 px-4">
        <div class="relative w-full mb-3 mt-5">
          <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
          <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First Name</label>
        </div>
      </div>
                                                                                                                                  
 <div class="w-full lg:w-2/12 px-4">
 <div class="relative w-full mb-3 mt-5">
<input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
    <label for="email" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle Name</label>
      </div>
    </div>


  <div class="w-full lg:w-2/12 px-4">
  <div class="relative w-full mb-3">
    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
        Suffix
   </label>
    <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
        <option>Jr.</option>
        <option>Sr.</option>
        <option>I</option>
        <option>II</option>
        <option>III</option>
       <option>IV</option>
       <option>V</option>
       <option>VI</option>
       <option>VII</option>
    </select>
   <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
       </div>    
     </div>
    </div>
  </div>  

          

   <hr class="mt-6 border-b-5 border-blueGray300 w-full">   
       <div class="w-full lg:w-6/12 px-4">
         <h6 class="text-blueGray-400 text-sm mt-5 mb-6 font-bold uppercase">
             PROCESSING OFFICER
                      </h6>      
                   </div>        
              </div>
            
              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3 ">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Last name</label>
                </div>
              </div>
              
              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3 ">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First name</label>
                </div>
              </div>
 
              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3 ">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Middle name</label>
                </div>
              </div>

              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-5">
                 
                  <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option>Jr.</option>
                    <option>Sr.</option>
                    <option>I</option>
                    <option>II</option>
                    <option>III</option>
                    <option>IV</option>
                    <option>V</option>
                   
                   
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>    
                </div>
              </div>
            </div>
            </div>
                                                                                                                                            
            <div class="w-full lg:w-4/12 px-4 mt-9">
              <button class="space-x-px space-x-36 mb-3  bg-blue-500 text-white active:bg-green-900 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                Save
              </button>
              <button class=" space-x-36 mb-3  bg-blue-500 text-white active:bg-red-600 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
             Update
              </button>    
            </div>        
           </div>
           

{{--  start of last slide   --}}
                                                                                                                                                                                                                                                                                                                                                             
     
           <div class="relative w-[1000px]   mx-auto">
                                                            
            <div class="slide relative shadow-lg rounded-lg bg-white">
              <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4">  
              </div> 
           </div> 
      
                     
         <div class="w-full lg:w-6/12 px-4">
            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                APPROVING OFFICER
                  </h6>
          </div>
      
          <hr class="mt-6 border-b-5 border-blueGray300">
          <div class="flex flex-wrap mt-5">
             <div class="flex flex-wrap">
             


              
            

              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3 ">
                  <input autocomplete="off" id="first name" name="first name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last Name</label>
                </div>
              </div>
              



              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First Name</label>
                </div>
              </div>

              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full mb-3">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle Name</label>
                </div>
              </div>

             
              <div class="w-full lg:w-3/12 px-4">
                <div class="relative w-full">
                  {{-- <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                 Suffix
                  </label> --}}
                  <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                    <option>Jr.</option>
                    <option>Sr.</option>
                    <option>I</option>
                    <option>II</option>
                    <option>III</option>
                     <option>IV</option>
                    <option>V</option>
                    <option>VI</option>
                    <option>VII</option>
                  </select>
                  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                  </div>    
                </div>
              </div>
            

                    
                        <div class="w-full lg:w-4/12 px-4">
                         
                        </div>
                        
                      
                       
                        



<hr class="mt-6 border-b-5 border-blueGray300 w-full">   
<div class="w-full lg:w-6/12 px-4">
<h6 class="text-blueGray-400 text-sm mt-5 mb-6 font-bold uppercase">
PROCESSING OFFICER
</h6>      
</div>        
</div>


<div class="w-full lg:w-3/12 px-4">
<div class="relative w-full mb-3 ">
<input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
<label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Last name</label>
</div>
</div>

<div class="w-full lg:w-3/12 px-4">
<div class="relative w-full mb-3 ">
<input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
<label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First name</label>
</div>
</div>

<div class="w-full lg:w-3/12 px-4">
<div class="relative w-full mb-3 ">
<input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
<label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Middle name</label>
</div>
</div>

<div class="w-full lg:w-3/12 px-4">
<div class="relative w-full mb-5">

<select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
<option>Jr.</option>
<option>Sr.</option>
<option>I</option>
<option>II</option>
<option>III</option>
<option>IV</option>
<option>V</option>


</select>
<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
</div>    
</div>
</div> 
</div>




<div class="w-full lg:w-6/12 px-4">
  <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
ENCODER
     </div>     
     <hr class="mt-6 border-b-5 border-blueGray300">
     <div class="flex flex-wrap">
    
 



 <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-3 mt-7">
  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Last name</label>
  </div>
  </div>
  
  <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-3 mt-7 ">
  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First name</label>
  </div>
  </div>
  
  <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-3 mt-7 ">
  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Middle name</label>
  </div>
  </div>
  
  <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-5 mt-7">
  
  <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
  <option>Jr.</option>
  <option>Sr.</option>
  <option>I</option>
  <option>II</option>
  <option>III</option>
  <option>IV</option>
  <option>V</option>
  
  
  </select>
  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
  </div>    
  </div>
  </div> 
  </div>




     <div class="w-full lg:w-6/12 px-4">
      <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
   NAME OF REPORTING UNIT:(OFFICE/SECTION)
            </h6>   
         </div>     
         <hr class="mt-6 border-b-5 border-blueGray300">
         <div class="flex flex-wrap">
        

 <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-3 mt-7">
  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Last name</label>
  </div>
  </div>
  
  <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-3 mt-7 ">
  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First name</label>
  </div>
  </div>
  
  <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-3 mt-7 ">
  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Middle name</label>
  </div>
  </div>
  
  <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-5 mt-7">
  
  <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
  <option>Jr.</option>
  <option>Sr.</option>
  <option>I</option>
  <option>II</option>
  <option>III</option>
  <option>IV</option>
  <option>V</option>
  
  
  </select>
  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
  </div>    
  </div>
  </div> 
  </div>



         <div class="w-full lg:w-6/12 px-4">
          <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
     CONTROL UNIT
                </h6>   
             </div>     
             <hr class="mt-6 border-b-5 border-blueGray300">
             <div class="flex flex-wrap">
            
 <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-3 mt-7">
  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Last name</label>
  </div>
  </div>
  
  <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-3 mt-7 ">
  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First name</label>
  </div>
  </div>
  
  <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-3 mt-7 ">
  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Middle name</label>
  </div>
  </div>
  
  <div class="w-full lg:w-3/12 px-4">
  <div class="relative w-full mb-5 mt-7">
  
  <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
  <option>Jr.</option>
  <option>Sr.</option>
  <option>I</option>
  <option>II</option>
  <option>III</option>
  <option>IV</option>
  <option>V</option>
  
  
  </select>
  <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
  <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
  </div>    
  </div>
  </div> 
  </div>
                        
<div class="w-full lg:w-4/12 px-4 mt-9">
<!-- <button class=" space-x-36 mb-3  bg-blue-500 text-white active:bg-red-600 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150"<a class="absolute left-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
            onclick="moveSlide(-1)">❮</a><type="button">
  Next
</button>  -->
<!-- <button class=" space-x-36 mb-3  bg-blue-500 text-white active:bg-red-600 text-xs px-8 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150 <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
            onclick="moveSlide(1)">❯</a> <type="button">
Next
</button>     -->
</div>        
</div>



<br>
       
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

            // remove active status from all dots
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













<!-- start  of  coodees-->

 <!-- end  of photho - -->

          <!-- This is an example component -->
    
       
    {{-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
          <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
          
          
          <section class=" py-1 bg-white-200  "> --}}

      
  {{-- <end> --}}
    
          {{-- <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-100 border-0">
              <div class="rounded-t bg-white mb-0 px-6 py-6">
                <div class="text-center flex justify-between">
                  <h6 class="text-black text-2xl font-sans-sarif">
                    Member Information
                  </h6> --}}
                  {{-- <button class="bg-blue-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                    Save
                  </button>
                  <button class="bg-blue-500 text-white active:bg-pink-600 font-bold uppercase text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                   Reset
                  </button> --}}
                {{-- </div>
                 </div>

            <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-white  rounded-lg shadow-2xl">
                <form>
                   <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                   
                   </h6>
                  
              <div class="flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="  block uppercase tracking-wide bg-white text-xs font-bold mt-4" for="grid-state"></label>
                         <div class="relative">
                          <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                               <option>New Applicant</option>
                               <option>Renew</option>
                               <option>Transfer</option>
                               </select>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                         </div>    
                                           </div>
                                               </div>
                                                   </div> 







                                                    --}}



                    {{-- <start of member information> --}}

{{-- </start> --}}

{{-- <end> --}}
<!-- 

                  <div class="flex flex-wrap">
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                          <div class="relative">
                            <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                            <label for="email" class="absolute left-0 -top-3.5 text-blue-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Pwd No.</label>
                             </div>      
                              </div>
                              </div>
                              </div>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                          <div class="relative">
                            <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Date Applied" />
                            <label for="email" class="absolute left-0 -top-3.5 text-blue-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Date Applied</label>
                             </div>      
                              </div>
                              </div>
                              </div>


                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                          <div class="relative">
                            <input autocomplete="off" id="email" name="email" type="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Email address" />
                            <label for="email" class="absolute left-0 -top-3.5 text-blue-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">First Name</label>
                             </div>      
                              </div>
                              </div>
                              </div>


                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                          <div class="relative">
                            <input autocomplete="off" id="email" name="email" type="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Email address" />
                            <label for="email" class="absolute left-0 -top-3.5 text-blue-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Middle Name</label>
                             </div>      
                              </div>
                              </div>
                              </div>

                  <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                      <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                        <div class="relative">
                          <input autocomplete="off" id="email" name="email" type="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Email address" />
                          <label for="email" class="absolute left-0 -top-3.5 text-blue-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Last Name</label>
                           </div>      
                            </div>
                            </div>
                            </div>
              
                  <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3 ">
                      <div class="relative">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                         Suffix
                          </label>
                        <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-blue-500" id="grid-state">
                          <option>Sr</option>
                          <option>Jr</option>
                          <option>I</option>
                          <option>II</option>
                          <option>III</option>
                          <option>IV</option>
                          <option>VI</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>    
                      </div>
                    </div>
                  </div>


                  <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                      <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                        <div class="relative">
                          <input autocomplete="off" id="email" name="email" type="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Email address" />
                          <label for="email" class="absolute left-0 -top-3.5 text-blue-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Birthday</label>
                           </div>      
                            </div>
                            </div>
                            </div>
                  <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                      <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                        <div class="relative">
                          <input autocomplete="off" id="email" name="email" type="email" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Email address" />
                          <label for="email" class="absolute left-0 -top-3.5 text-blue-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Age</label>
                           </div>      
                            </div>
                            </div>
                            </div>


                            
                                    <button class="bg-blue-500 text-white active:bg-pink-600 text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                      Save
                                    </button>
                                    <button class="bg-blue-500 text-white active:bg-pink-600  text-xs px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
                                     Clear
                                    </button>
                                  </div>
                                   </div 
                  
end  -->
                  



   
     <!-- {{-- <start for information> --}}  -->

                  <!-- {{-- <hr class="mt-6 border-b-1 border-blueGray-300">
          
                  <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                    Contact Information
                  </h6>
                  <div class="flex flex-wrap"> --}}
                    {{-- <div class="w-full lg:w-12/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          Address
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                      </div>
                    </div> --}}
                    {{-- <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          Purok
                        </label>
                        <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                           <option>6</option>
                          <option>6A</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                           <option>12</option>
                          <option>13</option>
                          <option>14</option>
                          <option>15</option>
                          <option>16</option>
                          <option>16A</option>
                          <option>17</option>
                          <option>18</option>
                          <option>19</option>
                          <option>20</option>
                          <option>20B</option>
                          <option>21</option>
                         
                 
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>    
                      </div>
                    </div>
                  
                
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        Barangay
                        </label>
                        <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                          <option>Bagontaas</option>
                          <option>Banlag</option>
                          <option>Barobo</option>
                          <option>Catumbalon</option>
                          <option>Colonia</option>
                           <option>Concepcion</option>
                          <option>Dagat Ki Davao</option>
                          <option>Guinoyuran</option>
                          <option>Kahaponan</option>
                          <option>Laligan</option>
                          <option>Lilingayun</option>
                          <option>Lourdes</option>
                          <option>Lumbayao</option>
                           <option>Lumbo</option>
                          <option>Lurogan</option>
                          <option>Maapag</option>
                          <option>Mabuhay</option>
                          <option>Mailag</option>
                          <option>Mt. Nebo</option>
                          <option>Nabag-o</option>
                          <option>Pinatilan</option>
                          <option>Poblacion</option>
                          <option>San Carlos</option>
                          <option>San Isidro</option>
                          <option>Sinabuagan</option>
                          <option>Sugod</option>
                          <option>Tongan Tongan</option>
                          <option>Tugaya</option>
                          <option>Vintar</option>
                 
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>    
                      </div>
                    </div>
                  
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                       Municipality
                        </label>
                        <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Valencia">
                      </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                         Province
                        </label>
                        <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Bukidnon">
                      </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                         Region
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Region X">
                      </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          Postal Code
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="8709">
                      </div>
                    </div>
                  </div> --}}
 -->



         <!-- {{-- <start for contact details>          --}} -->

                  <!-- {{-- <hr class="mt-6 border-b-1 border-blueGray-300">
          
                  <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                    Contact Detials
                  </h6>
                  <div class="flex flex-wrap">
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                   Landline No.
                      </label>
                      <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="088">
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                     Mobile No. / Cellphone No.
                      </label>
                      <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="099-">
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                      Email Address
                      </label>
                      <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Email Address">
                    </div>
                  </div>
                 
                </div> --}}
 -->


            
                 <!-- {{-- <start of sakit--}} -->

                 <!-- {{-- <hr class="border-b-1 border-blueGray-300">
          
                 <h6 class="text-blueGray-400 text-sm mt-3 mb-3 font-bold uppercase">
                  CAUSE OF DESEASE
                 </h6>
                 <div class="flex flex-wrap">
               
                
                    </div> 
                                             
                <ul class= "shadow-lg rounded-lg bg-blueGray-100 border-0   items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="  flex items-center pl-3">
                            <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Congenital /Inborn</label>
                        </div>
                    </li>


                    start

                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="react-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Austim</label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="angular-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">ADHD</label>
                        </div>
                    </li>
                    <li class="w-full dark:border-gray-600">
                        <div class="flex items-center pl-3">
                            <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cerebral Palsy</label>
                        </div>
                    </li>
                
                    <li class="w-full dark:border-gray-600">
                      <div class="flex items-center pl-3">
                          <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Down Syndrome</label>
                      </div>
                  </li>
                </ul>
                
                
                <ul class="   shadow-lg rounded-lg bg-blueGray-100 border-0  items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                  <li class=" w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                      <div class=" flex items-center pl-3">
                          <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Acquired</label>
                      </div>
                  </li>
                  <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                      <div class="flex items-center pl-3">
                          <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="react-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Chronic Illness</label>
                      </div>
                  </li>
                  <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                      <div class="flex items-center pl-3">
                          <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                          <label for="angular-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Injury</label>
                      </div>
                  </li>
                  <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                    <div class="flex items-center pl-3">
                        <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                        <label for="angular-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Other</label>
                    </div>
                </li>
                </ul> --}}
                          
                
                
                
                
                
                {{-- end cause of sakit --}}
                               -->



<!-- 
                {{-- start of cause --}} -->

                <!-- {{-- <hr class="mt-6 border-b-1 border-blueGray-300">
          
                <h6 class="text-blueGray-400 text-sm mt-3 mb-3 font-bold uppercase">
                 Types OF DESEASE
                </h6>
                <div class="flex flex-wrap">
              
               
                   </div> 
                                            
                   <h3 class=" flex mb-4 font-semibold text-gray-900 dark:text-white px-2"></h3>
                             
                   <ul class= "  shadow-lg rounded-lg bg-blueGray-100 border-0  items-center w-full text-sm font-medium text-gray-900 
                    border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                     <li class="  w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                         <div class="  flex items-center pl-3">
                             <input id="vue-checkbox-list" type="checkbox" value="" class=" w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                             <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deaf or Hard of Hearing</label>
                         </div>
                     </li>
                     <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                         <div class="flex items-center pl-3">
                             <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                             <label for="react-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Intellectual Disability</label>
                         </div>
                     </li>
                     <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                         <div class="flex items-center pl-3">
                             <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                             <label for="angular-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Learning Disability</label>
                         </div>
                     </li>
                     <li class="w-full dark:border-gray-600">
                         <div class="flex items-center pl-3">
                             <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                             <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mental Disability</label>
                         </div>
                     </li>
                 
                     <li class="w-full dark:border-gray-600">
                       <div class="flex items-center pl-3">
                           <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                           <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Physical Disability (Orthopedic)</label>
                       </div>
                   </li>
                 </ul>
                 
                 <ul class="  shadow-lg rounded-lg bg-blueGray-100 border-0  items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                   <li class="  w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                       <div class=" flex items-center pl-3">
                           <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                           <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Psychosocial Disability</label>
                       </div>
                   </li>
                   <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                       <div class="flex items-center pl-3">
                           <input id="react-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                           <label for="react-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Speech and Language Impairment</label>
                       </div>
                   </li>
                   <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                       <div class="flex items-center pl-3">
                           <input id="angular-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                           <label for="angular-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Visual Disability</label>
                       </div>
                   </li>
                   <li class="w-full dark:border-gray-600">
                       <div class="flex items-center pl-3">
                           <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                           <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Cancer (RA11215)</label>
                       </div>
                   </li>
                 
                   <li class="w-full dark:border-gray-600">
                     <div class="flex items-center pl-3">
                         <input id="laravel-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                         <label for="laravel-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Rare Disease (RA10747)</label>
                     </div>
                 </li>
                 
                 </ul>
                             --}}
             
                {{-- end of cause --}}
                 -->

              <!-- {{-- <hr class="mt-6 border-b-1 border-blueGray-300">
          
              <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                SChOOL AND EMPLOYMENT INFORMATION
              </h6>
              <div class="flex flex-wrap">
    
                <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Educational Attainment
                    </label>
                    <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                      <option>None</option>
                      <option>Kindergarten</option>
                      <option>Elementary</option>
                      <option>Junior High School</option>
                      <option>Senior High School</option>
                       <option>College</option>
                      <option>Vocational</option>
                      <option>Post Graduate</option>
                      
               
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>    
                  </div>
                </div>
              
            
                <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                 Status of Employment
                    </label>
                    <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                      <option>Employed</option>
                      <option>Unemployed</option>
                      <option>Self-employed</option>
                     
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>    
                  </div>
                </div>
              
                <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
               Types of Employment
                    </label>
                    <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                      <option>Permanent</option>
                      <option>Seasonal</option>
                      <option>Casual</option>
                      <option>Emergency</option>
                     >
                  
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>    
                  </div>
                </div>
                 --}}

{{-- 
                 <start for Employment> --}}

                {{-- <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                   Category of Employment
                    </label>
                    <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                      <option>Government</option>
                      <option>Private</option>
                     
                  
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>    
                  </div>
                </div>
                
                <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                   Occupation
                    </label>
                    <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                      <option>Manager</option>
                      <option>Proffessionals</option>
                      <option>Technicians and Associate Proffessionals</option>
                      <option>Clerical Support Workers</option>
                      <option>Skilled Agricultural, Forestry and Fishery Workers </option>
                      <option> Craft and Related Trade Workers</option>
                      <option>Plant and Machine Operators and Assemblers</option>
                       <option>Elementary Occupation</option>
                       <option>Armed Forces Occupations</option>
                       <option></option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                      <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>    
                  </div>
                </div>
              </div> --}}



{{--  
                <hr class="mt-6 border-b-1 border-blueGray-300">
          
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
             Organizational Information
                </h6>

                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                 
                     </h6>
                     <div class="flex flex-wrap">
                     <div class="w-full lg:w-12/12 px-4">
                       <div class="relative w-full mb-3">
                         <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          Organizational Affliated
                         </label>
                         <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Organizational Affliated Name">
                       </div>
                     </div>
                <div class="flex flex-wrap">
                <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
             Contact Person
                    </label>
                    <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Mobile">
                  </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
              Office Address
                    </label>
                    <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Celphone">
                  </div>
                </div>
                <div class="w-full lg:w-4/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
               Telephone No.
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Email">
                  </div>
                </div> 
              </div>       
            </div>
                    
              
                 
          
                  <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase">
                 Id Reference
                  </h6>
                  <div class="flex flex-wrap">
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                     SSS No.
                      </label>
                      <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Mobile">
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                  GSIS No.
                      </label>
                      <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Celphone">
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    PAG-IBIG No.
                      </label>
                      <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Email">
                    </div>
                  </div>
                 
                </div> --}}
        
                {{-- <hr class="mt-6 border-b-1 border-blueGray-300">
          
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase text-center">
               family background
                    </h6>
                    <p class="text-left font-italic mb-5">Father's Name</p>

                    <div class="flex flex-wrap">  
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                           Last Name
                          </label>
                          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Lucky">
                        </div>
                      </div>
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                           First Name
                          </label>
                          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                        </div>
                      </div>
                
  
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        Middle Name
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                      </div>
                    </div>
                
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3 ">
                        <div class="relative">
                          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                           Suffix
                            </label>
                          <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option>Sr</option>
                            <option>Jr</option>
                            <option>I</option>
                            <option>II</option>
                            <option>III</option>
                            <option>IV</option>
                            <option>VI</option>
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>    
                        </div>
                      </div>
                    </div>
  
                      
                             <p class="text-left font-italic mb-5">Mother's Name</p>
         
                             <hr class="mt-6 border-b-1 border-blueGray-300">
          
                 
                  <div class="flex flex-wrap">
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                   Last Name
                      </label>
                      <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Mobile">
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                  First Name
                      </label>
                      <input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Celphone">
                    </div>
                  </div>
                  <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                 Middle Name
                      </label>
                      <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Email">
                    </div>
                  </div>              
                </div>
         --}}
                 
                {{-- <hr class="mt-6 border-b-1 border-blueGray-300">
          
                <p class="text-left font-italic mb-5">Guardian</p>
                
                <div class="flex flex-wrap">  
                  <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                       Last Name
                      </label>
                      <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Lucky">
                    </div>
                  </div>
                  <div class="w-full lg:w-6/12 px-4">
                    <div class="relative w-full mb-3">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                       First Name
                      </label>
                      <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                    </div>
                  </div>
            

                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                    Middle Name
                    </label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                  </div>
                </div>
            
                <div class="w-full lg:w-6/12 px-4">
                  <div class="relative w-full mb-3 ">
                    <div class="relative">
                      <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                       Suffix
                        </label>
                      <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                        <option>None</option>
                        <option>Sr</option>
                        <option>Jr</option>
                        <option>I</option>
                        <option>II</option>
                        <option>III</option>
                        <option>IV</option>
                        <option>VI</option>
                      </select>
                      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                      </div>    
                    </div>
                  </div>
                </div>
              </div>
            

                <hr class="mt-6 border-b-1 border-blueGray-300">
          
                <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase text-center">
               ACCOMPLISHED By
                    </h6>
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3 ">
                        <div class="relative">
                          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                          
                            </label>
                          <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option>Applicant</option>
                            <option>Guardian</option>
                            <option>Representative</option>
                            
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>    
                        </div>
                      </div>
                    </div>
                    <div class="flex flex-wrap">  
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                           Last Name
                          </label>
                          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Lucky">
                        </div>
                      </div>
                      <div class="w-full lg:w-6/12 px-4">
                        <div class="relative w-full mb-3">
                          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                           First Name
                          </label>
                          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                        </div>
                      </div>
                
  
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                        Middle Name
                        </label>
                        <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                      </div>
                    </div>
                
                    <div class="w-full lg:w-6/12 px-4">
                      <div class="relative w-full mb-3 ">
                        <div class="relative">
                          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                           Suffix
                            </label>
                          <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option>None</option>
                            <option>Sr</option>
                            <option>Jr</option>
                            <option>I</option>
                            <option>II</option>
                            <option>III</option>
                            <option>IV</option>
                            <option>VI</option>
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>    
                        </div>
                      </div>
                    </div>
                  </div>
              
                 
       
                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase text-center">
                name of CERTIFYING PHYSICIAN
                        </h6>
                       

                        <div class="flex flex-wrap">  
                          <div class="w-full lg:w-12/12 px-4">
                            <div class="relative w-full mb-3">
                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            License No.
                              </label>
                              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Lucky">
                            </div>
                          </div>

                        <div class="flex flex-wrap">  
                          <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                               Last Name
                              </label>
                              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Lucky">
                            </div>
                          </div>
                          <div class="w-full lg:w-6/12 px-4">
                            <div class="relative w-full mb-3">
                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                               First Name
                              </label>
                              <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                            </div>
                          </div>
                    
      
                        <div class="w-full lg:w-6/12 px-4">
                          <div class="relative w-full mb-3">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                            Middle Name
                            </label>
                            <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="Jesse">
                          </div>
                        </div>
                    
                        <div class="w-full lg:w-6/12 px-4">
                          <div class="relative w-full mb-3 ">
                            <div class="relative">
                              <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                               Suffix
                                </label>
                              <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                <option>None</option>
                                <option>Sr</option>
                                <option>Jr</option>
                                <option>I</option>
                                <option>II</option>
                                <option>III</option>
                                <option>IV</option>
                                <option>VI</option>
                              </select>
                              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                              </div>    
                            </div>
                          </div>
                        </div>
      
              
  

  {{-- @include('partials.footer') --}}

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

 </div> -->
 
<!-- START -->
<div class="carousel">
            <div class="carousel-content">
                      <div class="slide relative border border-gray-200 rounded-lg bg-white mt-5 "id="slide6">
                            <!-- <img src="slide1.jpg" alt="Slide 1"> -->
                            <h6 class="text-blueGray-400 text-xl mt-3 mb-6 font-bold uppercase ml-5 "> APPROVING OFFICER  </h6>                                      

                             <hr class="border-1 border-stone-200 hover:border-green-500 drop-shadow-xl"/>              
                         
                             <div class="flex flex-wrap mt-5">

                                                                                                          
       
                             <div class="w-full lg:w-12/12 px-4 mt-7 font- uppercase text-sm">          
                                NAME OF CERTIFYING PHYSICIAN
                              <hr class="border-1 border-stone-200 hover:border-green-500 drop-shadow-xl mt-7"/>                    
                           </div>    

  



                     <div class="w-full lg:w-2/12 px-4 mt-5">
                           <div class="relative w-full mb-3 ">
                              <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                             <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Licensed No.</label>
                        </div>
                     </div>




                 <div class="w-full lg:w-3/12 px-4 mt-5">
                   <div class="relative w-full mb-3 ">
                     <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                    <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Last name</label>
                 </div>
              </div>

              <div class="w-full lg:w-3/12 px-4 mt-5">
                <div class="relative w-full mb-3 ">
                  <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                 <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First name</label>
             </div>
          </div>

                <div class="w-full lg:w-2/12 px-4 mt-5">
                  <div class="relative w-full mb-3 ">
                    <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                     <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Middle name</label>
                 </div>
               </div>

              <div class="w-full lg:w-2/12 px-4 mt-5">
                  <div class="relative w-full mb-5">

                   <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                     <option>Jr.</option>
                     <option>Sr.</option>
                     <option>I</option>
                     <option>II</option>
                     <option>III</option>
                    <option>IV</option>
                    <option>V</option>


               </select>
              <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
</div>    
</div>
</div> 
</div>                
        
                    
      
                                                                                                          
                    <div class="w-full lg:w-6/12 px-4">
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font- uppercase">
             PROCESSING OFFICER
           </div>     
           <hr class="mt-6 border-b-5 border-blueGray300">

             <div class="flex flex-wrap">
                                                                                                                                                                                     
            <div class="w-full lg:w-3/12 px-4">
              <div class="relative w-full mb-3 mt-7">
                 <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Last name</label>
               </div>
            </div>
                                                    
          <div class="w-full lg:w-3/12 px-4">
          <div class="relative w-full mb-3 mt-7 ">
               <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
               <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First name</label>
              </div>
             </div>
                                                    
         <div class="w-full lg:w-3/12 px-4">
         <div class="relative w-full mb-3 mt-7 ">
              <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
             <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Middle name</label>
           </div>
         </div>
                                                    
        <div class="w-full lg:w-3/12 px-4">
        <div class="relative w-full mb-5 mt-7">
                                                    
         <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                      <option>Jr.</option>
                      <option>Sr.</option>
                      <option>I</option>
                      <option>II</option>
                      <option>III</option>
                      <option>IV</option>
                      <option>V</option>
                                                    
                                                    
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                           <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                       </div>    
                      </div>
                     </div> 
                    </div>
                                  




                                                                                                          
                    <div class="w-full lg:w-6/12 px-4">
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font- uppercase">
             APPROVING OFFICER
           </div>     
           <hr class="mt-6 border-b-5 border-blueGray300">

             <div class="flex flex-wrap">
                                                                                                                                                                                     
            <div class="w-full lg:w-3/12 px-4">
              <div class="relative w-full mb-3 mt-7">
                 <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Last name</label>
               </div>
            </div>
                                                    
          <div class="w-full lg:w-3/12 px-4">
          <div class="relative w-full mb-3 mt-7 ">
               <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
               <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First name</label>
              </div>
             </div>
                                                    
         <div class="w-full lg:w-3/12 px-4">
         <div class="relative w-full mb-3 mt-7 ">
              <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
             <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Middle name</label>
           </div>
         </div>
                                                    
        <div class="w-full lg:w-3/12 px-4">
        <div class="relative w-full mb-5 mt-7">
                                                    
         <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                      <option>Jr.</option>
                      <option>Sr.</option>
                      <option>I</option>
                      <option>II</option>
                      <option>III</option>
                      <option>IV</option>
                      <option>V</option>
                                                    
                                                    
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                           <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                       </div>    
                      </div>
                     </div> 
                    </div>
                                  


                                                      
             </div>
<!-- END -->