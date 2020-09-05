<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<?php
  require 'vendor/autoload.php';
  use Goutte\Client;

  $client = new Client();
  sleep(1);
  $c = $client->request('GET', 'https://www.youtube.com/watch?v=LUTVUGDOzOM')->html();
  sleep(1);
  echo($c);
?>
</body>
</head>
