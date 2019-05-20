
<!DOCTYPE html>
<html>

<head>
	<title><?= NOMBRE_APLICACION ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta charset="utf-8">
	<!-- SEO Meta Tags -->
	<meta name="description" content="Descripción" />
	<meta name="keywords" content="Palabras Clave" />
	<meta name="author" content="CarpathiaLab" />

	<!-- Mobile Specific Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<!-- Favicon Icon -->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!--CSS-->
	<link href="/css/styles.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
	<link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
	<!-- CSS style Horizontal Nav-->
	<link href="css/layouts/style-horizontal.css" type="text/css" rel="stylesheet" media="screen,projection">
	<!-- Custome CSS-->
	<link href="css/custom/custom.min.css" type="text/css" rel="stylesheet" media="screen,projection">
	<link rel="stylesheet" type="text/css" href="css/personalizado.css" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
	<link rel="stylesheet" href="js/jquery-ui.min.css" />
	<link rel="stylesheet" href="css/toastr.min.css">

</head>

<body>
	<!-- Intro Section -->
	<section class="intro">
		<div class="gradient"></div>
		<div class="container">
			<div class="column-wrap">
				<!-- Middle Column-->
				<div class="column c-middle">
					<h1 class="logo"><img width="200" src="img/logo-big.png" alt="GaleaSystem"> <?= NOMBRE_APLICACION ?>
					</h1>
					<form class="tab-pane transition scale fade in active whitebox col-md-6 offset-md-3"
						style="background: white; padding: 20px; border-radius: 21px; opacity: 0.8;" id="frmLogin"
						autocomplete="off" onkeypress="firmado(event)"> <!--inline style  -->
						<input type="hidden" value="l" name="r" />
						<center>
							<h3>Iniciar Sesión</h3>
						</center>
						<div class="form-group space-top-2x">
							<label for="usuario" class="sr-only">Usuario</label>
							<input type="text" class="form-control" id="usuario" placeholder="Usuario" readonly
								onfocus="$(this).removeAttr('readonly');" required>
							<span class="error-label"></span>
							<span class="valid-label"></span>
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">Contraseña</label>
							<input type="password" class="form-control" id="pwd" placeholder="Contraseña" readonly
								onfocus="$(this).removeAttr('readonly');" required>
							<span class="error-label"></span>
							<span class="valid-label"></span>
						</div>
						<div class="space-top-2x clearfix">
							<!--<button type="button" class="btn-round btn-ghost btn-danger pull-left" onclick="limpia()">
									<i class="flaticon-cross37"></i>
								</button>
								<button type="button" value="enviar" onclick="firmado(event)" class="btn-round btn-ghost btn-success pull-right">
									<i class="flaticon-correct7"></i>
								</button>-->
							<button type="button" value="enviar" onclick="firmado(event)"
								class="waves-effect waves-light btn-large blue-grey darken-3"
								style="width:100%;">ENTRAR</button> <!--inline style-->
						</div>
					</form>
				</div>
			</div>
		</div>
	</section><!-- Intro Section End -->

	<!-- Footer -->
	<!-- Javascript (jQuery) Libraries and Plugins -->
	<script src="js/jquery.min.js"></script>
	<script src="js/plugins/bootstrap.min.js"></script>
	<script src="js/toastr.min.js"></script>
	<script src="/js/script.js"></script>

</body><!-- Body End-->
</body>

</html>


<!-- Etiquetas encontradas
<html>
<head>
<title>
<meta>
<script>
<link>
<body>
<section>
<div>
<h1>
<form>
<style>
<center>
<span>
<label>
<input>
<button>

-- Atributos encontrados:
type, class, id, for
-->

