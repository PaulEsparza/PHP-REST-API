<?php

    include('../cors/cors.php');
    include('../database/conection.php');

    header("Access-Control-Allow-Methods: PUT");

    if($_SERVER['REQUEST_METHOD'] != 'PUT'){
        die("Only PUT methods");
    }

    $json = json_decode(file_get_contents("php://input"));

    $query = "UPDATE $table SET responsable = ?, description = ? WHERE id = ?;";
    $ps = $conection->prepare($query);
    $res = $ps->execute([$json->responsable, $json->description, $json->id]);

    if(!$res){
        die("error");
    }

    echo json_encode($res);

?>