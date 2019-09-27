<!--
extends('layouts.app')

section('content')
-->

@extends("layout.template")

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('/app-assets/css/pages/project.css')}}">
@endsection
@section("conteudo")
<div class="row" style=" width: 700px;">
    <div class="col-md-12">
        <div class="card" style="left: 275px;">
            <div align="center" class="card-header">
                <h4 class="card-title">Nova Senha</h4>
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

                    <div align="center" class="card-text">
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>


                    <form class="form" method="POST" action="/SalvarNovaSenha">

                        <div class="form-body">
                            <div  class="form-group row" >

                                @if(session()->get('successNovaSenha'))
                                <span  class=" col-md-6 alert alert-success" style="    left: 160px;">
                                    <strong>{{ session()->get('successNovaSenha') }}</strong>
                                </span>
                                @endif

                                @if(session()->get('errorNovaSenha'))
                                <div   class=" col-md-6 alert alert-danger" style="    left: 160px;">
                                    {{ session()->get('errorNovaSenha') }}
                                </div><br />
                                @endif

                            </div>
                            <h4 align="center" class="form-section"><i class="ft-eye"></i> Nova Senha</h4>
                            @csrf

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="userinput1" class="sr-only">Senha Atual</label>
                                        <!-- <input type="text" id="userinput1" class="form-control" placeholder="Name" name="name"> -->
                                        <input id="strsenhaatual" type="password" class="form-control @error('strsenhaatual') is-invalid @enderror" name="strsenhaatual" placeholder="Senha Atual" value="{{ old('strsenhaatual') }}" required autocomplete="strsenhaatual">


                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="userinput2" class="sr-only">Nova Senha</label>
                                        <input type="password" id="userinput2" class="form-control" placeholder="Nova Senha" name="strnovasenha">


                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="userinput2" class="sr-only">Confirme Senha</label>
                                        <!-- <input type="text" id="userinput2" class="form-control" placeholder="Company" name="company"> -->
                                        <input id="confirme-strsenha" type="password"  placeholder="Confirme Senha" class="form-control" name="confirme-strsenha" required autocomplete="new-password">



                                    </div>
                                </div>
                                <!-- <input id="confirme-strsenha" type="password" class="form-control" name="confirme-strsenha" required autocomplete="new-password"> -->

                            </div>
                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="userinput3" class="sr-only">Engenharia</label>
                                        <input type="text" id="userinput3" class="form-control" placeholder="Username" name="username">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="userinput4" class="sr-only">Periodo</label>
                                        <input type="text" id="userinput4" class="form-control" placeholder="Nick Name" name="nickname">

                                    </div>
                                </div>
                            </div> -->

                            <!-- <h4 class="form-section"><i class="ft-mail"></i> Contact Info &amp; Bio</h4>

                            <div class="form-group">
                                <label for="userinput5" class="sr-only">Email</label>
                                <input class="form-control" type="email" placeholder="email" id="userinput5">
                            </div>

                            <div class="form-group">
                                <label for="userinput6" class="sr-only">Website</label>
                                <input class="form-control" type="url" placeholder="http://" id="userinput6">
                            </div>

                            <div class="form-group">
                                <label for="userinput8" class="sr-only">Bio</label>
                                <textarea id="userinput8" rows="5" class="form-control" name="bio" placeholder="Bio"></textarea>
                            </div> -->

                        </div>

                        <div class="form-actions right">
                            <!-- <button type="button" class="btn btn-outline-warning mr-1">
                                <i class="ft-x"></i> Cancel
                            </button> -->
                            <button type="submit" class="btn btn-outline-primary">
                                <i class="ft-check"></i> Atualizar
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</section>


<!-- <div class="container">
    <div class="row justify-content-center" style="    margin-right: 0px;border-left-width: 35px;padding-left: 275px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="center" style="    background-color: rgba(0,0,0,.03);">Nova Senha</div>



                <div class="card-body">
                    <form method="POST" action="/SalvarNovaSenha">
                        @csrf
                        <div  class="form-group row">


                            @if(session()->get('successNovaSenha'))
                            <span  class=" col-md-6 alert alert-success">
                                <strong>{{ session()->get('successNovaSenha') }}</strong>
                            </span>
                            @endif

                            @if(session()->get('errorNovaSenha'))
                            <div   class=" col-md-6 alert alert-danger">
                                {{ session()->get('errorNovaSenha') }}
                            </div><br />
                            @endif

                        </div>




                        <div class="form-group row">
                            <label for="strsenhaatual" class="col-md-4 col-form-label text-md-right">Senha Atual</label>

                            <div class="col-md-6">
                                <input id="strsenhaatual" type="password" class="form-control @error('strsenhaatual') is-invalid @enderror" name="strsenhaatual" value="{{ old('strsenhaatual') }}" required autocomplete="strsenhaatual">

                                @error('strsenhaatual')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                @if(session()->get('errorNovaSenha'))
                                <br><span  align="center" class="alert alert-danger" role="alert" >

                                    <strong>{{ session()->get('errorNovaSenha') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Nova Senha</label>

                            <div class="col-md-6">
                                <input id="strnovasenha" type="password" class="form-control @error('strnovasenha') is-invalid @enderror" name="strnovasenha" required autocomplete="strnovasenha">

                                @error('strnovasenha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                @if(session()->get('errorNovaSenha1'))
                                <br><span  align="center" class="alert alert-danger" role="alert" >

                                    <strong>{{ session()->get('errorNovaSenha1') }}</strong>
                                </span>
                                @endif

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="confirme-strsenha" class="col-md-4 col-form-label text-md-right">Confirme Senha</label>

                            <div class="col-md-6">
                                <input id="confirme-strsenha" type="password" class="form-control" name="confirme-strsenha" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Salvar
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
@endsection
