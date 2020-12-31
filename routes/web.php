<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Mockery\Matcher\Contains;

/*Route::get('/', function () {
    return view('welcome');
});
*/


Route::get('/',  [ContactController::class,'index']);


Route::get('/contact', [ContactController::class],'contact');
Route::post('store', [ContactController::class],'store');





