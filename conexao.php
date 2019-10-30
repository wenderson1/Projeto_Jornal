<?php 

$hostname="localhost";
$user="root";
$senha="";
$banco="JORNAL";

$dbcon = new MySQLi("$hostname","$user","$senha","$banco");

if($dbcon->connect_error){
    echo "erro na conexão";
    exit();
}



?>