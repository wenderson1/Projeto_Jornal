<?php 
include("conexao.php");
session_start();

$query1 = "SELECT * FROM NOTICIA";

$sql1 = mysqli_query($dbcon,$query1);


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
        <table class="table table-dark">
    <thead>
    <tr>
      <th scope="col">Titulo da Noticia</th>
      <th scope="col2">Descrição da Noticia</th>
      <th scope="col3">Data da Noticia</th>
      <th scope="col4">Urgente</th>
      <th scope="col5">Alterar</th>
      <th scope="col6">Excluir</th>
    </tr>
  </thead>
  <?php while($linha = $sql1->fetch_array()){ ?>
    
    <tbody>
    <tr>
      <th scope="row"><?php echo $linha['NOME_NOTICIA']?></th>  
      <td> <?php echo $linha['DESC_NOTICIA']?> </td>
      <td> <?php echo date('d/m/Y',strtotime($linha['DATA_NOTICIA']));?> </td> 
      <td> <?php  if($linha['URGENTE'] == 1){echo "Urgente!!";}else{echo "Não é Urgente!";}?> </td> 
      <td> 
          
      <a href="alterar.php" class="btn btn-light" name="identi" value="<?php $_SESSION['id'] = $linha['ID_NOTICIA']?>" >Alterar </a>        
   
</td> 

        <td>
             
      <a href="apagar.php" class="btn btn-light" name="identi" value="<?php $_SESSION['id'] = $linha['ID_NOTICIA']?>" >Apagar</a>
         
        </td> 

    </tr>
   
  <?php } ?>
  </tbody>
 
</table>
            
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


<?PHP /*  <tr>
      <th scope="row">2</th>
      <td><?php echo $linha['DESC_NOTICIA']?></td>
     
    </tr>
   
    <tr>
      <th scope="row">3</th>
      <?php echo $linha['DATA_NOTICIA']?>
    </tr>

    <tr>
      <th scope="row">4</th>
      <?php if($linha['URGENTE']!=1){ echo "Não é urgente";}else{ echo "É Urgente";}?>
    </tr>

    <tr>
      <th scope="row">5</th>
      <?php if($linha['URGENTE']!=1){ echo "Não é urgente";}else{ echo "É Urgente";}?>
    </tr>

    <tr>
      <th scope="row">6</th>
      <?php if($linha['URGENTE']!=1){ echo "Não é urgente";}else{ echo "É Urgente";}?>
    </tr>*/ ?>