<?php
/* ---------- Superglobals ---------- */
/*
  Built in variables that are always available in all scopes
*/

/*
  $GLOBALS - A superglobal variable that holds information about any variables in global scope.
  $_GET - Contains information about variables passed through a URL or a form.
  $_POST -  Contains information about variables passed through a form.
  $_COOKIE - Contains information about variables passed through a cookie.
  $_SESSION - Contains information about variables passed through a session.
  $_SERVER - Contains information about the server environment.
  $_ENV - Contains information about the environment variables.
  $_FILES -  Contains information about files uploaded to the script.
  $_REQUEST - Contains information about variables passed through the form or URL.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
    <li>Document root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
    <li>Server name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
    <li>Server port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
    <li>Current file dir: <?php echo $_SERVER['PHP_SELF']?></li>
    <li>Server software: <?php echo $_SERVER['SERVER_SOFTWARE']?></li>
   <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>
    <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
    <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
    <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li>
  </ul>
</body>
</html>

