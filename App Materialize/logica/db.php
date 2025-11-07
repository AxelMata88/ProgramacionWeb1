<?php

 $host = 'sql107.infinityfree.com';
 $user = 'if0_40354356';  
 $password = 'KDqGrYCasuE5MjD';
 $dbname = 'if0_40354356_registrousuarios';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Error en la conexión: ' . $conn->connect_error);
}
?>
