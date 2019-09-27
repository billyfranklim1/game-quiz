<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\EmailNovaSenha;
use Illuminate\Support\Facades\Auth;
use App\Models\Engenharia;
use App\Models\Periodo;
use App\Models\Disciplina;
use App\Models\UsuarioObrigatoria;
use App\Models\EngenhariaOptativa;
use App\Models\UsuarioOptativa;

class UsuarioController extends Controller
{
    public function atualizarOptativa(Request $request){
        // dd($request);
        $usuario = Usuario::find(Auth::user()->idUsuarios);

        $usuario->disciplinaOptatva()->sync($request['idDiciplina']);
        $usuario->save();
        // dd(ok)
        return "Atualizado";


    }

    public function getOptativasFeitas(){
        $obrigatoriasFeitas =  UsuarioOptativa::where('fk_idusuario',Auth::user()->idUsuarios)->get();
        return $obrigatoriasFeitas;
    }

    public function minhasOptativas(Request $request){
        // dd($request);
        // if($id){
        //     $engenhariaOptativas = EngenhariaOptativa::with(['hasEngenharia','hasOptativa'])
        //     ->where('fk_idengenharia',Auth::user()->fk_idengenharia)
        //     ->where('disciplina_idDisciplina',$id)
        //     ->get();

        //     $optativas = $engenhariaOptativas;
        //     return view('minhasOptativas', compact('optativas'));

        // }
        $engenhariaOptativas = EngenhariaOptativa::with(['hasEngenharia','hasOptativa'])
            ->where('fk_idengenharia',Auth::user()->fk_idengenharia)
            ->get();

        $optativas = $engenhariaOptativas;

        return view('minhasOptativas', compact('optativas'));

    }

    public function getDisciplinasFeitas($id=""){
        if($id){
            $disciplinasFeitas =  UsuarioObrigatoria::
            where('usuario_idUsuarios',Auth::user()->idUsuarios)
            ->where('disciplina_idDisciplina',$id)
            ->get();

            return $disciplinasFeitas;
        }
        $disciplinasFeitas =  UsuarioObrigatoria::
        where('usuario_idUsuarios',Auth::user()->idUsuarios)
        // ->where('disciplina_idDisciplina',$id)
        ->get();

        return $disciplinasFeitas;

    }

    public function minhasDisciplinas(){
        $disciplinas       = Disciplina::get();
        // dd($disciplinas);

        $disciplinasFeitas =  UsuarioObrigatoria::
        where('usuario_idUsuarios',Auth::user()->idUsuarios)->get();
        // dd($disciplinasFeitas);

        return view('minhasdisciplinas', compact('disciplinas','disciplinasFeitas'));

    }

    public function atualizarDisciplina(Request $request){
        // dd();
        $usuario = Usuario::find(Auth::user()->idUsuarios);

        $usuario->disciplinaObrigatoria()->sync($request['idDiciplina']);
        $usuario->save();
        return "Atualizado";

        // return redirect('/MinhasDisciplinas')->with('successMinhasDisciplinas', 'Atualizado com sucesso');


    }

    public function cadastro(){
        $engenharias = Engenharia::get();
        $periodos    = Periodo::get();

        // return view ('cadastro',compact('engenharias','periodos'));
        return view ('register',compact('engenharias','periodos'));

    }

    public function index(){
        $usuario = Usuario::with('hasEngenharia','hasPeriodo')
            ->where('idUsuarios', Auth::user()->idUsuarios)
            ->first();

        $engenharias = Engenharia::get();
        $periodos    = Periodo::get();

        return view ('minhaconta',compact('usuario','engenharias','periodos'));
    }

    public function salvarEditUsuario(Request $request){
        // dd($request);
        try {


            $id       = $request['idUsuarios'];
            $email = $request['stremailusuario'];

            // $novoUsuario = Usuario::find($id);
            $novoUsuario = Usuario::where('stremailusuario',$email)->first();
            // $emailAtual = $novoUsuario->stremailusuario;
            // dd($novoUsuario);



            if($novoUsuario->stremailusuario !=  $email){
                $usuario = Usuario::where('stremailusuario',$request['stremailusuario'])->first();

                if($usuario){
                    return redirect('/MinhaConta')->with('errorMinhaConta', 'E-mail já cadastado, escolha outro email');
                }
            }


            $novoUsuario->strnomeusuario  = $request['strnomeusuario'];
            $novoUsuario->stremailusuario = $request['stremailusuario'];
            $novoUsuario->fk_idengenharia = $request['fk_idengenharia'];
            $novoUsuario->fk_idperiodo    = $request['fk_idperiodo'];

            $novoUsuario->save();

            return redirect('/MinhaConta')->with('successMinhaConta', 'Atualizado com sucesso');


        } catch (\Exception $e) {
            return redirect('/MinhaConta')->with('errorMinhaConta', "Erro ao Atualizar");

        }


    }

