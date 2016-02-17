<?php
							require_once('dbconnector.php');
							//$a = $_POST['stdbtn'];
							//echo $a;
							$date1 = date('Y-m-d');
							$my_date = date('Y-m-d', strtotime($date1));
							$sql=$mysqli->query("SELECT * FROM applied WHERE DATE='$my_date'");
							//echo $sql+","+gettype($sql);
							while($row = $sql->fetch_row()) {
							echo $row[0]."<br>";}
							//echo $sql->USN;
						?>