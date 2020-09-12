<?php

include('../cors/cors.php');
include('../database/conection.php');

$json = json_decode(file_get_contents("php://input"));

    $query = "INSERT INTO $table (responsable, description) VALUES (?, ?);";
    $ps = $conection->prepare($query);
    $res = $ps->execute([$json->responsable, $json->description]);

    if(!$res){
        die("error");
    }

    //echo json_encode($res);

    echo json_encode([
        "message" => $res
    ]);

?>