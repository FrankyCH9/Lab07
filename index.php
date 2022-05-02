<!DOCTYPE html>
<?php
include('funciones/funciones.php');
$xc=conectar();
$sql= 'SELECT * FROM header';
$res=mysqli_query($xc,$sql);
$sql1='SELECT *FROM subtitulo';
$res1=mysqli_query($xc,$sql1);


?>

<html>

<head>
	<title>Tienda de Juegos</title>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/skeleton.css" />
	<link rel="stylesheet" type="text/css" href="css/estilos2.css" />
</head>

<body>
	<header class="header">
		<div class="container">
			<div class="row">
				<div class="four columns">
					<h1><?php 
					while($filas=mysqli_fetch_array($res))
					{
					echo $filas ["headercol"];
					}
					?></h1>
				</div>
				<a href="login.html"><input type="button" value="Iniciar Sesion" class="button"></a>
				<a href="registro.html"><input type="button" value="Registrarse" class="button"></a>
				<div class="two columns u-pull-right">
					<ul>
						<li class="submenu">
							<img src="img/cart.png" />
							<div id="carrito">
								<p class="vacio">carrito vacio</p>
								<table class="u-full-width">
									<thead>
										<tr>
											<th>Imagen</th>
											<th>Productos</th>
											<th>Precio</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<img src="img/juego1.png" width="100" />
											</td>
											<td>Squad Steam Key GLOBAL</td>
											<td>$9.99</td>
											<td><a href="#" class="borrar-product">X</a></td>
										</tr>
										<tr>
											<td>
												<img src="img/juego6.png" width="100" />
											</td>
											<td>Plants vs. Zombies Garden Warfare 2 Origin Key GLOBAL</td>
											<td>$5.99</td>
											<td><a href="#" class="borrar-product">X</a></td>
										</tr>
									</tbody>
								</table>
								<a href="#" class="button u-full-width">vaciar carrito</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>

	<div class="hero">
		<div class="container">
			<div class="row">
				<div class="six columns">
					<div class="contenido-hero">
						<h2><?php 
					      while($filas1=mysqli_fetch_array($res1))
					      {
					      echo $filas1 ["subtitulocol"];
					      }
					      ?></h2>
						<p>Todos los pedidos con descuento</p>
						<form>
							<input class="u-full-width" type="text" placeholder="Busca un juego"
								id="buscador" />
							<input type="submit" class="submit-buscador" />
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="lista-products" class="container">
		<h1>Juegos en ofertas</h1>
		<div class="row">
			<div class="four columns">
				<div class="card">
					<img src="img/juego1.png" class="u-full-width" />
					<div class="info-card">
						<h4>Squad Steam Key GLOBAL</h4>
						<img src="img/estrellas.png" />
						<p class="precio">$20<span class="u-pull-right">$9.99</span></p>
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar
							al carrito</a>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<img src="img/juego2.png" class="u-full-width" />
					<div class="info-card">
						<h4>Risk of Rain 2: Survivors of the Void (PC) - Steam Key - GLOBAL</h4>
						<img src="img/estrellas.png" />
						<p class="precio">$25<span class="u-pull-right">$12.99</span></p>
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar
							al carrito</a>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<img src="img/juego3.png" class="u-full-width" />
					<div class="info-card">
						<h4>Hell Let Loose (PC) - Steam Key - GLOBAL</h4>
						<img src="img/estrellas.png" />
						<p class="precio">$50<span class="u-pull-right">$35.99</span></p>
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar
							al carrito</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="four columns">
				<div class="card">
					<img src="img/juego4.png" class="u-full-width" />
					<div class="info-card">
						<h4>GhostWire: Tokyo (PC) - Steam Key - GLOBAL</h4>
						<img src="img/estrellas.png" />
						<p class="precio">$80<span class="u-pull-right">$46.99</span></p>
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar
							al carrito</a>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<img src="img/juego5.png" class="u-full-width" />
					<div class="info-card">
						<h4>Fall Guys: Ultimate Knockout (PC) - Steam Key - GLOBAL</h4>
						<img src="img/estrellas.png" />
						<p class="precio">$35<span class="u-pull-right">$16.38</span></p>
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar
							al carrito</a>
					</div>
				</div>
			</div>
			<div class="four columns">
				<div class="card">
					<img src="img/juego6.png" class="u-full-width" />
					<div class="info-card">
						<h4>Plants vs. Zombies Garden Warfare 2 Origin Key GLOBAL</h4>
						<img src="img/estrellas.png" />
						<p class="precio">$16<span class="u-pull-right">$5.99</span></p>
						<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="1">Agregar
							al carrito</a>
					</div>
				</div>
			</div>
		</div>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="four columns">
					<nav class="menu">
						<a class="enlace" href="#">Sobre nosotros</a>
						<a class="enlace" href="#">Carreras</a>
						<a class="enlace" href="#">Contacto</a>
					</nav>
				</div>
				<div class="four columns">
					<nav class="menu">
						<a class="enlace" href="#">Fabrica</a>
						<a class="enlace" href="#">Ubicacion</a>
						<a class="enlace" href="#">Telefono</a>
					</nav>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>