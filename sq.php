<?php
session_start();
 $server="localhost";
   $usename="root";
   $password="";
   $database="shop"; 
 $i = 1;
$conn = new mysqli($server,$usename,$password,$database);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
$sql_quer = "Select * From product ";
$result = mysqli_query($conn,$sql_quer);
while($row = mysqli_fetch_array($result)) {
	echo "<table id='item".$i."'>";
	echo "<tr>";
	echo "<td><img src='uploads/".$row['image']."'>"."</td>";
	echo "<br>";
	echo "<br>";
  echo "<td><i>".$row['name']."</i></td>";
  echo "<br>";
  echo "<td><i>".$row['price']."</i></td>";
  echo "<br>";
  echo "<td><button id='clue".$i."'>"."add to cart"."</button></td>";
  echo "<br>";
  echo "<td><a href='shop2.php?product=".$row['id']."'>add</a></td>";
  echo "</tr>";
  echo "</table>"; 
  $i += 1;
}
$conn->close();



?>
