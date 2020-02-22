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

use App\Role;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/user/roles', ['middleware'=>['role','auth','web'],function () {

    return "Middleware role";
}]);


Route::get('/role', function () {
    $role = new Role(['role'=>'admin']);
    $role->save();
});

Route::get('/getrole', function () {
    $my_role = Role::findOrFail(1);
    echo $my_role->role;
});


Route::get('/admin', 'AdminController@index');



















