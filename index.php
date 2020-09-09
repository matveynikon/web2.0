<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<?php
  ignore_user_abort(true);  
  require 'vendor/autoload.php';
  $client = /vendor/symfony/panther/Client::createChromeClient();
  //use Goutte\Client;
  //$client = new Client();
  $crawler = $client->request('GET', 'https://www.youtube.com/results?search_query=php+web+scraping&sp=CAASBAgEEAE%253D');
  sleep(3);
  //$d = $c->html();
  //echo($d);
  $client->clickLink('php web scraping tutorial(simple)');
  //$crawler = $client->click($link);
  //sleep(15);
?>
</body>
</head>
