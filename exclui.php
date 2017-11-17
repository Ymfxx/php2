<?php
include "conecta.php";
$cod = $_GET["cod"];


$sql="SELECT * FROM filmes WHERE id=$cod";
$result = $conn->query($sql);


 
    $filme = $result->fetch_assoc();
        $titulo = $filme[ "titulo"];
        $genero = $filme["genero"];
        $duracao= $filme[ "duracao"];

$conn->close();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <title>Cadastro de filmes</title>
</head>
<body>
    
<div class="container">
  <h1> Video locadora Avenida</h1>
    <h2> Excluir   fimes</h2>
    <hr>
    <form method="POST" 
    action="confirma_exclusao.php?cod=<?=$cod?>">
  <form>
    <div class="form-group">
      <label for="titulo">titulo:</label>
      <input type="text" class="form-control" 
      id="titulo" name="titulo" value="<?=$titulo?>"readonly>
    </div>
  <div class="form-group">
      <label for="genero">genero:</label>
      <input type="text" class="form-control" 
      id="genero" name="genero" value="<?=$genero?>"readonly>
  </div>
    <div class="form-group">
      <label for="duraçao">duraçao:</label>
      <input type="text" class="form-control" 
      id="duraçao" name="duraçao" value="<?=$duracao?>"readonly>
    </div>
      <input type="submit" class="btn btn-danger" value="confirmar exclusao">
  
  </form>
</div>
</body>
</html>