
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
                       <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white bg-violet-200 rounded w-full text-greay-700 focus:outline-none border-gray-400 px-5 py-2">Types of Disease</a>
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
            <button class="  space-x-36 mb-3  bg-blue-500 text-white active:bg-green-600 text-xs px-2 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
               Update
            </button>
            <button class="  space-x-36 mb-3  bg-red-500 text-white active:bg-red-600 text-xs px-2 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">
               Delete
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




    <!-- Implement the carousel -->
 <!-- Implement the carousel -->

 <div class="relative w-[1000px]   mx-auto">
    
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
        <td>1</td> <!-- Numbers in the leftmost column -->
        <td colspan="2"> <strong>NEW APPLICANT</td></strong>
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
</html>

                    




   
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


 
