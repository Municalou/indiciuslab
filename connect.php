<?php
// uses the PHP SDK. Download from https://github.com/facebook/php-sdk
include("facebook-php-sdk/src/facebook.php");
// from the facebook app page
define('YOUR_APP_ID', '364278873666958');
define('YOUR_APP_SECRET', '82fec2a436a0a09dae167f640fe3c286');
// new facebook object to interact with facebook
$facebook = new Facebook(array(
 'appId' => YOUR_APP_ID,
 'secret' => YOUR_APP_SECRET,
));
// if user is logged in on facebook and already gave permissions
// to your app, get his data:
$userId = $facebook->getUser();
?>
<html>
 <head>
    <meta charset="utf-8">
    <title>Indicius Lab - Proyectos - Facebook Connect</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Indicus Lab es un sitio de pruebas">
    <meta name="author" content="Indicius">
    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="assets/css/facebookconnect.css" rel="stylesheet">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
      </script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <link rel="icon" type="image/png" href="http://www.indiciuslab.com.ar/favicon.png"><!-- Major Browsers -->
    <!--[if IE]><link rel="SHORTCUT ICON" href="http://www.indiciuslab.com.ar/favicon.ico"/><![endif]--><!-- Internet Explorer-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    
  </head>

  <body>
      <?php include('includes/header.php'); ?>

     <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <div class="row">
            <div class="span5">
              <a id="logo" href="/"></a><h2 class="title">Facebook Connect</h2>
            </div>
            <div class="span5">
                <?php $pag="proy-facebookconnect";include('includes/menu.php'); ?>
              </div>
          </div>
        </div>
        <div id="fb-root"></div>
        <?php
        if ($userId) {
          // already logged? show some data
          $userInfo = $facebook->api('/' + $userId); ?>
          <a id="profile" href="http://www.facebook.com/<?=$userInfo['username']?>" target="_blank">
            <div id="profilepic">
              <fb:profile-pic uid='<?=$userInfo['id']?>' size='normal' linked='false' \><fb:profile-pic>
            </div>
            <p>Conectado a facebook con la cuenta <br /><?=$userInfo['name']?> (id:<?=$userInfo['id']?> )</p>
          </a>
          <br clear="both">
          <!--p>Fecha de nacimiento: <?=$userInfo['birthday']?></p-->
          <button id="fb-logout" onclick="logout()">Log out</button>
          <div style="margin:20px 0px 0px 0px">
            <fb:registration 
              fields="name,birthday,gender,location,email" 
              redirect-uri="http://www.indiciuslab.com.ar/register.php"
              width="530">
            </fb:registration>
          </div>
          <iframe src="http://www.facebook.com/plugins/facepile.php?app_id=<?=YOUR_APP_ID?>" scrolling="no" frameborder="0" style="border:none;overflow:hidden; width:200px;" allowTransparency="true"></iframe> 
        <?php } else {
          // use javaascript api to open dialogue and perform
          // the facebook connect process by inserting the fb:login-button
          ?>
          <p>Por favor, inrese a su cuenta de facebook</p>
          <fb:login-button scope='email,user_birthday'></fb:login-button>
        <?php } ?>
        
        
        <script>
         window.fbAsyncInit = function() {
           FB.init({
             appId : <?=YOUR_APP_ID?>,
             status : true,
             cookie : true,
             xfbml : true,
             oauth : true
           });
         
          FB.Event.subscribe('auth.login', function(response) {
            // ------------------------------------------------------
            // This is the callback if everything is ok
            window.location.reload();
            });
        };
        function logout() {
          FB.logout(function(response) {
              // logout
          });
        }
         
        (function(d){
           var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = "//connect.facebook.net/en_US/all.js";
           d.getElementsByTagName('head')[0].appendChild(js);
           }(document));
        </script>
      </div>

      <div id="push"></div>
    </div>
    
    <?php include('includes/footer.php'); ?>
    
  </body>
  
  <body>

 
</body>
</html>