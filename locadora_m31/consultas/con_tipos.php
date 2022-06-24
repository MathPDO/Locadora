<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <title>Projeto Locadora</title>
	<link rel="stylesheet" type="text/css" href="../estilos/geral.css">    
</head>
<body>
<h1>Carros</h1>
<div class="flex-container">
<div id="box">
    <table border="1"<th width="50%"><th>carro</th><th>Tipo</th><th>tipo</th><th>Valor</th></tr>
<?php
include ("../controle/conexao.php");
try{
    $tipo = $_POST['txt_tipo'];
    $sql = "SELECT t.tipo FROM tipo
        WHERE tipo LIKE '%tipo%' ORDER BY tipo";
        INNER JOIN montadora m ON m.cod_montadora=c.montadora_carro
        WHERE carro LIKE '%$carro%' ORDER BY c.carro";
        print "<form method='post' action='/locadora_m31/consultas/con_montadora_tipo.php";
    foreach ($conn->query($sql) as $row){
        print "<tr><td><input type ='radio' name='brd_item' value='".$row['cod_carro']."'>".$row['carro']."</td>
        <td>".$row['tipo']."</td>
        <td width='15%'>".$row['montadora']."</td>
        <td class='valores' width='30%'> R$ ".number_format($row['valor'],2,",",".")."</td></tr>";
    }
    echo "<a href= 'http://localhost/locadora_m31/formularios/cad_itens_locacao.php'>Voltar</a>";
echo "<td colspan ='3'></td>";
print "<td><input type='submit' value=Incluir item'></td></form>";
}catch(PDOException $ex){
    echo "Erro ".$ex->getMessage();
}
?>
</table><div></div></body></html>