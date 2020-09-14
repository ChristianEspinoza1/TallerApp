<?php

header("Access-Control-Allow-Origin: *");//Permite hacer peticiones desde cualquier origen
header("Content-Type: application/json");//Decirle que será un json

function getData($var){
    $array = [
       $var,    
    ];
    return json_encode($array);
}

//validar post 
if($_SERVER['REQUEST_METHOD'] ==='POST'){
    echo getData($var = 'post');
}

//validar get
if($_SERVER['REQUEST_METHOD'] ==='GET'){
    echo getData($var = 'get');
}