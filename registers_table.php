<?php
$servername = "athena.nitc.ac.in";
$username = "b140922cs";
$password = "b140922cs";
$dbname = "db_b140922cs";


$conn= mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("connection failed". mysqli_connect_error());
}

$sql= "create table registers (
    fname VARCHAR(20) NOT NULL,
    lname VARCHAR(20) NOT NULL,
    email varchar(45) primary key,
    username  VARCHAR(20),
    password VARCHAR(20),
    mobile INT(13)  NOT NULL,
    gender CHAR(8) NOT NULL)";

if(mysqli_query($conn, $sql)){
        echo "table named registers has been created successfully.";
                            }
else{
        echo "error in creation". mysqli_error($conn);
}

mysqli_close($conn);

?>
