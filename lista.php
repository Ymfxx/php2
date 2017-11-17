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
    <div class="row">
  <div class="col-sm-10">
  <h1> Video locadora Avenida</h1>
</div>

<div class ="col-sm-2">

    <a href='cadastro.html' class='btn btn-primary ' 
role='button' style="margin-top:12px">Novo Filme</a>
    
 </div>

 <h2> lista de fimes cadastrados</h2>
    <hr>
</div>
<table class="table table table-hover">
    <thead>
      <tr>
        <th>Codigo</th>
        <th>Titulo do filme</th>
        <th>Genero</th>
        <th>Duraçao</th>
        <th>Açao </th>

      </tr>
    </thead>
    <tbody>



<?php
include "conecta.php";

$sql = "SELECT * FROM filmes";
$result = $conn->query($sql);

$num=0;

if ($result->num_rows > 0) {
    // output data of each row
    while($linha = $result->fetch_assoc()) {
       $id  = $linha{"id"};
       $titulo  = $linha["titulo"];
       $genero  = $linha{"genero"};
       $duracao  = $linha{"duracao"};
       
       echo "<tr> <td>".$id."</td>";
       echo "<td>" .$titulo."</td>";
       echo "<td>" .$genero."</td>";
       echo "<td>" .$duracao."</td>";
       echo "<td> <a href='altera.php?cod=$id' class='btn btn-warning btn-sm' role='button'>Alterar</a> &nbsp;&nbsp;";
       echo "<a href='exclui.php?cod=$id' class='btn btn-danger btn-sm' role='button'>Excluir</a></td></tr>";
  
    $num++;
    }
  
    echo"</tbody></table>";
    echo"<h3> N° de filmes listrados:".$num." </h3>";
} else {
    echo "0 results";
}
$conn->close();
?>
</div>
</body>
</html>