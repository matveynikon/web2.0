<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<?php
function button1(){
  ignore_user_abort(true);
  require 'vendor/autoload.php';
  $client = \Symfony\Component\Panther\Client::createChromeClient(null, [
    '--headfull'
  ]);
  sleep(1);
  $crawler = $client->request('GET', 'https://www.youtube.com/results?search_query=php+web+scraping');
  sleep(3);
  $client->clickLink('PHP Web Scraping - Simple HTML DOM Parser');
}
button1();
?>
</body>
</head>
