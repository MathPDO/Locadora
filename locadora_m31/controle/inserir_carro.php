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
<h1>Cadastro de Carro</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include("conexao.php");
try{
    $var_carro=$_POST['txt_carro'];
    $var_tipo=$_POST['cmb_tipo'];
    $var_montadora=$_POST['cmb_montadora'];
    $var_valor=$_POST['txt_valor'];
    $sql="INSERT INTO carro(carro,tipo_carro,montadora_carro,valor) VALUES ('$var_carro','$var_tipo','$var_montadora','$var_valor')";
    $conn->query($sql);
    echo "<h4>carro incluido com sucesso</h4>
        <h3><a href='/locadora_m31'>Voltar</a></h3>";    
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
?>
</fieldset></div></div></body></html>