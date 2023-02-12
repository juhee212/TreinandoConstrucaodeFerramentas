<?php
 include("restrit/conexao.php");
 $movimento="SELECT * FROM `inventario`;";
 
$result = $con->query($movimento);
//"<table id='mytable' border='1'>
// echo"
// <tr>
// <th>ID Movimento</th>
// <th>ID produto</th>
// <th>Quantidade</th>
// <th>Valor</th>
// <th>Data Movimento</th>
// <th>Movimento</th>
// </tr>";

while($row = $result->fetch_assoc())
{
$move = $row['movimento'];
$valortotal = $row['valor'];
$valortotal = $valortotal * $row['quantidade'];
if($move>0){
    $color="green";
    $valor="Entrada";
}else{
    $color="red";
    $valor="Saida";
}

echo "<tr>";
echo "<td>" . $row['id_movimento'] . "</td>";
echo "<td>" . $row['id_produto'] . "</td>";
echo "<td>" . $row['quantidade'] . "</td>";
echo "<td>" . "R$" . "&nbsp" . $row['valor'] . "</td>";
echo "<td>" . "R$" . "&nbsp" . $valortotal . "</td>";
echo "<td>" . $row['data_movimento'] . "</td>";
echo "<td style='color:".$color."; font-weight:bold;'>" . $valor . "</td>";
echo "</tr>";
}
//echo "</table>";





?>