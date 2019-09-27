<?php
use App\Models\Usuario;
use App\Models\Engenharia;
use App\Models\Pergunta;
use App\Models\LogAcesso;
use App\Models\PontosUsuario;
use App\Models\Score;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;


// Auth::routes();
Route::get('/ranking', function () {
    // $top10 = Score::with('hasUsuario')->orderBy('pontos','DESC')->limit(10)->get();
    $top10 = PontosUsuario::with('hasUsuario')
    ->orderBy('intpontos','DESC')
    ->orderBy('aproveitamento','DESC')
    ->limit(10)->get();

    // dd($top10);
    return view('score',compact('top10'));
    }
);

Route::post('/salvarPergunta','GameController@salvarPerguntas');
Route::get('/listarPergunta/{id?}','GameController@listarPerguntas');
Route::post('/salvarEdicaoPergunta','GameController@salvareditarPerguntas');



Route::get('/MinhaConta','UsuarioController@index');
Route::post('/salvarEditUsuario','UsuarioController@salvarEditUsuario');
Route::post('/upDisciplinaUsuario','UsuarioController@atualizarDisciplina');
Route::post('/upOptativaUsuario','UsuarioController@atualizarOptativa');

Route::get('/home', 'HomeController@index');

Route::get('/login', function () {return view('auth.login');});
Route::get('/formPergutas', function () {return view('formPergutas');});




Route::post('/logar','Auth\LoginController@login');
Route::post('/logout','Auth\LoginController@logout');
Route::get('/logout','Auth\LoginController@logout');
// Route::get('/resetarSenha','Auth\LoginController@logout');
Route::get('/resetarSenha', function () {return view('auth.passwords.email');});


Route::get('/teste', function () {return view('teste');});


// Route::POST('/login-simple', function () {return view('auth.login');});


Route::get('/', function () {
    // dd(LogAcaesso::all());

//     $hora_atual = Carbon::now();
//     $hora_atual = $hora_atual->format('d-m-Y H:i:s');
//     $hora_logado = new Carbon(session('loginAdmin'));
//
//     $difference = $hora_logado->diff($hora_atual);
//     $tempo_total = "$difference->d-$difference->m-$difference->y  $difference->h:$difference->i:$difference->s";
//
//     $a = new Carbon($tempo_total);
// // 18-09-2019 11:47:02
//     dd($a->format('H:i:s'));
    // ->days
    // $diferenca = $hora_atual>diff(session('loginAdmin'));
    // dd($diferenca);
    // dd(Auth::user()->idUsuarios);


    if(Auth::user()){
        return redirect('/home');
    }
    return redirect('/login');
});


Route::get('/cadastro', 'UsuarioController@cadastro');
Route::post('/salvarUsuario','UsuarioController@salvarUsuario');

Route::get('/novaSenha', function () {
    return view('formNovaSenha');
});




Route::get('/MinhasDisciplinas', 'UsuarioController@minhasDisciplinas');
Route::get('/MinhasOptativas', 'UsuarioController@minhasOptativas');
Route::post('/SalvarNovaSenha','UsuarioController@novaSenha');
Route::post('/resetSenha','UsuarioController@resetSenha');
Route::get('/getDisciplinasFeitas/{id?}','UsuarioController@getDisciplinasFeitas');
Route::get('/getOptativasFeitas','UsuarioController@getOptativasFeitas');

Route::get('/game', 'GameController@jogar');
Route::post('/salvarPontos','GameController@salvarPontos');
Route::get('/relatorio','GameController@relatorio');





// Route::get('login', [
//   'as' => 'login',
//   'uses' => 'Auth\LoginController@showLoginForm'
// ]);
// Route::post('login', [
//   'as' => '',
//   'uses' => 'Auth\LoginController@login'
// ]);
// Route::get('logout', [
//   'as' => 'logout',
//   'uses' => 'Auth\LoginController@logout'
// ]);
// Route::post('logout', [
//   'as' => 'logout',
//   'uses' => 'Auth\LoginController@logout'
// ]);

////// Route::get('/logoff', "LoginController@logoff");

// create table bict.logAcesso(
// 	idlogacesso int not null auto_increment primary key,
//     idusuario int not null,
//     tempo varchar(200)
//     );
