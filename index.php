<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/journal/bootstrap.min.css" rel="stylesheet">
			<title>Bienvenida</title>
	</head>
	<body>
	<div class="container">
	<h2>Envio de datos por url</h2>
	<a href='empresa.php?nombre=castellano'class="btn btn-primary btn-lg">Castellano</a>
	<a href='empresa.php?nombre=ingles'class="btn btn-primary btn-lg">Inglés</a>
	<a href='empresa.php?nombre=frances'class="btn btn-primary btn-lg">Francés</a>
	<a href='empresa.php?nombre=aleman'class="btn btn-primary btn-lg">Alemán</a>
	</div>
	<?php
	/*Crear una página de bienvenida que contenga cuatro enlaces con apariencia de botones (bootstrap):Español, Inglés, Francés, Alemán
	Estos enlaces apuntarán a una página con url denominada empresa.php que tenga además una variable denominada idioma(id) pero cada enlace con cuatro valores diferentes:español(es), francés(fr), inglés(en), alemán(gr)...
	Cada enlace apuntará, por tanto, a la página denominada empresa.php pero se diferenciarán en que la variable idioma (id)tomará en cada uno diferente valor.
	Elaborar un script que nos ofrezca los mismos textos pero en diferente idioma dependiendo enlace pulsado. Serán cuatro strings traducidos con el traductor de Google, por ejemplo.
	Debemos utilizar un switch
	Para finalizar deberemos implantar nuestra página en un repositorio personal de github Nota: mediante cookies podemos hacer que esta traducción se mantenga durante toda la web*/
	
	?>
	</body>
</html>
