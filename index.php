<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<?php
  ignore_user_abort(true);  
  require 'vendor/autoload.php';
  $client = \Symfony\Component\Panther\Client::createChromeClient();
  //use Goutte\Client;
  //$client = new Client();
  $crawler = $client->request('GET', 'https://matveynikon.wixsite.com/dailyhero/post/4-ocean');
  sleep(15);
  //$d = $c->html();
  echo('hey');
  //$client->clickLink('php web scraping tutorial(simple)');
  //$crawler = $client->click($link);
  //sleep(15);
?>
</body>
</head>
