<?php
// session_start();
// if(!empty($_SESSION['idPessoa'])){
//
//   //if($_SESSION['u_idTipoPes'] ='1')){
//
//   //	echo "Olá Aluno ".$_SESSION['nomePessoa'].", Bem vindo <br>";
//   echo "<a href='sair.php'> <button class='btn btn-success' > Sair</button></a>";
//   //echo "<a href='sair.php'>Sair</a>";
// }else{
//   $_SESSION['msglg'] = "<div class='alert alert-danger'>Área restrita!</div>";
//   //echo "Área restrita!";
//   header("Location: index.php");
// }


// include ("functions.php");

// $perg = listaPerguntas();
//var_dump($perg);
// $idp = $_SESSION['idPessoa'];

$idp = Auth::user()->idUsuarios ;
// dd($perguntas);

?>


<!-- <!DOCTYPE html>
<html>
<head>
  <link href="css/bootstrap.css" rel="stylesheet">

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Jogar</title>
</head> -->

@extends('layouts.app')

@section('content')
<body id="tudo">
  <?php //dd($perguntas); ?>

  <a href='aluno.php'> <button class='btn btn-success' >Pagina Inicial</button></a>


  <h1>Perguntass  </h1>




  <?php
  $i = 0;
  foreach ($perguntas as $pergunta) {

    ?>
  </tr>


  <input type="hidden" value="<?=$i=$i + 1 ?>">
  <div class="container" id="qst<?=$i?>" >


    <h4><?=$i?>  de <?=sizeof($perguntas)?> </h4>
    <div class="d-flex shadow p-3 mb-5 bg-white rounded" id="box">
      <form class="form-group" style="" id="">

        <div name="pergunta" id=""  >
          <div class="row">

            <strong><?=$i?> )<?=$pergunta['perg']?> </strong>
            <input id="j<?=$i?>" value="<?=$pergunta["justificativa"]?>" type="hidden">
            <input id="c<?=$i?>" value="<?=$pergunta["altCorreta"]?>" type="hidden">

          </div>
          <div class="row col-md-12">
            <div class="col-md-6">
              A)<?=$pergunta["alta"]?>
            </div>
            <br>
            <div class="col-md-6">
              B)<?=$pergunta["altb"]?>
            </div>
          </div>

          <div class="row col-md-12">
            <div class="col-md-6">
              C)<?=$pergunta["altc"]?>
            </div>
            <br>
            <div class="col-md-6">
              D)<?=$pergunta["altd"]?>
            </div>
          </div>
        </div>

        <input id="resposta<?=$i?>" name="resposta" type="hidden" value="<?=$pergunta['altCorreta']?>">
        <input id="id" name="id" type="hidden" value="<?=$i?>">
        <br>
        <select name="alternativa" id="alternativa<?=$i?>" class="form-control" >
          <option value=''>Selecione a Alternativa Correta</option>
          <option value='A'>A</option>
          <option value='B'>B</option>
          <option value ='C'>C</option>
          <option value ='D'>D</option>
        </select>

        <input id="verifica_<?=$i?>" type="button" class="btn btn-primary" value="Verificar" onclick="verifiResposta(<?=$i?>),this.disabled=true"/><br><br>
        <input id="proximo_<?=$i?>" type="button" class="btn btn-primary" value="Proximo" onclick="mostrarPrx(<?=$i?>)">




        <input id="butao"  type="hidden" class="btn btn-primary" value="" onclick=""/>

        <div>
          <div id="<?=$i?>" class="alert alert-success" role="alert" style="display: none">

          </div>

        </div>
      </div>

    </form>
  </div>


