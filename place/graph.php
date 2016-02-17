<?php
// Connect to MySQL


require_once('dbconnector.php');

// Fetch the data
$query = "SELECT count(CNAME) FROM company";
$query1 = "SELECT count(CNAME) FROM internship";
$query2 = "SELECT count(USN) FROM applied";
$query3 = "SELECT count(USN) FROM internapplied";
$result = $mysqli->query( $query );
$result1 = $mysqli->query( $query1 );
$result2 = $mysqli->query( $query2 );
$result3 = $mysqli->query( $query3 );
// All good?


// Print out rows
while ( $row = $result->fetch_row() ) {
  echo $row[0]. "<br>";
}
while ( $row = $result1->fetch_row() ) {
  echo $row[0]. "<br>";
}
while ( $row = $result2->fetch_row() ) {
  echo $row[0]. "<br>";
}
while ( $row = $result3->fetch_row() ) {
  echo $row[0]. "<br>";
}

// Close the connection

?>