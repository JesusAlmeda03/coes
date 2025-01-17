<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;

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

Route::get('/', [PostController::class, 'index']);


Route::get('/custom', function(){
    $msj = 'lorem 2';
    $data = [
        'msj' => 'mensaje', 
        'edad' => 15, 
        'deuda' => '$200.00',
    ];
    return view('custom', $data);
});


Route::resource('post', PostController::class);