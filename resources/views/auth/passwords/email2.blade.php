@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(session()->get('success'))
                    <div  class="alert alert-success">
                        {{ session()->get('success') }}
                    </div><br />
                    @endif

                    @if(session()->get('error'))
                    <div   class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div><br />
                    @endif

                    <form method="POST" action="/resetSenha">
                        @csrf

                        <div class="form-group row">
                            <label for="stremailusuario" class="col-md-4 col-form-label text-md-right">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="stremailusuario" class="form-control @error('stremailusuario') is-invalid @enderror" name="stremailusuario" value="{{ old('stremailusuario') }}" required autocomplete="stremailusuario" autofocus>

                                @error('stremailusuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Enviar Link Para o E-mail
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
