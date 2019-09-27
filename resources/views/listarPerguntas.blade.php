@extends("layout.template")

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/project.css')}}">
<link rel="stylesheet" href="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.15.10/build/styles/default.min.css">
<script src="//cdn.jsdelivr.net/gh/highlightjs/cdn-release@9.15.10/build/highlight.min.js"></script>

<script>hljs.initHighlightingOnLoad();</script>
@endsection
@section("conteudo")


<div id='jogo' class="container">


    <a href='/'> <button class='btn btn-success' >Pagina Inicial</button></a>
    <br>
    <!-- Card de Perguntas -->

    <div v-for="(pergunta, index) in perguntas" class="container row col-md-12" >

        <div class="card shadow-lg p-3 mb-5 bg-white rounded">
            <div class="card-header card-block">
                <h2>@{{index+1}} )</h2>
                <span class=" card-block" v-html="pergunta.perg"></span>
                <div class="heading-elements">
						<ul class="list-inline mb-0">
							<li><a data-action="collapse"><i class="ft-minus"></i></a></li>
							<li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
							<li><a data-action="expand"><i class="ft-maximize"></i></a></li>
							<li><a data-action="close"><i class="ft-x"></i></a></li>
						</ul>
				</div>
            </div>

            <div class="card-body  card-block">
                <div class="row">
                    <div class="col-md-6">
                        <fieldset class="form-group ">
                            <label class="custom-control custom-radio col-md-12">
                                <span class="custom-control-description"  v-html="pergunta.alta"></span>
                            </label>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset class="form-group ">
                            <label class="custom-control custom-radio col-md-12">
                                <span class="custom-control-description"  v-html="pergunta.altb"></span>
                            </label>
                        </fieldset>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <fieldset class="form-group ">
                            <label class="custom-control custom-radio col-md-12">
                                <span class="custom-control-description " v-html="pergunta.altc"></span>
                            </label>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset class="form-group ">
                            <label class="custom-control custom-radio col-md-12">
                                <span class="custom-control-description" v-html="pergunta.altd"></span>
                            </label>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div  align="center" class="card-footer">
                <form   :action="/listarPergunta/+pergunta.idPergunta" method="get">
                    <input type="submit" name="" value="Editar" class="btn btn-primary">
                </form>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">

<script src="{{asset('/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>

<script src="{{asset('/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('/app-assets/js/core/app.js')}}" type="text/javascript"></script>

</script>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>


<script type="text/javascript">
Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('content');

var app = new Vue({
    el: '#jogo',
    data: {
        perguntas:<?=json_encode($perguntas) ?>,
        qntPerg: 0,
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
