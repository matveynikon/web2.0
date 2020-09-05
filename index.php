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
  $client->request('GET', 'https://www.youtube.com/watch?v=LUTVUGDOzOM');
?>
</body>
</head>
