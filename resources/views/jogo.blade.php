<?php

$idp = Auth::user()->idUsuarios ;

?>

@extends("layout.template")

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/project.css')}}">
<link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.15.10/build/styles/default.min.css">
<script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.15.10/build/highlight.min.js"></script>

<script>hljs.initHighlightingOnLoad();</script>
@endsection
@section("conteudo")

<!-- <script type="text/javascript">
$(document).ready(function() {
$('pre code').each(function(i, block) {
    hljs.highlightBlock(block);
});
});
</script> -->

<!-- <script type="text/javascript">
var hljs = require('highlight.js');

export default
{
data()
{
    return{
        text:'',
        items:[]
    }
},
mounted()
{
    hljs.initHighlightingOnLoad();
},
watch:
{
    text(text)
    {
        var item = {item:text};
        this.items.push(item);
        this.$nextTick(function () {
            hljs.initHighlighting.called = false;
            hljs.initHighlighting();
        });
    }
}
}
</script> -->
<div id='jogo' class="container">


    <a href='/'> <button class='btn btn-success' >Pagina Inicial</button></a>

    <!-- Modal de Resultado -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" data-keyboard='false'>
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content container">
                <div class="modal-header" align="center">
                    <h5 class="modal-title" id="exampleModalLongTitle">RESULTADO</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" v-on:click="proxcard(), fechaModal()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div v-if="vermodalC" class="modal-body alert alert-success">
                    <span >CORRETA</span>
                </div>

                <div  v-if="vermodalE" align="center" class="modal-body alert alert-danger">
                    <span align="center" >INCORRETA</span>
                </div>
                <!-- <div  v-if="vermodalE" class="modal-body alert alert-primary">
                    <label >Justificativa:</label>
                    <br>
                    <span >@{{justificativa}}</span>
                </div> -->

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" v-on:click="proxcard(), fechaModal()" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <!-- Card de Perguntas -->
    <div v-for="(pergunta, index) in perguntas" class="container row col-md-12" >

        <div v-show="card == index " class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card-header">
                <h2>@{{index+1}} ) </h2>
                <span class="" v-html="pergunta.perg"></span>
            </div>


        <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <fieldset class="form-group ">
                            <label class="custom-control custom-radio col-md-12">
                                <input id="radioStacked2"  v-model="alternativa" value="A" type="radio"  class="custom-control-input">
                                <span class="custom-control-indicator" style="    top: 29px;left: -5px;"></span>
                                <span class="custom-control-description"  v-html="pergunta.alta"></span>
                            </label>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset class="form-group ">
                            <label class="custom-control custom-radio col-md-12">
                                <input v-model="alternativa" value="B" type="radio" class="custom-control-input">
                                <span class="custom-control-indicator" style="    top: 29px;left: -5px;"></span>
                                <span class="custom-control-description"  v-html="pergunta.altb"></span>
                            </label>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <fieldset class="form-group ">
                            <label class="custom-control custom-radio col-md-12">
                                <input v-model="alternativa" value="C" type="radio" class="custom-control-input">
                                <span class="custom-control-indicator" style="    top: 29px;left: -5px;"></span>
                                <span class="custom-control-description " v-html="pergunta.altc"></span>
                            </label>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset class="form-group ">
                            <label class="custom-control custom-radio col-md-12">
                                <input v-model="alternativa" value="D" type="radio" class="custom-control-input">
                                <span class="custom-control-indicator" style="    top: 29px;left: -5px;"></span>
                                <span class="custom-control-description" v-html="pergunta.altd"></span>
                            </label>
                        </fieldset>
                    </div>
                </div>

        </div>

            <div  align="center" class="card-footer">
                <button v-if='verbutao' v-on:click="verifiResposta(alternativa,pergunta.altCorreta,pergunta.justificativa)" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Verificar
                </button>
            </div>

        </div>
    </div>


    <!-- Card de resultados -->

    <div v-if="card == qntPerg" class="card container shadow-lg p-3 mb-5 bg-white rounded  row justify-content-center col-md-12" style="width: 550px;">
        <div class="card-header" align="center">
            <h1>FIM DE JOGO</h1>
        </div>
        <div align="center"class="card-body">
            <h2 >RESULTADO</h2>
            <h4>Acertos: <b>@{{score}}</b> de <b>@{{qntPerg}}</b></h4>
            <h4>Aproveitaento: <b>@{{pct}}%</b></h4>
        </div>
        <div class="card-footer" align="center">
            <a href='/game'> <button class='btn btn-success' >Jogar Novamente</button></a>
        </div>
    </div>

        <!-- Cadastrar pontuação ao RANKING (Desativado)-->
    <div v-show="card == 1000"  class="card container shadow-lg p-3 mb-5 bg-white rounded" style="width: 550px;">

        <div class="card-header" align="center">
            <h1>CADASTRAR AO RANKING</h1>
        </div>

        <div class="card-body">
            <form action="/cadscore" class="form-group" method="post">
                <input required name="pontuacao" id="ptotal" type="text" v-model="score" class="form-control" readonly="true">
                <br>
                <input type="submit" value="CADASTRAR" class="form-control btn btn-primary">
            </form>
        </div>

        <div class="card-footer">

        </div>

    </div>


</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>


<script type="text/javascript">
Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('content');

var app = new Vue({
    el: '#jogo',
    data: {
        perguntas:<?=json_encode($perguntas) ?>,
        qntPerg: <?=json_encode($qntPerg) ?>,
        alternativa:'',
        score:0,
        card:0,
        vermodalC :false,
        vermodalE : false,
        justificativa : '',
        atv_btn_prx : false,
        atv_btn_ver:true,
        pct: 0,
        response :'',
        ajaxRequest:'',
        urlBase    : "{{url('')}}",
        verbutao: true,


    },

    methods: {
        verifiResposta : function(opc, alt,justificativa){
            if(opc == alt){ //correto
                this.score = this.score + 1;
                this.vermodalC = true;

            }else { //incorreto
                this.vermodalE = true;
                this.justificativa = justificativa;

            }
            this.atv_btn_prx = true;
            this.atv_btn_ver = false;
            this.verbutao= false;

            if(this.card == (this.qntPerg - 1)){ // quando for a ultima pergunta

                this.pct = (100 * this.score) /this.qntPerg;
                this.pct = this.pct.toFixed(2);

                this.salvarPontos();
                this.vermodalE = true;
                this.justificativa = this.response;

            }
        },

        proxcard : function(){
            this.card = this.card + 1;
            this.atv_btn_prx = false;
            this.atv_btn_ver = true;
            this.alternativa = '';

            this.verbutao= true;

            this.vermodalC = false;
            this.vermodalE = false;



        },

        fechaModal : function (){
            this.vermodalC = false,
            this.vermodalE = false;
            this.justificativa = '';

            this.verbutao= true;

            this.vermodalC = false;
            this.vermodalE = false;


        },

        salvarPontos : function (){
            url = this.urlBase+"/salvarPontos";

            this.$http.post(url, {pontos: this.score, aproveitamento:this.pct})
            .then( response => {
                this.response = response.body;
            }).catch((err)=>{
                this.response = err;
            })

        }
    },
    created : function() {

    }
}
)
</script>

@endsection
