<?php 
include("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Cadastrar Noticia</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">        
                <div id="cabeçalho" class="col-sm-12" width="200px"> 
                <img alt="logo maxpro" src="maxpro.png" width="300px"/>
                <a class="btn btn-primary" href="index.php" role="button">Home</a>
                <a class="btn btn-primary" href="cadastrar.php" role="button">Cadastrar</a>
                <a class="btn btn-primary" href="pesquisar.php" role="button">Pesquisar</a>
                
                </div>                              
        </div>

        <div id="corpo" class="row" >
            <div class="col-sm-12">

             <form action="pesquisar-noticia.php" method="get">

             <label for="exampleFormControlInput1">Titulo da Noticia que deseja consultar</label>
             <input type="text" class="form-control" id="exampleFormControlInput1" name="titulo"> 
             <br>
            
                <button type="submit" class="btn btn-primary">Pesquisar</button>
                </div>

            
        </div>                

        <footer class="footer">
        <div id="rodape" class="row" width="500px"> 
        <div class="col-sm-12" >
            <h2> Grupo MaxPro Educacional</h2>

        </div>
        </div>
        </footer>
    </div>
    
</body>


</html>