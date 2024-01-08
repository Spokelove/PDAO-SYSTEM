<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pwdmember;
use App\Models\residence;
use App\Models\causedisability;
use App\Models\typesdisability;
use App\Models\familyback__idrefences;
use Illuminate\Support\Facades\DB;
use App\Models\devices_given;
use App\Models\device;
use Carbon\Carbon; // Import the Carbon library
use App\Models\DeviceInput;



class AssistanceController extends Controller
{
    public function index()
    {
        return view('Assistance.index');
    }

    public function create()
    {
       


        
        return view('assistance.create');
    }
}