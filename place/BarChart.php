<?php
  $val1 = 0;
  $val2 = 0;
  $val3 = 0;
  $con=mysqli_connect("localhost","root","","pms");
  $result = mysqli_query($con,"SELECT count(CNAME) FROM company;");
  while($row = mysqli_fetch_array($result)) 
  {
    $val    =   $row['0'];
 //   $val2   =   $row['InternshipCompany'];
   // $val3   =   $row['StudentsRegistered'];
    echo "<br>";
  }
  mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>R.V.College of Engineering</title>
</head>
<body>
  <script type="text/javascript" src="js/bar.js"></script>
       <div id="top_x_div" style="width: 900px; height: 500px;"></div>
   
      <script type='text/javascript'>//<![CDATA[ 

      google.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Visited List', 'Companies'],
          ["Number Of Companies Visited", <?php echo $val1; ?>],
          ["Companies offerd Internship", <?php echo $val2; ?>],
          ["Student Registered for Internship", <?php echo $val3; ?>]
        ]);

        var options = {
          title: 'Chess opening moves',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'R.V.College of Engineering',
                   subtitle: 'Placement Results' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Total List'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
//]]>  

</script>
</body>
</html>

