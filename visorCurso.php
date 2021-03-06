<?php
require_once 'inc/funciones.php';
sesion();
require_once 'inc/validaciones.inc.php';
if(!isset($_GET['curso'])){
    header("Location:index.php");
}
include_once("clases/Curso.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Página curso</title>
	<link type="text/css" rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/main_perfil.css" />
	<link href='http://fonts.googleapis.com/css?family=Pathway+Gothic+One' rel='stylesheet' type='text/css' />
	<script src="jquery/jquery-3.1.1.min.js" ></script>
	<script type="text/javascript" src="jquery/jquery_menu_desplegable.js"></script>
	<script type="text/javascript" src="jquery/jquery_acordeon.js"></script>
	<script src="jquery/jquery_menuMoviles_desplegable.js" ></script>
	<style type="text/css">
			.estrellas {
				text-align: center;
			}
			.fa-star, .fa-star-o {
					color: yellow ;
					text-decoration: none;
			}
			.fa-star:hover {
					color: yellow ;
					text-decoration: none;
			}
	</style>

</head>
<body>
	<header id="header" class="">
		<nav id='navegacion'>
			<ul id='lista_principal'>
				<li id='inicio'><a href="" title=""><i class="fa fa-home" aria-hidden="true"></i>Inicio</a></li>
				<li id='editor'><a href="" title=""><i class="fa fa-pencil" aria-hidden="true"></i>Conviértete en editor</a></li>
				<li id='perfil'><a href=""><img src="" alt=""><i class="fa fa-user" aria-hidden="true"></i>Miguel Costa<i class="fa fa-angle-down" aria-hidden="true"></i></a>
					<ul class='perfil' id='perfil_usuario'>
						<li>Mis cursos</li>
						<li>Gestión de usuarios</li>
						<li>Gestión de cursos</li>
						<li class='editar'>Editar usuario</li>
					</ul></li>
				<li id='ini_sesion'><a href="" title=""><i class="fa fa-lock" aria-hidden="true"></i>Cerrar Sesión</a></li>
				<li id='menu_moviles'><i class="fa fa-bars" aria-hidden="true"></i></a>
				<ul id='lista_movil'>
					<li id='perfil2'><a href=""><img src="" alt="">Miguel Costa</a>
						<ul class='perfil2' id='perfil_usuario2'>
							<li><a href="#">Mis cursos</a></li>
							<li><a href="#">Gestión de usuarios</a></li>
							<li><a href="#">Gestión de cursos</a></li>
							<li class='editar'><a href="#">Editar usuario</a></li>
						</ul></li>
						<li id='editor2'><a href="" title="">Conviértete en editor</a></li>
						<li id='ini_sesion'><a href="" title="">Cerrar Sesión</a></li>
				</ul></li>
			</ul>
		</nav>
		<div id='slider_perfil'>
		</div>
	</header>
	<article id='curso'>
		<div class='imagen'>
			<img src="img/php.png" alt="">
			<div class='estrellas'></div>
		</div>
		<div id='descripcion_curso'>
			<h2>PHP</h2>
			 	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean viverra, mauris non commodo dignissim, nunc ligula ultrices mauris, sed lacinia est tortor non urna. Duis porta efficitur tellus non ullamcorper. Suspendisse massa arcu, eleifend id gravida scelerisque, placerat non diam. Nunc posuere lectus neque, ac semper magna molestie in. Integer tristique, felis eu interdum consequat, nulla odio congue enim, eget posuere orci neque ut ligula. Aenean at auctor elit. Vivamus tristique elit in nisl lacinia, eu tempor libero placerat. Vestibulum pulvinar augue sit amet quam dapibus, lacinia ultricies justo blandit. Vivamus a ultricies massa. Mauris vulputate volutpat bibendum.</p>
			<ul id='temas'>
				<li><h2 class='titulo_tema'>TEMA 1. INTRODUCCIÓN</h2>
				<p class='descripcion_tema'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean viverra, mauris non commodo dignissim, nunc ligula ultrices mauris, sed lacinia est tortor non urna. Duis porta efficitur tellus non ullamcorper. Suspendisse massa arcu, eleifend id gravida scelerisque, placerat non diam. Nunc posuere lectus neque, ac semper magna molestie in. Integer tristique, felis eu interdum consequat, nulla odio congue enim, eget posuere orci neque ut ligula. Aenean at auctor elit. Vivamus tristique elit in nisl lacinia, eu tempor libero placerat. Vestibulum pulvinar augue sit amet quam dapibus, lacinia ultricies justo blandit. Vivamus a ultricies massa. Mauris vulputate volutpat bibendum.<a href=""><i class="fa fa-download" aria-hidden="true"></i></a></p></li>
				<li><h2 class='titulo_tema'>TEMA 2. DESARROLLO</h2>
				<p class='descripcion_tema'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean viverra, mauris non commodo dignissim, nunc ligula ultrices mauris, sed lacinia est tortor non urna. Duis porta efficitur tellus non ullamcorper. Suspendisse massa arcu, eleifend id gravida scelerisque, placerat non diam. Nunc posuere lectus neque, ac semper magna molestie in. Integer tristique, felis eu interdum consequat, nulla odio congue enim, eget posuere orci neque ut ligula. Aenean at auctor elit. Vivamus tristique elit in nisl lacinia, eu tempor libero placerat. Vestibulum pulvinar augue sit amet quam dapibus, lacinia ultricies justo blandit. Vivamus a ultricies massa. Mauris vulputate volutpat bibendum.<a href=""><i class="fa fa-download" aria-hidden="true"></i></a></p></li>
				<li><h2 class='titulo_tema'>TEMA 3. CONCLUSIÓN</h2>
				<p class='descripcion_tema'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean viverra, mauris non commodo dignissim, nunc ligula ultrices mauris, sed lacinia est tortor non urna. Duis porta efficitur tellus non ullamcorper. Suspendisse massa arcu, eleifend id gravida scelerisque, placerat non diam. Nunc posuere lectus neque, ac semper magna molestie in. Integer tristique, felis eu interdum consequat, nulla odio congue enim, eget posuere orci neque ut ligula. Aenean at auctor elit. Vivamus tristique elit in nisl lacinia, eu tempor libero placerat. Vestibulum pulvinar augue sit amet quam dapibus, lacinia ultricies justo blandit. Vivamus a ultricies massa. Mauris vulputate volutpat bibendum.<a href=""><i class="fa fa-download" aria-hidden="true"></i></a></p></li>
			</ul>
		</div>
	</article>
	<!-- Votacion -->
	<script src="jquery/jquery-3.1.1.min.js"></script>
	<script src="jquery/starrr.js"></script>
	<script type="text/javascript">

			 $(document).ready(function(){
					 // Imprimir scripts diferentes cuando estes logueado //

					 <?php
							if( isset($_SESSION['datos']['id_usuario']) ){
									// Haremos la prueba con el id 3
									$editor = Curso::soy_editor_de_este_curso(3,$_GET['curos']);
									echo "$('.estrellas').starrr({
											rating: ".Curso::valoracion_tema($_GET['curos']).", //Estrellas se estaran iluminadas en un principio
											max: 5, // Maximo de estrellas
											readOnly: '".$editor."', // Solo Lectura
											change:function(e,valor){
													// Cuando cambie el valor de las estrellas Haz X
													$.ajax({
															data: {'usuario' : ".$_SESSION['datos']['id_usuario'].", 'tema': ".$_GET['curos'].", 'voto': valor},
															type: 'POST',
															url: 'inc/funciones_AJAX.php?codigoFuncion=1',
													})
													.done(function( data, textStatus, jqXHR ) {
															if(data==0){
																	alert('Comprueba si estas suscrito en el curso.');
															}
													})
													.fail(function( jqXHR, textStatus, errorThrown ) {
															if ( console && console.log ) {
																	console.log( 'La solicitud a fallado: ' +  textStatus);
															}
													});
											}
									});" ;
							} else {
									echo "$('.estrellas').starrr({
											rating: ".Curso::valoracion_tema($_GET['curso']).", //Estrellas se estaran iluminadas en un principio
											max: 5, // Maximo de estrellas
											readOnly: 'true', // Solo Lectura
											change:function(e,valor){
													// Cuando cambie el valor de las estrellas Haz X
													$.ajax({
															data: {'usuario' : 1, 'tema': ".$_GET['curso']." , 'voto': valor},
															type: 'POST',
															url: 'inc/funciones_AJAX.php?codigoFuncion=1',
													})
													.done(function( data, textStatus, jqXHR ) {
															if(data==0){
																	alert('Comprueba si estas suscrito en el curso.');
															}
													})
													.fail(function( jqXHR, textStatus, errorThrown ) {
															if ( console && console.log ) {
																	console.log( 'La solicitud a fallado: ' +  textStatus);
															}
													});
											}
									});" ;
							}


					 ?>
			});

	</script>
</body>
</html>
