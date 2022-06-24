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
<h1>Atualização de bairro</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<form method="POST" action="../controle/atualizar_bairro.php">
    <label>Escolha o bairro a ser modificado</label>
<?php
include ("../controle/conexao.php");
try{
    $sql = 'SELECT * FROM bairro ORDER BY bairro';
    print "<select name= 'cmb_bairro'>";
    foreach ($conn->query($sql) as $row) {
        print "<option value='".$row['cod_bairro']."'>".$row['bairro']."</option>";
    }
    print "</select>";
}catch(PDOException $ex){
    echo 'Erro '. $ex->getMessage();
}
?>
    <br><label>Digite um novo nome para o bairro</label><br>
    <input type="text" name="txt_bairro">
    <input type="submit" value="Atualizar">
</fieldset></form></div></div></body></html>