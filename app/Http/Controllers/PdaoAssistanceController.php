<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pdaoassistance; // Adjust the namespace based on your application structure
use Carbon\Carbon;

class PdaoAssistanceController extends Controller
{
    public function index()
    {
        // Assuming you want to retrieve and display existing records
        $assistanceRecords = Pdaoassistance::all();

        $assistanceRecords = Pdaoassistance::paginate(10);
        return view('Pdaoassistance.index',['assistanceRecords' => $assistanceRecords]);
    }

    public function create()
    {
        return view('Pdaoassistance.create');
    }
    public function store(Request $request)
    {
    try {
        // Validate the incoming request data
        $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'suffix' => 'nullable',
            'birthday' => 'required',
            'Barangay' => 'required',
            'purok' => 'required',
            'gender' => 'required',
            'identification' => 'required',
            'assistance' => 'required',
            'date_received' => 'required|date',
            'disability' => 'required',
        ]);
    
        // Calculate age based on birthday
        $birthday = Carbon::parse($request->input('birthday'));
        $age = $birthday->age;
    
        // Create a new Pdaoassistance instance and fill it with the request data
        $assistance = new Pdaoassistance([
            'last_name' => $request->input('last_name'),
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'suffix' => $request->input('suffix'),
            'birthday' => $birthday->toDateString(), // Store the date only, not the time
            'age' => $age, // Store the calculated age
            'Barangay' => $request->input('Barangay'),
            'purok' => $request->input('purok'),
            'gender' => $request->input('gender'),
            'identification' => $request->input('identification'),
            'assistance' => $request->input('assistance'),
            'date_received' => $request->input('date_received'),
            'disability' => $request->input('disability'),
        ]);
    
        // Save the new Pdaoassistance instance to the database
        $assistance->save();
    
        // Redirect to a success page or any other desired action
        return redirect()->route('pdaoassistance.index')->with('message', 'Assistance record saved successfully');
    } catch (QueryException $e) {
        // Handle database query exceptions
        // Log the error or return an error response
        return back()->withInput()->withErrors(['error' => 'Database error: ' . $e->getMessage()]);
    } catch (\Exception $e) {
        // Handle other exceptions
        // Log the error or return an error response
        return back()->withInput()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
    }

    }

    public function edit($id)
    {
        // Retrieve the record by ID for editing
        $assistance = Pdaoassistance::findOrFail($id);
        return view('Pdaoassistance.edit', compact('assistance'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'suffix' => 'required',
            'Address' => 'required',
            'gender' => 'required',
            'disability' => 'required',
            'assistance' => 'required',
            'date_received' => 'required|date',
        ]);

        // Retrieve the record by ID
        $assistance = Pdaoassistance::findOrFail($id);

        // Update the Pdaoassistance instance with the new request data
        $assistance->update($request->all());

        // Redirect to a success page or any other desired action
        return redirect()->route('pdaoassistance.index')->with('message', 'Assistance record updated successfully');
    }



    public function show($id)
    {
        $assistanceRecord = Pdaoassistance::find($id);
    
        if (!$assistanceRecord) {
            // Handle the case where the record with the given ID is not found
            abort(404);
        }
    
        return view('Pdaoassistance.show')->with('assistanceRecord', $assistanceRecord);
    }
}