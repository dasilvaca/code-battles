<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', [UserController::class, 'show']);

Route::group(['prefix' => 'test'], function (){
    Route::get('/db', function () {
        if (DB::connection()->getDatabaseName()) {
            return sprintf('Connected to database with name of %s.', DB::connection()->getDatabaseName());
        }
        return 'Something went wrong with db connection!';
    });
});
