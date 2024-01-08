
<?php


use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\PwdprofileController;
use App\Http\Controllers\ProfillingController;
// use App\Http\Controllers\DiseaseController;
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
use App\Http\Controllers\DeviceProfileController;
use App\Http\Controllers\DeathController;
use App\Http\Controllers\PdaoAssistanceController;
use App\Http\Controllers\AssistanceTypesController;
use App\Http\Controllers\ProgramAssistanceController;
use App\Http\Controllers\MasterListController;
use App\Http\Controllers\MasterlegderFormController;




  // < registration  for users table>
Route::resource('/Management', Managementcontroller::class);
Route::get('/Management', [ManagementController::class, 'index'])->name('Management.index');

// ================= // <users route>=====================================================================================

 
Route::controller(StudentController::class)->group(function() {

Route::get('/', [StudentController::class, 'index'])->middleware('auth');
Route::get('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class,  'login'])->name('login')->middleware('guest');
Route::post('/login/process', [UserController::class,  'process']);
Route::get('/search', [UserController::class, 'search'])->name('users.search');


// ==========================user account===========================================================================

Route::post('/logout', [UserController::class, 'logout']);
Route::Post('/store', [UserController::class, 'store']);
// //  User Route

// ====================================================================================================================

Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit'); 
 Route::put('/users/{user}/update', [UserController::class, 'update'])->name('users.update');
    
// delete the user table>
Route::put('/users/{user}/update', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}/destroy',[UserController::class, 'destroy'])->name('users.destroy');;
//  delete




// --REGISTRATION FOR PWD MEMBERS
Route::put('/registration/update/{id}', [RegistrationController::class, 'update'])->name('registration.update');
Route::get('/registration', [RegistrationController::class, 'index'])->name('registration.index');
Route::get('/registration/create', [RegistrationController::class, 'create'])->name('registration.create');
Route::get('/registration/show', [RegistrationController::class, 'show'])->name('registration.show');


Route::Post('/registration/store', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/registration/{result}/edit', [RegistrationController::class, 'edit'])->name('result.edit');



//  Profilling
Route::get('/profilling', [RegistrationController::class, 'index'])->name('profilling.index');
Route::get('/search1', [ProfillingController::class, 'search'])->name('pwdmember.search');
Route::delete('/results/{result}', [ProfillingController::class, 'destroy'])->name('result.destroy');
Route::get('/filter', [ProfillingController::class, 'filter']);

// -export excel-
Route::get('/export', [ProfillingController::class,'export'])->name('export');
Route::get('perbarangay/export', [ProfillingController::class, 'exportperbarangay'])->name('export.perbarangay');
Route::get('/senior/export', [ProfillingController::class, 'exportsenior'])->name('export.senior');
Route::get('/listperbarangay/export', [ProfillingController::class, 'exportlistperbarangay'])->name('export.listperbarangay');
Route::get('/types/export', [ProfillingController::class, 'exportypes'])->name('export.types');



// filter date
// /ProfillingController
Route::get('/profilling', [ProfillingController::class, 'index'])->name('profilling.index');
Route::get('/search1', [ProfillingController::class, 'search'])->name('pwdmember.search');



// -PWDprofile-
Route::get('/Pwdprofile', [PwdprofileController::class, 'index'])->name('pwdprofile.index');
Route::get('/search3', [PwdprofileController::class, 'search'])->name('pwdprofile.search');


// --assistance--
Route::get('/Assistance', [AssistanceController::class, 'index']);
Route::get('/assistance/create', [AssistanceController::class, 'create'])->name('assistance.create');


// --devices-
Route::get('/Devices', [DeviceProfileController::class, 'index'])->name('devices.index');
Route::get('/devices/export', [DeviceProfileController::class, 'exportdevices'])->name('export.devices');


// death
Route::get('/Death', [DeathController::class, 'index'])->name('death.index');


// Route::get('/PdaoAssistance',
Route::get('/PdaoAssistance', [PdaoAssistanceController::class, 'index'])->name('pdaoassistance.index');
Route::get('/PdaoAssistance/create', [PdaoAssistanceController::class, 'create'])->name('pdaoassistance.create');
Route::post('/PdaoAssistance', [PdaoAssistanceController::class, 'store'])->name('pdaoassistance.store');
Route::get('/PdaoAssistance/{id}/edit', [PdaoAssistanceController::class, 'edit'])->name('pdaoassistance.edit');
Route::put('/PdaoAssistance/{id}', [PdaoAssistanceController::class, 'update'])->name('pdaoassistance.update');


// '/TypesofAssistance
Route::get('/TypesofAssistance', [AssistanceTypesController::class, 'index'])->name('typesofAssistance.index');
Route::get('/TypesofAssistance/create', [AssistanceTypesController::class, 'create'])->name('typesofAssistance.create');
Route::post('/TypesofAssistance', [AssistanceTypesController::class, 'store'])->name('typesofAssistance.store');
Route::get('/TypesofAssistance/{assistancetype}/edit', [AssistanceTypesController::class, 'edit'])->name('typesofAssistance.edit');
Route::put('/TypesofAssistance/{assistancetype}/update', [AssistanceTypesController::class, 'update'])->name('typesofAssistance.update');
Route::delete('/TypesofAssistance/{assistancetype}/destroy', [AssistanceTypesController::class, 'destroy'])->name('typesofAssistance.destroy');


//programAssistance
Route::get('/ProgramAssistance', [ProgramAssistanceController::class, 'index'])->name('programassistance.index');
Route::get('/ProgramAssistance/create', [ProgramAssistanceController::class, 'create'])->name('programassistance.create');
Route::post('/ProgramAssistance', [ProgramAssistanceController::class, 'store'])->name('programassistance.store');
Route::get('/ProgramAssistance/{programassistance}/edit', [ProgramAssistanceController::class, 'edit'])->name('programassistance.edit');
Route::put('/ProgramAssistance/{programassistance}/update', [ProgramAssistanceController::class, 'update'])->name('programassistance.update');
Route::delete('/ProgramAssistance/{programtype}/destroy', [ProgramAssistanceController::class, 'destroy'])->name('programassistance.destroy');

//Masterlist
Route::get('/MasterListofAssistance', [MasterListController::class, 'index'])->name('masterlist.index');
Route::get('/MasterList/create', [MasterListController::class, 'create'])->name('masterlist.create');
Route::post('/MasterList', [MasterListController::class, 'store'])->name('masterlist.store');
Route::get('/MasterList/{masterlist}/edit', [MasterListController::class, 'edit'])->name('masterlist.edit');
Route::put('/MasterList/{masterlist}/update', [MasterListController::class, 'update'])->name('masterlist.update');
Route::delete('/MasterList/{masterlist}/destroy', [MasterListController::class, 'destroy'])->name('masterlist.destroy');




// Route to display a list of MasterlegderForms
Route::get('/masterledgerofAssistance', [MasterlegderFormController::class, 'index'])->name('masterledger.index');
Route::get('/masterledger/create', [MasterlegderFormController::class, 'create'])->name('masterledger.create');
Route::post('/masterledger', [MasterlegderFormController::class, 'store'])->name('masterledger.store');
Route::get('/masterledger', [MasterlegderFormController::class, 'show'])->name('masterledger.show');
Route::get('/masterledger/{masterledger}/edit', [MasterlegderFormController::class, 'edit'])->name('masterledger.edit');
Route::put('/masterledger/{masterledger}/update', [MasterlegderFormController::class, 'update'])->name('masterledger.update');
Route::delete('/masterledger/{masterledger}/destroy', [MasterlegderFormController::class, 'destroy'])->name('masterledger.destroy');
Route::get('/searchA', [MasterlegderFormController::class, 'searchA'])->name('searchA');
// Route::get('/searchB', [MasterlegderFormController::class, 'searchB'])->name('searchB')->name('masterledger.search');




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
// Route::get('/Disease', [DiseaseContoller::class, 'index']);
// Route::get('/Pwdprofile', [PwdprofileController::class, 'index']);
// Route::get('/Assistance', [AssistanceController::class, 'index']);
// Route::get('/Management', [Managementcontroller::class, 'index']);


});

