<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>web.com</title>
</head>
<body>
<?php
require 'vendor/autoload.php';

$client = new \Goutte\Client();
$crawler = $client->request('GET', 'https://dev.to/sayopaul/web-scraping-in-php-using-goutte---part-2-5e66');
$pageH1 = $crawler->filter('h1')->text();
var_dump($pageH1);
?>
</body>
</html>