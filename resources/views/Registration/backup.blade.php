
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
                   <button class="carousel-button " onclick="previousSlide()">Back</button>
                   <button class="carousel-button" onclick="showSlide(0)">Member Information</button>
                   <button class="carousel-button" onclick="showSlide(1)">Residence And Employment Information</button>
                   <button class="carousel-button" onclick="showSlide(2)">Family Background And ID References</button>
                   <button class="carousel-button" onclick="showSlide(3)">Types of Disability And Cause of Disability</button>
                   <button class="carousel-button" onclick="showSlide(4)">Organization  And Accomplished By</button>
                   <button class="carousel-button" onclick="showSlide(5)">Approving Officers</button>
                   <button class="carousel-button" onclick="showSlide(6)">Approving Sections</button>
                   <button class="carousel-button" onclick="nextSlide()">Next</button>
                <li>
            </ol>
        </nav>
    </div>

     <br>
        
     <!-- <div class="float-right">

            <button class="  space-x-px space-x-36 mb-3  bg-blue-500 text-white active:bg-green-900 text-xs px-2 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
              Save
            </button>
            <button class="  space-x-36 mb-3  bg-blue-500 text-white active:bg-red-600 text-xs px-2 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
               Update
            </button>    
            </div>        
         </div> -->

        <!-- <start of content> -->
      
    <form action ="/"  method="POST" class=" w-full flex flex-col space-y-4 text-gray-70  bg-white-100 mt-10">
       @csrf
  
             <start for personal information>
                     <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>

                      <script src="https://cdn.jsdelivr.net/gh/alpine-collective/alpine-magic-helpers@0.3.x/dist/index.js"></script>


                        <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 ml-2 sm:col-span-4 md:mr-3">
                            <!-- Photo File Input  -->
                            <input type="file" class="hidden" x-ref="photo" x-on:change="
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
 

            <head>
                   <meta charset="UTF-8">
                   <meta name="viewport" content="width=device-width, initial-scale=1.0">
                   <meta http-equiv="X-UA-Compatible" content="ie=edge">
                   <script src="https://cdn.tailwindcss.com"></script>
                   <title></title>


                       <style>

                          .carousel {
                                      position: relative;
                                      max-width: 800px;
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

            </head>

    <!-- Implement the carousel -->                   
<div class="carousel">
            <div class="carousel-content">
                      <div class="slide relative border border-gray-200 rounded-lg bg-white mt-5 "id="slide1">
                            <!-- <img src="slide1.jpg" alt="Slide 1"> -->
                            <h6 class="text-blueGray-400 text-xl mt-3 mb-6 font-bold uppercase ml-5 ">  Member  Information   </h6>                                      

                             <hr class="border-1 border-stone-200 hover:border-green-500 drop-shadow-xl"/>              
                         
                             <div class="flex flex-wrap mt-5">
                                       <div class="w-full lg:w-4/12 px-4">
                                          <div class="relative w-full mb-3 mt-7">
                                            <input autocomplete="off"  name="pwd_no" type="integer" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="pwd_no" />
                                           <label for="pwd_no" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Pwd No.</label>
                                        </div>
                                      </div>

                                    <div class="w-full lg:w-4/12 px-4">
                                      <div class="relative w-full mb-3 mt-7">
                                            <input autocomplete="off"  name="date_applied" type="date" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="date_applied" />
                                            <label for="date_applied" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Date Applied</label>
                                        </div>
                                      </div>

                                 
                                  <div class="w-full lg:w-4/12 px-4">
                                       <div class="relative w-full mb-3 mt-7">
                                          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"></label>
        
                                              <select name="application" class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                                        <option value="" {{old('application') == "" ? 'selected' : ''}}>Select Application</option>
                                                        <option value="New" {{old('application') == "New" ? 'selected' : ''}}>New</option>
                                                        <option value="Renewal" {{old('application') == "Renewal" ? 'selected' : ''}}>Renewal</option>
                                                        <option value="Transfer" {{old('application') == "Transfer" ? 'selected' : ''}}>Transfer</option>               
                                              </select>
                                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                         <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                      </div>    
                                   </div>
                                 </div>
       
                               <div class="w-full lg:w-4/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                              <input autocomplete="off"  name="last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="last_name." />
                                              <label for="last_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Last Name</label>
                                            </div>
                                           </div>
                          
                              <div class="w-full lg:w-4/12 px-4">
                                     <div class="relative w-full mb-3 mt-5">
                                             <input autocomplete="off" name="first_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="first_name" />
                                             <label for="first_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First Name</label>
                                        </div>
                                       </div>
                    
                              <div class="w-full lg:w-4/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="middle_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="middle_name" />
                                           <label for="middle_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Middle Name</label>
                                    </div>
                                 </div>


                                 <div class="w-full lg:w-4/12 px-4">
           <div class="relative w-full mb-3 mt-7">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"> </label>                                        
                <select  name="suffix_of_applicant"    class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                   <option value="" {{old('suffix_of_applicant') == "" ?        'selected' : ''}}>Select Suffix</option>
                   <option value="Jr." {{old('suffix_of_applicant') == "Jr." ? 'selected' : ''}}>Jr.</option>
                   <option value="Sr."  {{old('suffix_of_applicant') == "Sr." ? 'selected' : ''}}>Sr.</option>
                   <option value="I"   {{old('suffix_of_applicant') == "I" ?   'selected' : ''}}>I</option>
                   <option value="II"  {{old('suffix_of_applicant') == "II" ?  'selected' : ''}}>II</option>
                    <option value="III" {{old('suffix_of_applicant') == "III" ? 'selected' : ''}}>III</option>
                    <option value="IV"  {{old('suffix_of_applicant') == "IV" ?  'selected' : ''}}>IV</option>
                    <option value="V"   {{old('suffix_of_applicant') ==  "V" ?   'selected' :''}}>V</option>           
                   </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                       <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>    
                 </div>
               </div>

       <div class="w-full lg:w-4/12 px-4">
              <div class="relative w-full mb-3 mt-7">
                   <input autocomplete="off"  name="birthday" type="date" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" />
                     <label for="birthday" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Birthday</label>
                  </div>
               </div>
                  
         <div class="w-full lg:w-4/12 px-4">
              <div class="relative w-50 mt-7">
                   <input type="text" name="age" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"  placeholder="Age">
                 </div>
              </div>
          
          
       
       <div class="w-full lg:w-4/12 px-4">
            <div class="relative w-full mb-3 mt-7">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                         
                          </label>
                           <select name="gender" class="focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                           <option value="" {{old('gender') == "" ?        'selected' : ''}}>Select Gender</option>
                           <option value="Jr." {{old('gender') == "Male" ? 'selected' : ''}}>Male</option>
                           <option value="Sr."  {{old('gender') == "Female" ? 'selected' : ''}}>Female</option>
                         
                             </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>    
                      </div>
                    </div>



         <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3 mt-7">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"> </label>          
                     <select  name="status"class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                         <option value="" {{old('status') == "" ?        'selected' : ''}}>Select Status</option>
                         <option value="Single" {{old('status') == "Single" ? 'selected' : ''}}>Single</option>
                         <option value="Separated"  {{old('status') == "Separated" ? 'selected' : ''}}>Separated</option>
                         <option value="Cohabotation / (live-in)" {{old('status') == "Cohabotation/(live-in)" ? 'selected' : ''}}>Cohabotation / (live-in)</option>
                         <option value="Married"  {{old('status') == "Married" ? 'selected' : ''}}>Married</option>
                         <option value="Widow/er"  {{old('status') == "Widow/er" ? 'selected' : ''}}>Widow / er</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>    
                     </div>
                   </div>

                   <div class="w-full lg:w-4/12 px-4">
                                      <div class="relative w-full mb-3 mt-7">
                                           <input autocomplete="off" name="email_add"   id="email_add" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="email_add" />
                                           <label for="email_add" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Email_Addres</label>
                                   </div>
                              </div>
                           </div>   
                        </div>

<!-- end1 -->
<!-- 
start 2-->
<div class="carousel">
            <div class="carousel-content">
                      <div class="slide relative border border-gray-200 rounded-lg bg-white mt-5 "id="slide2">
                            <!-- <img src="slide1.jpg" alt="Slide 1"> -->
                            <h6 class="text-blueGray-400 text-xl mt-3 mb-6 font-bold uppercase ml-5 ">  RESIDENCE AND EMPLOYMENT INFORMATION </h6>                                      

                             <hr class="border-1 border-stone-200 hover:border-green-500 drop-shadow-xl"/>              
                         
                             <div class="flex flex-wrap mt-5">
                                       <div class="w-full lg:w-4/12 px-4">
                                          <div class="relative w-full mb-3 mt-7">
                                            <input autocomplete="off"  name="house_and_street" id="house_and_street" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="house_and_street" />
                                           <label for="house_and_street" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">House No. and Street</label>
                                        </div>
                                      </div>

                            <div class="w-full lg:w-4/12 px-4">
                                      <div class="relative w-full mb-3 mt-7">
                                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"> </label>
            
                        <select  name="purok" class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                      <option value="" {{old('purok') == "" ?        'selected' : ''}}>Select Purok</option>
                       
                      </select>
                      <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                      </div>    
                    </div>
                  </div>

                                 
           <div class="w-full lg:w-4/12 px-4">
                <div class="relative w-full mb-3 mt-7">
                         <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"></label>
        
                        <select name="barangay" class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                         <option value="" {{old('purok') == "" ?        'selected' : ''}}>Select Barangay</option>
                        >                                                                  
                                              </select>
                                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                         <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                      </div>    
                                   </div>
                                 </div>
       
              <div class="w-full lg:w-4/12 px-4">
                     <div class="relative w-full mb-3 mt-5">
                                            <input autocomplete="off"  name="municipality" id="municipality" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="municipality" />
                                             <label for="municipality" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Municipality</label>
                                            </div>
                                           </div>
                          
                              <div class="w-full lg:w-4/12 px-4">
                                     <div class="relative w-full mb-3 mt-5">
                                             <input autocomplete="off" name="province" id="province" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="province" />
                                             <label for="province" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Province</label>
                                        </div>
                                       </div>
                    
                              <div class="w-full lg:w-4/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="region" id="region" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="region" />
                                           <label for="region" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Region</label>
                                    </div>
                                 </div>


                                 <div class="w-full lg:w-4/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                              <input autocomplete="off"  name="landline" id="landline" type="integer" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="landline" />
                                              <label for="landline" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Landline_No</label>
                                            </div>
                                           </div>
                          
                              <div class="w-full lg:w-4/12 px-4">
                                     <div class="relative w-full mb-3 mt-5">
                                             <input autocomplete="off" name="mobile_no" id="mobile_no" type="integer" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="mobile_no" />
                                             <label for="mobile_no" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Mobile_No</label>
                                        </div>
                                   </div>


                                   <div class="w-full lg:w-4/12 px-4">
                                     <div class="relative w-full mb-3 mt-5">
                                           <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"></label>      
                                              <select name="educational_attain" class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                              <option value="">Educational Attainment</option>      
                                              @foreach($attainments as $attainment)
                                                <option value="{{ $attainment->attainment }}">{{ $attainment->attainment }}</option>       
                                              @endforeach()
                                              </select>
                                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                         <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                      </div>    
                                   </div>
                                 </div> 

                         
               <div class="flex flex-wrap mt-5  w-full">

                                <div class="w-full lg:w-4/12 px-4">
                                     <div class="relative w-full mb-3 mt-5">
                                           <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"></label>      
                                              <select name="educational_attain" class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                              <option value="">Status of Employment</option>      
                                              @foreach($attainments as $attainment)
                                                <option value="{{ $attainment->attainment }}">{{ $attainment->attainment }}</option>       
                                              @endforeach()
                                              </select>
                                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                         <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                      </div>    
                                   </div>
                                 </div> 

                                 <div class="w-full lg:w-4/12 px-4">
                                     <div class="relative w-full mb-3 mt-5">
                                           <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"></label>      
                                              <select name="educational_attain" class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                              <option value="">Category of Employment</option>      
                                              @foreach($attainments as $attainment)
                                                <option value="{{ $attainment->attainment }}">{{ $attainment->attainment }}</option>       
                                              @endforeach()
                                              </select>
                                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                         <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                      </div>    
                                   </div>
                                 </div> 


                                 
                                 <div class="w-full lg:w-4/12 px-4">
                                     <div class="relative w-full mb-3 mt-5">
                                           <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"></label>      
                                              <select name="educational_attain" class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                              <option value="">Types of Employment</option>      
                                              @foreach($attainments as $attainment)
                                                <option value="{{ $attainment->attainment }}">{{ $attainment->attainment }}</option>       
                                              @endforeach()
                                              </select>
                                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                         <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                               </div>    
                        </div>
                 </div>                                
         </div>
    </div>
</div>
<!-- end 2-->

  <!-- start3-->
  <div class="carousel">
            <div class="carousel-content">
                      <div class="slide relative border border-gray-200 rounded-lg bg-white mt-5 "id="slide3">
                            <!-- <img src="slide1.jpg" alt="Slide 1"> -->
                            <h6 class="text-blueGray-400 text-xl mt-3 mb-6 font-bold uppercase ml-5 ">Family Background  And ID References </h6>                                      

                             <hr class="border-1 border-stone-200 hover:border-green-500 drop-shadow-xl"/>              
                         
                             <div class="flex flex-wrap mt-5">
                                       <div class="w-full lg:w-3/12 px-4">
                                          <div class="relative w-full mb-3 mt-7">
                                            <input autocomplete="off"  name="father_last_name" id="father_last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="father_last_name" />
                                           <label for="father_last_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Father last name</label>
                                        </div>
                                      </div>

                                    <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-7">
                                            <input autocomplete="off"  name="father_first_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="father_first_name" />
                                            <label for="father_first_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Father first name</label>
                                        </div>
                                      </div>

                                 
                                      <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-7">
                                            <input autocomplete="off"  name="father_middle_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="father_middle_name" />
                                            <label for="father_middle_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Father middle name</label>
                                        </div>
                                      </div>



                                     <div class="w-full lg:w-3/12 px-4">
                                         <div class="relative w-full mb-3 mt-7">
                                          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"></label>
        
                                              <select name="suffix_of_father" class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                                        <option value="" {{old('application') == "" ? 'selected' : ''}}>Suffix</option>
                                                        <option value="New" {{old('application') == "New" ? 'selected' : ''}}>New</option>
                                                        <option value="Renewal" {{old('application') == "Renewal" ? 'selected' : ''}}>Renewal</option>
                                                        <option value="Transfer" {{old('application') == "Transfer" ? 'selected' : ''}}>Transfer</option>               
                                              </select>
                                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                         <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                                      </div>    
                                   </div>
                                 </div>
       
                               <div class="w-full lg:w-4/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                              <input autocomplete="off"  name="mother_last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="mother_last_name" />
                                              <label for="mother_last_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Mother last name</label>
                                            </div>
                                           </div>
                          
                              <div class="w-full lg:w-4/12 px-4">
                                     <div class="relative w-full mb-3 mt-5">
                                             <input autocomplete="off" name="first_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="first_name" />
                                             <label for="first_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Mother first Name</label>
                                        </div>
                                       </div>
                    
                              <div class="w-full lg:w-4/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="middle_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="middle_name" />
                                           <label for="middle_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Mother middle Name</label>
                                    </div>
                                 </div>



                                 <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="guardian_last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="guardian_last_name" />
                                           <label for="guardian_last_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Guardian last name</label>
                                    </div>
                                 </div>

     

                                 <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="guardian_first_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="guardian_first_name" />
                                           <label for="guardian_first_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Guardian first name</label>
                                    </div>
                                 </div>



                                
                                 <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="guardian_middle_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="guardian_first_name" />
                                           <label for="guardian_first_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Guardian first name</label>
                                    </div>
                                 </div>

                         <div class="w-full lg:w-3/12 px-4">
                        <div class="relative w-full mb-3 mt-7">
                            <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"> </label>                                        
                            <select  name="suffix_of_applicant"    class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                                <option value="" {{old('suffix_of_applicant') == "" ?        'selected' : ''}}>Suffix</option>
                                <option value="Jr." {{old('suffix_of_applicant') == "Jr." ? 'selected' : ''}}>Jr.</option>
                                <option value="Sr."  {{old('suffix_of_applicant') == "Sr." ? 'selected' : ''}}>Sr.</option>
                                <option value="I"   {{old('suffix_of_applicant') == "I" ?   'selected' : ''}}>I</option>
                                <option value="II"  {{old('suffix_of_applicant') == "II" ?  'selected' : ''}}>II</option>
                                <option value="III" {{old('suffix_of_applicant') == "III" ? 'selected' : ''}}>III</option>
                                <option value="IV"  {{old('suffix_of_applicant') == "IV" ?  'selected' : ''}}>IV</option>
                                <option value="V"   {{old('suffix_of_applicant') ==  "V" ?   'selected' :''}}>V</option>           
                            </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                       <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>    
                 </div>
               </div>

       
            
                   <div class="w-full lg:w-4/12 px-4">
                       <div class="relative w-full mb-3 mt-7">
                            <input autocomplete="off" name="email_add"   id="email_add" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="email_add" />
                               <label for="email_add" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">SSS No.</label>
                          </div>
                       </div>
       
     
                       <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                            <input autocomplete="off" name="email_add"   id="email_add" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="email_add" />
                               <label for="email_add" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">GSIS No.</label>
                          </div>
                       </div>
       
     
                       <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                            <input autocomplete="off" name="email_add"   id="email_add" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="email_add" />
                               <label for="email_add" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">PAG-IBIG No.</label>
                          </div>
                       </div>
       
                       <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                            <input autocomplete="off" name="email_add"   id="email_add" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="email_add" />
                               <label for="email_add" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">PSN No.</label>
                          </div>
                       </div>
       
                       <div class="w-full lg:w-4/12 px-4">
                    <div class="relative w-full mb-3 mt-7">
                            <input autocomplete="off" name="email_add"   id="email_add" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="email_add" />
                               <label for="email_add" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">PHILHEALTH No.</label>
                          </div>
                       </div>
       

               

                       <div class="w-full lg:w-4/12 px-4">
                        <div class="relative w-full mb-3 mt-7">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"> </label>                                        
                <select  name="occupations"    class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                   <option value="" {{old('suffix_of_applicant') == "" ?        'selected' : ''}}>Occupations</option>
                        
                   </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                       <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                 </div>    
             </div>
         </div>
    </div>
</div>  

<!-- end3 -->

    <!-- start4 -->

    <div class="carousel">
            <div class="carousel-content">
                      <div class="slide relative border border-gray-200 rounded-lg bg-white mt-5 "id="slide4">
                            <!-- <img src="slide1.jpg" alt="Slide 1"> -->
                            <h6 class="text-blueGray-400 text-xl mt-3 mb-6 font-bold uppercase ml-5 ">Types of Disablity  </h6>                                      

                             <hr class="border-1 border-stone-200 hover:border-green-500 drop-shadow-xl"/>              
                         
                             <form method="" action="" enctype="">      

<ul class= "  shadow-lg  bg-blueGray-100 border-0  items-center w-full text-sm font-medium text-gray-900 
       border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">    
 <li class="  w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
       <div class="  flex items-center pl-3">
             <input id="vue-checkbox-list" type="checkbox" value="" class=" w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                   <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Deaf or Hard of Hearing</label>
                    </div>
                   </li>
                 

                   <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                     <div class="flex items-center pl-3">
                         <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                         <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Intellectual Disability</label>
                     </div>
                 </li>
                 <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                     <div class="flex items-center pl-3">
                         <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                         <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Learning Disability</label>
                     </div>
                 </li>
               
          
                 <li class="w-full dark:border-gray-600">
                   <div class="flex items-center pl-3">
                       <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                       <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Mental Disability</label>
                   </div>
               </li>
           
               <li class="w-full dark:border-gray-600">
                 <div class="flex items-center pl-3">
                     <input id="vue-checkbox-list" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                     <label for="vue-checkbox-list" class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Physical Disability (Orthopedic)</label>
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
         <div class="form-group text-center">
             <button type="submit" class="btn btn-success btn-sm">Save</button>
         </div>




         <h6 class="text-blueGray-400 text-xl mt-3 mb-6 font-bold uppercase ml-5 ">CAUSE OF DISABILITY </h6>   
                      </h6>

             <hr class="border-1 border-stone-200 hover:border-green-500 drop-shadow-xl mt-5"/> 

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
          
          
       </div>
   </div>
</form> 
                                             
<!-- end 4-->


<!-- start 5 -->
<div class="carousel">
            <div class="carousel-content">
                      <div class="slide relative border border-gray-200 rounded-lg bg-white mt-5 "id="slide5">
                            <!-- <img src="slide1.jpg" alt="Slide 1"> -->
                            <h6 class="text-blueGray-400 text-xl mt-3 mb-6 font-bold uppercase ml-5 "> ORGANIZATION AND ACCOMPLISHED BY   </h6>                                      

                             <hr class="border-1 border-stone-200 hover:border-green-500 drop-shadow-xl"/>              
                         
                             <div class="flex flex-wrap mt-5">
                                       <div class="w-full lg:w-3/12 px-4">
                                          <div class="relative w-full mb-3 mt-7">
                                            <input autocomplete="off"  name="last_name" id="last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="last_name_" />
                                           <label for="last_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Organization Affiliated</label>
                                        </div>
                                      </div>

                                    <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-7">
                                            <input autocomplete="off"  name="contact_person"  id="contact_person" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="contact_person" />
                                            <label for="contact_person" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Contact  Person</label>
                                        </div>
                                      </div>

                     
                                      <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-7">
                                            <input autocomplete="off"  name="office_address"  id="office_address" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="office_address" />
                                            <label for="office_address" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Office Address</label>
                                        </div>
                                      </div>

                                      <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-7">
                                            <input autocomplete="off"  name="tel_no"  id="office_address" type="integer" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="tel_no" />
                                            <label for="tel_no" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Tel No</label>
                                        </div>
                                      </div>

                              <div class="w-full lg:w-3/12 px-4">
                                     <div class="relative w-full mb-3 mt-5">
                                             <input autocomplete="off" name="first_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="last_name" />
                                             <label for="first_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Applicant Last name</label>
                                        </div>
                                       </div>
                    
                              <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="first_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="first_name" />
                                           <label for="first_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Applicant First Name</label>
                                    </div>
                                 </div>



                                 <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="middle_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="middle_name" />
                                           <label for="middle_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Appli Middle Name</label>
                                    </div>
                                 </div>


                   <div class="w-full lg:w-3/12 px-4">
                      <div class="relative w-full mb-3 mt-5">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password"> </label>                                        
                <select  name="suffix_of_applicant"    class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                   <option value="" {{old('suffix_of_applicant') == "" ?        'selected' : ''}}> Suffix</option>
                   <option value="Jr." {{old('suffix_of_applicant') == "Jr." ? 'selected' : ''}}>Jr.</option>
                   <option value="Sr."  {{old('suffix_of_applicant') == "Sr." ? 'selected' : ''}}>Sr.</option>
                   <option value="I"   {{old('suffix_of_applicant') == "I" ?   'selected' : ''}}>I</option>
                   <option value="II"  {{old('suffix_of_applicant') == "II" ?  'selected' : ''}}>II</option>
                    <option value="III" {{old('suffix_of_applicant') == "III" ? 'selected' : ''}}>III</option>
                    <option value="IV"  {{old('suffix_of_applicant') == "IV" ?  'selected' : ''}}>IV</option>
                    <option value="V"   {{old('suffix_of_applicant') ==  "V" ?   'selected' :''}}>V</option>           
                   </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                       <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>    
                 </div>
               </div>

               <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="last_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="last_name" />
                                           <label for="last_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Guardain last name</label>
                                    </div>
                                 </div>
                  
                                 <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="first_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="first_name" />
                                           <label for="first_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Guardain first name</label>
                                    </div>
                                 </div>
          

                                 <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-5">
                                           <input autocomplete="off" name="middle_name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="middle_name" />
                                           <label for="middle_name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Guardain Middle name</label>
                                    </div>
                                 </div>

                                 <div class="w-full lg:w-3/12 px-4">
                               <div class="relative w-full mb-3 mt-5">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                         
                          </label>
                           <select name="gender" class="focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                           <option value="" {{old('suffix_of_applicant') == "" ?        'selected' : ''}}> Suffix</option>
                   <option value="Jr." {{old('suffix_of_applicant') == "Jr." ? 'selected' : ''}}>Jr.</option>
                   <option value="Sr."  {{old('suffix_of_applicant') == "Sr." ? 'selected' : ''}}>Sr.</option>
                   <option value="I"   {{old('suffix_of_applicant') == "I" ?   'selected' : ''}}>I</option>
                   <option value="II"  {{old('suffix_of_applicant') == "II" ?  'selected' : ''}}>II</option>
                    <option value="III" {{old('suffix_of_applicant') == "III" ? 'selected' : ''}}>III</option>
                    <option value="IV"  {{old('suffix_of_applicant') == "IV" ?  'selected' : ''}}>IV</option>
                    <option value="V"   {{old('suffix_of_applicant') ==  "V" ?   'selected' :''}}>V</option>           
                         
                             </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>    
                      </div>
                    </div>



                   <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-7">
                                           <input autocomplete="off" name="Last Name"   id="Last Name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Last Name" />
                                           <label for="Last Name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Represent Last Name</label>
                                   </div>
                              </div>
              
                              <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-7">
                                           <input autocomplete="off" name="First Name"   id="First Name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="First Name" />
                                           <label for="First Name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Represent First Name</label>
                                   </div>
                              </div>


                
                              <div class="w-full lg:w-3/12 px-4">
                                      <div class="relative w-full mb-3 mt-7">
                                           <input autocomplete="off" name="Middle Name"   id="Middle Name" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Middle Name" />
                                           <label for="Middle Name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">Rep Middle Name</label>
                                   </div>
                              </div>




                              <div class="w-full lg:w-3/12 px-4">
                               <div class="relative w-full mb-3 mt-5">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
                         
                          </label>
                           <select name="gender" class="focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                           <option value="" {{old('suffix_of_applicant') == "" ?        'selected' : ''}}> Suffix</option>
                   <option value="Jr." {{old('suffix_of_applicant') == "Jr." ? 'selected' : ''}}>Jr.</option>
                   <option value="Sr."  {{old('suffix_of_applicant') == "Sr." ? 'selected' : ''}}>Sr.</option>
                   <option value="I"   {{old('suffix_of_applicant') == "I" ?   'selected' : ''}}>I</option>
                   <option value="II"  {{old('suffix_of_applicant') == "II" ?  'selected' : ''}}>II</option>
                    <option value="III" {{old('suffix_of_applicant') == "III" ? 'selected' : ''}}>III</option>
                    <option value="IV"  {{old('suffix_of_applicant') == "IV" ?  'selected' : ''}}>IV</option>
                    <option value="V"   {{old('suffix_of_applicant') ==  "V" ?   'selected' :''}}>V</option>           
                         
                             </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>    
                      </div>
                    </div>
             </div>   
      </div>

<!-- 
end 5 -->



 <!-- start 6 -->
 <div class="carousel">
            <div class="carousel-content">
                      <div class="slide relative border border-gray-200 rounded-lg bg-white mt-5 "id="slide5">
                            <!-- <img src="slide1.jpg" alt="Slide 1"> -->
                            <h6 class="text-blueGray-400 text-xl mt-3 mb-6 font-bold uppercase ml-5 "> APPROVING OFFICERS  </h6>                                      

                             <hr class="border-1 border-stone-200 hover:border-green-500 drop-shadow-xl"/>              
                         
                      <div class="flex flex-wrap mt-1">                                                                                                        
                     <div class="w-full lg:w-12/12 px-4  font- uppercase text-sm"> NAME OF CERTIFYING PHYSICIAN </div> 

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
            <h6 class="text-blueGray-400 text-sm  mb-6 font- uppercase"> PROCESSING OFFICER </H6>
            
           </div>     
         

             <div class="flex flex-wrap">
                                                                                                                                                                                     
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
         <div class="relative w-full mb-3  ">
              <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
             <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Middle name</label>
           </div>
         </div>
                                                    
        <div class="w-full lg:w-3/12 px-4">
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
                                  




                                                                                                          
                    <div class="w-full lg:w-6/12 px-4">
        <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font- uppercase">
             APPROVING OFFICER
           </div>     
           <hr class="mt-6 border-b-5 border-blueGray300">

             <div class="flex flex-wrap">
                                                                                                                                                                                     
            <div class="w-full lg:w-3/12 px-4">
              <div class="relative w-full mb-3 ">
                 <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Last name</label>
               </div>
            </div>
                                                    
          <div class="w-full lg:w-3/12 px-4">
          <div class="relative w-full mb-3  ">
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
  </div>

 <!-- end6 -->

   <!-- start7 -->
   <div class="carousel">
            <div class="carousel-content">
                      <div class="slide relative border border-gray-200 rounded-lg bg-white mt-5 "id="slide6">
                            <!-- <img src="slide1.jpg" alt="Slide 1"> -->
                            <h6 class="text-blueGray-400 text-xl mt-3 mb-6 font-bold uppercase ml-5 "> APPROVING  SECTION  </h6>                                      

                             <hr class="border-1 border-stone-200 hover:border-green-500 drop-shadow-xl"/>              
                         
           <div class="flex flex-wrap mt-5">
                                                                                                                      
    
                             <div class="w-full lg:w-12/12 px-4  font- uppercase text-sm">          
                               ENCODER
                              <!-- <hr class="border-1 border-stone-200 hover:border-green-500 drop-shadow-xl "/>                     -->
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

                <div class="w-full lg:w-3/12 px-4 mt-5">
                  <div class="relative w-full mb-3 ">
                    <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                     <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Middle name</label>
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
                      
                                                                                                  
           <div class="w-full lg:w-6/12 px-4">
            <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font- uppercase">
            NAME OF REPORTING UNTI:(OFFICE / SECTION)
            </div>     
           <!-- <hr class=" border-b-5 border-blueGray300"> --> 

             <div class="flex flex-wrap">
                                                                                                                                                                                     
            <div class="w-full lg:w-3/12 px-4">
              <div class="relative w-full mb-3 ">
                 <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Last name</label>
               </div>
            </div>
                                                    
          <div class="w-full lg:w-3/12 px-4">
          <div class="relative w-full mb-3  ">
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
                                  




                                                                                                          
                    <div class="w-full lg:w-6/12 px-4">
                      <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font- uppercase">
                           CONTROL UNTI NO.
                       </div>     
                    <!-- <hr class="mt-6 border-b-5 border-blueGray300"> -->

                <div class="flex flex-wrap">
                                                                                                                                                                                     
            <div class="w-full lg:w-3/12 px-4">
              <div class="relative w-full mb-3">
                 <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
                  <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Last name</label>
               </div>
            </div>
                                                    
          <div class="w-full lg:w-3/12 px-4">
          <div class="relative w-full mb-3  ">
               <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
               <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs">First name</label>
              </div>
             </div>
                                                    
         <div class="w-full lg:w-3/12 px-4">
         <div class="relative w-full mb-3  ">
              <input autocomplete="off" id="first name" name="first name" type="name" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600" placeholder="Pwd No." />
             <label for="first name" class="absolute left-0 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-blue-900 peer-focus:text-xs"> Middle name</label>
           </div>
         </div>
                                                    
              <div class="w-full lg:w-3/12 px-4">
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

        <div class="float-right">
            <button class="  space-x-px space-x-36 mb-3  bg-blue-500 text-white active:bg-green-900 text-xs px-5 py-3 rounded shadow hover:shadow-md outline-none focus:outline-none mr-5 ease-linear transition-all duration-150" type="button">
              Save
            </button>
            <!-- <button class="  space-x-36 mb-3  bg-blue-500 text-white active:bg-red-600 text-xs px-2 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
               Update
            </button>     -->
            </div>        
         </div>

  <div>
    
  </form>


  <!-- end7 -->





    <!-- <br> 
    <button>
    <div class="flex justify-center items-center space-x-5"> -->
    <!-- <button class="carousel-button " onclick="previousSlide()">Back</button>
                   <button class="carousel-button" onclick="showSlide(0)">Member Information</button>
                   <button class="carousel-button" onclick="showSlide(1)">Contact Details</button>
                   <button class="carousel-button" onclick="showSlide(2)">Types Of Disease</button>
                   <button class="carousel-button" onclick="showSlide(3)">ID References</button>
                   <button class="carousel-button" onclick="showSlide(4)">Accomplished By</button>
                   <button class="carousel-button" onclick="showSlide(5)">Approving Officer</button>
                   <button class="carousel-button" onclick="nextSlide()">Next</button>
   </div> -->


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
 
