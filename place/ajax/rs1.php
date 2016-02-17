<?php

						require_once('dbconnector.php');
						//$date1 = date_create("now");//date object created
						$date1 = date('Y-m-d');
						$my_date = date('Y-m-d', strtotime($date1));
						//echo $my_date;
						//$result = $date1->format('Y-m-d');//date to string
						//echo $result;
						//if(isset($_POST['submit'])){
						$s = $_GET['tod'];
						//print $s;
//}
						
					if($s == "c"){
						$result1 = $mysqli->query("SELECT company.CNAME,company.PACKAGE,dateofvisit.DATE FROM company,dateofvisit WHERE company.CNAME=dateofvisit.CNAME and DATE='$my_date';" );
						if ($result1->num_rows > 0){ 
						while($row = $result1->fetch_assoc()) {
							echo "<fieldset style=background:#A9F5A9>";
							echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Company Name:&nbsp&nbsp ".$row['CNAME']."<br>";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Package:&nbsp&nbsp ".$row['PACKAGE']."<br><br>";
							//printf("<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Company Name: %s<br />", $row['CNAME']);
							//printf("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Package: %s<br /><br>", $row['PACKAGE']);
							?>
							<form action="studetails2.php" method="POST">
							<p align="right">
							<!--<input type="submit" value="" name="cmpbtn"-->
							<button  type="submit" value="<?php echo $row['CNAME']; ?>" name="cmpbtn1">Download</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							</p>
							</form><?php
							
							echo "</fieldset><br>";
						}
					}else{
							echo "<fieldset style=background:#F5A9F2>";
							echo "<h3 align='center'>No companies today!</h3>"; 
							echo "</fieldset><br>";
							}
					}
					elseif($s == "i"){
					//echo "<br><font style="."font-family".":"."cambria"."><h2>&nbsp&nbsp&nbsp&nbspInternship:</h2></font><br>";
						$result2 = $mysqli->query("SELECT internship.CNAME,interndov.DATE FROM internship,interndov WHERE internship.CNAME=interndov.CNAME and DATE='$my_date'" );
						
						if ($result2->num_rows > 0){ 
							while($row = $result2->fetch_assoc()) {
							echo "<fieldset style=background:#A9F5A9>";
							echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Company Name: &nbsp&nbsp".$row['CNAME']."<br>";
							//printf("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Company Name: %s<br /><br>", $row['CNAME']);
							//printf("Package: %s<br />", $row['PACKAGE']);
							?>
							<form action="stdinterndetails2.php" method="POST">
							<p align="right">
							<!--<input type="submit" value="" name="cmpbtn"-->
							<button  type="submit" value="<?php echo $row['CNAME']; ?>" name="cmpbtn1">Download</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							</p>
							</form><?php	
							echo "</fieldset><br>";
						}
						}else{
							echo "<fieldset style=background:#F5A9F2>";
							echo "<h3 align='center'>No internship offered companies today!</h3>"; 
							echo "</fieldset><br>";
							}
					}
					?>