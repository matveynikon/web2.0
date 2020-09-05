<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<?php
function button1(){
  ignore_user_abort(true);
  require 'vendor/autoload.php';
  $client = \Symfony\Component\Panther\Client::createChromeClient(null, [
    '--headfull'
  ]);
}
button1();
?>
</body>
</head>
