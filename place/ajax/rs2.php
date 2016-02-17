<?php
						require_once('dbconnector.php');
						
	$date1 = date('Y-m-d');
						$my_date = date('Y-m-d', strtotime($date1));
						$s = $_GET['up'];
						//echo $s;
						
						if($s == "c"){
						$result3 = $mysqli->query("SELECT company.CNAME,company.PACKAGE,dateofvisit.DATE FROM company,dateofvisit WHERE company.CNAME=dateofvisit.CNAME and DATE>'$my_date'; " );
						
						if ($result3->num_rows > 0){ 
						while($row = $result3->fetch_assoc()) {
							echo "<fieldset style=background:#F5A9F2>";
							echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Company Name:&nbsp&nbsp ".$row['CNAME']."<br>";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Package: &nbsp&nbsp".$row['PACKAGE']."L<br>";
							//echo $row['DATE'];
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Date Of Visit: &nbsp&nbsp".$row['DATE']."<br><br>";
							//printf("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Company Name: %s<br />", $row['CNAME']);
							//printf("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Package: %s<br />", $row['PACKAGE']);
							//printf("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Date Of Visit: %s<br /><br>", $row['DATE']);
							?>
							
							<form action="delcompany.php" method="POST">
							<p align="right">
							<!--<input type="submit" value="" name="cmpbtn"-->
							<button  type="submit" value="<?php echo $row['CNAME']; ?>" name="cmpbtn">Delete</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							</form>
							</p>
							
							
							
							<?php
							echo "</fieldset><br>";
						}
						}else{
							echo "<fieldset style=background:#F5A9F2>";
							echo "<h3 align='center'>No more companies!</h3>"; 
							echo "</fieldset><br>";
							}	
						}
						elseif($s == "i"){
						
						//echo "<br><font style="."font-family".":"."cambria"."><h2>&nbsp&nbsp&nbsp&nbspInternship:</font></h2><br>";
						
						$result4 = $mysqli->query("SELECT internship.CNAME,interndov.DATE FROM internship,interndov WHERE internship.CNAME=interndov.CNAME and DATE>'$my_date'; " );
						if ($result4->num_rows > 0){
						while($row = $result4->fetch_assoc()) {
							echo "<fieldset style=background:#F5A9F2>";
							echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Company Name: &nbsp&nbsp".$row['CNAME']."<br>";
							echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Date Of Visit: &nbsp&nbsp".$row['DATE']."<br><br>";
							//printf("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Company Name: %s<br />", $row['CNAME']);
							//printf("&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Date Of Visit: %s<br /><br>", $row['DATE']);
							//printf("Package: %s<br />", $row['PACKAGE']);
							//echo "</fieldset><br>";
						
				
				?>
				
				<form action="delcmpintern.php" method="POST">
							<p align="right">
							<!--<input type="submit" value="" name="cmpbtn"-->
							<button  type="submit" value="<?php echo $row['CNAME']; ?>" name="cmpbtn">Delete</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							</p>
				
							</form>
							</fieldset><br>
							<?php 
						}
						}else{
							echo "<fieldset style=background:#F5A9F2>";
							echo "<h3 align='center'>No more companies!</h3>"; 
							echo "</fieldset><br>";
							}
						}
						?>
		
            </div>
        </div>