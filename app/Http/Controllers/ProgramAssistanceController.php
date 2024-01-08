<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ProgramAssistance;
use Illuminate\Database\QueryException;


class ProgramAssistanceController extends Controller
{
    public function index()
    {
        $programtypes = ProgramAssistance::all();
        $programtypes = ProgramAssistance::paginate(10);

        return view('Program.index', ['programtypes' => $programtypes]);
    }

    public function create()
    {
        return view('Program.create');
    }
    
    public function store(Request $request)
    {
        try {
            $request->validate([
                'Program_Types' => 'required',
            ]);
    
            ProgramAssistance::create([
                'Program_Types' => $request->input('Program_Types'),
            ]);
    
            return redirect()->route('programassistance.index')->with('message', 'Assistance record saved successfully');
        } catch (QueryException $e) {
            return back()->withInput()->withErrors(['error' => 'Database error: ' . $e->getMessage()]);
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
        }
    }
    


   public function edit(ProgramAssistance $programassistance)
{
    //   dd($programassistance);
    $programAssistance = ProgramAssistance::paginate(10);
    return view('Program.edit', compact('programassistance', 'programassistance'));
}


public function update(Request $request,ProgramAssistance $programassistance)
{
    try {
        // Validate the incoming request data
        $validateprogram = $request->validate([
            'Program_Types' => 'required',
            // Add validations for other fields if needed
        ]);

        $programassistance->update( $validateprogram);
       
        return redirect()->route('programassistance.index')->with('message', 'Assistance record updated successfully');
    } catch (QueryException $e) {
        // Handle database query exceptions
        // Log the error or return an error response
        \Log::error('Database error: ' . $e->getMessage());
        return back()->withInput()->withErrors(['error' => 'Database error. Please try again later.']);
    } catch (\Exception $e) {
        \Log::error('An error occurred: ' . $e->getMessage());
        dd($e->getMessage()); // Move this line here
        return back()->withInput()->withErrors(['error' => 'An error occurred. Please try again later.']);
    }
}

public function destroy(ProgramAssistance $programtype)
{
    try {
        // dd($request->all());
        $programtype->delete();
        return redirect(route('programassistance.index'))->with('message', 'Program Assistance Deleted Successfully');
    } catch (\Exception $e) {
        \Log::error('Error deleting assistance: ' . $e->getMessage());
        return back()->withErrors(['error' => 'An error occurred. Please try again later.']);
    }
}

}