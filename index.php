<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<?php
  ignore_user_abort(true);  
  exec("kill $(lsof -t -i:9529)",$o,$v);  
  exec("php goutte.php",$o,$v);  
  sleep(2);
  printf($o);
  printf($v);
?>
</body>
</head>
