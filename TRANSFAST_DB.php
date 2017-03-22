<?php
$servername="localhost";
$username="root";
$password="mallesh";


$conn= mysqli_connect($servername, $username, $password);

if(!$conn){
    die("connection failed". mysqli_connect_error());
}

$sql= "create database TRANSFAST";

if(mysqli_query($conn, $sql)){
        echo "database named TRANSFAST has been created successfully.";
                            }
else{
        echo "error in creation". mysqli_error($conn);
}

mysqli_close($conn);

?>