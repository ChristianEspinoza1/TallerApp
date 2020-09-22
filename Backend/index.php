<?php

header("Access-Control-Allow-Origin: *");//Permite hacer peticiones desde cualquier origen
header("Content-Type: application/json");//Decirle que será un json

//Conexion base de datos
include_once 'db.php';

//Llamar funciones
require_once "users.php";

//Obtener usuarios
if($_SERVER['REQUEST_METHOD'] ==='GET'){
    echo getUser($conn);
}