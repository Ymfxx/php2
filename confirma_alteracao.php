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


<?php
include"conecta.php";
$cod = $_GET["cod"];
$titulo = $_POST["titulo"];
$genero = $_POST["genero"];
$duracao= $_POST[ "duracao"];
$sql="UPDATE filmes SET titulo= '$titulo', genero = '$genero', duracao= $duracao WHERE id=$cod";

if ($conn->query($sql) === TRUE) {
    echo "<b>Filme alterado com sucesso</b>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<p style="text-align:rigth;">
<a href='lista.php' class='btn btn-primary btn-sm' 
role='button'>Voltar</a>
</div>
</body>
</html>
