<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Managementcontroller extends Controller
{
    public function index ()
    {
        $users = User::all();

        return view ('Management.index', compact('users'));  
            
    }
    // public function refresh(Request $request)
    // {
    //     // Your logic here.

    //     // After performing some operations, use back() to refresh the page.
    //     return back();
    // }
}

 