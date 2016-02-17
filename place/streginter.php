<?php
	require_once('dbconnector.php');
	session_start();
	//echo $_SESSION["username"];
	$usn = $_SESSION["username"];
	$cname = $_POST['cmpbtn'];
	//echo $cname;
	
	$date1 = date('Y-m-d');
	$my_date = date('Y-m-d', strtotime($date1));
	
	//echo $my_date;
	
	$result = $mysqli->query("INSERT INTO internapplied (USN,CNAME,DATE) VALUES ('$usn','$cname','$my_date')");
	
	if($result)
	{
		echo "Registered!";
		header("location:sthome.php");
	}
	else
	{
		echo "Registration Error!";
	}
	
?>