
<!-- @include('partials.header')

  <header class="max-w-lg mx-auto">
         <a href="#">
            <div class=" bg-gray-300 text-3xl  ">

               {{-- <div class="mb-4 grid grid-cols-3 gap-4 flex items-center">
                  <img src="https://mdbootstrap.com//img/Photos/Square/1.jpg" class="max-w-full h-auto rounded-full" alt="">
                </div> --}}

                <p class="text-white text-center text-white font-serif bg-green-900">VALENCIA-<strong>ABLE</strong></p>
                  <p class="font-serif text-green text-center text-2xl font-bold mb-4  bg-white mt-5" > VALENCIA-AUTOMATED BENEFICIARY LIST ENTRY SYSTEM</p>   
           </div>  
        </a>
    </header>
         
      <main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">

         <section>
              <h3 class="font-bold text-2xl text-center font-serif">WELCOME TO ABLE SYSTEM</h3>
              <p class="text-gray-600 pt-2">Sign Up a new  Account <a href="/register"  class="text-lime-700 font-bold">Here </a></p>
        </section> 


               <section class="mt-10">

                     <form action ="/login/process"  method="post" class="flex flex-col">
                        @csrf
                        @error('email')
                                 
                        <p class="text-red-500 text-xs  p-1">{{$message}} </p>
                        @enderror
                        
                          <div class="mb-6 pt-3 rounded bg-gray-200">
                               <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email:</label>
                                  <input type="email"  name="email" class="bg-gray-200 rounded w-full text-greay-700 focus:outline-none border-b-4 border-gray-400 px-3">
                         </div>
                                 
                                  <div class="mb-6 pt-3 rounded bg-gray-200">
                                       <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password:</label>
                                           <input type="password"  name="password" class="bg-gray-200 rounded w-full text-greay-700 focus:outline-none border-b-4 border-gray-400 px-3">
                                   </div>

                             <button type="submit" class="bg-lime-900 hover:bg-lime-700 text-white font-bold py-2 rounded shahow-lg hover: shadow-xl transition duration-200" type="submit">Login</button>      

                  </form>
            </section>
        </main>        -->



        @include('partials.header')
             


             <header class="max-w-lg mx-auto mt-25">
           
                               <a href="#">
                              {{-- <div class=" bg-green-200 text-3xl  "> --}}
                              {{-- <p class="text-white text-center text-white font-Bacasime Antique bg-green-900">VALENCIA-<strong>ABLE</strong></p> --}}
                             {{-- <div class="flex bg-white flex-col items-stretch opacity-100 relative mt-4 overflow-y-auto overflow-x-hidden h-auto z-40 items-center flex-1 rounded w-full">
                                  <a text="V-ABLE" image="title.png" class="md:flex items-center flex-col text-center md:pb-2 text-black mr-0 inline-flex whitespace-nowrap text-sm uppercase font-bold p-0 px-0">
                                   <img src="{{url('/build/title.png')}}" alt=""> --}}
                                {{-- <p class="font-family: ui-monospace  text-green text-center text-2xl font-bold mb-4  bg-white mt-10" > VALENCIA-AUTOMATED BENEFICIARY LIST ENTRY INFORMATION SYSTEM</p>    --}}
                          </div>  
                         </a>
                     </header>
                    
           
                           
           
                <main class=" max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl"> 
                   
                 <main class=" max-w-lg mx-auto"> 
           
           
                                <form action ="/login/process"  method="post" class="flex flex-col ">
                                   @csrf
                                   <!-- {{-- @error('email')
                                            
                                   <p class="text-red-500 text-xs  p-1">{{$message}} </p>
                                   @enderror --}}
                                  
                                     {{-- <div class="mb-6 pt-3 rounded bg-gray-200 ">
                                          <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email:</label>
                                             <input type="email"  name="email" class="bg-gray-200 rounded w-full text-greay-700 focus:outline-none border-b-4 border-gray-400 px-3">
                                    </div>
                                            
                                             <div class="mb-6 pt-3 rounded bg-gray-200">
                                                  <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password:</label>
                                                      <input type="password"  name="password" class="bg-gray-200 rounded w-full text-greay-700 focus:outline-none border-b-4 border-gray-400 px-3">
                                              </div>
           
                                        <button type="submit" class="bg-lime-900 hover:bg-lime-700 text-white font-bold py-2 rounded shahow-lg hover: shadow-xl transition duration-200" type="submit">Login</button>       
                                   --}} -->
                                   <style>
    @keyframes movingShadow {
        0% {
            box-shadow: 0 0 10px rgba(0, 128, 0, 0.8);
        }

        50% {
            box-shadow: 0 0 20px rgba(0, 128, 0, 0.8);
        }

        100% {
            box-shadow: 0 0 10px rgba(0, 128, 0, 0.8);
        }
    }

    .moving-shadow {
        animation: movingShadow 2s infinite alternate;
    }

    .text-shadow-green-50 {
        text-shadow: 0 0 10px rgba(0, 128, 0, 0.5);
    }

    .footer-text {
        font-size: 9px; /* Adjust the font size as needed */
    }

    .text-xxs {
        font-size: 7px; /* Adjust the font size as needed */
    }
</style>

