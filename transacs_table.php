<?php


$servername = "localhost";
$username = "root";
$password = "mallesh";
$dbname = "TRANSFAST";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}


$sql = "CREATE TABLE transacs (
Fname VARCHAR(20) NOT NULL PRIMARY KEY , 
Fbank  VARCHAR(20) NOT NULL,
Facno INT(15) NOT NULL ,
Ftype VARCHAR(10) NOT NULL,
Fifsc VARCHAR(10) NOT NULL,
Famount INT(6) NOT NULL,
Tname VARCHAR(20) NOT NULL,
Tbank VARCHAR(10) NOT NULL,
Tacno INT(15) NOT NULL,
Ttype VARCHAR(10) NOT NULL,
Tifsc VARCHAR(10) NOT NULL   )
";


if (mysqli_query($conn, $sql)) {
    echo "New TABLE transacs created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
