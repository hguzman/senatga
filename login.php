<?php
	$usuario=$_POST['usu'];
	$contrasena=$_POST['con'];
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
				      <li class="active"><a href="#"><?php echo "USUARIO ".$usuario ?></a></li>
				    </ul>
				  </section>			    			
			  </nav>
		</div>
		<br>
		<div class="row">
			<div class="large-4 columns">
				<ul class="side-nav">
				  <li><a href="#">Modulo 1</a></li>
				  <li><a href="#">Modulo 2</a></li>
				  <li><a href="#">Modulo 3</a></li>
				  <li><a href="#">Modulo 4</a></li>
				</ul>				
			</div>
			<div class="large-8 columns">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, unde, eligendi odit harum mollitia quibusdam aut asperiores dolorem error sed obcaecati atque laudantium vero provident vitae quam repudiandae voluptatem optio.
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
