

@extends('layouts.app')

@section('content')

<div id="minhasoptativas" class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div align="center" class="card-header">
                
                <h3>MINHAS DISCIPLINAS OPTATIVAS</h3>
                
                </div>

                <div class="progress">
                    <div class="progress-bar" role="progressbar" v-bind:style="{ width: pctOptativaFeita+'%' }"   aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">@{{pctOptativaFeita}}%</div>
                </div>

                <br>
                    <div v-if="retorno" align="center" class="alert alert-success" role="alert">
                            @{{retorno}}
                    </div>
                <br>

                <!-- <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                </div> -->
                
                <div class="card-body">
                    <div class="" >
                        <table  class="table table-striped">
                            <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Hora</th>
                                        <!-- <th>Situação</th> -->
                                        <th>Ações</th>



                                    </tr>
                            </thead>

                            <tbody align="center" >
                                <tr  v-for="optativa in optativas">
                                    <td><input type="checkbox" id="idDiciplina" v-model="idsSelecionados" :value="optativa.fk_idoptativa"></td>
                                    <td><h6>@{{optativa.has_optativa.strnomeoptativa}}</h6></td>
                                    <td>@{{optativa.has_optativa.horas}}h</td>
                                    <!-- <td><label class="label btn-success">Pendente</label></td> -->
                                    <td><button   class="btn btn-primary">Detalhes</button></td>
                                </tr>
                            </tbody>
                            
                        </table>                       
                    </div>
                    
                    <div class="form-group row mb-0">
                        <div align="center" class="col-md-6 offset-md-4">
                            <button @click="salvaEdicaoUsuario()"   class="btn btn-primary">
                                Atualizar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>


<script type="text/javascript">
Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('content');

var app = new Vue({
    el: '#minhasoptativas',
    data: {
        idsSelecionados : [],
        retorno:'',
        urlBase    : "{{url('')}}",
        optativas:<?=json_encode($optativas) ?>,
        optativasFeitas:'',
        pctOptativaFeita :0,

    },

    methods: {
        getoptativasFeitas : function(){
            url = this.urlBase+"/getOptativasFeitas";

            this.$http.get(url).then((response) => {
                this.optativasFeitas = response.body;

                array = this.optativasFeitas;
    
                for (var i = 0; i < array.length; i++) {
                    a = array[i];
                    this.idsSelecionados.push(a.fk_idoptativa);
                }                
                this.pctOptativaFeita = (100 * this.optativasFeitas.length) /this.optativas.length;

            });
        },

        salvaEdicaoUsuario : function(){
            url = this.urlBase+"/upOptativaUsuario";
            console.log(url);
            
            this.$http.post(url, {idDiciplina: this.idsSelecionados}).then((response) => {
                this.retorno = response.body;
                this.getoptativasFeitas();
            });
        },
    },
    created : function() {
        this.getoptativasFeitas();

        // setInterval(() => {
        // console.log(this.optativasSel);
        // }, 500)
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
