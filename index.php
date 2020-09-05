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
  $crawler = $client->request('GET', 'https://www.youtube.com/results?search_query=php+web+scraping&sp=CAASBAgEEAE%253D');
  sleep(3);
  $client->clickLink('php web scraping tutorial(simple)');
}
button1();
?>
</body>
</head>
