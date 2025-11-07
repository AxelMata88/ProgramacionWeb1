<?php
$host = "sql101.infinityfree.com"; 
$user = "if0_40298524";           
$password = "ZTqAJxO21Rv";    
$dbname = "if0_40298524_usuarios";  

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die('Error en la conexión: ' . $conn->connect_error);
}
?>
