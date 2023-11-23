<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
		<meta name="author" content="Omar Alonso">
		<meta name="author" content="Pablo Ramirez">
		<meta name="author" content="Ignacio Rodríguez">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <header>
        <h1>Bienvenido/a a PLAYPORTAL</h1>
    </header>
    <main>
        <?php
        session_start();

        // Verificar si el usuario ya está autenticado
        if (isset($_SESSION["nombre"])) {
            echo "<p>Bienvenido, " . $_SESSION["nombre"] . "!</p>";
            echo "<p><a href='index.php'>Ir al catalogo</a></p>";
            echo "<p><a href='logout.php'>Cerrar sesión</a></p>";
        } else {
            // Mostrar el formulario de inicio de sesión si no está autenticado
            echo '
            <form action="procesar_login.php" method="post">
							<label for="nombre">Nombre de usuario:</label>
							<br>
							<input type="text" name="nombre" id="nombre" placeholder="Introduzca usuario">
							<br>
							<br>
							<label for="clave">Contraseña: </label>
							<br>
							<input type="password" name="clave" id="clave" placeholder="Introduzca contraseña">
							<br>
							<br>
							<input type="submit" value="Enviar" class="botonColor">
							<input type="reset" value="Reiniciar" class="botonColor">
            </form>';
        }
        ?>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> - Tu sitio web</p>
    </footer>
</body>

</html>