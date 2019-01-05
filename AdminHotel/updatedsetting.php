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
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
						
<?php
		$ref=$_POST["ref"];
		$id=$_POST["id"];
		$user=$_POST["user"];
		$pw=$_POST["pw"];
               
		$flag=0;
		
		
if($id==NULL||$user==NULL||$pw==NULL)
{
$flag=1;
}

if($flag==1)
	{
		?>
		<form action='Updatedsetting.php' method='POST'>
		
		<tr>
		<td align = center>

		<h2 align = center>EDIT RECORD:<br></h2>

		<br><br>
<?php
				 		if($id == "")
		{
					echo "Admin ID: <input type='text' name='id' value=$id><font color = red>*</font><br><br>";
		}
		else
		{
					echo "Admin ID: <input type='text' name='id' value=$id>  <br><br>";
		}

				 		if($user == "")
		{
					echo "Username: <input type='text' name='uname' value=$user><font color = red>*</font><br><br>";
		}
		else
		{
					echo "Username: <input type='text' name='uname' value=$user>  <br><br>";
		}

		
				 		if($pw == "")
		{
					echo "Password: <input type='text' name='pw' value=$pw><font color = red>*</font><br><br>";
		}
		else
		{
					echo "Password: <input type='text' name='pw' value=$pw>  <br><br>";
		}
		
		
		?>
	<tr>
		<td align = center>
		<input type="hidden" name="ref" value="<?php echo $ref ?>">
&nbsp;<button type="submit" class="btn btn-success">Update</button>
</form>
&nbsp;<button class="btn btn-danger" onclick="window.location='Security.php'">Cancel</button>
<br>
<br>
</tr>
</td>

<?php
			echo "</tr>";
			echo "</table>";
	} 
else
{
		include "include/conn.php";
		$result = mysql_query("UPDATE admin SET id='" . $id . "', uname='" . $user . "', pass ='" . $pw . "'");
?>
		
	
		<tr>
		<td align=center>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color = green><h2>Record has been updated!</br></br></br></br></h2></font>
         </td>
		</tr>
		
		<tr>
		<th>
		<?php
	    echo "<h3><center>Admin ID: ". $id . "<br><br>";
	    echo "New Username: ". $user . "<br><br>";
	    echo "New Password: ". $pw . "</center></h3><br><br>";
	 
		echo "</th>";
		echo "</tr>";
		
		?>

		<tr>
		<th>
				
		<center><button class="btn btn-success" onclick="window.location='DBDeluxe.php'">Go Back</button></center>

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
					
					
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
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
</html
			