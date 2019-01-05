<!DOCTYPE html>
<html lang="en">
<head>
  <title>SolaCrest Hotel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="Solacrest3.png">
<style>

 .breadcrumb{
	 margin-top:-6px;
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
	margin-left:100px;
	margin-right:100px;
	border-radius:30px;
	border:1px solid #a9a9a9;
}

</style>

</head>
<body>
<b>
<nav class="navbar navbar-fixed-top jam" >
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
        <span class="icon-bar"  style= "background-color: #2980B9"></span>
        <span class="icon-bar"  style= "background-color: #2980B9"></span>
        <span class="icon-bar"  style= "background-color: #2980B9"></span>                        
      </button>
      <a class="navbar-brand" href="Home.php"><font size="8" color= white face="Arno Pro">&nbsp;S<img src="SolaCrest3.png" height=35 width=35>laCrest Hotel</font></a>
    </div>
	
    
  </div>
</nav>
</b>

<br>
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
		<form action='CheckValidation2.php' method='POST'>

		<div class='container'>
		<div class='row-fluid'>
		<form class='form-horizontal'>
		<fieldset>
			<div id='legend'>
				<legend><h2>Booking Summary</h2></legend>
			</div>
		<?php
		include "include/conn.php";
		$ref=$_REQUEST['num'];
		$result = mysql_query("SELECT * FROM tblhotel WHERE fldcustomer='" . $ref . "'");
		
		while($row = mysql_fetch_array($result))
		{
		echo "&emsp;Room Number: <input type='text' value=' " .$row['fldcustomer'] . "' size=15 disabled></br></br>";
		echo " <input type='hidden' name = 'rate' value='" . $row['fldrate'] . "'>  ";
		echo"<input type = 'hidden' name = 'room' value='" . $row['fldcustomer'] . "'>";
		}
?>
		&emsp;Arrival Date: &emsp;&emsp;&nbsp;&nbsp;<input type="date" min="2017-06-01" max="2019-05-13" name="arrival"> <br><br>
 		&emsp;Departure Date: &emsp;<input type="date" min="2017-06-01" max="2019-05-13" name="departure"> <br><br>

		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;Length of Stay: <br><br>
		&nbsp;&nbsp; No. of Persons: <input type="text" name="persons" size=10>	
		</div>
		</div>

		<br><br><br>


		<div class='container'>
		<div class='row-fluid'>
		<form class='form-horizontal'>
		<fieldset>
		<div id='legend'>
		<legend><h2>Guest Details</h2></legend>
		</div>


		
<?php
include "include/conn.php";
$ref=$_REQUEST['num'];
$result = mysql_query("SELECT * FROM tblhotel WHERE fldcustomer='" . $ref . "'");
		
		while($row = mysql_fetch_array($result))
		{
		echo "&emsp;&emsp;&emsp;&emsp;Rate Per Day: <input type='text' value='  PHP " . $english_format_number = number_format($row['fldrate']) . ".00' disabled> ";
		echo " <input type='hidden' name = 'rate' value='" . $row['fldrate'] . "'>  ";
		echo"<input type = 'hidden' name = 'room' value='" . $row['fldcustomer'] . "'>";
		}
?>
		<br><br>

			&emsp;&emsp;&emsp;&emsp;&emsp;First Name: <input type="text" name="fname" size=35> <br><br>
			&emsp;&emsp;&emsp;&emsp;&emsp;Last Name: <input type="text" name="lname"  size=35><br><br>
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;Address: <input type="text" name="address"  size=45><br><br>
		&emsp;&emsp;&emsp;&nbsp;Email Address: <input type="text" name="email"  size=35><br><br>
		&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;Contact No.: <input type="text"name="contact"><br><br>
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Total Room Cost:
		
		<br><br>
	
		&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="hidden" name="ref2" value="<?php echo $ref ?>">
		<input type="submit" value="Submit" class="btn btn-success">&emsp;<input type="button" value="Cancel" onclick="window.location='Roomtype.php'" class="btn btn-success"></form>

		</th>
		</table>
		</div>
		<?php

		mysql_close($con);
		
		?>

	</div>
	</div>



<br><br><br><br><br><br>

<div class="panel-footer text-left designa" style= "background-color: #023a38"><font color = white><img src="SolaCrest3.png" height=30 width=30>&nbsp;SolaCrest Hotel&nbsp;|&nbsp;Terms
&nbsp;|&nbsp;Privacy&nbsp;|&nbsp;Copyright&nbsp;|&nbsp;Cookies&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; All Right Reserved 2017</div>
</body>
</html>

