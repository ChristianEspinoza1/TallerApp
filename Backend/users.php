<?php

header("Access-Control-Allow-Origin: *");//Permite hacer peticiones desde cualquier origen
header("Content-Type: application/json");//Decirle que será un json

//Conexion base de datos
include_once 'db.php';
$conn = mysqli_connect('localhost','root','12345678','tallerapp');
//Funcion Mostrar
function getUser($conn){
    $user_sql = "SELECT * FROM users";
    $user_resp = mysqli_query($conn,$user_sql);

    $jsonArray = array();
    while($resp = mysqli_fetch_assoc($user_resp)){
        $jsonItem = array();
        $jsonArrayItem['id']        = $resp['id'];
        $jsonArrayItem['name']    = $resp['name'];
        $jsonArrayItem['email']    = $resp['email'];
        $jsonArrayItem['password']    = $resp['password'];    
        array_push($jsonArray,$jsonArrayItem);
    }
    return json_encode($jsonArray);
}
echo getUser($conn);
//Funcion Guardar