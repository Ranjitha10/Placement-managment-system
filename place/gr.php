<?php
include("phpgraphlib.php");
$graph=new PHPGraphLib(550,350); 


require_once('dbconnector.php');
  
$dataArray=array();
  
//get data from database
$sql="SELECT CNAME, COUNT(*) AS 'count' FROM company GROUP BY CNAME";
$result = mysqli_query($sql) or die('Query failed: ' . mysql_error());
if ($result) {
  while ($row = mysqli_fetch_assoc($result)) {
      $cname=$row["CNAME"];
      $count=$row["count"];
      //add to data areray
      $dataArray[$cname]=$count;
  }
}
  
//configure graph
$graph->addData($dataArray);
$graph->setTitle("Sales by Group");
$graph->setGradient("lime", "green");
$graph->setBarOutlineColor("black");
$graph->createGraph();
?>