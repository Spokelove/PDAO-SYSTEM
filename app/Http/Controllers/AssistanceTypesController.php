<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\TypesofAssistance; // Adjust the namespace according to your project structure
use Illuminate\Database\QueryException;





class AssistanceTypesController extends Controller
{
    public function index()
    {
        try {
            // Assuming you want to retrieve and display existing records
            $assistancetypes = TypesofAssistance::all();

            return view('assistancetypes.index', ['assistancetypes' => $assistancetypes]);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
        }
    }





    public function create()
    {
           
        return view('Assistancetypes.create');
    }

    public function store(Request $request)
    {
    try {
        // dd($request);
        // Validate the incoming request data
        $request->validate([
            'Assistance_Types' => 'required',
          
        ]);
        // Create a new Pdaoassistance instance and fill it with the request data
        $assistancetypes = new TypesofAssistance([
            'Assistance_Types' => $request->input('Assistance_Types'),
          
        ]);
    
        $assistancetypes->save();
    
       
        return redirect()->route('typesofAssistance.index')->with('message', 'Assistance record saved successfully');
    } catch (QueryException $e) {
        
        return back()->withInput()->withErrors(['error' => 'Database error: ' . $e->getMessage()]);
    } catch (\Exception $e) {
       
        return back()->withInput()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
    }

    }
    


    public function edit(TypesofAssistance $assistancetype)
    {
        $assistancetypes = TypesofAssistance::all();
    
        // dd($assistancetype);
        return view('Assistancetypes.edit', compact('assistancetype', 'assistancetypes'));
    }
    
    
    public function update(Request $request, TypesofAssistance $assistancetype)
    {
        try {
            // Move the dd() line after the catch block
            // Validate the incoming request data
            $validatedData = $request->validate([
                'Assistance_Types' => 'required',
            ]);
    
            $assistancetype->update($validatedData);
    
            return redirect()->route('typesofAssistance.index')->with('message', 'Types of Assistance record updated successfully');
        } catch (\Exception $e) {
            \Log::error('An error occurred: ' . $e->getMessage());
            dd($e->getMessage()); // Move this line here
            return back()->withInput()->withErrors(['error' => 'An error occurred. Please try again later.']);
        }
    }
    
    
    
    

public function destroy(TypesofAssistance $assistancetype)
{
    try {
        $assistancetype->delete();
        return redirect(route('typesofAssistance.index'))->with('message', 'Assistance Deleted Successfully');
    } catch (\Exception $e) {
        \Log::error('Error deleting assistance: ' . $e->getMessage());
        return back()->withErrors(['error' => 'An error occurred. Please try again later.']);
    }
}


}