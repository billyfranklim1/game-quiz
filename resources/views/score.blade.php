
@extends("layout.template")

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/project.css')}}">
@endsection
@section("conteudo")

<!-- Card sizing section start -->
<?php
// dd($top10);
 ?>
<div id="score">

    <section id="sizing">

        <div class="row">
            <div class="col-md-12">
                <div class="card card-block">
                    <div class="card-header card-block">
                        <h4 class="card-title"><i class="ft-bar-chart-2"></i>Ranking - Top 10</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body collapse in card-block">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Pontos</th>
                                    <th>Aproveitamento</th>
                                    <th>Usuario</th>
                                    <th>Data</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr  :class="{ 'alert-warning': i+1 == 1, 'alert-info': i+1 == 2, 'alert-danger': i+1 == 3, 'alert-light': i+1 <= 3}" role="alert" v-for="(top, i) in top10" >
                                    <td>@{{i+1}}</td>
                                    <td>@{{top.intpontos}}</td>
                                    <td>@{{top.aproveitamento}}</td>

                                    <td>@{{top.has_usuario.strnomeusuario}}</td>
                                    <td>@{{top.created_at }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>



    <script type="text/javascript">
    Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#csrf-token').getAttribute('content');

    var app = new Vue({
        el: '#score',
        data: {
            urlBase    : "{{url('')}}",
            top10      :<?=json_encode($top10) ?>,
        },


        filters : {
            formataData: function (value) {
                // moment.locale('pt-br');         // pt-br
                 if (value) {
                     return moment(String(value)).format('L');
                 }
                 return "";
            },
            moment: function (date) {
              return moment(date).format('MMMM Do YYYY, h:mm:ss a');
            }
        },
        created : function() {
        }
    }
)

</script>
</div>

@endsection
