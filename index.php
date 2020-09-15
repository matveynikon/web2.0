<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<?php
  ignore_user_abort(true);  
  exec("kill $(lsof -t -i:9529)",$o,$v);  
  sleep(2);
  var_dump($o);
  var_dump($v);
?>
</body>
</head>
