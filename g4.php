<?php
require 'vendor/autoload.php';
//$client = \Symfony\Component\Panther\Client::createChromeClient();
//$client->setClient(new \GuzzleHttp\Client($config));
//sleep(mt_rand(200, 1650));
$client = \Symfony\Component\Panther\Client::createChromeClient(null, [
  //'--window-size=5000,6000'
  '--headfull'
]);
  //$client->setClient(new \GuzzleHttp\Client(['proxy' => '199.217.116.5:5836']));
sleep(1);
$crawler = $client->request('GET', 'https://www.youtube.com/results?search_query=php+web+scraping&sp=EgIIBA%253D%253D');
sleep(2);
$link = $crawler->selectLink('php web scraping tutorial(simple)')->link();
$crawler = $client->click($link);
sleep(1);
  //$crawler->clickLink('Python list comprehension[in 2 minutes]');
sleep(mt_rand(127, 132));
?>