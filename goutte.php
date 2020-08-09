<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>web.com</title>
</head>
<body>
<?php
require 'vendor/autoload.php';

$css_selector = "button.ytp-large-play-button.ytp-button";
$thing_to_scrape = "_text";
$client = new \Goutte\Client();
$crawler = $client->request('GET', 'https://www.youtube.com/watch?v=LUTVUGDOzOM');
$output = $crawler->filter($css_selector)->extract($thing_to_scrape);
//$form = $crawler->selectButton('button.ytp-large-play-button.ytp-button')->form();
var_dump($output);
($pageH1)
?>
</body>
</html>