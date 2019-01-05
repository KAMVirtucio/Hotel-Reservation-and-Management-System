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
							
							
								
				<form method="POST">
				<tr>
				<th>
				
				</br></br></br></br>
				<div class='jumbotron' style='margin-left:300px;margin-right:300px;border:1px solid #a9a9a9'>
						 <div class="container-fluid"> 
						<center> <span class="glyphicon glyphicon-lock" style="font-size:50px;"></span></center>
				<h2>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ADMIN SECURITY LOGIN:</h2></br>
				</div>
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="text" size=50 style="height:50px;font-size:20px;" name="uname" placeholder="  Enter Username" required></br></br>
		
				&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<input type="password" size=50 style="height:50px;font-size:20px;" name="pass" placeholder="  Enter Password" required>
				<br><br>
				
						<center><button type="submit" name="login" class = "btn btn-warning" style="width:550px">Login</button></center>
						<br>
				</div>
				</th>
				</tr>
				</form>
				<?php
				if(isset($_POST['login'])){
					include 'include/conn.php';
					
					$uname = $_POST['uname'];
					$pass = $_POST['pass'];
					
					
					$result = mysql_query("SELECT * FROM admin WHERE uname = '$uname' AND pass = '$pass'");					
					while($rows=mysql_fetch_array($result))
					{
							if(mysql_num_rows($result) > 0)
					{
						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
						?>
						<meta http-equiv="refresh" content="0; url=Setting.php" /> 
						<?php
					}

					 else{
						 ?>
						<meta http-equiv="refresh" content="0; url=Security.php" /> 
						<?php
					}
				}
				}
			?>

				
	
							
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
</html>
