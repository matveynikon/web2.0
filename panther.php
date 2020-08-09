<?php
require 'vendor/autoload.php';

$client = new \Goutte\Client();
// For Panther
//$client = \Symfony\Component\Panther\Client::createChromeClient();
$crawler = $client->request('GET', 'https://www.wikipedia.org/');
$form = $crawler->filter('#search-form')
    ->form(['search' => 'web scraping']);
$crawler = $client->submit($form);
// For Panther
//$client->takeScreenshot('screenshot.png');
//$client->waitFor('.firstHeading');

echo $crawler->filter('.mw-parser-output p')->first()->text();
?>