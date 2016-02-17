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
			fieldset{
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
	.right_section{
	width:735px;
	float:left;
	position:relative;
	left:200px;
	top:80px;
	right:20px;
	
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
               <!-- <a class="navbar-brand" href="index.html">Start Bootstrap</a> -->
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="home.html">Home</a>
                    </li>
                    <li>
                        <a href="stat.html">Statistics</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	        <!-- Page Heading/Breadcrumbs -->

	<center>
	<form method="POST" action="signupcheck.php" align="center">
	<div class="row">
		<div class="col-lg-12">
			<fieldset> 		        
                                    <label>Select a file :</label>
                                    <input type="file" name = "file" id = "file">    
							</fieldset>                               
				<button align="center">Sign Up</button><br><br>
				
			</td>
		</table>
		
	</div>
	</div>
	
 </form>
 </center>
 </html>