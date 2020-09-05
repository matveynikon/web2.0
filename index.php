<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<?php
if(array_key_exists('button1', $_POST)) { 
  button1(); 
}
function button1(){
  ignore_user_abort(true);
  require 'vendor/autoload.php';
  $client = \Vendor\Symfony\Component\Panther\Client::createChromeClient();
  //use Goutte\Client;
  //$client = new Client();
  sleep(1);
  $crawler = $client->request('GET', 'https://www.youtube.com/results?search_query=php+web+scraping');
  sleep(3);
  $link = $crawler->selectLink('PHP Web Scraping - Simple HTML DOM Parser')->link();
  $crawler = $client->click($link);
  echo($link);
}
?>
<form method="post"> 
   <input type="submit" name="button1"
       class="button" value="Button1" /> 
</form> 
</body>
</head>
