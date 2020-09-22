<?php 
//Conexion PDO
// function pdo_connect_mysql(){
//     $db_user = 'root';
//     $db_pass = '12345678';

//     try{
//         return new PDO ('mysql:host=localhost;dbname=tallerapp',$db_user, $db_pass);
//     }catch(PDOException $e){
//         echo $e->getMessage();
//         exit('Failed to conenect to database');
//     }
// }


//Conexion PDO

$conn = mysqli_connect('localhost','root','12345678','tallerapp');
if(!$conn){
    echo "Error: Unable to connect to MYSQL." . PHP_EOL;
    echo "Debbugging errno: " . mysqli_connect_errno().PHP_EOL;
    exit;
}