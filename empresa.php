<!DOCTYPE html>
<html  lang="es">
<head>
	<meta charset='utf-8'>
	<title>Empresa</title>
	<meta charset="utf-8" >
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.1/journal/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">


<h2>Bienvenida</h2>

<?php

$id1 =<<<BIO1
	<h3>Unitel</h3>
	<ul>
	<li>Telecomunicaciones</li>
	<li>Formación</li>
	<li>Redes</li>
	</ul>
BIO1;
$id2 =<<<BIO2
	<h3>Unitel</h3>
	<ul>
	<li>Telecommunications</li>
	<li>Training</li>
	<li>Networks</li>
	</ul>
BIO2;
$id3=<<<BIO3
	<h3>Unitel</h3>
	<ul>
	<li>Télécommunications</li>
	<li>Formation</li>
	<li>Réseaux</li>
	</ul>
BIO3;
$id4 =<<<BIO4
	<h3>Unitel</h3>
	<ul>
	<li>Telekommunikation</li>
	<li>Ausbildung</li>
	<li>Netzwerke</li>
	</ul>
BIO4;
/*$id='';
if(empty($_GET['nombre'])){
	echo'';
}else{
	$id=$_GET['nombre'];	
	if($id=='castellano')echo $id1;
	if($id=='ingles')echo $id2;
	if($id=='frances')echo $id3;
	if($id=='aleman')echo $id4;
	
}*/
$id=$_GET['nombre'];
switch ($id){
	case $id=='castellano';
		echo $id1;
		break;
	case $id=='ingles';
		echo $id2;
		break;
	case $id=='frances';
		echo $id3;
		break;
	case $id=='aleman';
		echo $id4;
		break;
}
