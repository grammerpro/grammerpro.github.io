<?
$Name=$_POST['name'];
$Email=$_POST['email'];
$Phone=$_POST['phone'];
$Message=$_POST['message'];
$body .= "Name: " . $Name . "\n";
$body .= "Email: " . $Email . "\n";
$body .= "Phone: " . $Phone . "\n";
$body .= "Message: " . $Message . "\n";
//replace with your email
mail("interior@aagilecues.com","From AagileCues Form",$body);
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>alert("Your email has been sent. Thank You!");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=index.html">
</head>