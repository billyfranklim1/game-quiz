
@extends("layout.template")

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/project.css')}}">
@endsection
@section("conteudo")

<!-- Card sizing section start -->
<section id="sizing">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <!-- <h4 class="card-title">Relatório</h4> -->
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
                <div class="card-body collapse in">
                    <div class="card-block">

                        <!-- <div class="card-text">
                            <p class="card-text">Relatório de todos os seus pontos</p>
                        </div> -->

                        <form class="form" method="POST" action="salvarEditUsuario">

                            <div class="form-body">
                                <h4 class="form-section"><i class="ft-bar-chart-2"></i>Relatório</h4>
                                <div class="row">
                                    <div class="col-md-6">


                                    </div>
                                    <!-- <div class="col-md-6">
                                        <div class="form-group">


                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">


                                        </div>
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        </div>
                                    </div>
                                </div>
                                <!-- Line Chart -->
<div class="row">
    <!-- <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Simple Line Chart</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div> -->
            <div class="card-body collapse in">
                <div class="card-block chartjs">
                    <canvas id="grafico_relatorio" height="500"></canvas>
                    <!-- <canvas id="line-chart" height="500"></canvas> -->


                </div>
            </div>
        <!-- </div>
    </div>
</div> -->
                            </div>

                            <div class="form-actions right">
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="ft-check"></i> Save
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
$(window).on("load", function(){

    //Get the context of the Chart canvas element we want to select
    var ctx = $("#grafico_relatorio");

    // Chart Options
    var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
            position: 'bottom',
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: true,
                gridLines: {
                    color: "#f3f3f3",
                    drawTicks: false,
                },
                scaleLabel: {
                    display: true,
                    labelString: 'Data e Hora'
                }
            }],
            yAxes: [{
                display: true,
                gridLines: {
                    color: "#f3f3f3",
                    drawTicks: false,
                },
                scaleLabel: {
                    display: true,
                    labelString: 'Quantidade de Pontos'
                }
            }]
        },
        title: {
            display: true,
            text: 'Pontos'
        }
    };
    var pontos=[];
    var data=[];

    var dados = <?=json_encode($relatorio) ?>;

    for (var i = 0; i < dados.length; i++) {
        pontos.push(dados[i].intpontos);
        // pontos.push(dados[i].aproveitamento);


        data.push(dados[i].created_at);

    }


    console.log(dados);
    // Chart Data
    var chartData = {
        labels: data,
        datasets: [
        //     {
        //     label: "Aproveitamento",
        //     data: [0, 100, 50, 30, 18, 0, 20],
        //     backgroundColor: "rgba(209,212,219,.4)",
        //     borderColor: "transparent",
        //     pointBorderColor: "#D1D4DB",
        //     pointBackgroundColor: "#FFF",
        //     pointBorderWidth: 2,
        //     pointHoverBorderWidth: 2,
        //     pointRadius: 4,
        // }
        // ,
        {
            label: "Pontos",
            data: pontos,
            backgroundColor: "rgba(81,117,224,.7)",
            borderColor: "transparent",
            pointBorderColor: "#5175E0",
            pointBackgroundColor: "#FFF",
            pointBorderWidth: 2,
            pointHoverBorderWidth: 2,
            pointRadius: 4,
        }
    ]
    };
    // console.log(chartData);

    var config = {
        type: 'line',

        // Chart Options
        options : chartOptions,

        // Chart Data
        data : chartData
    };

    // Create the chart
    var areaChart = new Chart(ctx, config);


});
</script>

@endsection
