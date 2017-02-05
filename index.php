<html>
<head>
<?php
$scheme = $_GET["scheme"];
?>
<meta property="al:android:url" content="switch://globe/launch/<?php echo $scheme; ?>" />
<meta property="al:android:app_name" content="Globe Switch Test App Link" />
<meta property="al:android:package" content="com.lotusflare.globe.de" />
<meta property="al:android:class" content="com.lotusflare.globe.de.WelcomeActivity" />
<meta property="og:title" content="WhoLooksSimilar" />
<meta property="og:url" content="https://fb.me/1436267679740897" />
<meta property="fb:app_id" content="312339728800370" />
<meta property="al:web:should_fallback" content="false" />
</head>
<body>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '312339728800370',
      xfbml      : true,
      version    : 'v2.8'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));

<?php
if($scheme != "" || $scheme != undefined || $scheme != "null")
{ ?>	
setTimeout(function() { window.location='https://play.google.com/store/apps/details?id=com.lotusflare.globe.de'; }, 1000);

window.location = 'switch://globe/launch/<?php echo $scheme; ?>';
<?php } ?>   
</script>
Redirecting...
</body>
</html>
