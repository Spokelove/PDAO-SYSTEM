
@include('partials.header')
<?php  $array = array('title' => 'ABLED SYSTEM') ;?>
  <x-nav :data="$array"/>
  

    <header class="max-w-lg mx-auto mt-5 ">
           <a href="#">
                    <div class=" bg-gray-00  text-8xl font-extrabold ">
       
                       <p class="font-sans  text-center text-2xl  text-black font-bold mb-4"> PERSONS WITH DISABILITY LIST</p>   
                  </div>  
           </a>
         

{{-- <form action="" style="display: flex">
    <input type="text" name="search" class="form-control" placeholder="search here">
    <button type="submit" class="btn btn-primary">SEARCH NAME</button>
 </form> --}}



   </header> 

<!-- This is an example component -->
<div class="max-w-2xl mx-auto">

	<form action={{url('/search/students')}} method="get">   
        <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
        <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
            <input type="search"  name="search" id="search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Name" required>
            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form>
    <p class="mt-5"></p>

<!-- This is an example component -->

         
           <section>
                   <div class="overflow-x-auto relative">

         <table class="w-99 mx-auto text-sm text-left text-gray-500">
            <thead class=" text-xs.text.gray-700.uppercase bg-gray-50">
                <tr> 
                    <th scope="col" class="py-3 px-6">
                                 FIRST NAME
                    </th>
                             <th scope="col" class="py-3 px-6">
                                         LAST NAME
                                          </th>
                                         <th scope="col" class="py-3 px-6">
                                                  EMAIL
                                                </th>

                                                <th scope="col" class="py-3 px-6">
                                                      AGE
                                                       </th scope="col">


                                                       <th>



                                                       </th>


                </tr>
          </thead>

      <tbody>
                   @foreach ($students as $student )

                <tr class="bg-green-900 border-b text-white">

                            <td class="py-4 px-6 "> 
                                {{ $student->first_name }}
                               </td>
    
                            <td class="py-4 px-6 "> 
                                {{ $student->last_name }}
                               </td>
                               
                            <td class="py-4 px-6 "> 
                                {{ $student->email}}
                               </td>
                              
                            <td class="py-4 px-6 "> 
                                {{ $student->age}}
                               </td>

                               <td class="py-4 px-6">

                                   <a href="/student/{{ $student->id}}" class="bg-lime-700 text-white px-4 py-1 rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">view</a>



                               </td>
                               {{-- <td class="py-4 px-6">

                                <a href="/student/{{ $student->id}}" class="bg-red-700 text-white px-4 py-1 rounded">delete</a>



                            </td> --}}
                            
                              
                              
                </tr>
                             @endforeach
           <tbody>
        </table>
 
            <div class="mx-auto max-w-lg  pt-6 p-4">

              {{$students->links() }}
                </div>
  
     </div>
         </section>
    @include('partials.footer') 



   {{-- <ul>
        @foreach ($students as $student )
    
    <li>   {{ $student->gender }}  {{$student->gender_count}} </li>
        
    @endforeach
        </ul>--}}