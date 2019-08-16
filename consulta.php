<?php

$direccion = "localhost";
$user = "root";
$contraseña = "";
$nombre = "practica_sql_1";

$conexion = MYSQLI_CONNECT($direccion, $user, $contraseña);

if(mysqli_connect_errno($conexion)){
echo "error al conectar";
exit();
}


mysqli_select_db($conexion, $nombre) or die ("error al conectar con la base");

$consulta = "SELECT * FROM usuarios";
$resultado = mysqli_query($conexion, $consulta);
$fila = mysqli_fetch_row($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<meta charset="UTF-8">
	<title>Inicio</title>
	
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
	
		<table border="3px">
			<tr class="head">
				<td>Id</td>
				<td>cedula</td>
				<td>nombre</td>
				<td>apellido</td>
				<td>correo</td>
				<td>sexo</td>
				<td>usuario</td>
				<td>password</td>
				<td>telefono</td>
				<td>direccion</td>
				<td colspan="2">Acción</td>
			</tr>
			<?php foreach($resultado as $fila):?>
				<tr >
					<td><?php echo $fila['id']; ?></td>
					<td><?php echo $fila['cedula']; ?></td>
					<td><?php echo $fila['nombre']; ?></td>
					<td><?php echo $fila['apellido']; ?></td>
					<td><?php echo $fila['email']; ?></td>
					<td><?php echo $fila['sexo']; ?></td>
					<td><?php echo $fila['usuario']; ?></td>
					<td><?php echo $fila['password']; ?></td>
					<td><?php echo $fila['telefono']; ?></td>
					<td><?php echo $fila['direccion']; ?></td>
					
					<td><a href="editar.php?id=<?php echo $fila['id']; ?>"  class="btn__update" >Editar</a></td>
					<td><a href="eliminar.php?id=<?php echo $fila['id']; ?>" class="btn__delete">Eliminar</a></td>
				</tr>
			<?php endforeach ?>

		</table>
	</div>
	</center>
</body>
</html>