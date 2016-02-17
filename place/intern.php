<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Placement Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<link rel="SHORTCUT ICON" href="images/rvce.ico">
    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<link id="theme" rel="stylesheet" type="text/css" href="style.css" title="theme" />



	<style>
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

						background: #27ae60;

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
			
			<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="index.html">Start Bootstrap</a>-->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="pchome.php">PC View</a>
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
<center>
	<form method="POST" action="interninsert.php">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Enter the Company Details</h1>
			<fieldset>
			<table>
			<td>
				<!--<td>
				-->
				<br><b>Company Name<font  color="red"><span class="form-required" >&nbsp*</span></font> :&nbsp&nbsp</b>
				<!--</td>
				<td>-->
					<!--<input type="text" value="" name="cname" placeholder="Name of the Company" required>-->
					<select style="width:142px" name="cname">
					<?php
					// Open a MySQL connection
						require_once('dbconnector.php');
						// Create and execute a MySQL query
						$sql = "SELECT CNAME FROM company";
						$result = $mysqli->query($sql);
						// Loop through the returned data and output it
						while($row = $result->fetch_assoc()) {
						?>
							 	<option value="<?php echo $row['CNAME']?>"> <?php printf("%s<br />", $row['CNAME']); ?> </option>
						<?php }
						// Free the memory associated with the query
						$result->close();
						// Close the connection
						$mysqli->close();
						
					?>
					</select><br><br>
				<!--</td>
			</tr>
			
			<tr>
				<td>
				-->
				<b>Date Of Visit<font  color="red"><span class="form-required" >&nbsp*</span></font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp</b>
				<!--
				</td>
				<td>
				-->
				<input name="cdate" type="date" placeholder="YYYY-MM-DD" required/><br><br>
				<!--
				</td>
			</tr>
			
			<tr>
				<td>
				-->
				<b>Job Profiles<font  color="red"><span class="form-required" >&nbsp*</span></font>&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp</b>
				<!--</td>
				<td>
				-->
				<input name="cjob" type="text" placeholder="Job Profiles" required/><br><br>
				<!--</td>
			</tr>	
			
			<tr>
				<td>
				-->
				<b>CGPA Cut Off<font  color="red"><span class="form-required" >&nbsp*</span></font> &nbsp:&nbsp&nbsp&nbsp</b>
				<!--</td>
				<td>
				-->
				<input type="text" value="" name="ccgpa" placeholder="CGPA Cut Off" required/><br><br>
				<!--</td>
			</tr>
			
			<tr>
				<td>
				-->
				<b>10<sup>th</sup> Cut Off<font  color="red"><span class="form-required" >&nbsp*</span></font> &nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp</b>
				<!--</td>
				<td>
				-->
				<input type="text" value="" name="ctenth" placeholder="Ex: 80.16" required/><br><br>
				<!--
				</td>
			</tr>
			
			<tr>
				<td>
				-->
				<b>12<sup>th</sup> Cut Off<font  color="red"><span class="form-required" >&nbsp*</span></font> &nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp</b>
				<!--</td>
				<td>
				-->
				<input type="text" value="" name="ctwelth" placeholder="Ex: 80.16"/><br><br>
				<!--</td>
			</tr>
			
			<tr>
				<td>
				-->
				<b>Dip% Cut Off<font  color="red"><span class="form-required" > &nbsp*</span></font>   :&nbsp&nbsp&nbsp</b>
				<!--</td>
				<td>
				-->
				<input type="text" value="" name="cdip" placeholder="Ex: 80.16"/><br><br>
				<!--</td>
			</tr>
			
			<tr>
				<td>
				-->
				<b>Deadline<font  color="red"><span class="form-required" >&nbsp*</span></font>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp&nbsp&nbsp&nbsp</b>
				<!--</td>
				<td>
				-->
				<input name="cdeadline" placeholder="YYYY-MM-DD" type="text"><br><br>
				<!--</td>
			</tr>
			
			<tr>
				<td colspan="2">
				-->
				<center>
				<button>Add Company</button><br><br>
				<!--</td>-->
			</td>
		</table>
	</div>
	</div>
	
 </form>
</body>
</html>