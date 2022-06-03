<?php
session_start();
$server="localhost";
   $usename="root";
   $password="";
   $database="shop";
   $na = array();
   $pr = array();
   $_SESSION['nam'] = $na;
   $_SESSION['pric'] = $pr;

   $conn = new mysqli($server,$usename,$password,$database);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
 $vat = array();
$requestheader = file_get_contents('php://input');
$vat = json_decode($requestheader);
   $r = count($vat);
   echo $r;
for($i=0;$i<$r;$i++)
{
$sql_quer = "SELECT * From product where id=$vat[$i]";
$result = mysqli_query($conn,$sql_quer);
while($row = mysqli_fetch_array($result)) {
	echo "<table>";
	echo "<tr>";
	echo "<td><img src='uploads/".$row['image']."'>"."</td>";
	echo "<br>";
	echo "<br>";
  echo "<td><i>".$row['name']."</i></td>";
 array_push($_SESSION['nam'], $row['name']);
  array_push($_SESSION['pric'],$row['price']);
  echo "<br>";
  echo "<td><i>".$row['price']."</i></td>";
  echo "<br>";
  echo "<br>";
  echo "</tr>";
  echo "</table>";
}
}
$conn->close();
?>