<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">    
</head>
<body>
<h1>Busca de Usuario</h1>
<div class="flex-container">
<div id="box">
<fieldset>
<?php
include("conexao.php");
try{
    $usuario=$_POST['cmb_usuario'];
    $senha=$_POST['psw_senha'];
    $sql="SELECT * FROM usuario WHERE cod_usuario='$usuario'";
    $conn->query($sql);
    $query = $conn ->prepare($sql);
    $result = $query->execute();
    $cod_user = $query->fetchColumn();
    if ($cod_user=='1'){
        echo "Acesso Liberado";
    }else{
        echo "Tente outra vez";
    }
    echo "<h4>Login efetuado com sucesso!</h4>
          <h3><a href='/locadora_m31'>Voltar</a></h3>";    
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
?>
</fieldset></div></div></body></html>