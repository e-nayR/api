<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Item;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/menu', function (Request $request) {

       $item = Item::all('id','name', 'description','price');

    return $item;
    
});

Route::get('/menu/{id}', function ($id) {

    $check = Item::where('id',$id)->get('name');

    return $check; 
 
});

//o request é o dado que está sendo inserido, ex pela query ou pelo body json
