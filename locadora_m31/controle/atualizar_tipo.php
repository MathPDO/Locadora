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
<h1>Atualização de tipo</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include ("conexao.php");
try{
    $cod_tipo = $_POST['cmb_tipo'];
    $up_tipo = $_POST['txt_tipo'];
    $sql = "UPDATE tipo set tipo='$up_tipo' WHERE cod_tipo=$cod_tipo";
    $conn->query($sql);
    echo "<p>tipo atualizado com sucesso!</p><a href='/locadora_m31'>Voltar</a>";
}catch(PDOException $ex){
    echo 'Erro '. $ex->getMessage();
}