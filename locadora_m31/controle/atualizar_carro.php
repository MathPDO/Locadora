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
<?php
include ("conexao.php");
try{
    $cod_carro = $_POST['cmb_carro'];
    $up_carro = $_POST['txt_carro'];
    $sql = "UPDATE carro set carro='$up_carro' WHERE cod_carro=$cod_carro";
    $conn->query($sql);
    echo "<p>carro atualizado com sucesso!</p><a href='/locadora_m31'>Voltar</a>";
}catch(PDOException $ex){
    echo 'Erro '. $ex->getMessage();
}