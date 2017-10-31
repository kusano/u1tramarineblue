<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
  header("Location: https://{$_SERVER['HTTP_HOST']}/xss_password.php?message=logined");
  exit();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>XSS Test</title>
  </head>
  <body onload="var m='<?php echo htmlspecialchars($_GET["message"], ENT_QUOTES, "UTF-8"); ?>';if(m)alert(m);">
    <form method="POST">
      <div><label for="id">ID:</label></div>
      <div><input id="id" name="id"></div>
      <div><label for="password">Password:</label></div>
      <div><input id="password" name="password" type="password"></div>
      <div><input type="submit"></div>
    </form>
  </body>
</html>
