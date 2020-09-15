<?php
  require 'vendor/autoload.php';
  $client = \Symfony\Component\Panther\Client::createChromeClient();
  echo("mnames");
  try{
    $client->request('GET', 'https://matveynikon.wixsite.com/dailyhero/post/4-ocean');
  }
  catch(exception $b){
    echo("jeff");
  }
  sleep(15);
?>
