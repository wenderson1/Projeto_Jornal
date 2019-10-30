<?php
include("conexao.php");

$nomeNoticia = $_GET['nome'];
$urgente = $_GET['urgente'];
$texto = $_GET['noticia'];
$data = date('Y-m-d');

$query = "INSERT INTO NOTICIA (NOME_NOTICIA,DESC_NOTICIA,DATA_NOTICIA,URGENTE) 
        VALUES ('$nomeNoticia','$texto','$data',$urgente) ";

$sql = mysqli_query($dbcon,$query);

if($sql){
    echo "<script>alert('Noticia Cadastrada')</script>";
    echo "<script>window.location.assign('cadastrar.php')</script>";
}else{
    echo "<script>alert('Erro!!! Tente Novamente')</script>";
    echo "<script>window.location.assign('cadastrar.php')</script>";
}


?>