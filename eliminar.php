




<?php 

	include_once 'conexion.php';
	if(isset($_GET['id'])){
		$id=(int) $_GET['id'];
		$delete=$conexion->prepare('DELETE FROM usuarios WHERE id=:id');
		$delete-> execute(array(':id'=>$id));
		header('Location: index.php');
	}else{
		header('Location: index.php');
	}
 ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title></title>
</head>
<body>
 <header>
    <img src="imagenes/header2.png">
</header>
<section>
    <br><br><br>

<h1>BIENVENIDO A NUESTRA PAGINA WEB</h1>
<br><br><br><br><br><br><br>
<p
 </p>

</section>
<nav>
        <ul>
            <li><a href="home.html"><img src="imagenes/home.png" ></a></li>
            <li><a href="quienes.html"><img src="imagenes/quienes.png" ></a>
               <ul>perro</ul></li>
            <li><a href="proserv.html"><img src="imagenes/proserv.png" ></a></li>
            <li><a href="ubiquenos.html"><img src="imagenes/ubiquenos.png" ></a></li>
            <li><a href="contactenos.html"><img src="imagenes/contactos.png" ></a></li>
            <li><a href="login.php"><img src="imagenes/login.png" ></a></li>
        </ul>
</nav>

