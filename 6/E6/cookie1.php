<?php
  //setcookie("permanent_cookie", "expire_in_6_seconds", time()+6, "/" );
  setcookie("session_cookie", "expire_on_web_browser_close", 0, "/");
//  setcookie("sernik", "", time() - 3600, "/php/" ); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Ciasteczka</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
td,th,body { font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10pt; }
</style>
</head>

<body>

<h3>Wartość ciastka</h3>

Ciasteczko: <?php echo $_COOKIE["sernik"]; ?>

</body>
</html>
