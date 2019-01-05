<html>
<head>
<title>SolaCrest Hotel</title>
<link rel="shortcut icon" href="SolaCrest3.png">
<style>
body{	
	margin:0px auto;
	background-image:url("wall.jpg");
	background-repeat:none;
	background-size:102% 102%
}

.container{		
	width:500px;
	height:400px;
	background-color:white;	
	margin:0px auto;
	text-align:center;
	margin-top:150px;
	border-radius:5px;
	border:2px solid #a9a9a9;
	box-shadow: 10px 10px 5px #888888;
}

.container img{
	border-radius:500px;
	background:#fff;
	padding:5px;
	margin-top:-100px;
	margin-bottom:30px;	
}
input[type = "text"],[type = "password"]{
	width:350px;
	height:45px;
	font-size:17px;
	margin-top:20px;margin-bottom:20px;padding-left:20px;
	background:#fff;
	border:1px solid #c4c4c4;
}
.login{	
	width:350px;
	border:none;
	padding:15px 30px;
	background:#a3852a;
	border-radius:5px;
	cursor:pointer;
	color:white;
}
.login:hover{	
	width:350px;
	border:none;
	padding:15px 30px;
	background:#d3af41;
	border-radius:5px;
	cursor:pointer;
	color:white;
}
.text{
	letter-spacing:3;
}
</style>
</head>
<body>

	<div class="container">
	<img src="adminpic.png" width=150 height=150>
		<form method="post">
		<div class="text">
			<font face ="Arno Pro" color="#a3852a" size="5">SOLACREST ADMIN</font>
		</div>
		<div class = "form-input">					
			<input type="text" name="uname" placeholder="Enter Username" required="" oninvalid="this.setCustomValidity('Please Enter Username')"  oninput="setCustomValidity('')">
		</div>	
		<div class = "form-input">		
			<input type="password" name="pass" placeholder="Enter Password" required=="" oninvalid="this.setCustomValidity('Please Enter Password')"  oninput="setCustomValidity('')">
		</div>			
			<input type="submit" name="login" class = "login" value="LOGIN">
				
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
						session_start();
						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
						echo "<script type = \"text/javascript\">
									alert(\"You've Successfully Login!\");
									window.location.href= (\"DBDeluxe.php\")
									</script>";
					}

					 else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Please Try Again\");
									window.location.href= (\"login.php\")
									</script>";
					}
				}
				}
			?>
			</div>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

	</div>
</form>

</body>
