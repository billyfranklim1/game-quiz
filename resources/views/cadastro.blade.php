@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div align="center" class="card-header">CADASTRO</div>



                <div class="card-body">
                    <form method="POST" action="/salvarUsuario">
                        @csrf
                        <div class="form-group row">



                            <div align="center" class="col-md-6">

                                @if(session()->get('successcadastro'))
                                <span   class="alert alert-success">
                                    <strong>{{ session()->get('successcadastro') }}</strong>
                                </span><br />
                                @endif

                                @if(session()->get('errorcadastro'))
                                <span   class="alert alert-danger">
                                    <strong>{{ session()->get('errorcadastro') }}</strong>
                                </span><br />
                                @endif
                            </div>

                        </div>


                        <div class="form-group row">
                            <label for="strnomeusuario" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="strnomeusuario" type="text" class="form-control @error('strnomeusuario') is-invalid @enderror" name="strnomeusuario" value="{{ old('strnomeusuario') }}" required autocomplete="strnomeusuario" autofocus>

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
                                <input id="stremailusuario" type="email" class="form-control @error('stremailusuario') is-invalid @enderror" name="stremailusuario" value="{{ old('stremailusuario') }}" required autocomplete="stremailusuario">

                                @error('stremailusuario')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

                            <div class="col-md-6">
                                <input id="strsenha" type="password" class="form-control @error('strsenha') is-invalid @enderror" name="strsenha" required autocomplete="new-password">

                                @error('strsenha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="confirme-strsenha" class="col-md-4 col-form-label text-md-right">Confirme Senha</label>

                            <div class="col-md-6">
                                <input id="confirme-strsenha" type="password" class="form-control" name="confirme-strsenha" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fk_idengenharia" class="col-md-4 col-form-label text-md-right">Engenharia</label>

                            <div class="col-md-6">
                                <select name="fk_idengenharia" required="" class="form-control">
                                    <option>Selecione a Sua engenharia</option>
                                    @foreach($engenharias as $engenharia)
                                    <option value="{{ $engenharia->idEngenharia }}">{{ $engenharia->strnomeengenharia}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="fk_idperiodo" class="col-md-4 col-form-label text-md-right">Período de Ingresso</label>

                            <div class="col-md-6">
                                <select name="fk_idperiodo" required="" class="form-control">
                                    <option>Selecione Período</option>
                                    @foreach($periodos as $periodo)
                                    <option value="{{ $periodo->idPeriodos }}">{{ $periodo->strperiodo}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>


                        <div class="form-group row mb-0">
                            <div align="center" class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Cadastrar
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
