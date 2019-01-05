<?php session_start(); 

if(!isset($_SESSION['uname'])) {
   include("login.php");
   exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SolaCrest Hotel</title>
  <link rel="shortcut icon" href="SolaCrest3.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>

    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .row.content {height: 450px}

    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    footer {
      background-color: #555;
      color: white;
      padding: 15px;
	  
    }
	a{
		color:black;
	}
	.dropdown{
		margin-top:10px;
	}
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">SolaCrest Hotel Management</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
	  <li>
		<div class="dropdown">
	&emsp;&emsp;<button style="background-color:#a3952f;border:1px solid #a3952f;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Room Records <span class="caret"></span></button></a>
  <ul class="dropdown-menu">
    <li><a href="DBDeluxe.php">Deluxe Room</a></li>
    <li><a href="DBTower.php">Tower Deluxe Room</a></li>
    <li><a href="DBSignature.php">Signature Deluxe Room</a></li>
	<li><a href="DBJunior.php">Junior Suite</a></li>
  </ul>
		</div>
		</li>
		<li>
        <div class="dropdown">
	&emsp;&emsp;<button style="background-color:#a3952f;border:1px solid #a3952f;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Room Management <span class="caret"></span></button></a>
  <ul class="dropdown-menu">
    <li><a href="ManageDBDeluxe.php">Deluxe Room</a></li>
    <li><a href="ManageDBTower.php">Tower Deluxe Room</a></li>
    <li><a href="ManageDBSignature.php">Signature Deluxe Room</a></li>
	<li><a href="ManageDBJunior.php">Junior Suite</a></li>
  </ul>
  </li>
  <li>
        <div class="dropdown">
	&emsp;&emsp;<button style="background-color:#a3952f;border:1px solid #a3952f;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Room Control <span class="caret"></span></button></a>
  <ul class="dropdown-menu">
    <li><a href="ControlDBDeluxe.php">Deluxe Room</a></li>
    <li><a href="ControlDBTower.php">Tower Deluxe Room</a></li>
    <li><a href="ControlDBSignature.php">Signature Deluxe Room</a></li>
	<li><a href="ControlDBJunior.php">Junior Suite</a></li>
  </ul>
  </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Welcome Administrator</a></li><li><a href="Security.php">Privacy Settings</a></li><li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
   <div class="container-fluid"> 
   <table><tr><td>
	<h3>&emsp;Room Records | Signature Deluxe Rooms &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	</h3>
	</td>
	<td>
	<form action="DBSignature.php" method="POST">
	<input type="text" name="search" size=30> 
	<button type="submit" class="btn btn-default"  onclick="location='DBSignature.php' ">
      <span class="glyphicon glyphicon-search"></span> Search
	<button type="button" class="btn btn-default"  onclick="location='DBSignature.php' " >
      <span class="glyphicon glyphicon-eye-open"></span> View All
    </button>
	</td></tr></table>
</div>
	</br>
      <table class="table table-striped">
	  <thead>
	  <tr>
	  <th>&emsp;&emsp;&emsp;ROOM NO.</th>
	  <th>RATE PER DAY</th>
	  <th>ROOM TYPE</th>
	  <th>STATUS</th>
	  </tr>
	  </thead>
	  <tbody>
	  <tr class="active">
<?php

error_reporting("E-NOTICE");
$search = $_POST['search'];

include "include/conn.php";

$sdeluxe = "signature deluxe";
$available = "Available";
$result = mysql_query("SELECT * FROM tblhotel  

WHERE 
fldtype = '".$sdeluxe."' && fldcustomer LIKE '%".$search."%' && fldreservation = '".$available."' || 
fldtype = '".$sdeluxe."' && fldrate LIKE '%".$search."%' && fldreservation = '".$available."' ");


if(mysql_num_rows($result)==0 )
{
echo 
"<tr>
<th colspan = 4 align = center>
<br>
<center><h2><b><font color = red>No Rooms Available!</font></b></h2></center>
</th>
</tr>";
}
else
{
while($row = mysql_fetch_array($result))
{
	echo "<td>&emsp;&emsp;&emsp;". $row['fldcustomer'] . "</td>";
	echo "<td>PHP ". $english_format_number = number_format($row['fldrate']) . ".00</td>";
	echo "<td>". $row['fldtype'] . "</td>";
	echo "<td>". $row['fldreservation'] . "</td>";
	echo "<input type = 'hidden' name = 'roomrate' value='" . $row['fldrate'] . "'>";
?>			
<?php
	echo "</tr>";
}
echo "</table>";
}
mysql_close($con);
?>
</tr>
</table>
</tbody>
</table>

</div>
</div>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
<footer class="container-fluid text-center">
  <!-- Footer -->
<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date("Y");?> - SolaCrest Hotel Management</span>
		<span class="right">
			&emsp;All Rights Reserved 2017</a>
		</span>
	</div>
</div>
</footer>

</body>
</html>
