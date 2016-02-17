<!DOCTYPE html>
<html lang="en">

<head>

      <link rel="SHORTCUT ICON" href="images/rvce.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Placement Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<link id="theme" rel="stylesheet" type="text/css" href="style.css" title="theme" />


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

		<style>
			fieldset {
						border:2px groove #999;
						border-radius:8px;
						box-shadow:0 0 8px #999;
						background-color:
						}
			input:focus {
					color: #333;
					border: 1px solid #2ecc71;
					}
					
			button:hover 
					{

						background: #8181F7;

					}
		button {
					cursor: pointer;
					background: grey;
					width: 50%;
					padding: 10px 15px;
					border: 0;
					color: #fff;
					font-family: "cambria";
					font-size: 14px;
					font-weight: 400;
					-webkit-font-smoothing: antialiased;
					-moz-osx-font-smoothing: grayscale;
					-webkit-transition: 0.2s linear;
					-moz-transition: 0.2s linear;
					-ms-transition: 0.2s linear;
					-o-transition: 0.2s linear;
						transition: 0.2s linear;
					}
		body {
					background: #EFEFFB;
					background-size: cover;
					font-family: "cambria";
					-webkit-font-smoothing: antialiased;
					-moz-osx-font-smoothing: grayscale;
					}


		form {
					
					padding: 40px;
					box-shadow: 0 0 3px rgba(0, 0, 0, 0.3);
			}
		</style>


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<img src="images/logo.png" height="60%" width="60%">
			</div>
			<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h3 style='color:white'> Placement Management System</h3>
			</div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="sthome.php">Student home</a>
                    </li>
                  
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	        <!-- Page Heading/Breadcrumbs -->

	<center>
	<form method="POST" action="steditsave.php" align="center">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Profile</h1>
			<fieldset>
		<table>
			<td>
				<!--<td>
				-->
				<br><b>USN<font  color="red"><span class="form-required" >&nbsp*</span></font>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				:&nbsp&nbsp
				</b>
				<!--</td>
				<td>-->
				<!--<?php 
														require_once('dbconnector.php');
														session_start();
														$usn=$_SESSION["username"];?>-->
				<input type="text"  name="usn" required value="<?php	
														echo $_SESSION["username"];
														?>" readonly><br><br>
			
				
				<b>Name<font  color="red"><span class="form-required" >&nbsp*</span></font>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				:&nbsp&nbsp
				</b>
		
					<input type="text"  name="name" required value="<?php
															$sql="SELECT NAME FROM student WHERE USN='$usn';";
															$result = $mysqli->query($sql);
															while($row = $result->fetch_assoc()) {
															echo $row['NAME'];}
															?>"><br><br>
					
				<b>Branch<font  color="red"><span class="form-required" >&nbsp*</span></font>
				&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				:&nbsp&nbsp
				</b>
	
				<input type="text"  name="branch" required value="<?php
															$sql="SELECT BRANCH FROM student WHERE USN='$usn';";
															$result = $mysqli->query($sql);
															while($row = $result->fetch_assoc()) {
															echo $row['BRANCH'];}
															?>"><br><br>
			
				
				<b>E-mail<font  color="red"><span class="form-required" >&nbsp*</span></font>
				&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp
				:&nbsp&nbsp
				</b>
				
				<input type="email"  name="email" required value="<?php
															$sql="SELECT EMAIL FROM student WHERE USN='$usn';";
															$result = $mysqli->query($sql);
															while($row = $result->fetch_assoc()) {
															echo $row['EMAIL'];}
															?>"><br><br>
				<!--
				
				<b>Password<font  color="red"><span class="form-required" >&nbsp*</span></font>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp&nbsp</b>
				
				<input type="password" value="" name="pass1" placeholder="Enter the Password" required><br><br>
				
				
				<b>Confirm_Password<font  color="red"><span class="form-required" >&nbsp*</span></font> 
				&nbsp:&nbsp&nbsp</b>
				
				<input type="password" value="" name="pass2" placeholder="Re-type the Password" required><br><br>
				
				-->
				<b>Phone No<font  color="red"><span class="form-required" >&nbsp*</span></font> 
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				:&nbsp&nbsp</b>
				<!--</td>
				<td>
				-->
				<input type="text" name="phone" required value="<?php
															$sql="SELECT PHONE FROM student WHERE USN='$usn';";
															$result = $mysqli->query($sql);
															while($row = $result->fetch_assoc()) {
															echo $row['PHONE'];}
															?>"><br><br>
				<!--</td>
			</tr>
			
			<tr>
				<td>
				-->
				<b>CGPA<font  color="red"><span class="form-required" >&nbsp*</span></font> 
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp&nbsp
				:&nbsp&nbsp
				</b>
				
				<input type="text"  name="cgpa" required value="<?php
															$sql="SELECT CGPA FROM student WHERE USN='$usn';";
															$result = $mysqli->query($sql);
															while($row = $result->fetch_assoc()) {
															echo $row['CGPA'];}
															?>"/><br><br>
				<!--</td>
			</tr>
			
			<tr>
				<td>
				-->
				<b>10<sup>th</sup>%<font  color="red"><span class="form-required" >&nbsp*</span></font>
				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp</b>
				
				<input type="text" name="10th" required value="<?php
															$sql="SELECT TENTH FROM student WHERE USN='$usn';";
															$result = $mysqli->query($sql);
															while($row = $result->fetch_assoc()) {
															echo $row['TENTH'];}
															?>"/><br><br>
				
			
			<input type="radio"  name="radio" value="puc" />
				<label> PUC </label>
				<input type="radio"  name="radio" value="dip" />
				<label>DIP </label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp
				
				<input type="text"  name="pucdip" required value="<?php
															$sql="SELECT TWELTH,DIP FROM student WHERE USN='$usn';";
															$result = $mysqli->query($sql);
															while($row = $result->fetch_assoc()) 
															{
																if($row['DIP'] == 0)
																	echo $row['DIP'];
																else
																	echo $row['TWELTH'];
															}
															?>"/><br><br>
				<!--</td>
			</tr>
			<tr>
				<td colspan="2">
				-->
				<center>
				<button align="center">Save</button><br><br>
				<!--</td>-->
			</td>
		</table>
		</fieldset>
	</div>
	</div>
	
 </form>
</body>
</html>
