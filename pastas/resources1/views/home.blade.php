@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você Está Logado No BICTSys

                    <!-- <br><a class="btn btn-success" href="#">Nova Senha</a>  -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
