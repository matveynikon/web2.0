<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<?php
require __DIR__.'/vendor/autoload.php'; // Composer's autoloader

$client = \Symfony\Component\Panther\Client::createChromeClient();
// Or, if you care about the open web and prefer to use Firefox
//$client = \Symfony\Component\Panther\Client::createFirefoxClient();

$client->request('GET', 'https://api-platform.com'); // Yes, this website is 100% written in JavaScript
$client->clickLink('Support');

// Wait for an element to be rendered
$crawler = $client->waitFor('.support');

echo $crawler->filter('.support')->text();
?>
</body>
</head>
