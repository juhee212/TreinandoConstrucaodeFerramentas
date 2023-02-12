<?php
 include("restrit/conexao.php");

 $sql="SELECT * FROM `reservas` WHERE `data_reserva` = CURRENT_DATE();";

 //$result = $con.query($sql);
 $result = $con->query($sql);

 echo "<table border='1'>
 <tr>
 <th>Motorista</th>
 <th>OS</th>
 <th>Dia de recolha</th>
 <th>Dia de entrega</th>
 <th>Tipo</th>
 <th>modelo</th>
 </tr>";

 while($row = $result->fetch_assoc())
 {
 echo "<tr>";
 echo "<td>" . $row['motorista'] . "</td>";
 echo "<td>" . $row['os'] . "</td>";
 echo "<td>" . $row['data_reserva'] . "</td>";
 echo "<td>" . $row['data_entrega'] . "</td>";
 echo "<td>" . $row['tipo'] . "</td>";
 echo "<td>" . $row['modelo'] . "</td>";
 //echo "<td>" . $row['placa'] . "</td>";
 echo "</tr>";
 }
 echo "</table>";
?>