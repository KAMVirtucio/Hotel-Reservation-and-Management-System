<?php
	include "include/conn.php";
	if(isset($_REQUEST['roomno']))
	{
		$ref=$_REQUEST['roomno'];
	
		$result = mysql_query
		("DELETE FROM tblhotel WHERE fldcustomer='" . $ref . "'") or die("Failed".mysql_error());
		header("location:ControlDBTower.php");
	}
		?>
