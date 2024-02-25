<?php
if (isset($_GET['submit'])) {

$firstname = $_GET[firstname];
$lastname = $_GET[lastname];
$email = $_GET[email];
$message = $_GET[message];

$emailTo = "myemail."
$headers = "From: ".$emailFrom;
$txt = "You have received an email from ".$name.".\n\n".$message;

email($emailTo, $txt, $headers);
header("Location: index.php?emailsend")
}


?>