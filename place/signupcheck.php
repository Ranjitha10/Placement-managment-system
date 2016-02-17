<?php
error_reporting(0);



require_once('dbconnector.php');
$usn=$_POST['usn'];
$name=$_POST['name'];
$branch=$_POST['branch'];
$email=$_POST['email'];
$pass=$_POST['pass1'];
$phone=$_POST['phone'];
$cgpa=$_POST['cgpa'];
$tenth=$_POST['10th'];
$pucdip=$_POST['pucdip'];
//$spl=$_POST['spl'];

$mystatus=$_POST['radio'];

if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
{
    echo "Only letters allowed in the NAME field"; 
}
elseif (!preg_match("/^[a-z0-9A-Z]*$/",$usn)) 
{
    echo "Only letters and digit allowed in the USN field"; 
}
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
    echo "Invalid email format"; 
}
elseif	((!preg_match("/^[0-9]*$/",$phone)) || strlen($phone) != 10) 
{
	echo "Enter the valid 10 digit numbers."; 
}
elseif($_POST['pass1'] == $_POST['pass2'])
{
	$pass1 = md5($pass);
	
	if($mystatus=='puc')
	{
		$sql = "INSERT INTO student (NAME,USN,BRANCH,EMAIL,PASWORD,PHONE,CGPA,TENTH,TWELTH) VALUES ('$name','$usn','$branch','$email','$pass1',
	'$phone','$cgpa','$tenth','$pucdip')";
	}
	else
	{
		$sql = "INSERT INTO student (NAME,USN,BRANCH,EMAIL,PASWORD,PHONE,CGPA,TENTH,DIP) VALUES ('$name','$usn','$branch','$email','$pass1',
	'$phone','$cgpa','$tenth','$pucdip')";
	}
	
//$result = $link->query($sql);
   $result = mysqli_query($mysqli, $sql);
	if($result)
	{
		echo "You have successfully registered...  Login to Continue...";
		header("location:home.html");
	}
	else
	{
		echo "Enter the valid details";
		header("location:stsignup.html");
	}
}
else {
	echo "Enter the same password in both the fields";
}
	mysqli_close($mysqli);
?>