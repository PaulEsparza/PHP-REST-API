<?php

include('../cors/cors.php');
include('../database/conection.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "SELECT * FROM $table WHERE id = ?";
    $ps = $conection->prepare(($query));
    $ps->execute([$id]);
    $res = $ps->fetchObject();

    if($res == false){
        die("error");
    }

    echo json_encode($res);
}

?>