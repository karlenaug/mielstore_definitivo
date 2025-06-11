<?php
if (isset($_POST['guardar'])) {
//CAPTURA DE DATOS    
$nombre = $_POST ['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];
$confirmar_contraseña = $_POST['confirmar-contraseña'];
//MUESTRA DE DATOS 
echo $nombre; echo "<br>";
echo $apellido; echo "<br>";
echo $email; echo "<br>";
echo $contraseña; echo "<br>";
echo $confirmar_contraseña; echo "<br>";
}