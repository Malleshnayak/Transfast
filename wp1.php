<!DOCTYPE html>
<html>
<head> <title> wp1 </title> 
<link type="text/css" rel="stylesheet" href="wpcs1.cs">
</head>
<body>


<center>
<div id="mandiv"> <img src="wp11.jpg" rel="logo"> <h1><b>TRANSFAST</b></h1>
<h1><b> ONLINE MONEY TRANSFER</b> </h1>
</div></center>

<div  class="mallesh">
<ul>
<li>  <a href="wp1.html" class="active" target="">HOME</a></li>
<li> <a href="#NEWS">NEWS </a></li>
<li> <a href="https://www.trans-fast.eu/en/page/contacts">CONTACT</a></li>
<li style="float:right"><a href="https://www.trans-fast.eu/en/page/aboutus"> ABOUT </a></li>
</ul>
</div>
<div id="maindiv">
<div id="f1">
<h2> Welcome to Online Money Transfer.</h2>
<h3> Login to TransFast </h3>

 	<!----------------------------------------THIS IS  FORM START------------------------------------------------------>

<form action="http://localhost/wp3.php" method="POST">
<p> ( CARE:Username(or)Username and Password are case sensitive)</p>
Email or Username* <br>
<input type="email" id="username" name="usremail"  placeholder="email" required> <br><br>
Password* <br>
<input type="password" id="password"  name="password" maxlength="20" required> 
<a href="#forgotpassword" onclick="fun()">Forgot password?</a><br><br>
<input type="submit" value="SUBMIT" onclick="func1()">&nbsp;&nbsp;
<input type="reset" value="Reset"><br><br>
<h2> New User? Register here</h2>
<input type="button" id="signup" value="REGISTER">
</form>
</div>
<div id="f2">
<img src="san.jpg" alt="not found" style="width:800px; height:550px;">
</div>
</div>

		<!----------------------------------------THIS IS  FORM ends------------------------------------------------------>




<!----------------------------------------THIS IS  php START------------------------------------------------------>
<div id="php">
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["firstname"]);
  $lname = test_input($_POST["lastname"]);
  $email = test_input($_POST["email"]);
  $uname = test_input($_POST["username"]);
  $passwor = test_input($_POST["password"]);
  $conpass = test_input($_POST["conpass"]);
  $mobile = test_input($_POST["mobile"]);
  $gender = test_input($_POST["gender"]);	
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



$servername = "localhost";
$username = "root";
$password = "mallesh";
$dbname = "TRANSFAST";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO registers (fname, lname, email,username,password,mobile,gender)
VALUES ('$fname','$lname','$email','$uname','$passwor',$mobile,'$gender')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>
</div>
<!----------------------------------------THIS IS  php end------------------------------------------------------>

<script>
document.getElementById("php").style.visibility = "hidden";

function func1(){
window.open("wp3.html");
}..

function func(){
window.open("wp2.html");
}
    function fun(){
        alert("We have sent your username along with password to the registered email. Please do refer there!")
    }
</script>


</body>
</html>
