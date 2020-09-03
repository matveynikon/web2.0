<?php
require 'vendor/autoload.php';

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
$client = new Client();

// Go to the symfony.com website
$crawler = $client->request('GET', 'https://www.youtube.com/results?search_query=php+web+scraping');
//$t = $crawler->filter('ytd-video-renderer> div > div > div > div > h3 > a > yt-formatted-string')->text();
// ...

$crawler = $crawler
    ->filterXpath('//*[@id="contents"]/ytd-video-renderer')
    ->reduce(function (Crawler $node, $i) {
        // filters every other node
        sleep(1);
        return ($i) == 0;
    });

?>