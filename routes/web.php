<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/toto",function(){
    return view('toto');
});
// Route::get("/bonjour",function(){
//     return "Bonjour anonyme";
// });

Route::get("/bonjour/{name?}",function(?string $name = "anonyme"){
    $name = strtoupper($name);
    //un peu de logique....
    return "Bonjour {$name}";
})->name("bjr");


Route::get("/courses",[CourseController::class,"index"])->name("courses");
