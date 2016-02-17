<?php
require_once 'Excel/reader.php';
$data = new Spreadsheet_Excel_Reader();
$data->setOutputEncoding('CP1251');
$data->read('C:\xampp\htdocs\place\Excel\a.xlsx');
 
$conn = mysql_connect("localhost","root","test");
mysql_select_db("test",$conn);
 
for ($x = 2; $x <= count($data->sheets[0]["cells"]); $x++) {
$first = $data->sheets[0]["cells"][$x][1];
$middle = $data->sheets[0]["cells"][$x][2];
$last = $data->sheets[0]["cells"][$x][3];
//$sql = "INSERT INTO test (first,mid,last)
//VALUES ('$first','$middle','$last')";
//echo $sql."\n";
//mysql_query($sql);
echo $first;
}
 
?>