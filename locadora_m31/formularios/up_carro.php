<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">    
</head>
<body>
<h1>Atualização de carro</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/atualizar_carro.php">
    <label>Escolha o carro a ser modificado</label>
<?php
include ("../controle/conexao.php");
try{
    $sql = 'SELECT * FROM carro ORDER BY carro';
    print "<select name= 'cmb_carro'>";
    foreach ($conn->query($sql) as $row) {
        print "<option value='".$row['cod_carro']."'>".$row['carro']."</option>";
    }
    print "</select>";
}catch(PDOException $ex){
    echo 'Erro '. $ex->getMessage();
}
?>
    <br><label>Digite um novo nome para o carro</label><br>
    <input type="text" name="txt_carro">
    <input type="submit" value="Atualizar">
</fieldset></form></div></div></body></html>