<?php
	require_once('dbconnector.php');
	
	$cname = $_POST['cmpbtn'];
	echo $cname;
	$result = $mysqli->query("DELETE FROM internship WHERE CNAME='$cname'");
	if($result)
	{
		echo "Delete Success...";
		header("location:pchome.php");
	}
	else
	{
		echo "Delete Unsuccess...";
	}
?>