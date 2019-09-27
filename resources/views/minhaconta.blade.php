
@extends("layout.template")

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/project.css')}}">
@endsection
@section("conteudo")
<!-- <div class="container">
<div class="row justify-content-center" style="    margin-right: 0px;border-left-width: 35px;padding-left: 275px;">
<div class="col-md-8">
<div class="card">
<div align="center" class="card-header" style="    background-color: rgba(0,0,0,.03);" >MINHA CONTA</div>



<div class="card-body">
<form method="POST" action="/salvarEditUsuario">
@csrf
<div class="form-group row">
<div align="center" class="col-md-6">

@if(session()->get('successMinhaConta'))
<span   class="alert alert-success">
<strong>{{ session()->get('successMinhaConta') }}</strong>
</span><br />
@endif

@if(session()->get('errorMinhaConta'))
<span   class="alert alert-danger">
<strong>{{ session()->get('errorMinhaConta') }}</strong>
</span><br />
@endif
</div>
</div>

<input id="idUsuarios" type="hidden" value="{{$usuario->idUsuarios}}"  name="idUsuarios">

<div class="form-group row">
<label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

<div class="col-md-6">
<input id="strnomeusuario" type="text" value="{{$usuario->strnomeusuario}}"class="form-control @error('name') is-invalid @enderror" name="strnomeusuario" value="{{ old('strnomeusuario') }}" required autocomplete="strnomeusuario" autofocus>

@error('strnomeusuario')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="form-group row">
<label for="stremailusuario" class="col-md-4 col-form-label text-md-right">E-mail</label>

<div class="col-md-6">
<input id="stremailusuario" type="email" value="{{$usuario->stremailusuario}}" class="form-control @error('stremailusuario') is-invalid @enderror" name="stremailusuario" value="{{ old('stremailusuario') }}" required autocomplete="stremailusuario">

@error('stremailusuario')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>

<div class="form-group row">
<label for="periodoentrada" class="col-md-4 col-form-label text-md-right">Engenharia</label>

<div class="col-md-6">
<select value="{{$usuario->hasEngenharia->idEngenharia}}" name="fk_idengenharia" required="" class="form-control">
<option>Selecione a Sua engenharia</option>
@foreach($engenharias as $engenharia)
<option value="{{ $engenharia->idEngenharia  }}"

@if( $engenharia->idEngenharia == old('fk_idengenharia', $usuario->hasEngenharia->idEngenharia))
selected="selected"
@endif
>{{ $engenharia->strnomeengenharia }}

</option>
@endforeach
</select>
</div>
</div>

<div class="form-group row">
<label for="fk_idperiodo" class="col-md-4 col-form-label text-md-right">Período de Ingresso</label>

<div class="col-md-6">
<select value="{{$usuario->hasPeriodo->idPeriodos}}" name="fk_idperiodo" required="" class="form-control">
<option>Selecione seu Periodo</option>
@foreach($periodos as $periodo)
<option value="{{ $periodo->idPeriodos  }}"

@if( $periodo->idPeriodos == old('fk_idperiodo', $usuario->hasPeriodo->idPeriodos))
selected="selected"
@endif
>{{ $periodo->strperiodo }}

</option>
@endforeach
</select>
</div>

</div>

<div class="form-group row mb-0">
<div align="center" class="col-md-6 offset-md-4">
<button type="submit" class="btn btn-primary">
Atualizar
</button>
</div>
</div>

<br>
<br>
<br>

</form>
</div>
</div>
</div>
</div>
</div> -->


<!-- Card sizing section start -->
<section id="sizing">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Perfil do Usuario</h4>
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

                        <div class="card-text">
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        </div>

                        <form class="form" method="POST" action="salvarEditUsuario">
                            @csrf
                            {{ session()->get('errorMinhaConta') }}
                            <fieldset align="center" class="form-group position-relative has-icon-left mb-1">
                                @if(session()->get('successcadastro'))
                                <span   class="alert alert-success">
                                    <strong>{{ session()->get('successMinhaConta') }}</strong>
                                </span><br />
                                @endif

                                @if(session()->get('errorcadastro'))
                                <span   class="alert alert-danger">
                                    <!-- <strong>{{ session()->get('errorMinhaConta') }}</strong> -->
                                </span><br />
                                @endif
    						</fieldset>

                            <div class="form-body">
                                <fieldset align="center" class="form-group position-relative has-icon-left mb-1">
                                    @if(session()->get('successMinhaConta'))
                                    <span   class="alert alert-success">
                                        <strong>{{ session()->get('successMinhaConta') }}</strong>
                                    </span><br />
                                    @endif

                                    @if(session()->get('errorMinhaConta'))
                                    <span   class="alert alert-danger">
                                        <strong>{{ session()->get('errorMinhaConta') }}</strong>
                                    </span><br />
                                    @endif
        						</fieldset>

                                <h4 class="form-section"><i class="ft-eye"></i> Sobre o Usuario</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="userinput1" class="sr-only">Fist Name</label>
                                            <!-- <input type="text" id="userinput1" class="form-control" placeholder="Name" name="name"> -->
                                            <input id="strnomeusuario" type="text" value="{{$usuario->strnomeusuario}}" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="strnomeusuario" value="{{ old('strnomeusuario') }}" required autocomplete="strnomeusuario" autofocus>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="userinput2" class="sr-only">Last Name</label>
                                            <!-- <input type="text" id="userinput2" class="form-control" placeholder="Company" name="company"> -->
                                            <input  placeholder="Endereço E-mail" id="stremailusuario" type="email" value="{{$usuario->stremailusuario}}" class="form-control @error('stremailusuario') is-invalid @enderror" name="stremailusuario" value="{{ old('stremailusuario') }}" required autocomplete="stremailusuario">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="userinput3" class="sr-only">Engenharia</label>
                                            <!-- <input type="text" id="userinput3" class="form-control" placeholder="Username" name="username"> -->
                                            <select value="{{$usuario->hasEngenharia->idEngenharia}}" name="fk_idengenharia" required="" class="form-control">
                                                <option>Selecione a Sua engenharia</option>
                                                @foreach($engenharias as $engenharia)
                                                <option value="{{ $engenharia->idEngenharia  }}"

                                                    @if( $engenharia->idEngenharia == old('fk_idengenharia', $usuario->hasEngenharia->idEngenharia))
                                                    selected="selected"
                                                    @endif
                                                    >{{ $engenharia->strnomeengenharia }}

                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="userinput4" class="sr-only">Periodo</label>
                                            <!-- <input type="text" id="userinput4" class="form-control" placeholder="Nick Name" name="nickname"> -->
                                            <select value="{{$usuario->hasPeriodo->idPeriodos}}" name="fk_idperiodo" required="" class="form-control">
                                                <option>Selecione seu Periodo</option>
                                                @foreach($periodos as $periodo)
                                                <option value="{{ $periodo->idPeriodos  }}"

                                                    @if( $periodo->idPeriodos == old('fk_idperiodo', $usuario->hasPeriodo->idPeriodos))
                                                    selected="selected"
                                                    @endif
                                                    >{{ $periodo->strperiodo }}

                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
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

@endsection
