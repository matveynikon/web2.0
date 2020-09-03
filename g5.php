<?php
require 'vendor/autoload.php';
use guzzlehttp\Client as GuzzleClient;
$client = new GuzzleClient();
$url = 'https://twitter.com';
$client = new Client(['base_uri' => $url]);
$crawler = $client->get($url)->getBody();

return new Response(
    '<html><body> '.$crawler.' </body></html>');
?>