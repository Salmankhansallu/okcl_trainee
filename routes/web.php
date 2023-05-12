<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\singleActionController;
use App\Http\Controllers\photoController;
use App\Http\Controllers\formController;
use App\Models\okcl_model;
use App\Http\Controllers\join_table;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/home/{name?}',function($name=null){
//     $id=5;
//     $my="<h1>salman</h1>";
//     $data=compact('name','id','my');
//     return view("home")->with($data);
// });
// Route::get('/',function(){
//    return view("home");
// });

// Route::get('about',function(){
//     return view("about");
//  });
//  Route::get('contact',function(){
//     return view("contact");
//  });

//  Route::get("/index",[Democontroller::class,"index"]);
//  Route::get("/__invoke",singleActionController::class);
//  Route::resource("/photo",photoController::class);
// Route::any('/test',function(){
//     return "<h1>hello test there</h1>";
// });
Route::get('/qrcode',[formController::class,'qrcode']);


Route::get('/',[formController::class,'index']);
Route::get('/form',[formController::class,'registeration']);
Route::post('/register',[formController::class,'register']);
// Route::get("/user",function(){
//    $user=okcl_model::all();
//    echo "<pre>";
//    print_r($user->toArray());
 
// });






// Route::middleware(['guard','web'])->group(function(){
//     Route::get('/user-view/{lang?}',[formController::class,'view',]);
//     Route::get('/login',[formController::class,'login']);
// });
Route::get('/user-view/{lang?}',[formController::class,'view',])->middleware("guard");
Route::get('/login',[formController::class,'login'])->middleware("loginguard");
Route::post('/loginuser',[formController::class,'loginuser']);






Route::get("/delete/{id}",[formController::class,"delete"]);
Route::get("/permanent_delete/{id}",[formController::class,"permanent_delete"]);
Route::get("/trash",[formController::class,"trash"]);


Route::get("/restore/{id}",[formController::class,"restore"]);
Route::get("/update/{id}",[formController::class,"update"]);
Route::post("/update/{id}",[formController::class,"update_user"]);



Route::get('/logout',[formController::class,'logout']);

Route::get('/forget',[formController::class,'forget'])->middleware("forgetguard");
Route::post('/reset_password',[formController::class,"reset_password"]);


Route::get('/upload',[formController::class,'upload']);
Route::post('/upload',[formController::class,'upload_file']);



Route::get('/data',[join_table::class,"index"]);
Route::get('/group',[join_table::class,"group"]);

