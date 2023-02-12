<?php
include_once('restrit/conexao.php');

//mostra obras
$sql="SELECT * FROM `obras`";

//$result = $con.query($sql);
$result = $con->query($sql);

echo "<table border='1'>
<tr>
<th>Os</th>
<th>Contratante</th>
<th>responsavel</th>
</tr>";



while($row = $result->fetch_assoc())
{
$os = $row['os'];
$encode = base64_encode($os);

echo "<tr>";
//echo "<td><a id='link' style='color:blue;' href='dashboard/recebeVar.php?value0decodeS=$os/$encode'>" . $row['os'] . "</a></td>";
echo "<td><a id='link' style='color:blue;' href='dashboard/recebeVar.php?0deSCMPQSdevaluefgimorstu=$encode'>" . $row['os'] . "</a></td>";

echo "<td>" . $row['contratante'] . "</td>";
echo "<td>" . $row['responsavel'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con); 
?>