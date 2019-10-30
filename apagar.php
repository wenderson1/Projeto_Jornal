<?php
include("conexao.php");
session_start();

$id = $_SESSION['id'];


    $query = "DELETE FROM NOTICIA WHERE ID_NOTICIA = $id ";

$sql = mysqli_query($dbcon,$query);

if($sql){
    echo "<script>alert('Noticia Apagada')</script>";
    echo "<script>window.location.assign('index.php')</script>";
}else{
    echo "<script>alert('Erro!!! Tente Novamente')</script>";
    echo "<script>window.location.assign('index.php')</script>";
}


?>
