<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="estilo.css">
<head>
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


	<?php 

if (isset($_POST['usuario']) and isset($_POST['password'])) {
	include('conexion.php');
	$user = $_POST['usuario'];
	$pass = $_POST['password'];
	$consulta = "SELECT * FROM usuarios where user='$user' and pass='$pass' ";

	$resultado = mysqli_query($conexion,$consulta);
	$filas = mysqli_num_rows($resultado);
	if ($fila > 0) {
		header("location:bienvenidos.html");

	}

	else {
		header('location:registre.php');

	}

}else {
	header('location: ./');
}
mysqli_close($conexion);


	 ?>

</body>
</html>