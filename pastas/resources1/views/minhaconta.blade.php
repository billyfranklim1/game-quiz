@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div align="center" class="card-header">MINHA CONTA</div>



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

                            <!-- <div class="col-md-6">
                                <input id="stremailusuario" type="email" value="{{$usuario->hasEngenharia->strnomeengenharia}}" class="form-control @error('stremailusuario') is-invalid @enderror" name="stremailusuario" value="{{ old('stremailusuario') }}" required autocomplete="stremailusuario">

                            </div> -->
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
