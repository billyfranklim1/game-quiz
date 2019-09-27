<?php

namespace App\Http\Controllers\Auth;

// use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use App\Models\Usuario;
// use Illuminate\Http\Request;
//
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Foundation\Auth\User as Authenticatable;


use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;
use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use AuthenticatesAndRegistersUsers, ThrottlesLogins;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\User as Authenticatable;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        // dd('ok');
        try{
            $strusuario  = request()->get('stremailusuario');
            // dd($strusuario);
            // $usuario = Usuario::with('hasFuncionario')
            //     ->where(DB::raw('BINARY strusuario'), $strusuario)
            //     ->first();
            $usuario = Usuario::with('hasEngenharia')->where('stremailusuario', $strusuario)
                ->first();
            // dd($usuario->idUsuarios);
            if($usuario){
                $senha       = $usuario->strsenha;
                $strsenha    = request()->get('strsenha');
                // dd( Hash::make('123456789'));


                if (Hash::check($strsenha, $senha)){
                // if ($strsenha == $senha){

                    Auth::loginUsingId($usuario->idUsuarios); // autentica o usuário

                    session(["login" => null]);
                    session(["loginAdmin" => null]);
                    return redirect('/home');//,compact($usuario));
                    // return $usuario;
                    // dd("ok");
                }else{
                    // dd("naa ok");
                    session(["error" => null]);
                    session(["error" => "Credenciais incorreta"]);
                    return redirect('/login');

                }
            }else{
                session(["error" => null]);
                session(["error" => "Credenciais incorreta"]);
                // return redirect('/administracao/login-adm');
                return redirect('/login');

                // dd("n ok");

            }

        }catch (\Exception $e) {
            session(["error" => null]);
            session(["error" => "Ocorreu um erro ao tentar logar!"]);

            // $retorno['status'] = 2;
            // $retorno['title'] = "Opss";
            // $retorno['msg'] = "Ocorreu um erro ao tentar logar!";//$e->getMessage();
            // return redirect('/administracao/login-adm');
            return redirect('/login');

            // dd($e);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        $request->session()->regenerate();
        // if (session("login")) {
        session(["login" => null]);
        session(["loginAdmin" => null]);
        // return redirect('/');
        // }

        // if (session("loginAdmin")) {
        session(["login" => null]);
        session(["loginAdmin" => null]);
        // return redirect('/login-adm');
        // }
        // return redirect('/administracao/login-adm');
        return redirect('/login');

    }
}
