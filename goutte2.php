<?php
require 'vendor/autoload.php';
use Goutte\Client;
$url = "http://www.reddit.com";
$class = "a.SQnoC3ObvgnGjWt90zD9Z _2INHSNB8V5eaWp4P0rY_mE";
$thing_to_scrape = "_text";
$client = new Client();
$crawler = $client->request('GET', $url);
$output = $crawler->filter($class)->extract($thing_to_scrape);
var_dump($output);
?>