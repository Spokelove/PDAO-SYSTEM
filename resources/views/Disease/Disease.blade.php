
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
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                </svg>                      
                <div>
                <a href ="{{url('/Assistance')}}" class="text-base leading-4">Assistance</a>

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
                      Profilling
                    </a>
                </li>
                <li>
                    <div class = "flex items-center">
                        <svg class = "w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fillRule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clipRule="evenodd"></path></svg>

                        <a href="#" class = "ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2 dark:text-gray-400 dark:hover:text-white">Print Preview</a>
                    </div>
                </li>
            </ol>
        </nav>


        <!-- <start of content> -->
<!-- end -->

        <!-- <div class = "flex flex-wrap my-5 -mx-2 bg-gray-50">
        <div class="flex flex-wrap">
    <div class="w-full lg:w-6/12 px-4">
      <div class="relative w-full mb-3">
        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
        Start
        </label>
        <input type="Date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="000-000">
      </div>
    </div>
    <div class="w-full lg:w-6/12 px-4">
      <div class="relative w-full mb-3">
        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" htmlfor="grid-password">
         End
        </label>
        <input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="jesse@example.com">
      </div>
    </div>
</div> -->




{{-- <start> --}}
 
    
    <div class="flex flex-wrap">
      <div class="w-full lg:w-3/12 px-4">
        <div class="relative w-full mb-3">
      <label class="  block uppercase tracking-wide bg-white text-xs font-bold mt-4" for="grid-state"></label>
      <div class="relative">
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
    </div> 


    <div class="w-full lg:w-3/12 px-4">
      <div class="relative w-full mb-3">
        <label class="  block uppercase tracking-wide bg-white text-xs font-bold mt-4" for="grid-state"></label>
        <div class="relative">
          <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
            <option>Deaf or Hard of Hearing</option>
            <option>Intectual Disability</option>
            <option>Learning Disability</option>
            <option>Mental Disability</option>
            <option>Physical Disability (orthopedic)</option>
             <option>Psychosocial Disability</option>
            <option>Speech and Language Impairment</option>
            <option>Visual Disability</option>
            <option>Cancer (RA11215)</option>
            
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
          </div>    
        </div>
      </div>
     </div> 



     <div class="w-full lg:w-3/12 px-4">
      <div class="relative w-full mb-3">
        <label class="  block uppercase tracking-wide bg-white text-xs font-bold mt-4" for="grid-state"></label>
        <div class="relative">
          <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
            <option>Conigetal / Inborn</option>
            <option>Intectual Disability</option>
            <option>Learning Disability</option>
            <option>Mental Disability</option>
            <option>Physical Disability (orthopedic)</option>
             <option>Psychosocial Disability</option>
            <option>Speech and Language Impairment</option>
            <option>Visual Disability</option>
            <option>Cancer (RA11215)</option>
            
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
          </div>    
        </div>
      </div>
      </div> 




      <div class="w-full lg:w-3/12 px-4">
      <div class="relative w-full mb-3">
        <label class="  block uppercase tracking-wide bg-white text-xs font-bold mt-4" for="grid-state"></label>
        <div class="relative">
          <select class="  focus:ring-1 focus:ring-blue-600  block appearance-none w-full bg-white-200 border border-white-200 text-gray-700 py-3 px-2 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
            <option>Acquired</option>
            <option>Chronic Illness</option>
            <option>Celebral Palsy</option>
            <option>Injury</option>
            <option>Other Specify</option>
             
            
          </select>
          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
          </div>    
        </div>
      </div>
      </div> 









</div>
    

{{-- end --}}

<div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-9 lg:-mx-8 pr-10 lg:px-10 bg-white ">

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

<!-- </div> -->

