<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
//system("php goutte.php");
<?php
  ignore_user_abort(true);  
  exec("kill $(lsof -t -i:9516)");  
  require 'vendor/autoload.php';
  $client = \Symfony\Component\Panther\Client::createChromeClient();
  //use Goutte\Client;
  //$client = new Client();
  try{
    $client->request('GET', 'https://matveynikon.wixsite.com/dailyhero/post/4-ocean');
  }
  catch(exception $b){
    echo("jeff");
  }
  sleep(15);
//print_r($o);
//echo($v);
?>
</body>
</head>
