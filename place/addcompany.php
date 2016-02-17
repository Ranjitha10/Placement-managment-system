<?php
	require_once('dbconnector.php');
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	$cname = $_POST['cname'];
	$cdate = $_POST['cdate'];
	$cpackage = $_POST['cpackage'];
	$cjob = $_POST['cjob'];
	$ccgpa = $_POST['ccgpa'];
	$ctenth = $_POST['ctenth'];
	$ctwelth = $_POST['ctwelth'];
	$cdiploma= $_POST['cdip'];
	$cdeadline= $_POST['cdeadline'];
	//$spl=$_POST['spl'];
	//echo $cdeadline;
	//echo $spl;
	
	/*$result1 = $mysqli->query("INSERT INTO `company` (`CNAME`, `PACKAGE`, `GPACUTOFF`, `TENTHCUTOFF`, `TWELTHCUTOFF`, `DIPCUTOFF`, `LASTDATEREG`,`SPL`) 
					VALUES ('$cname', '$cpackage', '$ccgpa', '$ctenth', '$ctwelth', '$cdiploma','$cdeadline','$spl');");*/
	$result1 = $mysqli->query("INSERT INTO `company` (`CNAME`, `PACKAGE`, `GPACUTOFF`, `TENTHCUTOFF`, `TWELTHCUTOFF`, `DIPCUTOFF`, `LASTDATEREG`) 
					VALUES ('$cname', '$cpackage', '$ccgpa', '$ctenth', '$ctwelth', '$cdiploma','$cdeadline');");
    $result2 = $mysqli->query("INSERT INTO jobprofile (`CNAME`, `JPROFILE`) VALUES ('$cname', '$cjob');");
    $result3 = $mysqli->query("INSERT INTO `dateofvisit` (`CNAME`, `DATE`) VALUES ('$cname', '$cdate');");

    foreach ($_POST['cbranches'] as $selected) {
        $result4 = $mysqli->query("INSERT INTO `beligible` (`CNAME`, `BRANCH`) VALUES ('$cname', '$selected');");
		echo $selected;
	}
	
	if($result1 && $result2 && $result3 && $result4)
	{
		echo "You have successfully registered...  Login to Continue...";
		header("location:pchome.php");
	}
	else
	{
		echo "Enter the valid details";
		header("location:campus.html");
	}
?>