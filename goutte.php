<?php
  ignore_user_abort(true);  
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
?>
