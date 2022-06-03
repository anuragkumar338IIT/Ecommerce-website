<?php
session_start();
$cart = array();
$_SESSION['ID'] = $cart;
?> 
 

  <?php
	if(isset($_POST['submit'])) {
		session_start();
    header("Location:shop.php");
    exit;
    }
    ?>
    <?php 
  if(isset($_POST['counter']))
  {
  	$_SESSION['amount'] = "RS 2000";
  	header("Location:shop.php");
  }



    ?>


<!DOCTYPE html>
<html>
<head>
	<title>shopping cart</title>
	<style type="text/css">
		#nave {
			width: 100%;
			height:100px;
			background-color: #232f3e ;
			margin-left: -13px;
			margin-top: -20px;
			padding-right: 20px;
		}
		#nav2 {
			width: 100%;
			height:40px;
			background-color: #232f4e ;
			margin-left: -13px;
			margin-top: -20px;
			color: white;
			padding-right: 20px;
		}
		#pres {
       position: relative;
       float: right;
       font-size: 30px;
       padding-right: 30px;
       cursor: pointer;
		}
		#pres:hover {
			border: 2px solid white;
			border-radius: 5%;
		}
		#shj {
       text-align: center;
		}
		#item1f {
			width: 300px;
			height:360px;
			border: 1px solid grey;
			text-align: center;
			position: relative;
			left: 950px;
		}
		img {
			width: 200px;
			height: 250px;
		}
		#item2f {
			width: 300px;
			height:360px;
			border: 1px solid grey;
			text-align: center;
		    position: relative;
		    left: 650px;
		    bottom:360px;
		}
	#cart {
		width:300px;
		height:600px;
		border: 2px solid grey;
		float:right;
		position: fixed;
		bottom:74px;
		text-align: center;
		font-size: 30px;
		color: grey;
		display: none;
		overflow: scroll;
	}
	#sh {
		text-align: center;
	}
	#store {
		text-align: center;
	}
	#bought {
		text-align: center;
		display: none;
	}
	#sought {
		text-align: center;
	}
	table {
		display: inline-flex;
		margin-left: 200px;
	}
	#gert {
		border: 3px solid yellow;
		float:left;
		margin-left: 0px;
	}
		#gert1 {
		border: 3px solid green;
		text-align: center;
	}
	#ca {
		overflow: hidden;
	}
	#wseffect {
		overflow: hidden;
		width:350px;
		text-align: center;
		margin-left: 500px;
		border: 3px solid grey;
	}
	li {
  border: 3px solid red;
  display: inline-flex;
  background-color: #37f;
}
ul {
  text-align: center;
}
	</style>
</head>
<body>
	<div id="nave"></div>
	<div id="nav2">
		<span id="pres"><i>ONLINE SHOPPING</i></span>
	</div>
	<div id="shj">
	<h1><i>Items availiable to buy</i></h1>
	</div>
	<div id="wseffect">
		<marquee direction="left" scrollamount="18">
			<img src="uploads/acergamelap.jpg">
			<img src="uploads/acerlap.jpg">
			<img src="uploads/dellgamelap.jpg">
			<img src="uploads/delllap.jpg">
			<img src="uploads/lenevolap.jpg">
			<img src="uploads/hplap.jpg">
			<img src="uploads/hpgamelap.jpg">
			<img src="uploads/predelap.jpg">
		</marquee>

	</div>
  <div id="store">

  	<input type="button" id="ju" name="cart3" value="your cart">
  	<div id= "str"></div>
  	<?php
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
  
</div>
<div id="cart"><h3><i>My Cart</i></h3>
<input type="button" value="clear" id="cle">
<input type="button" value="buy" id="bu">
<div id = "gert">
<form method="POST">
<input type="submit" name="counter" id="#r" value="order now">
</form>
<div id="gert1"></div>
</div>
<br>
<br>
<div id="ca"> </div>
<p id="pol"> </p>
</div>
<div id="sh"><input type="button" id="show" value="SHOW MY CART">
        <input type="button" id="hde" value="hide">

    </div>
    <div id ="bought">
    	<br>
    	<br>

   


     </div>
     <span>
</span>

	<script type="text/javascript">
		var car =document.getElementById("ca");
		var shw =document.getElementById("show");
		var hide =document.getElementById("hde");
		var clear =document.getElementById("cle");
		var pole =document.getElementById("pol");
		 var hyt =document.getElementById("valu");
		
		clear.onclick = function() {
        	car.innerHTML ="";

        }
		shw.onclick = function() {
			document.getElementById("cart").style.display ="block";
			document.getElementById("pol").style.display ="none";
		}
        hide.onclick = function() {
        	document.getElementById("cart").style.display ="none";
        }

	</script>
	<script type="text/javascript">
		
	</script>

<script type="text/javascript">
	var pr=0;
	var arr = [];
	  var j1 =document.getElementById("clue0");
  var j2 =document.getElementById("clue1");
  var j3 =document.getElementById("clue2");
  var j4 =document.getElementById("clue3");
  var j5 =document.getElementById("clue4");
  var j6 =document.getElementById("clue5");
 
   j2.onclick = function() {
   console.log(document.getElementById("item1").rows[0].cells.item(1));
  	    console.log(document.getElementById("item1").rows[0].cells.item(2));
   
       arr.push(0);
   } 
	   j3.onclick = function() {
   console.log(document.getElementById("item2").rows[0].cells.item(1));
  	    console.log(document.getElementById("item2").rows[0].cells.item(2));
 	
    arr.push(1);
   } 
	     j4.onclick = function() {
   console.log(document.getElementById("item3").rows[0].cells.item(1));
  	    console.log(document.getElementById("item3").rows[0].cells.item(2));
   
  arr.push(2);
 }
	     j5.onclick = function() {
   console.log(document.getElementById("item4").rows[0].cells.item(1));
  	    console.log(document.getElementById("item4").rows[0].cells.item(2));
   	
    arr.push(3);
   } 
	    j6.onclick = function() {
   console.log(document.getElementById("item5").rows[0].cells.item(1));
  	    console.log(document.getElementById("item5").rows[0].cells.item(2));
  	    console.log(arr);
   arr.push(4);
   }
   var grt = document.getElementById('ju');
   var st = document.getElementById('str');
   grt.onclick = function() {
 var jsonString = JSON.stringify(arr);
var xmlhttp = new XMLHttpRequest();
if(pr==0) {
xmlhttp.onreadystatechange = function() {
	pr=0;
    document.getElementById("gert1").innerHTML = xmlhttp.responseText ;
    
}
}
xmlhttp.open("POST","cart.php",true);
xmlhttp.setRequestHeader("Content-Type", "application/json");
xmlhttp.send(jsonString);
}

</script>
<?php
$_SESSION['ID'] = $cart;
?>
<i>Your cart<br></i>
	
<br>
<br>
<div id="gert1">
	</div>
</div>
<script type="text/javascript">
	var gt = document.getElementById("gert").innerText;
	<?php
	$gyt = gt;
	?>
</script>
</body>
</html>