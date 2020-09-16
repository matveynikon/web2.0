<?php
  require 'vendor/autoload.php';
  echo("mnames");
  try{
    $client = \Symfony\Component\Panther\Client::createChromeClient();
    $client->request('GET', 'https://matveynikon.wixsite.com/dailyhero/post/4-ocean');
    sleep(15);
  }
  catch(exception $b){
    echo("jeff");
  }
?>
