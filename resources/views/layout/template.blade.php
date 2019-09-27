<!DOCTYPE html>
<html lang="pt-br" data-textdirection="ltr" class="loading">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="author" content="Billyfranklim Avelino Pereira">
    <link rel="apple-touch-icon" href="{{asset('/app-assets/images/ico/apple-icon-120.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/fonts/feather/style.min.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/fonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/extensions/pace.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/extensions/unslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/colors/palette-gradient.css')}}">
    <!-- END Custom CSS-->

    <link href="{{ asset('css/fab.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link rel="apple-touch-icon" href="{{asset('/app-assets/images/ico/apple-icon-120.png')}}">

    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue-resource@1.5.1"></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <!-- <meta name="_token" content="{{ csrf_token() }}"> -->
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('assets/img/crypta/favicon.png')}}" />
    <link rel="apple-touch-icon" href="{{asset('assets/img/crypta/favicon.png')}}" />
    <title>BICT</title>
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/bootstrap.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/fonts/feather/style.min.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/fonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/extensions/pace.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/charts/jquery-jvectormap-2.0.3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/extensions/unslider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/weather-icons/climacons.min.css')}}">
    <!-- <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/fonts/simple-line-icons/style.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css')}}">
    <style media="screen">
    .back{
        background: url(https://enviaprocessos.com.br/beta/public/assets/img/fundo-rodape.jpg) center no-repeat;
        background-size: 100%;
        background-color: #eaeaea;
    }
    </style>

    <!-- <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/fonts/feather/style.min.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/fonts/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/fonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/extensions/pace.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/project.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/plugins/extensions/toastr.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/vendors/css/extensions/toastr.css')}}">
    <script src="{{asset('/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/scripts/pages/project-summary-task.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/scripts/pages/project-summary-bug.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    @yield('style')

    <script type="text/javascript">
    let urlBase = "{{url('')}}";
    </script>
    <script src="{{asset('/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>

</script>
@yield('scriptSuperior')>
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar @if(Route::current()->getName() == 'dashboard') back @endif">
    <!-- Menu superior-->
    @include('layout.menu-superior')
    <!-- ///////////////////////////// Menu esquerdo ///////////////////////////////////////////////-->
    @include('layout.menu-esquerdo')
    <div class="app-content content container-fluid" >
        <div class="content-wrapper">
            <div class="content-body">
                @yield('conteudo')
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////// Rodapé //////////////////////////////////////////-->
    @include('layout.rodape')
    <!-- BEGIN VENDOR JS-->
    <script src="{{asset('/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/vendors/js/extensions/toastr.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/scripts/charts/chartjs/line/line.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/scripts/charts/chartjs/line/line-area.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/scripts/charts/chartjs/line/line-logarithmic.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/scripts/charts/chartjs/line/line-multi-axis.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/scripts/charts/chartjs/line/line-skip-points.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/scripts/charts/chartjs/line/line-stacked-area.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <!-- <script src="{{asset('/app-assets/vendors/js/extensions/jquery.knob.min.js')}}" type="text/javascript"></script> -->
    <!-- <script src="{{asset('/app-assets/js/scripts/extensions/knob.js')}}" type="text/javascript"></script> -->
    <script src="{{asset('/app-assets/vendors/js/charts/raphael-min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/vendors/js/charts/morris.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/data/jvector/visitor-data.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/vendors/js/charts/jquery.sparkline.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/vendors/js/extensions/unslider-min.js')}}" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/core/colors/palette-climacon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/app-assets/fonts/simple-line-icons/style.min.css')}}">
    <script src="{{asset('/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/scripts/pages/dashboard-analytics.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/core/app.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/scripts/pages/project-summary-task.js')}}" type="text/javascript"></script>
    <script src="{{asset('/app-assets/js/scripts/pages/project-summary-bug.js')}}" type="text/javascript"></script>
    @yield('script')


</body>
</html>
