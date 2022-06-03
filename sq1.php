

<?php
session_start();
 $server="localhost";
   $usename="root";
   $password="";
   $database="shop"; 
   $i = 0;
$conn = new mysqli($server,$usename,$password,$database);
if($conn->connect_error)
{
	die("Connection failed:".$conn->connect_error);
}
$sql_quer = "Select * From product";
$result = mysqli_query($conn,$sql_quer);
while($row = mysqli_fetch_array($result)) {
	echo "<form method='POST' id='item".$i."'>";
	echo "<img src='uploads/".$row['image']."'>";
	echo "<br>";
	echo "<br>";
  echo "<input name='it".$i."' value ='".$row['name']."'>";
  echo "<br>";
   echo "<input name='pr".$i."' value ='".$row['price']."'>";
  echo "<br>";
 echo "<input type='submit' value='add to cart' name='submit".$i."'>";
  echo "<br>";
  echo "</form>"; 
  $i += 1;
}
$conn->close();



?>
