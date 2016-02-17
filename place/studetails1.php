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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
		<style>
			fieldset {
						border:1px soild #999;
						border-radius:8px;
						box-shadow:0 0 10px #999;
						padding:10px;
						width:500px;
						line-height:1.8;
						
					}
			button {
					cursor: pointer;
					
					width: 20%;
					padding: 5px 10px;
					border: 0;
					
					font-family: "cambria";
					font-size: 14px;
					font-weight: 100;
					button-align:center;
					
					}
					button:hover 
					{

						background: #27ae60;

					}
					.dropdown-menu .dropdown-toggle {
									left: 100%;
									position: absolute;
									top: 0;
									visibility: hidden;
									margin-top: -1px;
					}
					.dropdown-menu li:hover .dropdown-toggle {
						visibility: visible;
						}
			.dropdown:hover .dropdown-menu {
					display: block;
					background:#A9E2F3;
				}
				body {
					background: #EFEFFB;
					background-size: cover;
					font-family: "cambria";
					-webkit-font-smoothing: antialiased;
					-moz-osx-font-smoothing: grayscale;
					}
				
						table {
    display: table;
    border-collapse: separate;
    border-spacing: 2px;
    border-color: gray;
} 


		</style>
		
		
		
		<meta charset="UTF-8" />

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
	
	
	
		<br><center>
	
		<h1 class="page-heading">Student Registered Campus</h1>
<center><fieldset>
<form action="" method="POST" align="center">
	<h3 class="page-heading"></h1><br>
	
	<table border="1" cellpadding="10" cellspacing="10" id="mytable">
		<tr>
			
			<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   USN  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
			<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   Company name   &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
			<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   Date  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
		</tr>
		<tr>
			<td>
				<label>
						<?php
							require_once('dbconnector.php');
							//$a = $_POST['stdbtn'];
							//echo $a;
							$date1 = date('Y-m-d');
							$my_date = date('Y-m-d', strtotime($date1));
						
								
							
							$sql=$mysqli->query("SELECT * FROM applied,company WHERE applied.CNAME=company.CNAME");
							//echo $sql+","+gettype($sql);
							while($row = $sql->fetch_row()) {
							echo "&nbsp&nbsp&nbsp".$row[0]."<br>";}
							//echo $sql;}
							
						?>
				</label>
			</td>
			<td>
				<label>
						<?php
							$sql=$mysqli->query("SELECT * FROM applied,company WHERE applied.CNAME=company.CNAME");
							//echo $sql+","+gettype($sql);
							while($row = $sql->fetch_row()) {
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp".$row[1]."<br>";}
							?>
				</label>
			</td>
			<td>
				<label>
						<?php
							$sql=$mysqli->query("SELECT * FROM applied,company WHERE applied.CNAME=company.CNAME");
							//echo $sql+","+gettype($sql);
							while($row = $sql->fetch_row()) {
							echo "&nbsp&nbsp&nbsp".$row[2]."<br>";}
							?>
				</label>
			</td>
		</tr>
	</table>
</form>
	
	<br><br>
	
	
	
	
	

	<button>Download</button>
	
	
	
	
	
	
	
	</fieldset>
	
	
	
	
	
	
	<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>