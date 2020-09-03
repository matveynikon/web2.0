<?php
require 'vendor/autoload.php';

//$client = new \Goutte\Client();
// For Panther
$client = \Symfony\Component\Panther\Client::createChromeClient();
$crawler = $client->request('GET', 'https://www.youtube.com/results?search_query=python+list+comprehension+in+2+minutes&sp=CAI%253D');
$client->clickLink('Python list comprehension[in 2 minutes]');
// For Panther
//$client->takeScreenshot('screenshot.png');
//$client->waitFor('.firstHeading');

?>