<?php
	require_once('dbconnector.php');
						
	$date1 = date('Y-m-d');
	$my_date = date('Y-m-d', strtotime($date1));
	$s = $_GET['vis'];
						//echo $s;
						
	if($s=="c"){
		$result5 = $mysqli->query("SELECT company.CNAME,company.PACKAGE,dateofvisit.DATE FROM company,dateofvisit WHERE company.CNAME=dateofvisit.CNAME and DATE<'$my_date'; " );
						
		if ($result5->num_rows > 0){ 
		while($row = $result5->fetch_assoc()) {
							//echo "<div class="."container".">";
							//echo "<div class="."row".">";
							echo "</br><fieldset>";
							//echo "<div>";
							echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Company Name:&nbsp&nbsp ". $row['CNAME']."<br>";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp package: &nbsp&nbsp".$row['PACKAGE']."L<br>";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp visited:&nbsp&nbsp ".$row['DATE']."<br><br>";
							//printf("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Company Name: %s<br />", $row['CNAME']);
							//printf("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Package: %s<br />", $row['PACKAGE']);
							//printf("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Visited: %s<br /><br>", $row['DATE']);
							//echo "</div>";
							echo "<div>";?>
							
							<form action="studetails.php" method="POST">
							<p align="right">
							<!--<input type="submit" value="" name="cmpbtn"-->
							<button  type="submit" value="<?php echo $row['CNAME'];?>" name="cmpbtn">Download</button>
							</p>
							</form>
							
							</div> 
							</fieldset><br>
							<!--</div>-->
						
						
						<?php
							} 
						}
							else{
								echo "<h3 align='center'>No company record!</h3>"; 
								}
						}
						elseif($s=="i"){
						//echo "<br><font style="."font-family".":"."cambria"."><h2>&nbsp&nbsp&nbsp&nbspInternship:</h2></font><br>";
						$result6 = $mysqli->query("SELECT internship.CNAME,interndov.DATE FROM internship,interndov WHERE internship.CNAME=interndov.CNAME and DATE<'$my_date'; " );
						while($row = $result6->fetch_assoc()) {
							//echo "<div class="."container".">";
							//echo "<div class="."row".">";
							echo "<fieldset>";
							echo "<div>";
							echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Company Name:&nbsp&nbsp ". $row['CNAME']."<br>";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Visited:&nbsp&nbsp ".$row['DATE']."<br><br>";
							//printf("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Company Name: %s<br />", $row['CNAME']);
							//printf("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Visited: %s<br /><br>", $row['DATE']);
							//printf("Package: %s<br />", $row['PACKAGE']);
							echo "</div>";
							echo "<div>";?>
							
							<form action="stdinterndetails.php" method="POST">
							<p align="right">
							<!--<input type="submit" value="" name="cmpbtn"-->
							<button  type="submit" value="<?php echo $row['CNAME']; ?>" name="cmpbtn">Download</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							</p>
							</form>
							
							</div> 
							</fieldset><br>
							<!--</div>
							</div>-->
						<?php }
						}
				?>