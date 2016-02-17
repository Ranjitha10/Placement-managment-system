<?php
error_reporting(0);



require_once('dbconnector.php');
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
// Define $username and $password
        $username = $_POST['uname'];
        $password = $_POST['pass'];
        $password=md5($password);
			$uname = htmlentities($_POST['uname']);
			$_SESSION["username"] = $uname;
		//$_SESSION['userNameT'] = $username;
		$mystatus=$_POST['radio'];
		//echo $username;
		if($mystatus=='student')
		{
			$sql="SELECT * FROM student WHERE USN='$username' and PASWORD='$password';";
			// and PASS='$password'
		}
		else if($mystatus=='pc')
		{
			$sql="SELECT * FROM login WHERE USN='$username' and PASWORD='$password';";
			//$sql="SELECT * from login WHERE uname='$username'";
		}
//$result = mysqli_query($mysqli, $sql);
$result = $mysqli->query($sql);
//echo $result->num_rows;
/*
// Loop through the returned data and output it
while($row = $result->fetch_assoc()) {
printf("Name: %s<br />", $result['uname']);

}
// Free the memory associated with the query
$result->close();*/
//$count = $result->num_rows;
//echo $count;
//echo "hi ";
//

if ($result->num_rows == 1) 
{
    $_SESSION['username']=$username; // Initializing Session
    $_SESSION['password']=$password;
	if($mystatus=='student')
	{	header("location:sthome.php");}
    else if($mystatus=='pc')
	{	header("location:pchome.php");}
	//echo "within if";
}
else 
{
    //$_SESSION['err']="login";?>
    <script type="text/javascript"> 
    alert("Inavalid Username or Password."); 
    history.back(); 
  </script> 
	<?php

//header('Location: login.html');
	}

//extra

/*

// Inialize session
session_start();


mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("Cannot Select DB".mysql_error());
$_SESSION['USERNAME'] = $_POST['EMAILID'];
// Define $myusername and $mypassword
$myusername=$_POST['EMAILID'];
$mypass=$_POST['PASSWD'];
$mystatus=$_POST['RADIO'];

// To protect MySQL injection 
$myusername = stripslashes($myusername);
$mypass = stripslashes($mypass);
$mystatus = stripslashes($mystatus);
$myusername = mysql_real_escape_string($myusername);
$mypass = mysql_real_escape_string($mypass);
$mystatus = mysql_real_escape_string($mystatus);
$mypassword=md5($mypass);
if($mystatus=='Student')
{
$sql="SELECT * FROM $tbl_name WHERE SEMAIL='$myusername' and SPASSWD='$mypassword'";
}
else if($mystatus=='Officer')
{
$sql="SELECT * FROM PLACEMENT_OFFICER WHERE EMAIL='$myusername' and PASSWD='$mypassword'";
}
else
{
$sql="SELECT * FROM PLACEMENT_COORDINATOR WHERE PEMAIL='$myusername' and PPASSWD='$mypassword'";
}

$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

//echo $count;
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

if($mystatus=='Officer')
header("location:officer.php");
else if($mystatus=='Coordinator')
header("location:pc.php");
else
header("location:student.php");
}
else {
echo "\n\nYou entered a Wrong Username or Password. Try logging in again.";
}

ob_end_flush();   */


?>
