<?php

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
    return view('welcome');
});

    
Route::get('usuarios', function () {
    $users = App\User::take(25)->get();
    foreach ($users as $user) {
    	echo "<li>".$user->fullname."<br></li>";
    }
});

Route::resource('users', 'UserController');