    public function salvarUsuario(Request $request){
        try {
            // dd($request);

            $usuario = Usuario::where('stremailusuario',$request['stremailusuario'])->first();

            if($usuario){
                return redirect('/cadastro')->with('errorcadastro', 'E-mail já cadastado, recupere sua senha');
            }
            if($request['strsenha'] != $request['confirme-strsenha']){
                return redirect('/cadastro')->with('errorcadastro', 'As senhas não coincidem');
            }

            $novoUsuario = new Usuario();
            $novoUsuario->strnomeusuario  = $request['strnomeusuario'];
            $novoUsuario->stremailusuario = $request['stremailusuario'];
            $novoUsuario->fk_idperiodo    = $request['fk_idperiodo'];
            $novoUsuario->strsenha        = Hash::make($request['strsenha']);
            $novoUsuario->fk_idengenharia = $request['fk_idengenharia'];

            $novoUsuario->save();

            return redirect('/cadastro')->with('successcadastro', 'Cadastrado com sucesso');


        } catch (\Exception $e) {
            return redirect('/cadastro')->with('errorcadastro', 'Erro ao cadastrar');

        }


    }

    public function resetSenha(Request $request){
        // dd($request);
        try {
            $email = $request['stremailusuario'];
            $usuarioEmail = Usuario::where('stremailusuario',$email)->first();
            $novaSenha = self::generatePassword();
            $usuarioEmail->strsenha = Hash::make($novaSenha);
            $usuarioEmail->save();

            if(Mail::to($usuarioEmail->stremailusuario)->send(new EmailNovaSenha($usuarioEmail,$novaSenha))){
                return redirect('/resetarSenha')->with('success', 'Uma Nova Senha Envia Para o Email Cadastrado');

            }else {
                return redirect('/resetarSenha')->with('error', 'Erro ao Enviar o Email');

            }
            // dd('ok');

        } catch (\Exception $e) {
            return redirect('/resetarSenha')->with('error', 'Erro ao Enviar o Email');
            // dd('n ok');
        }
    }

    public function novaSenha(Request $request){
        try {
            // dd($request);
            $senhaAtual        = $request['strsenhaatual'];
            $senhaNova         = $request['strnovasenha'];
            $senhaNovaConfirma = $request['confirme-strsenha'];


            // if(){
            if (Hash::check($senhaAtual,  Auth::user()->strsenha)){
                // dd("msm senha");
                if( $senhaNova == $senhaNovaConfirma){
                    $usuario = Usuario::find(Auth::user()->idUsuarios);
                    $usuario->strsenha = Hash::make($senhaNovaConfirma);
                    $usuario->save();
                    return redirect('/novaSenha')->with('successNovaSenha', 'Senha Alterada');


                }else{
                    return redirect('/novaSenha')->with('errorNovaSenha1', 'Senha Não São Iguais');

                }
            }else {
                // dd("senha diferente");
                return redirect('/novaSenha')->with('errorNovaSenha', 'Senha Atual incorreta');

            }
            // $senhaNovaConfirma
            // $email = $request['stremailusuario'];
            // $usuarioEmail = Usuario::where('stremailusuario',$email)->first();
            // $novaSenha = self::generatePassword();
            // $usuarioEmail->strsenha = Hash::make($novaSenha);
            // $usuarioEmail->save();
            //
            // Mail::to($usuarioEmail->stremailusuario)->send(new EmailNovaSenha($usuarioEmail,$novaSenha));

            // return redirect('/password/reset')->with('success', 'Nova Senha Envia Para o Email Cadastrado');

        } catch (\Exception $e) {
            // return redirect('/password/reset')->with('error', 'Erro ao Enviar o Email');

        }


    }

    function generatePassword($qtyCaraceters = 8){
        //Letras minúsculas embaralhadas
        $smallLetters = str_shuffle('abcdefghijklmnopqrstuvwxyz');

        //Letras maiúsculas embaralhadas
        $capitalLetters = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ');

        //Números aleatórios
        $numbers = (((date('Ymd') / 12) * 24) + mt_rand(800, 9999));
        $numbers .= 1234567890;

        //Caracteres Especiais
        $specialCharacters = str_shuffle('!@#$%*-');

        //Junta tudo
        $characters = $capitalLetters.$smallLetters.$numbers.$specialCharacters;

        //Embaralha e pega apenas a quantidade de caracteres informada no parâmetro
        $password = substr(str_shuffle($characters), 0, $qtyCaraceters);

        //Retorna a senha
        return $password;
    }
}
