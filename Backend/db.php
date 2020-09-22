<?php 

function pdo_connect_mysql(){
    $db_user = 'root';
    $db_pass = '';

    try{
        return new PDO ('mysql:host=localhost;dbname=tallerapp',$db_user, $db_pass);
    }catch(PDOException $e){
        echo $e->getMessage();
        exit('Failed to connect to database');
    }
}