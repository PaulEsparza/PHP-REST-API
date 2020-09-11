<?php

include('../cors/cors.php');
include('../database/conection.php');

$query = "SELECT * FROM $table;";
$ps = $conection->query($query);
$res = $ps->fetchAll(PDO::FETCH_OBJ);

echo json_encode($res);
?>