<?php
// Agregar al repositorio

// login/aurthenticate.php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(!isset($_POST['email']) || !isset($_POST['password'])) {
        echo " - Faltan campos de entrada.";
        exit;
    }
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email === 'cendavid919@gmail.com' && $password === 'adbc1234') {
        echo " - Autenticación exitosa.";
    } else {
        echo " - Credenciales incorrectas.";
    }
}

?>
