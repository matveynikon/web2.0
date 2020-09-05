<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<?php
  ignore_user_abort(true);
  require 'vendor/autoload.php';
  $client = \Symfony\Component\Panther\Client::createChromeClient(null, [
    '--headfull'
  ]);
  sleep(1);
  $client->request('GET', 'https://www.youtube.com/watch?v=LUTVUGDOzOM');
?>
</body>
</head>
