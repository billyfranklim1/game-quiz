<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disciplina;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use App\Models\UsuarioObrigatoria;
use App\Models\EngenhariaOptativa;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $a = 1;
        $disciplinas = Disciplina::get();
        $disciplinasFeitas =  UsuarioObrigatoria::where('usuario_idUsuarios',Auth::user()->idUsuarios)->get();
        $optativas = EngenhariaOptativa::with(['hasEngenharia','hasOptativa'])
            ->where('fk_idengenharia',Auth::user()->fk_idengenharia)
            ->get();

        // $optativas = $engenhariaOptativas;

        return view('home',compact('disciplinasFeitas','disciplinas','optativas' ));
    }

    public function minhasDisciplinas(){
        $disciplinas = Disciplina::get();
        // $disciplinasUsuario ::
        $disciplinasFeitas = Usuario::with('disciplinaObrigatoria')->where('idUsuarios', Auth::user()->idUsuarios)->first();
        // dd($disciplinasFeitas);

        // dd($disciplinas);
        return view('minhasdisciplinas', compact('disciplinas','disciplinasFeitas'));

    }
}
