<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterList;
use App\Models\TypesOfAssistance;
use App\Models\ProgramAssistance;
use Illuminate\Support\Facades\DB;


class MasterListController extends Controller
{
    public function index()
    {
        $masterlists = MasterList::with('typesOfAssistance', 'typesOfProgram')->get();
        return view('masterlist.index', compact('masterlists'));
    }

    public function create()
    {
        $typesOfAssistance = TypesofAssistance::all();
        $typesOfProgram = ProgramAssistance::all();
    
        return view('masterlist.create', compact('typesOfAssistance', 'typesOfProgram'));
    }
    

public function store(Request $request)
{
   
   
    // try {
        // Validate the request
        $validatedData = $request->validate([
            'Types_id' => 'required',
            'Program_id' => 'required',
            'Amount' => 'required|numeric',
            'Unit' => 'required|string',
            'Particular' => 'required|string|max:255',
            'Assistance_Name' => 'required|string',
            'Description' => 'required|string',
            // Add more validation rules as needed
        ]);


        // dd($request);

        MasterList::create($validatedData);

        try{
          
            return redirect()->route('masterlist.index')->with('message', 'MasterLIst Successfully Save !');
        } catch (\Exception $e) {
       
          return back()->withErrors(['error' => 'An error occurred.'])->withInput();
          }
                  }



        public function edit(MasterList $masterlist)
        
        {
        $masterlists = MasterList::all();
            // dd($masterlist);
        $typesOfAssistance = TypesofAssistance::all();
        $typesOfProgram = ProgramAssistance::all();


            return view('masterlist.edit', compact('masterlist', 'typesOfAssistance', 'typesOfProgram'));
        }
              
        public function update(Request $request, MasterList $masterlist)
        {
            $typesOfAssistance = TypesofAssistance::all();
            $typesOfProgram = ProgramAssistance::all();
          
            $validatedData = $request->validate([
                'Types_id' => 'required',
                'Program_id' => 'required',
                'Amount' => 'required|numeric',
                'Unit' => 'required|string',
                'Particular' => 'required|string|max:255',
                'Assistance_Name' => 'required|string',
                'Description' => 'required|string',
                // Add more validation rules as needed
            ]);
        
            $masterlist->update($validatedData);
        
            try {
                return redirect()->route('masterlist.index')
                    ->with(compact('typesOfAssistance', 'typesOfProgram'))
                    ->with('message', 'Master List Successfully Updated');
            } catch (\Exception $e) {
                return back()->withErrors(['error' => 'An error occurred.'])->withInput();
            }
        }
        
        public function destroy(MasterList $masterlist)
        {
            try {
            

                $masterlist->delete();
        
                DB::commit();
        
                return redirect()->route('masterlist.index')->with('success', 'Master List deleted successfully');
            } catch (\Exception $e) {
                DB::rollback();
        
            

                return back()->withErrors(['error' => 'An error occurred.'])->withInput();
            }
        }
    }       