
@extends("layout.template")

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/project.css')}}">
@endsection
@section("conteudo")




    <div class="app-content content container-fluid" style="margin-left: 0px;">
        <div class="content-wrapper" style="padding-top: 0px; ">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-xs-12 mb-2">
                    <h3 class="content-header-title mb-0">Dashboard</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-xs-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a>
                                </li>
                                <!-- <li class="breadcrumb-item"><a href="#">Project</a>
                                </li>
                                <li class="breadcrumb-item active">Project Summary
                                </li> -->
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="content-header-right col-md-6 col-xs-12">
                    <div role="group" aria-label="Button group with nested dropdown" class="btn-group float-md-right">
                        <div role="group" class="btn-group">
                            <button id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn btn-outline-primary dropdown-toggle dropdown-menu-right"><i class="ft-cog icon-left"></i> Settings</button>
                            <div aria-labelledby="btnGroupDrop1" class="dropdown-menu"><a href="#" class="dropdown-item">Bootstrap Cards</a><a href="component-buttons-extended.html" class="dropdown-item">Buttons Extended</a></div>
                        </div><a href="calendars-clndr.html" class="btn btn-outline-primary"><i class="ft-mail"></i></a><a href="#" class="btn btn-outline-primary"><i class="ft-pie-chart"></i></a>
                    </div>
                </div>
            </div>
            <div class="content-detached content-left">
                <div class="content-body"><section class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-head">
                                <div class="card-header">
                                    <h4 class="card-title">Game Quiz</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <span class="tag tag-default tag-warning">Mobile</span>
                                        <span class="tag tag-default tag-success">New</span>
                                        <span class="tag tag-default tag-info">iOS</span>
                                    </div>
                                </div>
                                <div class="px-1">
                                    <ul class="list-inline list-inline-pipe text-xs-center p-1 border-bottom-grey border-bottom-lighten-3">
                                        <li>Project Owner: <span class="text-muted">Margaret Govan</span></li>
                                        <li>Start: <span class="text-muted">01/Feb/2016</span></li>
                                        <li>Due on: <span class="text-muted">01/Oct/2016</span></li>
                                        <li><a href="#" class="text-muted" data-toggle="tooltip" data-placement="bottom" title="Export as PDF"><i class="fa fa-file-pdf-o"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- project-info -->
                            <div id="project-info" class="card-block row">
                                <div class="project-info-count col-lg-4 col-md-12">
                                    <div class="project-info-icon">
                                        <h2>80%</h2>
                                        <div class="project-info-sub-icon">
                                            <span class="fa fa-user-o"></span>
                                        </div>
                                    </div>
                                    <div class="project-info-text pt-1">
                                        <h5>Aproveitamento Médio</h5>
                                    </div>
                                </div>
                                <div class="project-info-count col-lg-4 col-md-12">
                                    <div class="project-info-icon">
                                        <h2>20</h2>
                                        <div class="project-info-sub-icon">
                                            <span class="fa fa-calendar-check-o"></span>
                                        </div>
                                    </div>
                                    <div class="project-info-text pt-1">
                                        <h5>Testes Feitos</h5>
                                    </div>
                                </div>
                                <div class="project-info-count col-lg-4 col-md-12">
                                    <div class="project-info-icon">
                                        <h2>20</h2>
                                        <div class="project-info-sub-icon">
                                            <span class="fa fa-bug"></span>
                                        </div>
                                    </div>
                                    <div class="project-info-text pt-1">
                                        <h5>Project Bug</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- project-info -->
                            <div class="card-block">
                                <div class="card-subtitle line-on-side text-muted text-xs-center font-small-3 mx-2 my-1">
                                    <span>Egal's Eye View Of Project Status</span>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="insights px-2">
                                            <div><span class="text-info h3">82%</span> <span class="float-xs-right">Tasks</span></div>
                                            <progress value="82" max="100" class="progress progress-md progress-info">82%</progress>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="insights px-2">
                                            <div><span class="text-success h3">78%</span> <span class="float-xs-right">TaskLists</span></div>
                                            <progress value="78" max="100" class="progress progress-md progress-success">78%</progress>
                                        </div>
                                    </div>
                                </div>
                                <div class="row py-2">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="insights px-2">
                                            <div><span class="text-warning h3">68%</span> <span class="float-xs-right">Milestones</span></div>
                                            <progress value="68" max="100" class="progress progress-md progress-warning">68%</progress>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="insights px-2">
                                            <div><span class="text-danger h3">62%</span> <span class="float-xs-right">Bugs</span></div>
                                            <progress value="62" max="100" class="progress progress-md progress-danger">62%</progress>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Task Progress -->
                <section class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-head">
                                <div class="card-header">
                                    <h4 class="card-title">Task Progress</h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block ">
                                    <div id="task-pie-chart" class="height-400 echart-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Task Progress -->
                    <!-- Bug Progress -->
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Bug Progress</h4>
                                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body collapse in">
                                <div class="card-block ">
                                    <div id="bug-pie-chart" class="height-400 echart-container"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Bug Progress -->
                </section>
            </div>
        </div>
        <div class="sidebar-detached sidebar-right">
            <div class="sidebar"><div class="project-sidebar-content">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Project Details</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body collapse in">
                        <!-- project search -->
                        <div class="card-block border-top-blue-grey border-top-lighten-5">
                            <div class="project-search">
                                <div class="project-search-content">
                                    <form action="#">
                                        <div class="position-relative">
                                            <input type="search" class="form-control" placeholder="Search project task, bug, users...">
                                            <div class="form-control-position">
                                                <i class="fa fa-search text-size-base text-muted"></i>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /project search -->

                        <!-- project progress -->
                        <div class="card-block">
                            <div class="insights">
                                <p>Project Overall Progress <span class="float-xs-right text-warning h3">72%</span></p>
                                <progress value="72" max="100" class="progress progress-xs progress-warning">72%</progress>
                            </div>
                        </div>
                        <!-- project progress -->
                    </div>
                </div>
                <!-- Project Overview -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Project Overview</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-block">
                            <p><strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a>.</p>
                            <p><strong>Lorem ipsum dolor sit</strong></p>
                            <ol>
                                <li>Consectetuer adipiscing</li>
                                <li>Aliquam tincidunt mauris</li>
                                <li>Consectetur adipiscing</li>
                                <li>Vivamus pretium ornare</li>
                                <li>Curabitur massa</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!--/ Project Overview -->
                <!-- Project Users -->
                <div class="card">
                    <div class="card-header mb-0">
                        <h4 class="card-title">Ranking</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                <li><a data-action="close"><i class="ft-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body collapse in">
                        <div class="card-body collapse in">
                            <div class="card-block  py-0 px-0">
                                <div class="list-group">
                                    <a href="javascript:void(0)"  class="list-group-item">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading mb-0">Margaret Govan</h6>
                                                <p class="font-small-2 mb-0 text-muted">Project Owner</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)"  class="list-group-item">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-2.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading mb-0">Bret Lezama</h6>
                                                <p class="font-small-2 mb-0 text-muted">Project Manager</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)"  class="list-group-item">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-online rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-3.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading mb-0">Carie Berra</h6>
                                                <p class="font-small-2 mb-0 text-muted">Senior Developer</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)"  class="list-group-item">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-away rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-6.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading mb-0">Eric Alsobrook</h6>
                                                <p class="font-small-2 mb-0 text-muted">UI Developer</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="javascript:void(0)"  class="list-group-item">
                                        <div class="media">
                                            <div class="media-left"><span class="avatar avatar-sm avatar-busy rounded-circle"><img src="../../../app-assets/images/portrait/small/avatar-s-7.png" alt="avatar"><i></i></span></div>
                                            <div class="media-body">
                                                <h6 class="media-heading mb-0">Berra Eric</h6>
                                                <p class="font-small-2 mb-0 text-muted">UI Developer</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Project Users -->
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
    el: '#home',
    data: {
        idsSelecionados : [],
        urlBase    : "{{url('')}}",
        disciplinas:<?=json_encode($disciplinas) ?>,
        optativas:<?=json_encode($optativas) ?>,
        disciplinasFeitas:'',
        pct :0,
        pctOptativaFeita:0,
        optativasFeitas:'',
        response :'',
    },
    methods: {
        getoptativasFeitas : function(){
            url = this.urlBase+"/getOptativasFeitas";

            this.$http.get(url).then((response) => {
                this.optativasFeitas = response.body;
                this.pctOptativaFeita = (100 * this.optativasFeitas.length) /this.optativas.length;

            });
        },
        getDisciplinasFeitas : function(){
            url = this.urlBase+"/getDisciplinasFeitas";

            this.$http.get(url).then((response) => {
                this.disciplinasFeitas = response.body;
                this.pct = (100 * this.disciplinasFeitas.length) /this.disciplinas.length;

            });
        },

    },
    created : function() {
        this.getDisciplinasFeitas();
        this.getoptativasFeitas();
    }
}
)


</script>
@endsection
