
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
                    <h4 class="card-title">Cadastro de Perguntas</h4>
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
                    @foreach ($pergunta as $pergunt)
                    <div class="card-block">

                        <form class="form" method="POST" action="/salvarEdicaoPergunta">
                            @csrf
                            <fieldset align="center" class="form-group position-relative has-icon-left mb-1">
                                @if(session()->get('successSalvaEditPergunta'))
                                <span   class="alert alert-success">
                                    <strong>{{ session()->get('successSalvaEditPergunta') }}</strong>
                                </span><br />
                                @endif

                                @if(session()->get('errorSalvaEditPergunta'))
                                <span   class="alert alert-danger">
                                    <strong>{{ session()->get('errorSalvaEditPergunta') }}</strong>
                                </span><br />
                                @endif
    						</fieldset>

                            <div class="form-body ">
                                <input type="hidden" name="idPergunta" value="{{$pergunt->idPergunta}}">

                                <h4 class="form-section"><i class="ft-eye"></i> Editar Pergunta</h4>
                                <fieldset class="form-group position-relative has-icon-left  mb-1 card-block" >

                                    <h4 for="">Pergunta</h4>
                                    <textarea class="form-control" id="summary-ckeditor" name="perguntas" placeholder="Pergunta">
                                    {{$pergunt->perg}}
                                    </textarea>


                                    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                    <script>
                                    CKEDITOR.replace( 'perguntas',{
                                        extraPlugins: 'codesnippet',
                                        codeSnippet_theme: 'monokai_sublime',
                                        height: 150,}
                                    );
                                    </script>
                                </fieldset>

                                <br>
                                <br>
                                <br>
                                <fieldset class="form-group position-relative has-icon-left  mb-1 card-block" >

                                    <h4 for="">Alternativa A</h4>

                                    <textarea class="form-control" id="summary-ckeditor" name="alta" placeholder="Pergunta">{{$pergunt->alta}}</textarea>


                                    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                    <script>
                                    CKEDITOR.replace( 'alta',{
                                        extraPlugins: 'codesnippet',
                                        codeSnippet_theme: 'monokai_sublime',
                                        height: 150,}
                                    );
                                    </script>
                                </fieldset>

                                <br>
                                <br>
                                <br>
                                <fieldset class="form-group position-relative has-icon-left  mb-1 card-block" >

                                    <h4 for="">Alternativa B</h4>


                                    <textarea class="form-control" id="summary-ckeditor" name="altb" placeholder="Pergunta">{{$pergunt->altb}}</textarea>


                                    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                    <script>
                                    CKEDITOR.replace( 'altb',{
                                        extraPlugins: 'codesnippet',
                                        codeSnippet_theme: 'monokai_sublime',
                                        height: 150,}
                                    );
                                    </script>
                                </fieldset>

                                <br>
                                <br>
                                <br>
                                <fieldset class="form-group position-relative has-icon-left  mb-1 card-block" >
                                    <h4 for="">Alternativa C</h4>
                                    <textarea class="form-control" id="summary-ckeditor" name="altc" placeholder="Pergunta">{{$pergunt->altc}}</textarea>


                                    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                    <script>
                                    CKEDITOR.replace( 'altc',{
                                        extraPlugins: 'codesnippet',
                                        codeSnippet_theme: 'monokai_sublime',
                                        height: 150,}
                                    );
                                    </script>
                                </fieldset>

                                <br>
                                <br>
                                <br>
                                <fieldset class="form-group position-relative has-icon-left  mb-1 card-block" >
                                    <h4 for="">Alternativa D</h4>
                                    <textarea class="form-control" id="summary-ckeditor" name="altd" placeholder="Pergunta">{{$pergunt->altd}}</textarea>


                                    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                    <script>
                                    CKEDITOR.replace( 'altd',{
                                        extraPlugins: 'codesnippet',
                                        codeSnippet_theme: 'monokai_sublime',
                                        height: 150,}
                                    );
                                    </script>
                                </fieldset>


                                <br>

                                <fieldset class="form-group position-relative  mb-1 card-block" >
                                    <select name="altCorreta"required class="form-control form-control-lg  ">
                                        <!-- <option>Selecione a Alternativa Correta</option> -->
                                        <option  value="{{$pergunt->altCorreta}}">{{$pergunt->altCorreta}}</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </fieldset>
                                <fieldset class="form-group position-relative  mb-1 card-block" >


                                    <div class="form-actions right card-block">
                                        <button type="submit" class="btn btn-outline-primary">
                                            <i class="ft-check"></i> Cadastrar
                                        </button>
                                    </div>
                                </fieldset>

                            </div>


                    </form>
                </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
