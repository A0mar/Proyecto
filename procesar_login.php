<?php
//autores: Omar Alonso, Pablo Ramirez, Ignacio Rodríguez
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Array con usuarios y contraseñas
    $usuarios = array("user1" => "pass1", "user2" => "pass2", "user3" => "pass3");

    // Verificar si el nombre de usuario y la contraseña coinciden con el array
    if (isset($_POST["nombre"]) && isset($_POST["clave"])) {
        $nombre_usuario = $_POST["nombre"];
        $clave_ingresada = $_POST["clave"];

        if (array_key_exists($nombre_usuario, $usuarios) && $usuarios[$nombre_usuario] === $clave_ingresada) {
            $_SESSION["nombre"] = $nombre_usuario;
            header("Location: index.php");
            exit();
        } else {
            echo "Error: Nombre de usuario o contraseña incorrectos";
        }
    } else {
        echo "Error: Nombre de usuario o contraseña no proporcionados";
    }
} else {
    header("Location: login.php");
    exit();
}
?>