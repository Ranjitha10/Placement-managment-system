<?php
	require_once('dbconnector.php');

	$usn=$_POST['usn'];
	$name=$_POST['name'];
	$branch=$_POST['branch'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$cgpa=$_POST['cgpa'];
	$tenth=$_POST['10th'];
	$pucdip=$_POST['pucdip'];
	$temp="0";
	//echo $temp;
	//echo $usn;
	//echo $branch;
	$mystatus=$_POST['radio'];
	//echo $mystatus;
	if (!preg_match("/^[a-z0-9A-Z]*$/",$usn)) 
	{
		echo "Only letters and digit allowed in the USN field"; 
	}
	elseif (!preg_match("/^[a-zA-Z ]*$/",$name)) 
	{
		echo "Only letters allowed in the NAME field"; 
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
	{
		echo "Invalid email format"; 
	}
	elseif	((!preg_match("/^[0-9]*$/",$phone)) || strlen($phone) != 10) 
	{
		echo "Enter the valid 10 digit numbers."; 
	}
	elseif($mystatus == 'puc')
		{
			$sql1 = "UPDATE student SET NAME='$name',BRANCH='$branch', EMAIL='$email', PHONE='$phone', 
						CGPA='$cgpa', TENTH='$tenth', TWELTH='$pucdip', DIP='$temp' WHERE USN='$usn'";
			//$sql2 = "DELETE DIP FROM student WHERE USN='$usn'";
		}
		else
		{
			$sql1 = "UPDATE student SET NAME='$name',BRANCH='$branch', EMAIL='$email', PHONE='$phone', 
						CGPA='$cgpa', TENTH='$tenth', DIP='$pucdip', TWELTH='$temp' WHERE USN='$usn'";
			//$sql2 = "DELETE TWELTH FROM student WHERE USN='$usn'";
		}
		
		$result1 = $mysqli->query($sql1);
		//$result2 = $mysqli->query($sql2);
		
		if($result1/* && $result2*/)
		{
			echo "Successfully Updated!";
			header("location:sthome.php");
		}
		else
		{
			echo "Update Error!";
			//header("location:steditprofile.php");
		}
	
	
	//mysqli_close($mysqli);
?>