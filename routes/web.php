
<?php


use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\PwdprofileController;
use App\Http\Controllers\ProfillingController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\AssistanceController;
use App\Http\Controllers\Managementcontroller;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserAcountcontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Expr\filter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/ About', function () {
   // return  'About';
//});
 
//Route::match(['get','post'],'/',function(){
 //  return 'POST and GET is allowed';

    //Route::view('/welcome', 'welcome');

//Route::permanentRedirect('/welcome','/');
//Route::get('/users',function(Request $request){
    //dd($request);
      ///   return null;
//});
//Route::get('/user/{id}/{group}',function($id,$group){
    //return response($id.'-'.$group, 200);
    
//});


//Route::get('/request-json',function()
//{
  //  return response()->json(['name'=> 'Phoebe Rayos','age','22']);

//});

//Route::get('/request-download' , function(){
  //  $path = public_path().'/sample.txt';

   //$name = 'sample.txt';
   //$headers = array(
               //'Content-type : application/text-plain',
 //  );

   //return response()->download($path, $name, $headers);

//});

//Route::get('/user/{id}', [UserController::class, 'show']);

//Route::get('/students/{id}', [StudentController::class, 'show']);
    
//common routes naming
//index = show all data or students
//show - show a single data or students
//create - show a from  to a new user
//store - store a data
//edit - show form a data
//destroy - delete a data


  // < registration  for users table>
Route::resource('/Management', Managementcontroller::class);
Route::get('/Management', [ManagementController::class, 'index'])->name('Management.index');

  // < end of user registration table>


  // <users route>
Route::controller(StudentController::class)->group(function() {

Route::get('/', [StudentController::class, 'index'])->middleware('auth');
Route::get('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class,  'login'])->name('login')->middleware('guest');
Route::post('/login/process', [UserController::class,  'process']);
Route::get('/search', [UserController::class, 'search'])->name('users.search');

// <for edit the user table>
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    //  edit
// <for update the user table>
 Route::put('/users/{user}/update', [UserController::class, 'update'])->name('users.update');
     //  update
// delete the user table>
Route::put('/users/{user}/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}/destroy',[UserController::class, 'destroy'])->name('users.destroy');;
//  delete



// ---------REGISTRATION FOR PWD MEMBERS-----------------------------------------------------------------------------------------------------------

// table of RegistrationController

Route::get('/registration', [RegistrationController::class, 'index'])->name('registration.index');
Route::get('/registration/create', [RegistrationController::class, 'create'])->name('registration.create');
Route::Post('/registration/store', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/registration/{result}/edit', [RegistrationController::class, 'edit'])->name('result.edit');
Route::put('/registration/update/{result}', [RegistrationController::class, 'update'])->name('registration.update');
// Route::delete('/results/{id}', [RegistrationController::class, 'destroy'])->name('result.destroy');
// Route::delete('/registration/{result}', [RegistrationController::class, 'destroy'])->name('registration.destroy');
// Route::get('/export', [RegistrationController::class, 'export'])->name('export');
// table of RegistrationController



// --------- Profilling------------------------------------------------------------------------

Route::get('/profilling', [RegistrationController::class, 'index'])->name('profilling.index');
Route::get('/search1', [ProfillingController::class, 'search'])->name('pwdmember.search');
Route::delete('/results/{result}', [ProfillingController::class, 'destroy'])->name('result.destroy');
Route::get('/filter', [ProfillingController::class, 'filter']);
Route::get('/export', [ProfillingController::class,'export'])->name('export');
Route::get('perbarangay/export', [ProfillingController::class, 'exportperbarangay'])->name('export.perbarangay');



// / --------- table of profilling-------------------------------------------------------------------------




// ==========================user account===========================================================================

Route::post('/logout', [UserController::class, 'logout']);
Route::Post('/store', [UserController::class, 'store']);
// //  User Route



// --------------------------------------------filter date------------------------------------------------------------------
// Route::get('/filter', [ProfillingController::class, 'filter']);
Route::get('/profilling', [ProfillingController::class, 'index'])->name('profilling.index');

Route::get('/search1', [ProfillingController::class, 'search'])->name('pwdmember.search');

// --------------------------------------------------------------------------------------------------------------



});














Route::controller(StudentController::class)->group(function() {


Route::get('/','index')->middleware('auth');
Route::get('/add/student','create');
Route::post('/add/student','store');


Route::get('/student/{id}','show');
Route::put('/student/{student}','update');
//Route::put('/student/{id}', [StudentController::class, 'cancel']);

// Route::get('/search/students','searchdata');

// Route::delete('/student/{student}','destroy');

Route::get('/Assistance', [AssistanceController::class, 'index']);
Route::get('/Profilling', [ProfillingController::class, 'index']);
Route::get('/Disease', [DiseaseContoller::class, 'index']);
Route::get('/Pwdprofile', [PwdprofileController::class, 'index']);
Route::get('/Assistance', [AssistanceController::class, 'index']);
// Route::get('/Management', [Managementcontroller::class, 'index']);











});

