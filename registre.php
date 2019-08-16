<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title>pagina web</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
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

	<center>
		<form action="" method="post">
			<table>
				<tr>
					<td><b>cedula:</b></td><td><input required type="" name="ced"><br></td>
				</tr>

				<tr><td><b>nombre:</b></td><td><input type="" name="nom"><br></td></tr>

				</tr>
				<tr><td><b>apellido:</b></td><td><input type="" name="ape"></td></tr>

				</tr>
				<tr><td><b>email:</b></td><td><input type="" name="ema"></td></tr>

				
				<tr><td><b>sexo:</b></td><td>
					hombre<input checked type="radio" value="M" name="sex">
				    mujer<input type ="radio" value="F" name="sex"><br></td></tr>

				<tr><td><b>usuario:</b></td><td><input type="" name="use"></td></tr>

				<tr><td><b>contraseña:</b></td><td><input type="password" name="pas"></td></tr> 

				<tr><td><b>telefono:</b></td><td><input type="" name="tel"></td></tr>

				<tr><td><b>direccion:</b></td><td><input type="" name="dir"></td></tr> 

            </tr>

			</table>
			<br><input type="submit" name="" value="registrarse">
		</form>
	</center>

<?php 

   include("conexion.php");

   if ($_POST) {
   	
   	$ced = $_POST['ced'];
   	$nom = $_POST['nom'];
   	$ape = $_POST['ape'];
   	$ema = $_POST['ema']; 
   	$sex = $_POST['sex'];
   	$use = $_POST['use'];
   	$pas = $_POST['pas'];
   	$tel = $_POST['tel'];
   	$dir = $_POST['dir'];


mysqli_query($conexion, "INSERT INTO usuarios(cedula,nombre,apellido,email,sexo,usuario,password,telefono,direccion) VALUES ('$ced','$nom','$ape','$ema','$sex','$use','$pas','$tel','$dir')") or die("error al ingresar dato");

echo "dato guardado";

   }

 ?>


</body>
</html>