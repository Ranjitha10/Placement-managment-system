 <?php
require_once('dbconnector.php');

// The Chart table contains two fields: weekly_task and percentage
// This example will display a pie chart. If you need other charts such as a Bar chart, you will need to modify the code a little to make it work with bar chart and other charts
//$sth = mysql_query("SELECT count(CNAME) FROM company");

$query = "SELECT count(CNAME) FROM company";
$query1 = "SELECT count(CNAME) FROM internship";
//$query2 = "SELECT count(USN) FROM applied";
//$query3 = "SELECT count(USN) FROM internapplied";
$result = $mysqli->query( $query );
$result1 = $mysqli->query( $query1 );
//$result2 = $mysqli->query( $query2 );
//$result3 = $mysqli->query( $query3 );
// All good?


// Print out rows

while ( $row = $result->fetch_row() ) {
  $val1= $row[0]. "<br>";
}
while ( $row = $result1->fetch_row() ) {
  $val2= $row[0]. "<br>";
}
/*while ( $row = $result2->fetch_row() ) {
  echo $row[0]. "<br>";
}
while ( $row = $result3->fetch_row() ) {
  echo $row[0]. "<br>";
}*/
mysqli_close($con);
// Close the connection


/*
---------------------------
example data: Table (Chart)
--------------------------
weekly_task     percentage
Sleep           30
Watching Movie  40
work            44
*/

$rows = array();
//flag is not needed
$flag = true;
$table = array();
$table['cols'] = array(

    // Labels for your chart, these represent the column titles
    // Note that one column is in "string" format and another one is in "number" format as pie chart only required "numbers" for calculating percentage and string will be used for column title
    array('label' => 'Weekly Task', 'type' => 'string'),
    array('label' => 'Percentage', 'type' => 'number')

);

$rows = array();
while($r = mysql_fetch_row($query)) {
    $temp = array();
    // the following line will be used to slice the Pie chart
    $temp[] = array('v' => (string) $r['Weekly_task']); 

    // Values of each slice
    $temp[] = array('v' => (int) $r['percentage']); 
    $rows[] = array('c' => $temp);
}

$table['rows'] = $rows;
$jsonTable = json_encode($table);
//echo $jsonTable;
?>

<html>
  <head>
    <!--Load the Ajax API-->
    <script type="text/javascript" src="js/graph1.js"></script>
    <script type="text/javascript" src="js/graph2.js"></script>
    <script type="text/javascript">

    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);

    function drawChart() {

      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(<?=$jsonTable?>);
      var options = {
           title: 'My Weekly Plan',
          is3D: 'true',
          width: 800,
          height: 600
        };
      // Instantiate and draw our chart, passing in some options.
      // Do not forget to check your div ID
      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, options);
    }
    </script>
  </head>

  <body>
    <!--this is the div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>
