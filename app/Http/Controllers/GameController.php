<?php

namespace App\Http\Controllers;

// Bibliotecas Ultilizadas
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

// Emails Ultilizadas
use App\Mail\EmailNovaSenha;

// Model de Ultilizadas
use App\Models\Pergunta;
use App\Models\PontosUsuario;
use App\Models\RespondidasUsuario;
use App\Models\Usuario;





class GameController extends Controller
{
    public function listarPerguntas($id = ''){
        if($id){
            $pergunta = Pergunta::where('idPergunta',$id)->get();
            // dd($pergunta);
            return view('editarPergunta',compact('pergunta'));
        }else{

            $perguntas = Pergunta::get();
            // dd($perguntas);
            return view('listarPerguntas',compact('perguntas'));
        }

    }
    public function salvareditarPerguntas(Request $request){
        // dd($request);
        try {
            $id = $request['idPergunta'];
            $novaPergunta  = Pergunta::find($id);
            $novaPergunta['perg'] = $request['perguntas'];
            $novaPergunta['alta'] = $request['alta'];
            $novaPergunta['altb'] = $request['altb'];
            $novaPergunta['altc'] = $request['altc'];
            $novaPergunta['altd'] = $request['altd'];
            $novaPergunta['altCorreta'] = $request ['altCorreta'];
            $novaPergunta['justificativa'] = 'justificativa';
            $novaPergunta->save();

            return redirect("/listarPergunta/$id")->with('successSalvaEditPergunta', "Atualizado Com Sucesso !!");

            // http://127.0.0.1:8000/formPergutas

        } catch (\Exception $e) {
            // dd($e);
            return redirect("/listarPergunta/$id")->with('errorSalvaEditPergunta', "ERRO !!");

        }


    }

     public function salvarPerguntas(Request $request){
         try {
             $novaPergunta  = new Pergunta();
             $novaPergunta['perg'] = $request['perguntas'];
             $novaPergunta['alta'] = $request['alta'];
             $novaPergunta['altb'] = $request['altb'];
             $novaPergunta['altc'] = $request['altc'];
             $novaPergunta['altd'] = $request['altd'];
             $novaPergunta['altCorreta'] = $request ['altCorreta'];
             $novaPergunta['justificativa'] = 'justificativa';

             $novaPergunta->save();
             return redirect('/formPergutas')->with('successSalvaPergunta', "Cadastrada Com Sucesso !!");



         } catch (\Exception $e) {
             return redirect('/formPergutas')->with('erroSalvaPergunta', "ERRO !!!");

             // dd($e);
         }


     }
     public function jogar(){
         $qntPerg   = 10;
         $idPerguntaRespondida = [];

         $perguntaRespondida = RespondidasUsuario::with('hasPergunta')->where('fk_idusuario',Auth::user()->idUsuarios)->get();
         $perguntas = Pergunta::get();
         // $perguntas = Pergunta::
         // limit($qntPerg)
         // ->orderBy('idPergunta', 'desc')
         // ->get();


         $feitas = count($perguntaRespondida);
         $todas = count($perguntas);

         // return view('jogo',compact('perguntas','qntPerg'));


         if($feitas == $todas){

             $iDtodasRespondidas = [];
             $perguntaRespondida = RespondidasUsuario::where('fk_idusuario',Auth::user()->idUsuarios)->get();

             // Deleta todos os registros de perguntas respondidas
             foreach ($perguntaRespondida as $pergunta) {
                 RespondidasUsuario::destroy($pergunta->id_respondidas_usuario);
             }

             $perguntas = Pergunta::inRandomOrder()->limit($qntPerg)->get();

             // Registra as novas perguntas que serão respondidas
             foreach ($perguntas as $pergunta) {
                 $nova = new RespondidasUsuario();
                 $nova->fk_idusuario =  Auth::user()->idUsuarios;
                 $nova->fk_idpergunta = $pergunta->idPergunta;
                 $nova->save();
             }
             // dd($perguntas);
             return view('jogo',compact('perguntas','qntPerg'));

         }

         else {
             $idPerguntaRespondida = [];
             $perguntaRespondida = RespondidasUsuario::where('fk_idusuario',Auth::user()->idUsuarios)->get();

             foreach ($perguntaRespondida as $pergunta) {
                 array_push($idPerguntaRespondida, $pergunta->fk_idpergunta);
             }
             $perguntas = Pergunta::inRandomOrder()->limit($qntPerg)
             ->whereNotIn('idPergunta',$idPerguntaRespondida)->get();

             if(count($perguntas)< $qntPerg){
                 $iDtodasRespondidas = [];
                 $perguntaRespondida = RespondidasUsuario::where('fk_idusuario',Auth::user()->idUsuarios)->get();

                 // Deleta todos os registros de perguntas respondidas
                 foreach ($perguntaRespondida as $pergunta) {
                     RespondidasUsuario::destroy($pergunta->id_respondidas_usuario);
                 }

                 $perguntas = Pergunta::inRandomOrder()->limit($qntPerg)->get();

                 // Registra as novas perguntas que serão respondidas
                 foreach ($perguntas as $pergunta) {
                     $nova = new RespondidasUsuario();
                     $nova->fk_idusuario =  Auth::user()->idUsuarios;
                     $nova->fk_idpergunta = $pergunta->idPergunta;
                     $nova->save();
                 }
                 return view('jogo',compact('perguntas','qntPerg'));

             }

             foreach ($perguntas as $pergunta) {
                 $nova = new RespondidasUsuario();
                 $nova->fk_idusuario =  Auth::user()->idUsuarios;
                 $nova->fk_idpergunta = $pergunta->idPergunta;
                 $nova->save();
             }
             // dd($perguntas);

             return view('jogo',compact('perguntas','qntPerg'));

         }

     }

     public function salvarPontos(Request $request){
         try {
             $pontos = $request['pontos'];
             $usuario = Auth::user()->idUsuarios;
             $aproveitamento= $request['aproveitamento'];

             $ponto = new PontosUsuario();
             $ponto->intpontos    = $pontos;
             $ponto->fk_idusuario = $usuario;
             $ponto->aproveitamento =$aproveitamento;
             $ponto->save();

             return 'Salvo Com Sucesso';
             // return $request;



         } catch (\Exception $e) {
             return 'Erro !';

         }


     }

     public function relatorio(){
         $relatorio = PontosUsuario::where('fk_idusuario',Auth::user()->idUsuarios)->get();
         // dd($relatorio);
         $meses = ["January", "February", "March", "April", "May", "June", "July"];
         $valores =  [0, 90, 120, 240, 140, 250, 190];
         return view('relatorio', compact('relatorio','meses','valores'));
     }
}
