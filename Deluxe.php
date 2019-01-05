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
<link rel="stylesheet" href="css/design.css" type="text/css" media="screen"/>	
<style type="text/css">
<link rel="stylesheet" type="text/css" href="design.css" />
</style>

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

.div {
    
    padding: 10px 40px;
    background: #a3952f;
    width: 500px;
    border-radius: 50px 50px;
	margin-left:50px;
}

body{ 
    margin-top:35px; 
}
.stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
	backgournd-color:#a3952f;
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
      <a class="navbar-brand" href="Home.php"><font size="7" color= white face="Arno Pro">&nbsp;S<img src="SolaCrest3.png" height=35 width=35>laCrest Hotel</font></a>
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
<div class="jumbotron">
	<div class="container">
		<div class="row setup-content" id="ProfileSetup-step">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<font color="#a3952f"><p>Deluxe Room</p></font>    
						
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="deluxe.jpg" style="width:560px;height:350px">
    </div>

    <div class="item">
      <img src="deluxe2.jpg"  style="width:560px;height:350px">
    </div>

    <div class="item">
      <img src="deluxe3.jpg"  style="width:560px;height:350px">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	<br>
	<br>

<div class="container">
 
  <!-- Trigger the modal with a button -->
  <button type="button" class="read" data-toggle="modal" data-target="#myModal">Read More</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style= "background-color: #a3952f" >
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Deluxe Room has:</h4>
        </div>
        <div class="modal-body">
		 <ul>
	  <li>1 King Size Bed or 2 twin beds</li>
	  <li> Air conditioning</li>
	  <li> Minibar</li>
	  <li> Satellite</li>
	  <li> Cable TV</li>
	  <li> Free LAN and WIFI Access</li>
	  <li> Shower</li>
	  <li> LED Television</li>
	  <li> Private toilet and bath</li>
	  <li> Welcome Fruit Platter</li>
		</ul>


	</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div> 
</div>

<div class="col-md-6">
<table class = "div" height = 80px>
<tr>
<th>
<font color = white size = 5><center>Availabe Rooms: Deluxe Room</center>
</th>
</tr>
</table>



<br>
<br>

<table width = 600px cellpadding = "20" >


<?php
include "include/conn.php";
$deluxe = "deluxe";
$available = "Available";
$result = mysql_query("SELECT * FROM tblhotel  

WHERE 
fldtype = '".$deluxe."' && fldreservation = '".$available."' || 
fldtype = '".$deluxe."' && fldreservation = '".$available."' 
 ");


if(mysql_num_rows($result)==0 )
{

	echo "
<tr>

<td>Room No.</td>
<td>Rate Per Day</td>
<td>Action</td>

</tr>

<tr>
<th colspan = 3 align = center>
<br>
<center><h2><b><font color = red>No Room Available!</font></b></h2></center>
</th>
</tr>";



}
else
{
echo 
"<tr>
<td align = center>Room No.</td>
<td align = center>Rate Per Day</td>

<td align = center>Action</td>
</tr>";

while($row = mysql_fetch_array($result))
{
	echo "<tr><td align = center>". $row['fldcustomer'] . "</td>";
	echo "<td align = center>PHP ". $row['fldrate'] . ".00</td>";
	echo "<input type = 'hidden' name = 'roomrate' value='" . $row['fldrate'] . "'>";
?>
<td align = center><button type="button" class="read2" onclick="window.location='CheckValidation.php?num=<?php echo $row['fldcustomer'] ?>'">Book Room</button></td>

<?php
		echo "</tr>";
}
	echo "</table>";
}

mysql_close($con);
?>

</th>
</tr>
</table>

</form>
</form>
</th>
</tr>
</table>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

    




<br>
<br>
<br>
<br>
<br>
<br>

<div class="panel-footer text-left designa" style= "background-color: #023a38"><font color = white><img src="SolaCrest3.png" height=30 width=30>&nbsp;SolaCrest Hotel&nbsp;|&nbsp;Terms
&nbsp;|&nbsp;Privacy&nbsp;|&nbsp;Copyright&nbsp;|&nbsp;Cookies&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; All Right Reserved 2017</div>
</body>
</html>

