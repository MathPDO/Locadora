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
<h1>Atualização de cliente</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include ("conexao.php");
try{
    $cod_cliente = $_POST['cod_cliente'];
    $up_cliente = $_POST['txt_cliente'];
    $up_cpf = $_POST['txt_cpf'];
    $up_bairro = $_POST['cmb_bairro'];
    $sql = "UPDATE cliente set cliente='$up_cliente', bairro_cliente='$up_bairro', cpf='$up_cpf' WHERE cod_cliente=$cod_cliente";
    $conn->query($sql);
    echo "<p>cliente atualizado com sucesso!</p><a href='../'>Voltar</a>";
}catch(PDOException $ex){
    echo 'Erro '. $ex->getMessage();
}