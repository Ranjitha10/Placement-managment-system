<?php
require_once('dbconnector.php');
	$sql=$mysqli->query("SELECT count(CNAME) FROM company;");
	//echo $sql+","+gettype($sql);
	while($row = $sql->fetch_row()) {
	echo $row[0];}
	?>
															