<?php
// Agregar al repositorio

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!isset($_POST['email']) || !isset($_POST['password'])) {
        echo " - Faltan campos de entrada.";
        exit;
    }
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email === 'cendavid919@gmail.com' && $password === '12345') {
        echo " - Autenticación exitosa.";
    } else {
        echo " - Credenciales incorrectas.";
    }
}

?>
