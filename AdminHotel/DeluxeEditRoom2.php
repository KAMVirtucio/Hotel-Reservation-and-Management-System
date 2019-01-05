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
	<h3>&emsp;Room Control | Deluxe Room&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
	</h3>
	</td>
	<td> 
	<form action="ControlDBDeluxe.php" method="POST">
	<input type="text" name="search" size=30> 
	<button type="submit" class="btn btn-default"  onclick="location='ControlDBDeluxe.php' ">
      <span class="glyphicon glyphicon-search"></span> Search
	<button type="button" class="btn btn-default"  onclick="location='ControlDBDeluxe.php' " >
      <span class="glyphicon glyphicon-eye-open"></span> View All
    </button>
	<button type="button" class="btn btn-default"  onclick="location='InsertDBDeluxe.php' " >
      <span class="glyphicon glyphicon-plus"></span> Insert
    </button>
	</td></tr></table>
</div>
</form>
<div class="table">
<table width="100%" border="0" cellspacing="0" cellpadding="0">							
<tr>
<th align = "center">
							
<?php


$roomno=$_POST["ref2"];
$room=$_POST['room'];
$rate=$_POST['rate'];
$available="Available";
$flag=0;
$flag2=0;

include "include/conn.php";

		$result = mysql_query("SELECT * FROM tblhotel");
		
		while($row=mysql_fetch_array($result))
		{
			if($row['fldcustomer']==$room)
			{
				$flag2=2;
			}
			if($room==$roomno)
			{
				$flag2=0;
			}
		}
	mysql_close($con);
	if($room==NULL || $rate==NULL)
	{
		$flag2=3;
	}
	
	
if($room==NULL || $rate==NULL || $flag2>=2)
{
	$flag=0;
}
?>

<?php
if($flag==1 || $flag2==2 || $flag2==3)
{
?>
	<form action='DeluxeEditRoom2.php' method='POST'>
	<tr>
	<td align = center>
	<img src='SolaCrest3.png' width=100 height=100>
	<h1 align = center><font face="Arno Pro" color=#a3952f>SOLACREST HOTEL ROOM:</font><br></h1>
	<h2 align = center><font face="Arno Pro" color=#a3952f style="letter-spacing:2px">EDIT ROOM</font><br></h2>
	<br>
			
	<div class='jumbotron' style='margin-left:300px;margin-right:300px;border:1px solid #a9a9a9'>
	<?php
		if($room==NULL)
		{
			?>
			Room No: &emsp;<input type='text' name='room' style='border:1px solid #ef402d'><font color=red>*</font><br><br>
					<input type="hidden" name="ref2" value="<?php echo $roomno ?>">
		<?php
		}
		elseif($flag2==2)
		{
			?>
		<font color=red>*Duplicate Error: <b>Room No.</b> already exists!</font></br></br>
		Room No: &emsp;<input type='text' name='room' style='border:1px solid #ef402d' value= "<?php echo $room ?>"></br></br>
		
		<input type="hidden" name="ref2" value="<?php echo $roomno ?>">
		<?php
		}
		else
		{
		?>
			Room No: &emsp;&nbsp;<input type='text' name='room' value= "<?php echo $room ?>">  <br><br>
		<?php
		}
		if($rate==NULL)
		{
			?>
			Rate Per Day: <input type='text' name='rate' style='border:1px solid #ef402d'><font color =red>*</font><br><br>
		<?php
		}
		else
		{
			?>
			Rate Per Day: <input type='text' name='rate' value= "<?php echo $rate ?>">  <br><br>
		<?php
		}				
		?>
<tr>
	<td align = center>
</br>
		<input type="hidden" name="ref2" value="<?php echo $roomno ?>">
		&nbsp;<button class="btn btn-success" type="submit">Update</button>
		</form>
		&nbsp;<a href="ControlDBDeluxe.php"><button class="btn btn-danger">Cancel</button></a>

</br></br>

</form>
</tr>
</td>
</tr>
</table></form>
<?php
}
if($flag==0 && $flag2<2)
{
	include "include/conn.php";
	
		$result=mysql_query("UPDATE tblhotel SET fldcustomer='".$room."',fldrate='".$rate."' WHERE fldcustomer='".$roomno."'");
		?>
		<tr>
		<td align = center>
		<img src='SolaCrest3.png' width=100 height=100>
		<h1 align = center><font face="Arno Pro" color=#a3952f>SOLACREST HOTEL ROOM:</font><br></h1>
		</tr>
		
		<tr>
		<td>
		<div class='jumbotron' style='margin-left:300px;margin-right:300px;'>
		<center><font color="green" face="Arno Pro" size=4>Record has been updated!<br></font></center></br>
		<center><button class="btn btn-success" onclick="window.location='ControlDBDeluxe.php'">Go Back</button></center>
		</td>
		</tr>
		
		<tr>
		<th>
		</br>
		
		
		</th>
		</tr>
			
		<?php

		mysql_close($con);
		}
		?>

							</th>
							</tr>
						</table>
						
						
						
						
					</div>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
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
