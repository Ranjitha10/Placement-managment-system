<?php
	require_once('dbconnector.php');
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	$cname = $_POST['cname'];
	$cdate = $_POST['cdate'];
	$cjob = $_POST['cjob'];
	$ccgpa = $_POST['ccgpa'];
	$ctenth = $_POST['ctenth'];
	$ctwelth = $_POST['ctwelth'];
	$cdiploma= $_POST['cdip'];
	$cdeadline= $_POST['cdeadline'];
	//echo $cdeadline;
	//echo $cname;
	
	$result1 = $mysqli->query("INSERT INTO `internship` (`CNAME`,`GPACUTOFF`, `TENTHCUTOFF`, `TWELTHCUTOFF`, `DIPCUTOFF`, `LASTDATEREG`) 
					VALUES ('$cname','$ccgpa', '$ctenth', '$ctwelth', '$cdiploma','$cdeadline');");
    $result2 = $mysqli->query("INSERT INTO internjp (`CNAME`, `JPROFILE`) VALUES ('$cname', '$cjob');");
    $result3 = $mysqli->query("INSERT INTO `interndov` (`CNAME`, `DATE`) VALUES ('$cname', '$cdate');");
	
	if($result1 && $result2 && $result3)
	{
		echo "Successfully inserted....";
		header("location:pchome.php");
	}
	else
	{
		echo "Enter the valid details";
		header("location:intern.php");
	}
?>