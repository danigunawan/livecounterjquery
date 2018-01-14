<?php
require_once('../conectar.php');
$query = mysqli_query($conectar, 'SELECT COUNT(_id) AS c FROM Usuarios');
$fila = mysqli_fetch_array($query);

$cont = 5488;

if($fila['c'] > $cont) {
    $cont = $cont + 1;
    
}
else {
    $cont = $fila['c'];
}

echo $cont;
?>