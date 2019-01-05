<!DOCTYPE html>
<html lang="en">
<head>
  <title>SolaCrest Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="Solacrest3.png">
<style>

 .breadcrumb{
	 margin-top:-10px;
 }
  .breadcrumb li a{
	 margin-top:-6px;
	 color:black;
 }
.jam{
		background-color:#000;
		opacity:.9;
}

body{ 
    margin-top:35px; 
}

.read{
	background-color:#a3952f;
	padding:10px;
	border:none;
	color:white;
}
.read:hover{
	background-color:#bab637;;
	padding:10px;
	border:none;
	color:white;
}
.read2{
	background-color:#a3952f;
	padding:10px;
	border:1px solid #bab637;
	border-radius:5px;
	color:white;
	margin-bottom:2px;
}
.read2:hover{
	background-color:#bab637;
	padding:10px;
	border:1px solid #bab637;
	border-radius:5px;
	color:white;
	margin-bottom:2px;
}
.jumbotron{
	margin-left:60px;
	margin-right:60px;
	border-radius:30px;
	border:1px solid #a9a9a9;
}
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #a3952f;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}

</style>

</head>
<body onload="myFunction()" style="margin:0;">
<b>
<nav class="navbar navbar-fixed-top jam" >
  <div class="container-fluid">
      <a class="navbar-brand" href="Home.php"><font size="7" color= white face="Arno Pro">&nbsp;S<img src="SolaCrest3.png" height=35 width=35>laCrest Hotel</font></a>
   </div>
</nav>
</b>

<br><br><br>
	<ul class="breadcrumb">
	  <li><a href="Home.php">Home</a></li>
	  <li><a href="RoomType.php">Select Rooms</a></li>
	  <li><a href="#">Check Availability</a></li>
	  <li><a href="#">Guest Details</a></li>
	</ul>

<br>
<br>