<?php
}
?>
<div class="container" id="qst6" >
  <div id="btnr">
    <h1>FIM</h1>
    <input id="resultado" type="button" class="btn btn-primary" value="Ver Resultado"  onclick="resultado()">
  </div>
  <div id="btnrr">
    <h1>Resultado</h1>
    <h4>Pontuação: </h4><h4 id="score"></h4>
    <input id="cadr" type="button" class="btn btn-primary" value="Adicionar ao Ranking" onclick="Mudarestado('btnrrr'),Mudarestado('btnrr'),ptotal()">
    <a href="index.php">Menu iniciar</a>
    <a href='jogar.php'> <button class='btn btn-success' >Jogar Novamente</button></a>
  </div>
  <div id="btnrrr">

    <h1>Cadastrar ao ranking</h1>

    <form action="/cadscore" class="form-group" method="post">
      <div >

        <input required name="pontuacao" id="ptotal" type="text" value="" class="form-control" readonly="true">
        <input type="submit" value="CADASTRAR" class="form-control btn btn-primary">
        <input type="hidden" required="" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" required="" name="" value="<?=$idp?>">


      </div>
    </form>
  </div>
</div>




















<script type="text/javascript">

var pts = parseInt("0");
// alert(pts);

document.getElementById("qst"+6).style.display='none';
document.getElementById("qst"+2).style.display='none';
document.getElementById("qst"+3).style.display='none';
document.getElementById("qst"+4).style.display='none';
document.getElementById("qst"+5).style.display='none';

var idd=document.getElementById("id").value;
document.getElementById("proximo_"+idd).style.display='none';
document.getElementById("proximo_"+2).style.display='none';
document.getElementById("proximo_"+3).style.display='none';
document.getElementById("proximo_"+4).style.display='none';
document.getElementById("proximo_"+5).style.display='none';




// var prx = idd;
//var prx1 = prx
// prx1++;
//alert(prx);
//Mudarestado('qst'+prx);
//Mudarestado('qst'+prx1);
//document.getElementById("qst"+prx).style.display='none';
//document.getElementById("box").style.display='none';


function myFunction() {
  //document.getElementById("myForm").submit();
  document.getElementById("botao").style.display='none';
}
var resposta;
var alternativa;
var selecionar;

function verifiResposta(id){


  // alert(id);
  //prx++;

  resposta = document.getElementById('resposta'+id).value;
  alternativa = document.getElementById('alternativa'+id).value;

  //alert(resposta);
  if(alternativa == resposta){
    pts ++;
    //document.getElementById("pts").innerHTML=(pts);
    mostrar(id);
  }else{
    document.getElementById(id).innerHTML=("ERRADA");
    ocultar(id);
  }
  document.getElementById("proximo_"+id).style.display='block';
  //var ptotal = document.getElementById(pts).value;
  //alert(ptotal);

}

function mostrar(id){
  document.getElementById(id).style.display='block';
  document.getElementById(id).innerHTML=("CORRETA");
}
function ocultar(id){
  document.getElementById(id).style.display='block';
  document.getElementById(id).classList.add('alert-danger');
  //document.getElementById(id).innerHTML=("INCORRETA");
  var j = document.getElementById('j'+id).value;
  var c = document.getElementById('c'+id).value;
  document.getElementById(id).innerHTML=("INCORRETA <br><br> Justificativa: <br> "+j+"<br>Alternativa correta:"+c);
}
var prx=parseInt("0")
var ant=parseInt("0");
function mostrarPrx(ell){
  ant = ell;
  prx = ell;
  prx ++;
  document.getElementById("qst"+ant).style.display='none';
  document.getElementById("qst"+prx).style.display = 'block';
  document.getElementById("btnrr").style.display = 'none';
  document.getElementById("btnrrr").style.display = 'none';
}

function Mudarestado(el) {
  var display = document.getElementById(el).style.display;
  if(display == "none")
  document.getElementById(el).style.display = 'block';
  else
  document.getElementById(el).style.display = 'none';
}
function resultado(){
  //
  //Mudarestado("btnr");
  //Mudarestado("btnrr");
  document.getElementById("score").innerHTML=(pts);
  document.getElementById("btnr").style.display = 'none';
  document.getElementById("btnrr").style.display = 'block';
  //alert("a");

}
function ptotal(){
  document.querySelector("[name='pontuacao']").value=pts;
}
</script>


</body>
<!-- </html> -->
@endsection
