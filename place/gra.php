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
	body {
					background: #EFEFFB;
					background-size: cover;
					font-family: "cambria";
					-webkit-font-smoothing: antialiased;
					-moz-osx-font-smoothing: grayscale;
					}
					fieldset {
						border:2px soild #999;
						border-radius:8px;
						box-shadow:0 0 10px #999;
						width:500px;
						font-family:cambria;
						background:#F5A9A9;
					}
						table {
    display: table;
    border-collapse: separate;
    border-spacing: 2px;
    border-color: gray;
} 
					</style>
				<!--	<script type="text/javascript" src="js/bar.js"></script>
       <div id="top_x_div" style="width: 900px; height: 500px;"></div>-->
   
     
	
	
</head>

<body>
	
    <!-- Navigation -->
    
	
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
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
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <!-- <a class="navbar-brand" href="index.html">Start Bootstrap</a> -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="home.html">Home</a>
                    </li>
					
					
					<!--<li>
                        <a href="signup.html">Signup</a>
                    </li>-->
                    <li>
                        <a href="login.html">Login</a>
					
                    </li>
					<li>
                        <a href="Contact.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<br><center>
	
		<h1 class="page-header">Statistics From Jan-2015</h1>
      <fieldset>
<form action="d.php" method="POST">
	<div class="row">
	<div class="col-lg-12">
	<h3 class="page-heading">Company</h1><br>
	<table border="1" cellpadding="10" cellspacing="10">
		<tr>
			<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Number of Company &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
			<td><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												<?php
													require_once('dbconnector.php');

$date1 = date('Y-m-d');
$my_date = date('Y-m-d', strtotime($date1));
													
													$sql=$mysqli->query("SELECT count(CNAME) FROM dateofvisit WHERE DATE>='2015-01-01';");
													//echo $sql+","+gettype($sql);
													while($row = $sql->fetch_row()) {
													$valcompany = $row[0];
													echo $valcompany;
													}
												?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				</label>
			</td>
		</tr>
		<tr>
			<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Number of Company Offered Internship &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
				<td><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												<?php
													//require_once('dbconnector.php');
													$sql=$mysqli->query("SELECT count(CNAME) FROM interndov WHERE DATE>='2015-01-01';");
													//echo $sql+","+gettype($sql);
													while($row = $sql->fetch_row()) {
													$valintern = $row[0];
													echo $valintern;
													}
													?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					</label>
				</td>
		</tr>
	</table><br><br>
	</div>
	
</form>
</fieldset>
	<!--
	 <script type='text/javascript'>//<![CDATA[ 

      google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Visited List', 'Companies'],
          ["Number Of Companies Visited", <?php echo $valcompany; ?>],
          ["Companies offerd Internship", <?php echo $valintern; ?>],
          
        ]);

        var options = {
          title: 'Chess opening moves',
          width: 900,
          legend: { position: 'right' },
          chart: { title: 'R.V.College of Engineering',
                   subtitle: 'Placement Stats' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'bottom', label: 'Total List'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
//]]>  

</script>
-->
  
        
    </header>

	
	
   
   <br><center>
	
		<h1 class="page-header">Statistics Till Dec-2014</h1>
      <fieldset>
<form action="d.php" method="POST">
	<div class="row">
	<div class="col-lg-12">
	<h3 class="page-heading">Company</h1><br>
	<table border="1" cellpadding="10" cellspacing="10">
		<tr>
			<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Number of Company &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
			<td><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												<?php
													require_once('dbconnector.php');
													$date1 = date('Y-m-d');
$my_date = date('Y-m-d', strtotime($date1));
													
													$sql=$mysqli->query("SELECT count(CNAME) FROM dateofvisit WHERE DATE<'2015-01-01';");
													//echo $sql+","+gettype($sql);
													while($row = $sql->fetch_row()) {
													echo $row[0];}
												?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				</label>
			</td>
		</tr>
		<tr>
			<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Number of Company Offered Internship &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </td>
				<td><label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
												<?php
													//require_once('dbconnector.php');
													$sql=$mysqli->query("SELECT count(CNAME) FROM interndov WHERE DATE<'2015-01-01';");
													//echo $sql+","+gettype($sql);
													while($row = $sql->fetch_row()) {
													echo $row[0];}
													?>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					</label>
				</td>
		</tr>
	</table><br><br>
	</div>
	
</form>
</fieldset>
        
    </header>

   
   
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>

