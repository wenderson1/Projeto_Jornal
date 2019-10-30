<?php
include("conexao.php");
session_start();

$nomeNoticia = $_GET['nome'];
$urgente = $_GET['urgente'];
$texto = $_GET['noticia'];
$data = date('Y-m-d');
$id = $_SESSION['id'];

$query = "UPDATE NOTICIA SET NOME_NOTICIA = '$nomeNoticia', DESC_NOTICIA = '$texto', DATA_NOTICIA='$data', URGENTE=$urgente
        WHERE ID_NOTICIA = $id ";

$sql = mysqli_query($dbcon,$query);

if($sql){
    echo "<script>alert('Noticia Atualizada')</script>";
    echo "<script>window.location.assign('index.php')</script>";
}else{
    echo "<script>alert('Erro!!! Tente Novamente')</script>";
    echo "<script>window.location.assign('index.php')</script>";
}


?>
