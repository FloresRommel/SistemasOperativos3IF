<?php
$host = 'localhost';
$user = 'pepe';
$pass = 'prueba1A?';

$mysqli = new mysqli($host, $user, $pass);

if (!$mysqli->connect_error) {
    echo 'Connection successful!';
}  else {
    echo 'Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error;
}

$mysqli->close();
?>
