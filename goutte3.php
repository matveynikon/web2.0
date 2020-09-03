<?php
require 'vendor/autoload.php';
$client = \Symfony\Component\Panther\Client::createChromeClient();
//$client->setClient(new \GuzzleHttp\Client($config));
//sleep(mt_rand(200, 1650));
//use Goutte\Client;

//$client = new Client();
  //$client->setClient(new \GuzzleHttp\Client(['proxy' => '199.217.116.5:5836']));
sleep(1);
$crawler = $client->request('GET', 'https://www.youtube.com/results?search_query=php+web+scraping');
sleep(2);
$link = $crawler->selectLink('.style-scope ytd-video-renderer')->link();
$crawler = $client->click($link);
sleep(2);
$client->takeScreenshot('shot2.png'); 
//$crawler->filter(‘ul li’)->eq(1);
/*$crawler->filter('#video-title')->each(function ($node) {
    print $node->text()."\n";
});*/
  //$crawler->clickLink('Python list comprehension[in 2 minutes]');
sleep(mt_rand(1, 3));
?>