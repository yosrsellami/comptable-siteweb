<?php
$servername="localhost";
$username="root";
$password="";
$db="comptable";


//1/ CREATION DE LA CONNEXION VERS LA BASE DE DONN2ES
$conn=mysqli_connect($servername,$username,$password,$db);
//test sur la connexion
if($conn->connect_error){
    die("connection failed :".$conn->connect_error);
}

?>