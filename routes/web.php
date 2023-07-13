<?php

use App\Http\Controllers\login;
use App\Http\Livewire\Demo;
use App\Models\Cash;
use App\Models\Category;
use App\Models\Color;
use App\Models\CustomerRegistration;
use App\Models\image;
use App\Models\Size;
use App\Models\types;
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
// Route::get('user/{id}', \App\Http\Livewire\ShowUser::class); 

Route::get('/', function () {
    
    return view('alpin');
});

Route::get('/aa', function () {
    return view('main');
});
Route::get('a/{product}/{size}/{color}',[login::class,'cash']);

Route::get('b',function(){
    return view('home');
});


Route::get('/a/{id}', [login::class,'list']);


Route::get('c',[login::class,'size']);

Route::get('d',[login::class,'money']);

Route::get('e',[login::class,'sight']);

Route::get('f',[login::class,'category']);

Route::get('g',[login::class,'card']);

Route::get('h',[login::class,'product']);

Route::get('lux',[login::class,'lux']);
