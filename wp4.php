<!DOCTYPE html>
<html>
<head> <title> wp4 </title> 
<link type="text/css" rel="stylesheet" href="wpcs4.cs">
</head>
<body>
<center>
<div id="mandiv"> <img src="wp11.jpg" rel="logo"> <h1><b>TRANSFAST</b></h1>
<h1><b> ONLINE MONEY TRANSFER</b> </h1>
</div></center>


<div  class="mallesh">
<ul>
<li> <a href="wp1.html" class="active" target="_blank">HOME</a></li>
<li> <a href="#NEWS">NEWS </a></li>
<li> <a href="#CONTACT">CONTACT</a></li>
<li style="float:right"><a href="#ABOUT"> ABOUT </a></li>
</ul>
</div>
<br><br>
<h> Thank you!</h>
<p>Your transaction will be completed in less than 10 minuts. Please do visit us again.</p>
Now you can logout,<input type="button" onclick="funck()" value="Logout">
  
		<!-----------------------php---------------------->
<div id="hid">
<?php

/*
if ($_SERVER["REQUESTED_METHOD" == "POST"]) {

    $Fname = test_input($_POST["fname"]);
    $Fbank = test_input($_POST["fbank"]);
    $Facno = test_input($_POST["facno"]);
    $Ftype = test_input($_POST["ftype"]);
    $Fifsc = test_input($_POST["fifsc"]);
    $Famount = test_input($_POST["amount"]);
    $Tname = test_input($_POST["tname"]);
    $Tbank = test_input($_POST["tbank"]);
    $Tacno = test_input($_POST["tacno"]);
    $Ttype = test_input($_POST["ttype"]);
    $Tifsc = test_input($_POST["tifsc"]); 
}





*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Fname = test_input($_POST["fname"]);
  $Fbank = test_input($_POST["fbank"]);
  $Facno = test_input($_POST["facno"]);
  $Ftype = test_input($_POST["ftype"]);
  $Fifsc = test_input($_POST["fifsc"]);
  $Famount = test_input($_POST["amount"]);
  $Tname = test_input($_POST["tname"]);
  $Tbank = test_input($_POST["tbank"]);	
	 $Tacno = test_input($_POST["tacno"]);
	 $Ttype = test_input($_POST["ttype"]);
	 $Tifsc = test_input($_POST["tifsc"]);
}
				   

function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}



//database table entry

$servername = "localhost";
$username = "root";
$password = "mallesh";
$dbname = "TRANSFAST";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}



$sql = "INSERT INTO transacs (Fname, Fbank, Facno, Ftype, Fifsc, Famount, Tname, Tbank, Tacno, Ttype, Tifsc)
VALUES ('$Fname','$Fbank',$Facno,'$Ftype','$Fifsc',$Famount,'$Tname','$Tbank',$Tacno,'$Ttype','$Tifsc')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);








/*
$sql = "INSERT INTO transacs (Fname, Fbank, Facno, Ftype, Fifsc, Famount, Tname, Tbank, Tacno, Ttype, Tifsc)
VALUES ('$Fname', '$Fbank', $Facno, '$Ftype', '$Fifsc', $Famount, '$Tname', '$Tbank', $Tacno, '$Ttype', '$Tifsc')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
*/

?>
</div>

		<!-----------------------php---------------------->


  <script>
document.getElementById("hid").style.visibility= "hidden";

function funck(){
window.open("wp1.html");
}
</script>
  </body>
  </html>
