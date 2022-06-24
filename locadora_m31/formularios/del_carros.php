<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">    
</head>
<body>
<h1>Exclusão de carro</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/deletar_carro.php">
	<label>Selecione o carro desejado:</label>
<?php
include ("../controle/conexao.php");
try{
  $sql = 'SELECT * FROM carro ORDER BY carro';
  print "<select name='cmb_carro'>";
  foreach ($conn->query($sql) as $row) {
    print "<option value='".$row['cod_carro']."'>".$row['carro']."</option>";
  }
  print "</select>";
}
catch(PDOException $ex){
	echo 'Erro '. $ex->getMessage();
}
?><br><br>
	<input type="submit" value="Excluir">
</form>
</fieldset></div></div></body></html>