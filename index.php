<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<?php
  ignore_user_abort(true);  
  //exec("kill $(lsof -t -i:9529)");  
  /*exec("php goutte.php",$o,$v);  
  sleep(2);
  printf($o);
  printf($v);*/
  require 'vendor/autoload.php';
  echo("mnames");
  try{
    //$client = \Symfony\Component\Panther\Client::createChromeClient();
    use Goutte\Client;
    $client = new Client();    
    $client->request('GET', 'https://matveynikon.wixsite.com/dailyhero/post/4-ocean');
    sleep(15);
  }
  catch(exception $b){
    echo("jeff");
  }
?>
</body>
</head>
