
   <ul class="flex flex-col  md:flex-row px-1 text-xs font-semibold text-white">
  
          @auth
       <li>
          <svg class="h-5 w-5 text-white-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />  <circle cx="8.5" cy="7" r="4" />  <line x1="20" y1="8" x2="20" y2="14" />  <line x1="23" y1="11" x2="17" y2="11" /></svg>
             </a>
       </li> 

       <li>
             <a href="/registration/create" class="block py-1 pr-3 pl-2 text-Slate-200">Register_PWD</a>
        </li>  

        <li>
            <svg class="h-5 w-5 text-white"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
               </svg>         
                </a>
      </li> 

           <a href="/register" class="block py-1 pr-3 pl-4  text-Slate-200 "> Add User</a>   
  
      <li> 
        <svg class="h-5 w-5 text-white"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M18.36 6.64a9 9 0 1 1-12.73 0" />  <line x1="12" y1="2" x2="12" y2="12" /></svg>
           </a>
      </li> 

    </li>  
               <form action="/logout" method="post">
                  @csrf
       
                   <button class="block  py-1 pr-3 pl-2  text-Slate-200">Log out</button>
                       </form>
     
        
                <!-- <div class = "flex space-x-3 items-center px-3 ">

                <div x-data="{ dropdownOpen: false }" class="relative">
             -->
                        <!-- <button @click="dropdownOpen = ! dropdownOpen"
                            class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                            <img src="{{url('/build/logo.png')}}" alt="..." class="   max-w-50 rounded h-8 w-8">
                             
                        </button>
                        <div class = "hidden md:block text-sm md:text-md text-black dark:text-white"></div> 
    
                        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"
                            style="display: none;"></div>
                            
                        <div x-show="dropdownOpen"
                            class="absolute right-0 mt-2 w-48 bg-white rounded-md overflow-hidden shadow-xl z-10"
                            style="display: none;">
                                                                                             
                            <a href="/"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a> 
                            <a href="/register"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Account Management</a> 
                                <a href="/register"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Sign Up</a>
                       -->
                           
                           
<!-- 
                        </div>
                    </div>
                </div> -->
        <!-- end -->


     @else
               <li>
                   <a href="/login" class="block py-2 pr-4 pl-3">Sign In</a>
                   
                   </li>  
   
                <li>
                     <a href="/register" class="block py-2 pr-4 pl-3">Sign Up</a>
                   </li>  
                                                   
               @endauth          
   </ul>        







