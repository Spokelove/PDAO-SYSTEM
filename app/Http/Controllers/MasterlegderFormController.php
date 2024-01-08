<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterlegderForm;
use Illuminate\Support\Facades\DB;
use App\Models\Masterlist;
use App\Models\Masterledger;
use App\Models\PwdMember;
use Carbon\Carbon;




class MasterlegderFormController extends Controller
{
    // Display a list of MasterlegderForms
    public function index()
    {
        $masterledgers = MasterLedger::with('typesOfAssistance', 'typesOfProgram')->paginate(10);
        $_masterlist = Masterlist::all();
    
        return view('masterledger.index', compact('masterledgers', '_masterlist'));
    }


    public function create()
    {
       
        $pwdMembers = PwdMember::all();
        $_masterlists = Masterlist::all();
      
        // dd($_masterlists);
        return view('masterledger.create', compact('pwdMembers', '_masterlists'));
    }
            
    
    public function store(Request $request)
    {

        // dd($request);
        // Validate the request data
        $request->validate([
            'pwd_member_id' => 'required|exists:pwd_member,id',
            // '_masterlist_id' => 'required|exists:_masterlists,id',
            'last_name' => 'required|string',
            'first_name' => 'required|string',
            'middle_name' => 'required|string',
            'suffix_of_applicant' => 'nullable|string',
            'Types_id' => 'required|string',
            'Program_id' => 'required|string',
            'Amount' => 'required|numeric',
            'Unit' => 'required|string',
            'Particular' => 'required|string|max:255',
            'Assistance_Name' => 'required|string',
            'Description' => 'required|string',
            'Date_Received' => 'required|date',
            // Add more validation rules for other fields as needed
        ]);
    
      
            // Retrieve PwdMember and _masterlist based on provided IDs
            $pwdMember = PwdMember::findOrFail($request->input('pwd_member_id'));
            // $_masterlist = _Masterlist::findOrFail($request->input('_masterlist_id'));
    
            // Create a new instance of MasterLedger model
            $masterLedger = new MasterLedger([
                'pwd_member_id' => $request->input('pwd_member_id'),
                // '_masterlist_id' => $request->input('pwd_member_id'),
                'last_name' => $request->input('last_name'),
                'first_name' => $request->input('first_name'),
                'middle_name' => $request->input('middle_name'),
                'suffix_of_applicant' => $request->input('suffix_of_applicant'),
                'Types_id' => $request->input('Types_id'),
                'Program_id' => $request->input('Program_id'),
                'Amount' => $request->input('Amount'),
                'Unit' => $request->input('Unit'),
                'Particular' => $request->input('Particular'),
                'Assistance_Name' => $request->input('Assistance_Name'),
                'Description' => $request->input('Description'),
                'Date_Received' => $request->input('Date_Received'),
            ]);
    
          
            // Associate PwdMember and _masterlist with the new MasterLedger instance
            $masterLedger->pwdMember()->associate($pwdMember);
            // $masterLedger->_masterlist()->associate($_masterlist);
    
            // Save the record to the database
            $masterLedger->save();
            
            try{
                // Redirect with success message
                return redirect()->route('masterledger.index')->with('message', 'MasterLedger Successfully Save !');
            } catch (\Exception $e) {
              // Handle Exceptions and Rollback on Error
              
              // DB::rollBack();
              return back()->withErrors(['error' => 'An error occurred.'])->withInput();
              }
                      }
    
    


    public function edit(Masterledger $masterledger)
    
    {

        $pwdMembers = PwdMember::all();
        $_masterlists = Masterlist::with('typesOfAssistance', 'typesOfProgram')->paginate(10);
        $masterledgers = MasterLedger::with('typesOfAssistance', 'typesOfProgram')->paginate(10);
        // return dd($_masterlists);
    
        return view('masterledger.edit', compact('masterledger', 'pwdMembers', '_masterlists', 'masterledgers'));
    }
    



    public function update(Request $request, Masterledger $masterledger)
    {
        $request->validate([
            'pwd_member_id' => 'required', 
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            // Add other validation rules as needed
        ]);
    
        $masterledger->update($request->all());
    
        return redirect()->route('masterledger.index', ['id' => $masterledger->id])
     
            ->with ('message',' Masterledger Updated Successfully');
    }
    

    public function destroy(masterledger $masterledger)
    {
        
        $masterledger->delete();
        return redirect(route('masterledger.index'))->with ('message',' Masterledger Deleted Successfully');

    }

   
public function searchA(Request $request)
{
    if ($request->ajax()) {
        $query = $request->input('search');
        
        $pwdMembers = PwdMember::where(function ($queryBuilder) use ($query) {
            $queryBuilder->where('last_name', 'like', '%' . $query . '%')
                         ->orWhere('first_name', 'like', '%' . $query . '%')
                         ->orWhere('middle_name', 'like', '%' . $query . '%');
        })
        ->orWhere('birthday', 'like', '%' . $query . '%')
        ->get();
        

        $output = '';

        if (count($pwdMembers) > 0) {
            foreach ($pwdMembers as $pwdMember) {
                $output .= '<tr>';
                $output .= '<td class="px-6 py-4">' . $pwdMember->id . '</td>';
                $output .= '<td class="px-6 py-4">' . $pwdMember->last_name . '</td>';
                $output .= '<td class="px-6 py-4">' . $pwdMember->first_name . '</td>';
                $output .= '<td class="px-6 py-4">' . $pwdMember->middle_name . '</td>';
                $output .= '<td class="px-6 py-4">' . $pwdMember->suffix_of_applicant . '</td>';
                $output .= '<td class="px-6 py-4">' . $pwdMember->birthday . '</td>';
                $output .= '</tr>';
            }
        } else {
            $output = '<tr><td colspan="5" class="text-center" style="color: red;">No results found !</td></tr>';

        }

        return response()->json($output);
    }

    return response()->json(['error' => 'Invalid request']);
}

// public function searchB(Request $request)
//     {
//         // Retrieve the search query from the request
//         $searchQuery = $request->input('query');

//         // Perform your search logic here using $searchQuery

//         // Example: Assuming you have a model called Item and want to search its title
//         $results = Item::where('title', 'like', '%' . $searchQuery . '%')->get();

//         // Return the results (replace with your actual result handling)
//         return view('searchB', ['results' => $results]);
//     }

}