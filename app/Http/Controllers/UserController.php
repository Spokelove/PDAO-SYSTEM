<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;
use Illuminate\Support\FacadesAuth;
use App\Models\Profilling;

class UserController extends Controller
{
    public function index (){
        return 'Hello from UserController';
    }
    
    public function login(){

        if(View::exists('user.login')){
          return view('user.login');
        

        }else{
            return abort(404);
        }
    }
    
            public function process(Request $request){

                $validated = $request->validate([
                   
                    "email" => ['required', 'email'],
                    'password' => 'required'
              ]);
                   if(auth()->attempt($validated)) {
                    $request->session()->regenerate();

                    return redirect('/')->with('message', 'Welcome back!');
                   
                   }

                   return back()->withErrors(['email' => 'Login failed'])->onlyInput('email');
                }
    
    public function register(){
        return view('user.register');
    }


    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'logout succesfully');
        
    }
    public function store(Request $request){


          $validated = $request->validate([
           "name" => ['required', 'min:4'],
           "email" => ['required', 'email', Rule::unique('users','email')],
           "status" => ['required'],
           'password' => 'required|confirmed|min:6'
     ]);

            $validated['password'] = bcrypt($validated['password']);
            $user = User::create($validated);
            auth()->login($user); 

          return redirect('register')->with('message', 'Succesfully added user');
            
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // Your user search logic here, for example, using Eloquent or any other method to fetch search results.
        $users = User::where('name', 'like', '%'.$query.'%')->get();

        return view('user.search', compact('users'));
    }
    
    public function edit (user $user){

        return view ('user.edit',['users'=>$user]);
     
     
    }

    public function update( Request $request, user $user ){

        $validated = $request->validate([
            "name" => ['required', 'min:4'],
            "email" => ['required', 'email'], 
            "status" => ['required'],
            'password' => 'required|confirmed|min:6'
         
      ]);

      $user->update($validated);
        return redirect(route('Management.index'))->with ('message','User Updated Successfully');
          

    }

    public function destroy( user $user ){

        $user->delete();

        return redirect(route('Management.index'))->with ('message',' User Deleted Successfully');
          

    }

}   

