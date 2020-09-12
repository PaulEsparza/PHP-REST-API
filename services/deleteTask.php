<?php

include('../cors/cors.php');
include('../database/conection.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM $table WHERE id = ?";
    $ps = $conection->prepare(($query));
    $res = $ps->execute([$id]);

    if($res == false){
        die("error");
    }

    echo json_encode($res);
}

?>