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
<link href="css/style1.css" rel="stylesheet" type="text/css">
    
		<style>
			fieldset {
						border:2px soild #999;
						border-radius:8px;
						box-shadow:0 0 10px #999;
						background-color:#A9E2F3;
						font-family:cambria;
						
					}
			button {
					cursor: pointer;
					
					width: 20px%;
					padding: 5px 10px 5px 10px;
					border: 0;
					
					font-family: "cambria";
					font-size: 16px;
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
	hr.style18 { 
		height: 30px; 
		border-style: solid; 
		border-color: #8c8b8b; 
		border-width: 4px 0 0 0; 
		border-radius: 50px; 
	} 
	hr.style18:before { 
		display: block; 
		content: ""; 
		height: 30px; 
		margin-top: -30px; 
		border-style: solid; 
		border-color: #8c8b8b; 
		border-width: 0 0 4px 0; 
		border-radius: 20px; 
	}					
}

		</style>
		<script>
			function loadDB2()
			{		
				//var tod= $('#tod').val();
				
				var vis = document.getElementById('visit').value;
				var para = "?vis="+vis;
				var xhttp = new XMLHttpRequest();
				
				xhttp.onreadystatechange = function() 
				{
					if (xhttp.readyState == 4 && xhttp.status == 200) 
					{
					  document.getElementById("dis2").innerHTML = xhttp.responseText;
					}
				}
				xhttp.open("GET", "ajax/rs3.php"+para, true);
				xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
				xhttp.send(null);	
			}
		</script>
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
           
		   
		   
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					
					<li>
                        <a href="pchome.php">PC View</a>
                    </li>
					
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Add Company<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="campus.html">For Campus</a>
                            </li>
                            <li>
                                <a href="intern.php">For Internship</a>
                            </li>
                        </ul>
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

   <!-- Page Content -->
   <div class="left_side_bar"> 
     <div class="col_1">
        <div class="box">
          <ul>
            <li><a href="todcompany.php"><h3>Today's Company</h3></a></li>
            <li><a href="upcompany.php"><h3>Upcoming Company</h3></a></li>
           <li><a href="viscompany.php"><h3>Visited Company</h3></a></li> </br>
          </ul>
        </div>
      </div>
    </div>
	
 <!--  <div class="right_section">
   <div class="container">		
		<div class="row">
            <div class="col-md-12"><br><br><br>
					<form>
					<h2 class="page-header" align="left">Companies already visited</h2>
					
						<select id = "visit" onchange="loadDB2();" >
							<option > ... </option>
							<option value="c"> campus </option>
							<option value="i"> intern </option>
						</select>
					</form>
					<div id = "dis2"> </div>
				<br><br>
            </div>
        </div>       
	</div>
	</div> -->
	<div class="right_section">
		<div class="box">
		<form>
			<h2 class="page-header" align="center">Companies already visited</h2>
			<hr class="style18">
						<select id = "visit" onchange="loadDB2();" >
							<option > ... </option>
							<option value="c"> Campus </option>
							<option value="i"> Internship </option>
						</select>
		</form>
		<div id = "dis2"> </div>
				<br><br>
    </div>
	</div>
       
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
