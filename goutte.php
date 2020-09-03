<?php
require 'vendor/autoload.php';
//$client = \Symfony\Component\Panther\Client::createChromeClient();
//$client->setClient(new \GuzzleHttp\Client($config));
//sleep(mt_rand(200, 1650));
$client = \Symfony\Component\Panther\Client::createChromeClient(null, [
  '--headfull'
]);
//use Goutte\Client;

//$client = new Client();
  //$client->setClient(new \GuzzleHttp\Client(['proxy' => '199.217.116.5:5836']));
sleep(1);
$crawler = $client->request('GET', 'https://www.youtube.com/results?search_query=php+web+scraping');
sleep(15);

$client->takeScreenshot('shot2.png');   
$link = $crawler->selectLink('php web scraping tutorial(simple)')->link();
$crawler = $client->click($link);
//var_dump($client->getResponse()->getContent());
//$client->takeScreenshot('shot2.png');
  //$crawler->clickLink('Python list comprehension[in 2 minutes]');
sleep(mt_rand(130, 135));
//$client->takeScreenshot('shot3.png');
?>