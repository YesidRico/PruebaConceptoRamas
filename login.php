<!DOCTYPE html>
<html>
<head>
	<title>pagina web </title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<header>
    <img src="imagenes/header2.png">
</header>
<section>
    <br><br><br>

<h1>BIENVENIDO A NUESTRA PAGINA WEB</h1>

<center><h1>inicio de seccion</h1></center>
    <center>
        <form action="validar.php" method="post">
            <label for="caja1"><p><h6>nombre de usuario</h6></p>
                <p><input id="caja1" type="text" name="usuario" placeholder="usuario" required=""></p>
            </label>

            <label for="caja2"><p><h6>contraseña</h6></p>
                <p><input id="caja2" type="password" name="password" placeholder="contraseña" required=""></p>
                <input type="submit" value="iniciar seccion">
            </label>
        </form>
        <br>
        <br>
        <form action="registre.php">
            <center>
                registrese: <input type="submit" value="click aqui">

                <br><br><br>
            </center>
        </form>
        <form action="consulta.php">
            <center>
                colsultar: <input type="submit" value="consulte">

                <br><br><br>
            </center>
        </form>
    </center>
<br>
<footer><center></center></footer>
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




</body>
</html>