<div class="container">



		<br>
		
		<?php
			$arrival=$_POST['arrival'];
		$departure=$_POST['departure'];
		$checkin= strtotime($arrival);
		$checkout= strtotime($departure);
		$range= abs($checkin - $checkout);
		$los=$range/86400;
		$rate=$_POST['rate'];
		$room=$_POST['room'];
		$total=$los*$rate;
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$persons=$_POST['persons'];
		$ref2=$_POST["ref2"];
		
		include "include/conn.php";
		$result = mysql_query("SELECT * FROM tblhotel WHERE fldcustomer='" . $ref2. "'");
		
		mysql_close($con);
		?>
		
		<?php
		if($arrival==NULL || $departure==NULL || $persons==NULL || $fname==NULL || $lname==NULL || $address==NULL || $email==NULL || $contact==NULL || $checkin>=$checkout)
		{
		?>
		<form action='CheckValidation2.php' method='POST'>
		</br>
		<div class='container'>
		<div class='row-fluid'>
		<form class='form-horizontal'>
		<fieldset>
			<div id='legend'>
				<legend><h2>&emsp;Booking Summary</h2></legend>
				<font color=red>&emsp;&emsp;*Required</font></br></br>
			</div>
			
		<?php
	
		
		include "include/conn.php";
		$result = mysql_query("SELECT * FROM tblhotel WHERE fldcustomer='" . $ref2. "'");
		
		while($row = mysql_fetch_array($result))
		{
		echo "&emsp;&emsp;Room Number: <input type='text' value=' " .$row['fldcustomer'] . "' size=15 disabled></br></br>";
		echo " <input type='hidden' name = 'rate' value=$rate>  ";
		echo"<input type = 'hidden' name = 'room' value=$room>";
		}
		?>
		
		<?php
			$checkin = strtotime($arrival);
			$checkout = strtotime($departure);
		if($checkin>$checkout)
		{ 
		echo "<font color=red>Invalid Date! Your Departure Date must be greater or not equal to Arrival Date...Thank you</font><br><br>";
		}
		?>
		<?php
		if($checkin==NULL)
		{
		?>
		&emsp;&emsp;Arrival Date: &emsp;&emsp;&nbsp;&nbsp;<input type="date" name="arrival" ><font color=red>*</font><br><br>
		<?php
		}
		else
		{
		?>
		&emsp;&emsp;Arrival Date: &emsp;&emsp;&nbsp;&nbsp;<input type="date" name="arrival" value="<?php echo $arrival ?>" ><br><br>
		<?php
		}
		?>
		
		<?php
		if($checkout==NULL)
		{
		?>
		&emsp;&emsp;Departure Date: &emsp;<input type="date" name="departure" ><font color=red>*</font><br><br>
		<?php
		}
		else
		{
		?>
		&emsp;&emsp;Departure Date: &emsp;<input type="date" name="departure" value="<?php echo $departure ?>" ><br><br>
		<?php
		}
		?>
		
		
		<?php
		if($checkin>=$checkout)
		{
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;Length of Stay: 0 Night/s <br><br>";
		}
		else
		{
		?>			
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;Length of Stay: <?php echo $los ?><br><br>
		<?php
		}
		?>
		
		<?php
		if($persons==NULL)
		{
		?>
		&emsp;&nbsp;&nbsp; No. of Persons: <input type="text" name="persons" value="<?php echo $persons ?>" size=10><font color=red>*</font>
		<?php
		}
		else
		{
		?>
		&emsp;&nbsp;&nbsp; No. of Persons: <input type="text" name="persons" value="<?php echo $persons ?>" size=10>
		<?php
		}
		?>		
		</div>
		</div>

		<br><br><br>


		<div class='container'>
		<div class='row-fluid'>
		<form class='form-horizontal'>
		<fieldset>
		<div id='legend'>
		<legend><h2>&emsp;Guest Details</h2></legend>
		</div>


		
<?php
include "include/conn.php";
$ref=$_REQUEST['ref2'];
$result = mysql_query("SELECT * FROM tblhotel WHERE fldcustomer='" . $ref . "'");
		
		while($row = mysql_fetch_array($result))
		{
		echo "&emsp;&emsp;&emsp;&emsp;Rate Per Day: <input type='text' value='  PHP " . $english_format_number = number_format($row['fldrate']) . ".00' disabled> ";
		echo " <input type='hidden' name = 'rate' value='" . $row['fldrate'] . "'>  ";
		echo"<input type = 'hidden' name = 'room' value='" . $row['fldcustomer'] . "'>";
		}
?>
		<br><br>

		<?php
		if($fname==NULL)
		{
		?>
		&emsp;&emsp;&emsp;&emsp;First Name: <input type="text" name="fname" size=35><font color=red>*</font><br><br>
		<?php
		}
		else
		{
		?>
		&emsp;&emsp;&emsp;&emsp;First Name: <input type="text" name="fname" value="<?php echo $fname ?>" size=35><br><br>
		<?php
		}
		?>
		<?php
		if($lname==NULL)
		{
		?>
		&emsp;&emsp;&emsp;&emsp;Last Name: <input type="text" name="lname" size=35><font color=red>*</font><br><br>
		<?php
		}
		else
		{
		?>
		&emsp;&emsp;&emsp;&emsp;Last Name: <input type="text" name="lname" value="<?php echo $lname ?>" size=35><br><br>
		<?php
		}
		?>
		<?php
		if($address==NULL)
		{
		?>
		&emsp;&emsp;&emsp;&emsp;Address: <input type="text" name="address" size=45><font color=red>*</font><br><br>
		<?php
		}
		else
		{
		?>
		&emsp;&emsp;&emsp;&emsp;Address: <input type="text" name="address" value="<?php echo $address ?>" size=45><br><br>
		<?php
		}
		?>
		<?php
		if($email==NULL)
		{
		?>
		&emsp;&emsp;&emsp;&emsp;Email Address: <input type="email" name="email" size=35><font color=red>*</font><br><br>
		<?php
		}
		else
		{
		?>
		&emsp;&emsp;&emsp;&emsp;Email Address: <input type="email" name="email" value="<?php echo $email ?>" size=35><br><br>
		<?php
		}
		?>
		<?php
		if($contact==NULL)
		{
		?>
		&emsp;&emsp;&emsp;&emsp;Contact Number: <input type="text" name="contact" size=35><font color=red>*</font><br><br>
		<?php
		}
		else
		{
		?>
		&emsp;&emsp;&emsp;&emsp;Contact Number: <input type="text" name="contact" value="<?php echo $contact ?>" size=35><br><br>
		<?php
		}
		?>
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Total Room Cost: <?php echo "PHP ".$english_format_number = number_format($total).".00" ?>
		
		<br><br>
	
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="hidden" name="ref2" value="<?php echo $ref ?>">
		<input type="submit" value="Submit" class="btn btn-success">&emsp;<input type="button" value="Cancel" onclick="window.location='Roomtype.php'" class="btn btn-success"></form>

		</th>
		</table>
		</div>
		<?php

	}
	else{
		?>
		<br><br><br>
			<div id="loader"></div>
		<div style="display:none;" id="myDiv" class="animate-bottom">

		<?php
		include "include/conn.php";
		$reserved = "Reserved";
		$result = mysql_query("UPDATE tblhotel SET fldreservation='" . $reserved . "', fname='" . $fname . "',lname='" . $lname . "', fstart='" . $arrival . "', fend='" . $departure . "', fpersons='" . $persons . "', fbill='" . $total . "' WHERE fldcustomer='" . $room . "'");

		
	echo"<div class='jumbotron' align = 'center'>
	<img src='Solacrest3.png' width=80 height=80></br>
	<font face = Century Gothic size = 4><i class='fa fa-check' style='font-size:30px;color:#80e52d'></i> You have successfully booked!</font></br>
	<font face = Century Gothic size = 5>Thank you <b>". $fname. "  ". $lname ."</b> for Trusting SolaCrest Hotel!</font>
	</br>
	</br>
	<center><b>BOOKING SUMMARY</b></center>
	Arrival Date: ".date("F d, Y", strtotime($arrival)). "</br>
	Departure Date: ".date("F d, Y", strtotime($departure)). "</br>
	Length of Stay: ".$los." Night/s</br>
	No. of Persons: ".$persons."</br>
	Total Cost: PHP ".$english_format_number = number_format($total).".00</br></br>
	<b>Date Range</b>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;<b>Rate Per Day</b>";
	
	$date_from = strtotime($arrival);
	$date_to = strtotime($departure);
	echo "</br>";
			for ($i=$date_from; $i<	$date_to; $i+=86400)
			{  			
				echo "<div id='daterange'>".date("F d, Y", $i)."<img hspace=100>PHP ".$rate.".00<br/></div>";
				
			}	
	echo "<img src='card.png' width=230 height=80>";
	echo "</br>Note: No Prepayment Required.";
	?>
	</br>
	</br>
	<a href='Home.php'><button type=submit class='btn btn-primary'>Home</button></a>
		</div>
<br><br><br>
	<?php
	}
mysql_close($con);
		?>


	</div>
	</div>
	</div>


</form>
</div>
<br><br><br><br><br><br><br><br>
<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="panel-footer text-left designa" style= "background-color: #023a38"><font color = white><img src="SolaCrest3.png" height=30 width=30>&nbsp;SolaCrest Hotel&nbsp;|&nbsp;Terms
&nbsp;|&nbsp;Privacy&nbsp;|&nbsp;Copyright&nbsp;|&nbsp;Cookies&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; All Right Reserved 2017</div>
</body>
</html>

