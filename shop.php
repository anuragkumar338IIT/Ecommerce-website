
<?php 
session_start();
$name=implode(",",$_SESSION['nam']);
if(isset($_POST['re']))
{
$adress=$_POST['adress'];
$nam =$_POST['name'];
}
$amount=implode(",",$_SESSION['pric']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<style type="text/css">
		#confirm {
			border: 2px solid black;
			width:600px;
			font-size: 30px;
			font-family: cursive;
			text-align: center;
			position: relative;
			left: 420px;
		}
		body {
			text-align: center;
		}
	</style>
</head>
<body>
<h1><i>welcome its anurag kumar </i></h1>
<div id="confirm">
	<p>PRODUCT:<?=$name?></p>
    <p>AMOUNT:<?=$amount?></p>
    <form method="POST">
   NAME:<input type="text" name="name" placeholder="Enter your name">
    <br>
    <br>
    <br>
    ADRESS:<input type="text" name="adress" placeholder="Enter your adress">
	<br>
	<br>
	<input type="submit" name="re" id="attach" value="Confirm">
	<br>
	</form>
	<p><i>Thank you please visit again</i></p>
</div>
<div>
	


</div>
<?php
if (isset($_POST['re'])) {
$server="localhost";
$usename="root";
$password="";
$database="shop";
$conn = new mysqli($server,$usename,$password,$database);

if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
$quer = "INSERT INTO list(name_of_customer,adress_of_customer,amount) VALUES('$nam','$adress','$amount,$name')";
if($conn->query($quer)===TRUE) {
	echo "";
}
else{
	echo $quer."<br>".$conn->error;
}
$conn->close();

}
?>
</body>
</html>