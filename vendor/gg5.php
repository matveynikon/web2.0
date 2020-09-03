<?php
$client = new \guzzlehttp\guzzle\src\Client();
$response = $client->request('GET', 'https://api.github.com/repos/guzzle/guzzle');

echo $response->getStatusCode(); // 200
echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'

// Send an asynchronous request.
$request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
$promise = $client->sendAsync($request)->then(function ($response) {
    echo 'I completed! ' . $response->getBody();
});
sleep(10);
$client->takeScreenshot('shot.png');
$client->clickLink('php web scraping tutorial(simple)')->link();
sleep(1);
$client->takeScreenshot('shot2.png');
  //$crawler->clickLink('Python list comprehension[in 2 minutes]');
sleep(mt_rand(127, 132));
$client->takeScreenshot('shot3.png');
$promise->wait();
?>