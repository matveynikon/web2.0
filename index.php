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
  $c = $client->request('GET', 'https://www.youtube.com/watch?v=LUTVUGDOzOM');
  sleep(1);
  $d = $c->html();
  echo($d);
  sleep(15);
?>
</body>
</head>