<!-- 
           {{-- <start> --}} -->

           <div class="flex items-center justify-center space-x-2 ">
                <img src="{{url('/build/logo.png')}}" alt="..." class="max-w-50 rounded h-10 w-10">
                <h1 class="text-xl font-Bacasime Antique text-black text-center "><strong class="text-green-900">V-ABLE</strong> INFORMATION SYSTEM</h1>
            </div>

           <div class="max-w-5xl py-6 flex flex-col justify-center sm:py-12 shadow-lg ">
            
               <div class="relative py-3 sm:max-w-xl sm:mx-auto w-full ">
                   <div class="absolute inset-0 bg-gradient-to-r from-green-500 to-green-900 rounded-lg shadow-2xl transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
                    
                   </div>
                   <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
                       <div class="max-w-md mx-auto">
                        
                       <div>
                           @if($errors->any())
                               <div class="flex items-center space-x-2" style="color: red;">
                                   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                                       <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m0-10.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.75c0 5.592 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.57-.598-3.75h-.152c-3.196 0-6.1-1.249-8.25-3.286zm0 13.036h.008v.008H12v-.008z" />
                                   </svg>
                                   <ul>
                                       @foreach($errors->all() as $error)
                                           <li>{{ $error }}</li>
                                       @endforeach
                                   </ul>
                               </div>
                           @endif
                       </div>
           
                           <div>
                               <!-- <h1 class="text-xl font-Bacasime Antique text-black opacity-300">V-ABLE INFORMATION SYSTEM</h1> -->
                           </div>
                           <div class="divide-y divide-gray-200">
                               <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                               <!-- <img src="{{ url('/build/logo.png') }}" alt="..." class=" absolute inset-0 max-w-25 rounded h-25 w-25 opacity-30 mx-auto py-1 px-4 "> -->
           
                               <div class="relative">
                                    <div class="relative flex items-center">
                                        <input autocomplete="off" id="email" name="email"
                                            class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600 text-center"
                                            placeholder="Email address" />
                                        <label for="email"
                                            class="absolute left-10 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Email
                                            Address</label>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6 absolute left-0 top-1/2 transform -translate-y-1/2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="relative flex items-center">
                                    <input autocomplete="off" id="password" name="password"
                                        class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:border-blue-600 pr-10 text-center"
                                        placeholder="Password" type="password"/>
                                    <label for="password"
                                        class="absolute left-10 -top-3.5 text-black-300 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-green-900 peer-focus:text-xs">Password
                                    </label>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                        class="w-6 h-6 absolute left-0 top-1/2 transform -translate-y-1/2 cursor-pointer"
                                        onclick="togglePasswordVisibility()">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 10.5V6.75a4.5 4.5 0 119 0v3.75M3.75 21.75h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H3.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z"/>
                                    </svg>
                                </div>
                                <div class="relative flex items-center mt-1">
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



                                                                <div class="relative">
                                                                    <button class=" mt-5 bg-blue-500 text-white rounded-md px-2 py-1 hover:bg-green-700 text-white w-full py-2 rounded-lg shadow-2xl hover: shadow-xl transition duration-200">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 inline-block mr-2">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                                                                        </svg>
                                                                        Login
                                                                    </button>
                                                                </div>
                                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                 </form>    
                                          
                         </section>
                    <!-- Adjusted code with smaller text for the footer -->
                 
                        <p class="text-center text-xs mt-5  footer-text">© Copyright 2023</p>
                        <p class="text-center text-xs  footer-text"><span>INFORMATION COMMUNICATION TECHNOLOGY DIVISION</span></p>

                    </main>       
           
                   
           
                 
           
           
                                 
           
           
           
           
           
            
           <!-- <start login> --}}
           
           
           
            {{-- <main class="bg-wgi-100 max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl"> --}}
           {{-- 
                    <section> --}}
                         {{-- <h3 class="font-bold text-2xl text-center font-serif">WELCOME TO ABLE SYSTEM</h3> --}}
                         {{-- <p class="text-gray-600 pt-2">Sign Up a new  Account <a href="/register"  class="text-lime-700 font-bold">Here </a></p> --}}
                   {{-- </section>  --}}
           
           {{-- 
                          <section class="mt-10"> --}}
           {{-- 
                                <form action ="/login/process"  method="post" class="flex flex-col">
                                   @csrf
                                   @error('email')
                                            
                                   <p class="text-red-500 text-xs  p-1">{{$message}} </p>
                                   @enderror
                                   
                                     <div class="mb-6 pt-3 rounded bg-gray-200">
                                          <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email:</label>
                                             <input type="email"  name="email" class="bg-gray-200 rounded w-full text-greay-700 focus:outline-none border-b-4 border-gray-400 px-3">
                                    </div>
                                            
                                             <div class="mb-6 pt-3 rounded bg-gray-200">
                                                  <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password:</label>
                                                      <input type="password"  name="password" class="bg-gray-200 rounded w-full text-greay-700 focus:outline-none border-b-4 border-gray-400 px-3">
                                              </div>
           
                                        <button type="submit" class="bg-lime-900 hover:bg-lime-700 text-white font-bold py-2 rounded shahow-lg hover: shadow-xl transition duration-200" type="submit">Login</button>      
                                  
                             </form> --}}
           
           {{-- 
                             <section class="h-screen"> --}}
                            
            
            
                           </form>
                              
            -->
           