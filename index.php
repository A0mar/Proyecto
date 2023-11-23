<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION["nombre"])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
		<meta name="author" content="Omar Alonso">
		<meta name="author" content="Pablo Ramirez">
		<meta name="author" content="Ignacio Rodríguez">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header>
        <h1>CATÁLOGO PLAYPORTAL</h1>
    </header>
    <main>
        <p>Bienvenido, <?php echo $_SESSION["nombre"]; ?>!</p>
				<section>
      <h1>Productos</h1>
      <hr>
      <article>
        <p>Battleflied 2042</p>
        <img src="img/BF.jpg" alt="BF2042">
        <p>29,99€ - <button type="button">Comprar</button></p>
        <a href="detalles_Productos.html">Acerca del juego</a>
      </article>
      <article>
        <p>Horizon Zero Dawn</p>
        <img src="img/horizon_Zero.jpg" alt="HZD">
        <p>29,99€ - <button type="button">Comprar</button></p>
        <a href="detalles_Productos.html">Acerca del juego</a>
      </article>
      <article>
        <p>Euro Track Simulator</p>
        <img src="img/euroTrack.jpg" alt="EURO TS">
        <p>29,99€ - <button type="button">Comprar</button></p>
        <a href="detalles_Productos.html">Acerca del juego</a>
      </article>
      <article>
        <p>Forza Horizon 5</p>
        <img src="img/forza_horizon.jpg" alt="FH5">
        <p>49,99€ - <button type="button">Comprar</button></p>
        <a href="detalles_Productos.html">Acerca del juego</a>
      </article>
      <article>
        <p>Flight Simulator</p>
        <img src="img/flight_simu.jpg" alt="FS">
        <p>59,99€ - <button type="button">Comprar</button></p>
        <a href="detalles_Productos.html">Acerca del juego</a>
      </article>
    </section>
    </main>
		<aside>
    <h1>Carrito</h1>
    <hr>
    <button type="button">Eliminar</button>
    <p>Total: </p>
  </aside>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> - Tu sitio web</p>
    </footer>
</body>

</html>