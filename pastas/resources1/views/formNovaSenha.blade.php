@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Nova Senha</div>



                <div class="card-body">
                    <form method="POST" action="/SalvarNovaSenha">
                        @csrf
                        <div  class="form-group row">


                            @if(session()->get('successNovaSenha'))
                            <span  class=" col-md-6 alert alert-success">
                                <strong>{{ session()->get('successNovaSenha') }}</strong>
                            </span>
                            @endif

                            <!-- @if(session()->get('errorNovaSenha'))
                            <div   class=" col-md-6 alert alert-danger">
                                {{ session()->get('errorNovaSenha') }}
                            </div><br />
                            @endif -->

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

                        <!-- <div class="form-group row">
                            <label for="fk_idengenharia" class="col-md-4 col-form-label text-md-right">Engenharia</label>

                            <div class="col-md-6">
                                <select name="fk_idengenharia" required="" class="form-control">
                                    <option>Selecione a Sua engenharia</option>

                                </select>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="periodoentrada" class="col-md-4 col-form-label text-md-right">Período de Ingresso</label>

                            <div class="col-md-6">
                                <select name="periodoentrada" required="" class="form-control">
                                    <option>Selecione Período</option>
                                    <option value="2019.1" >2013.1</option>
                                    <option value="2019.1" >2013.2</option>
                                    <option value="2019.1" >2014.1</option>
                                    <option value="2019.1" >2014.2</option>
                                    <option value="2019.1" >2015.1</option>
                                    <option value="2019.1" >2015.2</option>
                                    <option value="2019.1" >2016.1</option>
                                    <option value="2019.1" >2016.2</option>
                                    <option value="2019.1" >2017.1</option>
                                    <option value="2019.1" >2017.2</option>
                                    <option value="2019.1" >2018.1</option>
                                    <option value="2019.1" >2018.2</option>
                                    <option value="2019.1" >2019.1</option>
                                    <option value="2019.1" >2019.2</option>


                                </select>
                            </div>

                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Salvar
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
