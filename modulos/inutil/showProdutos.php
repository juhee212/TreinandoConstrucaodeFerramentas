<?php 
include_once('restrit/conexao.php');

if($produto="SELECT * FROM `prod_inventario`;"){
    $result = $con->query($produto);
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
//Cod Produto	Nome do Produto	Categoria	Preço unitário	Quantidade em estoque


    while($row = $result->fetch_assoc())
    {

    echo "<tr>";
    echo "<td>" . $row['id_produto'] . "</td>";
    echo "<td>" . $row['nome_produto'] . "</td>";
    echo "<td>" . $row['categoria'] . "</td>";
    echo "<td>" . $row['preco_un'] . "</td>";
    echo "<td>" . $row['cod_fornecedor'] . "</td>";
    //echo "<td>" . total já gasto . "</td>";
    echo "</tr>";
    }
}


?>
