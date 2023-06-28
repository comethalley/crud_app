<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TwiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/user/{id}/{group}', function($id, $group){
    return response($id."-".$group, 200);
});*/

// Route::get('/request-json', function(){
//     return response()->json(['name' => 'Kenneth', 'age' => '22']);
// });

// Route::get('/request-download', function(){
//     $path = public_path().'/sample.txt';
//     $name = 'sample.txt';
//     $headers = array(
//         'Content-type : application/text-plain',
//     );
//     return response()->download($path, $name, $headers);
// });

//Route::get('/user',[UserController::class, 'index']);//->name('login'); //name is alias

//Route::get('/user/{id}',[UserController::class, 'show']);//->middleware('auth'); para sa mga authenticated/login na user gagamit ng middleware

//Route::get('/twice', [TwiceController::class, 'index']);

//common routing naming
//index - show all data or students
//show - show a single data or students
//create - show a form to a new user
// store - store a data
//edit - show form to edit a data
//update - update a data
//destroy - delete a data

Route::get('/', [StudentController::class, 'index']);

Route::get('/login', [UserController::class, 'login']);
Route::post('/login/process', [UserController::class, 'process']);

Route::get('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/store', [UserController::class, 'store']);