<?php

	$usuario=$_POST['usu'];
	$contrasena=$_POST['con'];

	$db = mysql_connect("127.0.0.1", "root","usrio01"); // Conecta la base de datos
	mysql_select_db("senatga",$db);// Seleccion la base de datos correcta

	$sql = "select * from usuarios where usuario='$usuario' and contrasena='$contrasena'";

	$result = mysql_query($sql);

	$contador=  mysql_num_rows($result);

	if ($contador<1){
		header('Location: index.html');
	}
		session_start(); //Inicia Manipulación de Variables de Session
	    $_SESSION["hola"]=$usuario;

?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width">
	    <link rel="stylesheet" href="css/foundation.css" />
	    <script src="js/vendor/modernizr.js"></script>
	</head>
	<body>
		<div class="row">
			  <nav class="top-bar" data-topbar>
			    <ul class="title-area">
			      <li class="name">
			        <h1><a href="#">Proyecto</a></h1>
			      </li>
			      <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
			    </ul>
				<section class="top-bar-section">
				    <!-- Right Nav Section -->
				    <ul class="right">				      
				      <li class="active"><a href="cerrarsesion.php">Cerrar Sesión</a></li>
				    </ul>
				<!-- Left Nav Section -->
				    <ul class="left">
				      <li><a href="#"><?php echo $usuario ?></a></li>
				    </ul>
				</section>			    			
			  </nav>
		</div>
		<br>
		<div class="row">
			<div class="large-2 columns panel">
				<ul class="side-nav">
				  <li><a href="#">Usuario</a></li>
				  <li><a href="#">Modulo 2</a></li>
				  <li><a href="#">Modulo 3</a></li>
				  <li><a href="#">Modulo 4</a></li>
				</ul>				
			</div>
			<div class="large-10 columns">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, unde, eligendi odit harum mollitia quibusdam aut asperiores dolorem error sed obcaecati atque laudantium vero provident vitae quam repudiandae voluptatem optio.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, eveniet, iusto, doloribus molestiae vero illum magni unde enim ut blanditiis similique voluptatum ducimus voluptates totam officiis quasi quos esse ab!
			</div>
		</div>
		<footer class="row">
			<div class="large-12 olumns">
				<hr/>
				<div class="row">
					<div class="large-6 columns">
						<p>© Copyright no one at all. Go to town.</p>
					</div>
					<div class="large-6 columns">
						<ul class="inline-list right">
				            <li><a href="#">Opción 1</a></li>
				            <li><a href="#">Opción 2</a></li>
				            <li><a href="#">Opción 3</a></li>
				            <li><a href="#">Opción 4</a></li>
				          </ul>
					</div>
				</div>
			</div>
		</footer>

	</body>
</html>
