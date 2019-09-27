<?php
use App\Models\Usuario;
use App\Models\Engenharia;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

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
Route::get('/MinhaConta','UsuarioController@index');
Route::post('/salvarEditUsuario','UsuarioController@salvarEditUsuario');


// function(){
//     return view ('minhaconta');
// });
Auth::routes();
Route::get('/', function () {;
    if(Auth::user()){
        return redirect('/home');
    }
    return redirect('/login');
});

Route::get('/cadastro', 'UsuarioController@cadastro');

// function () {
//     $engenharias = Engenharia::get();
//     return view('cadastro',compact('engenharias'));
// });
// //
Route::post('/salvarUsuario','UsuarioController@salvarUsuario');

Route::get('/home', function () {
    if(Auth::user()){
        return view('home');
    }
    return redirect('/login');
});

Route::get('/novaSenha', function () {
    return view('formNovaSenha');
});

Route::post('/SalvarNovaSenha','UsuarioController@novaSenha');

Route::post('/resetSenha','UsuarioController@resetSenha');


// Auth::routes();

// Route::get('login', [
//   'as' => 'login',
//   'uses' => 'Auth\LoginController@showLoginForm'
// ]);
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('login', [
  'as' => 'login',
  'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', [
  'as' => '',
  'uses' => 'Auth\LoginController@login'
]);
Route::get('logout', [
  'as' => 'logout',
  'uses' => 'Auth\LoginController@logout'
]);
Route::post('logout', [
  'as' => 'logout',
  'uses' => 'Auth\LoginController@logout'
]);
////// Route::get('/logoff', "LoginController@logoff");
