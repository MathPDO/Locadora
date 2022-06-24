<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="estilos\geral.css">
</head>
<body>
<h1>Locadora de veículos M31</h1>
<div class="flex-container">
<div id="box">
	<h3>Acesso</h3>
	<table>
	<form method="post" action="controle/logar_usuario.php">
		<label>Usuario </label>
		<?php
        include ("controle/conexao.php");
    try{
    $sql = 'SELECT * FROM usuario ORDER BY usuario';
    print "<select name='cmb_usuario'>";
    foreach ($conn->query($sql) as $row) {
        print "<option value='".$row['cod_usuario']."'>".$row['cod_usuario']." - ".$row['usuario']."</option>";
    }
    print "</select>";
    }
    catch(PDOException $ex){
        echo 'Erro '. $ex->getMessage();
    }
?>
	<br><br>
	<label>Senha:</label>
    <input type="password" name="psw_senha"/><br><br>
	<input type="submit" value="Acessar">
	</form>
	</table><br></div></div>	<p>Para maiores informações acesse <a href="https://www.w3schools.com/">W3 Schools</a></p>
	</body></html>