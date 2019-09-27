<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Register Page - Stack Responsive Bootstrap 4 Admin Template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/pace.css">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/login-register.css">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END Custom CSS-->
  </head>
  <body data-open="click" data-menu="vertical-menu" data-col="1-column" class="vertical-layout vertical-menu 1-column  blank-page blank-page">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="app-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="flexbox-container">
    <div class="col-md-4 offset-md-4 col-xs-10 offset-xs-1 box-shadow-2 p-0">
		<div class="card border-grey border-lighten-3 px-2 py-2 m-0">
			<div class="card-header no-border">
				<div class="card-title text-xs-center">
					<img src="../../../app-assets/images/logo/stack-logo-dark.png" alt="branding logo">
				</div>
				<h6 class="card-subtitle line-on-side text-muted text-xs-center font-small-3 pt-2"><span>Criar Conta</span></h6>
			</div>
			<div class="card-body collapse in">
				<div class="card-block">
					<form class="form-horizontal form-simple" method="POST" action="/salvarUsuario" novalidate>
                        @csrf
                        <fieldset align="center" class="form-group position-relative has-icon-left mb-1">
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
						</fieldset>

						<fieldset class="form-group position-relative has-icon-left mb-1">
							<input type="text" class="form-control form-control-lg input-lg" id="user-name" name="strnomeusuario" placeholder="Nome Completo">
							<div class="form-control-position">
							    <i class="ft-user"></i>
							</div>
						</fieldset>
						<fieldset class="form-group position-relative has-icon-left mb-1">
							<input type="email" class="form-control form-control-lg input-lg" id="user-email" name="stremailusuario" placeholder="Endereço de E-mail" required>
							<div class="form-control-position">
							    <i class="ft-mail"></i>
							</div>
						</fieldset>


                        <div class="row">
    						<div class="col-xs-12 col-sm-6 col-md-6">

                                <fieldset class="form-group position-relative has-icon-left  mb-1">
        							<input type="password" class="form-control form-control-lg input-lg" id="user-password" name="strsenha" placeholder="Senha" required>
        							<div class="form-control-position">
        							    <i class="fa fa-key"></i>
        							</div>
        						</fieldset>
                                <div class="help-block font-small-3"></div>

    						</div>
    						<div class="col-xs-12 col-sm-6 col-md-6">
                                <fieldset class="form-group position-relative has-icon-left  mb-1">
        							<input type="password" class="form-control form-control-lg input-lg" id="user-password" name="confirme-strsenha" placeholder="Confirme a Senha" required>
        							<div class="form-control-position">
        							    <i class="fa fa-key"></i>
        							</div>
                                    <div class="help-block font-small-3"></div>

        						</fieldset>

    						</div>
    					</div>
                        <fieldset class="form-group position-relative has-icon-left  mb-1">
                            <div class="form-control-position">
                                <i class="fa fa-sitemap"></i>
                            </div>
                            <select name="fk_idengenharia" required class="form-control form-control-lg ">
                                <option>Selecione a Sua engenharia</option>
                                @foreach($engenharias as $engenharia)
                                <option value="{{ $engenharia->idEngenharia }}">{{ $engenharia->strnomeengenharia}}</option>
                                @endforeach
                            </select>
                        </fieldset>
                        <fieldset class="form-group position-relative has-icon-left  mb-1">
                            <div class="form-control-position">
                                <i class="fa fa-calendar-check-o"></i>
                            </div>
                            <select name="fk_idperiodo"required class="form-control form-control-lg ">
                                <option>Selecione Período</option>
                                @foreach($periodos as $periodo)
                                <option value="{{ $periodo->idPeriodos }}">{{ $periodo->strperiodo}}</option>
                                @endforeach
                            </select>
                        </fieldset>

						<button type="submit" class="btn btn-primary btn-lg btn-block"><i class="ft-unlock"></i> Cadastrar</button>
					</form>
				</div>
				<p class="text-xs-center">Já possui uma conta ? <a href="\login" class="card-link">Login</a></p>
			</div>
		</div>
	</div>
</section>
        </div>
      </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN STACK JS-->
    <script src="../../../app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="../../../app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END STACK JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
