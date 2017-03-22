<!DOCTYPE html>
<html>
<head> <title> wp3 </title> 
<link type="text/css" rel="stylesheet" href="wpcs3.cs">


  <script>
function funk(){
window.open("wp4.html");   
}

function funk1(){
alert("Your current balance is insufficient for this transaction. Please Deposit amount in nearest CDM. THANK YOU");
return false;
}

function functn() {
var z = document.getElementById("amount").value;
if (z.length>6) {
alert("transaction amount is limited to 100000. please enter amount less than that.");
return false;}
var x = document.getElementById("facno").value;
var y = document.getElementById("tacno").value;
if (x==y) {
alert("senders account number and recievers account number should not be same.");
return false;}
}

</script>

</head>
<body>
 
	<!----------------------------------- php ------------------------------->

<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $fstat=test_input($_POST["fbus"]);
	$pwd=test_input($_POST["tbus"]);
}

function test_input($data)
{
  $data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
 return $data;
}



$servername = "athena.nitc.ac.in";
$username = "b140922cs";
$password = "b140922cs";
$dbname = "db_b140922cs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql ="SELECT * FROM registers WHERE email='$fstat' and password='$pwd'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     $row = $result->fetch_assoc();
   $fname=strtoupper($row["FIRSTNAME"]);
   
					
} else {
        
    die("INVALID USERNAME AND PASSWORD<br/><br/><form action=\"http://localhost/wp1.html\" method=\"post\" style=\"color:#EBFA05;\">
<input type=\"submit\" value=\"LOGIN PAGE\">");
}

$conn->close();
?>
	
	<!----------------------------------- php ------------------------------->

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

<h2> Welcome to Online Money Transfer.</h2>

		<!----------------------------------------THIS IS  FORM START------------------------------------------------------>

<form onsubmit="return funk1()">
<h2>Account Status: </h2>
Name:<input type="text" id="name" name="name" required placeholder=" User Name"><br><br>
A/c Number:<input type="number" id="acno" name="acno" maxlength="20" required placeholder="account no."> <br><br>
<input type="submit" value="CHECK BALANCE">
</form> 
<h2>Transaction Details:</h2>
<form action="http://localhost/wp4.php" method="POST" onsubmit="return functn()">
<fieldset>
    <legend> FROM: </legend>
   UserName: <input type="text" id="fname" name="fname" size="20" required placeholder=" User Name"><br><br>
	Bank:<select name="fbank" value="select"> <option>select</option><option>SBI</option><option>SBH</option><option>ICICI</option><option>HDFC</option><option>PNB</option><option>other</option></select><br><br>
	              
	A/c Number:<input type="text" name="facno" id="facno" maxlength="20" required placeholder="account no." > <br><br>
	A/c Type: <input type="radio" name="ftype"  value="credit">Credit &nbsp;<input type="radio" name="ftype" value="savings">Savings <br><br>
	IFSC: <input type="text" id="acno" name="fifsc" maxlength="8" required placeholder=" ifsc no."> <br><br>
	Amount:<input type="number" id="amount" name="amount" maxlength="6"  required placeholder=" amount"> *(max:100000) <br><br>
  </fieldset><br>
  <fieldset>
    <legend>TO:</legend>
    Name: <input type="text" id="tname" name="tname" size="20" required placeholder=" User Name"><br><br>
	Bank:<select name="tbank" id="tbank" value="select" required> <option>select</option><option>SBI</option><option>SBH</option><option>ICICI</option><option>HDFC</option><option>PNB</option><option>other</option></select><br><br>
	              
	A/c Number:<input type="number" name="tacno" id="tacno" maxlength="20" required placeholder="account no."> <br><br>
	A/c Type: <input type="radio" id="type" name="ttype" required>Credit &nbsp;<input type="radio" name="ttype" id="type">Savings <br><br>
	IFSC: <input type="text" id="acno" name="tifsc" maxlength="8" required placeholder=" ifsc no."> <br><br>
  </fieldset><br><br>
  
  <center><input type="submit" name="submit"  value="SUBMIT" ></center>  <!-- onclick="funk1()"--->
  </form>

  	<!----------------------------------------THIS IS  FORM END------------------------------------------------------>

  </body>
  </html>
