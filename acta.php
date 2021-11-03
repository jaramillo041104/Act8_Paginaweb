<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <title>20 Noel Loera </title>
    
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<header>
		<div class="wrapp">
			<div class="logo">
				<img src="img/logo.png">
			</div>
			<nav>
				<ul>
					<li><a href="index.php">Inicio</a></li>
					<li><a href="empleados.php">Empleado</a></li>
					<li><a href="acta.php">Acta de nacimiento </a></li>
					
				</ul>
			</nav>
		</div>
	</header>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Bienvenidos al Registro Civil</h1>
			</div>

			<div class="articulo">
				<article>
					<form action="formpost.php" method="post">
						Nombre  : <input type="text" name="nombre"><br><br>
						Fecha de nacimiento : <input type="text" name="email"><br><br>
						Nombre del papa : <input type="text" name="email"><br><br>
                        Nombre del mama : <input type="text" name="email"><br><br>
						<input type="submit" value="Enviar">
					</form>
				</article>
			</div>

			<aside>
				<div class="widget">
					<h3>Tablas del Registro Civil</h3>
					<ul>
						<li><a href="empleados.php"> Empleado</a></li>
						<li><a href="acta.php">Acta de nacimiento </a></li>

					</ul>
				</div>
			</aside>
		</div>
	</section>
	<footer>
		<div class="wrapp">
            <p> 20 Noel Loera  </p>
            <p> // SUBMÓDULO 2
                Desarrolla aplicaciones Web con conexión a bases de datos</p>
            <p> https://github.com/jaramillo041104 </p>
		</div>
	</footer>
</body>
</html>