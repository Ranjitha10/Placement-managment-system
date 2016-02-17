<?php
    $emailSubject = 'Tennis Registration!';
$webMaster = 'sohrab.goodar@yahoo.com';

$nameField = $_POST['name'];
$emailField = $_POST['email'];
$telephoneField = $_POST['telephone'];
$commentsField = $_POST['comments'];


//$body = <<<EOD
echo "<br><hr><br>";
Name: $nameField;
echo "<br>";
Email: $emailField; 
echo "<br>";
Telephone: $telephoneField;
echo "<br>";
Comments: $commentsField;
echo "<br>";
EOD;
$headers = "From: $email\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($webMaster, $emailSubject, $body, $headers);


//$theResults = <<<EOD
?>
<p>Thank you for your Message! You will be redirected to the home page in a moment</p>
<script type="text/javascript" >
setTimeout ('ourRedirect()', 3000)
function ourRedirect(){
  location.href='index.html'
}
</script>
<?phpEOD;
echo "$theResults";?>