<nav x-data="{open :false}" class="bg-green-800 font-saref fixed w-full z-20 top-0 left-0 border-blue-gray-600 px-2 sm:px-4 py-2.5 text-stone-900 shadow-green-600">

  
    <div class="container flex flex-wrap justify-between items-center mx-auto">
            <a href="">
               
                   <span class="text-center text-xl font=semibold whitespace-nowrap text-white ">
                        {{$data['title'] }}
                   </span>         
                  <!-- <img src="{{url('/build/logo.png')}}" alt="..." class="   max-w-50 rounded h-10 w-10">  -->
                
             <!-- <button @click= "open = !open"
              data-collapse-toggle="navbar=main" class="md:hidden">
               <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z"/></svg></button> -->

                 <div  x-show="open" class=" w-full md:block md:w-auto"  id="nav-main">
                         <x-items />                   
                    </div>

                  <div class="hidden w-full md:block md:w-auto"  id="nav-main">
                     
                   <x-items />                       
                    </div>
                   
    </div>                                           
</nav>


