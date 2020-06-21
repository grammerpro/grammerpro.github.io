<?
$name=$_POST['name1'];
$Email=$_POST['email1'];
$phone=$_POST['phone1'];
$message=$_POST['message1'];
$body .= "Name: " . $name . "\n";
$body .= "Email: " . $Email . "\n";
$body .= "Phone: " . $phone . "\n";
$body .= "Message: " . $message . "\n";
//replace with your email
mail("interior@aagilecues.com","From One-Page Site",$body);
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>alert("Your email has been sent. Thank You!");</script>
<meta HTTP-EQUIV="REFRESH" content="0; url=index.html">
</head>