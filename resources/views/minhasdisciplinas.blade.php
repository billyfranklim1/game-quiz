

<!-- extends('layouts.app')

section('content') -->

@extends("layout.template")

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/project.css')}}">
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/plugins/forms/checkboxes-radios.css">
@endsection
@section("conteudo")

<div id="minhasdisciplinas" class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">

                <div align="center" class="card-header"><h1>MINHAS DISCIPLINAS OBRIGATORIAS</h1></div>

                <div v-if="retorno" align="center" class="alert alert-success" role="alert">
                    @{{retorno}}
                </div>


                <div class="card-block">
                    <div class="media">
                        <div class="media-body text-xs-left">
                            <h3 class="primary">@{{pct}}%</h3>
                            <span>DISCIPLINAS FEITAS</span>
                        </div>
                        <div class="media-right media-middle">
                            <i class="icon-docs primary font-large-2 float-xs-right"></i>
                        </div>
                    </div>
                    <progress class="progress progress-sm progress-primary mt-1 mb-0" :value="pct" max="100"></progress>
                </div>
                <div class="card-body">
                    <div class="container" >
                        <table class="col-md-12">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <!-- <th>Situação</th> -->
                                    <th>Nome</th>
                                    <th>Hora</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody align="center"  class=""  >
                                <tr  v-for="disciplina in disciplinas">
                                    <td>

                                        <label class="display-inline-block custom-control custom-checkbox">
                                            <input type="checkbox" id="idDiciplina" v-model="idsSelecionados" :value="disciplina.idDiciplina"class="custom-control-input">
                                            <span class="custom-control-indicator"></span>
                                            <!-- <span class="custom-control-description">Checked custom checkbox</span> -->
                                          </label>
                                    </td>
                                    <!-- <td>situação</td> -->
                                    <td >@{{disciplina.strnomediciplina}}</td>
                                    <td> @{{disciplina.horas}}h</td>
                                    <!-- <span class="tag tag tag-pill tag-success float-xs-right mr-2">Hot</span></a> -->
                                    <td><button   class="btn btn-primary">Detalhes</button></td>
                                </tr>
                            </tbody>

                        </table>

                        <div class="form-group row mb-0">
                            <div align="center" class="col-md-6 offset-md-4">
                                <button @click="salvaEdicaoUsuario()"   class="btn btn-primary">
                                    Atualizar
                                </button>
                                <br>
                                <br>
                                <br>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>
<!-- // vagass       : ?=//json_encode($vagas) ?>, -->
<script type="text/javascript">
Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('content');

var app = new Vue({
    el: '#minhasdisciplinas',
    data: {
        message: 'Hello Vue!',
        idsSelecionados : [],
        checkedNames: [],
        msg:'Msg',
        tk:'',
        retorno:'',
        urlBase    : "{{url('')}}",
        disciplinas:<?=json_encode($disciplinas) ?>,
        disciplinasFeitas:'',
        total : '',
        feitas :'',
        pct :0,

    },
    methods: {
        situacao :function(id){
            return id+4;

        },
        getDisciplinasFeitas : function(){
            url = this.urlBase+"/getDisciplinasFeitas";

            this.$http.get(url).then((response) => {
                this.disciplinasFeitas = response.body;

                array = this.disciplinasFeitas;

                for (var i = 0; i < array.length; i++) {
                    a = array[i];
                    this.idsSelecionados.push(a.disciplina_idDisciplina);
                }

                this.pct = (100 * this.disciplinasFeitas.length) /this.disciplinas.length;

                //ADCIONAR CODIGO PRA SUBIR A TELA

            });
        },

        salvaEdicaoUsuario : function(){
            url = this.urlBase+"/upDisciplinaUsuario";
            this.$http.post(url, {idDiciplina: this.idsSelecionados}).then((response) => {

                this.retorno = response.body;
                this.getDisciplinasFeitas();

            });
        },
    },
    created : function() {
        this.getDisciplinasFeitas();
        // console.log(this.disciplinasFeitas);
    }
}
)
</script>
@endsection

<!-- CREATE TABLE usuario_obrigatoria (
    id_usuario_obrigatoria int not null PRIMARY KEY,
    fk_idusuario int NOT null,
    fk_idobrigaoria int NOT null,
    foreign key (fk_idusuario) references usuarios(idUsuarios),
    foreign key (fk_idobrigaoria) references obrigatorias(idDiciplina)
    );

     -->
