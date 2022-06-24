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
<h1>Atualização de locação</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include ("conexao.php");
try{
    $cod_locacao = $_POST['cmb_locacao'];
    $up_locacao = $_POST['txt_locacao'];
    $sql = "UPDATE locacao set locacao='$up_locacao' WHERE cod_locacao=$cod_locacao";
    $conn->query($sql);
    echo "<p>locação atualizado com sucesso!</p><a href='/locadora_m31'>Voltar</a>";
}catch(PDOException $ex){
    echo 'Erro '. $ex->getMessage();
}