<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RankHack.com</title>

</head>
<body>
<script>
window.addEventListener('load', function () {
  alert("It's loaded dude!");
});
</script>

<?php
if(array_key_exists('button1', $_POST)) { 
  button1(); 
} 
function button1(){
  ignore_user_abort(true);
  require 'vendor/autoload.php';
  $client = \Symfony\Component\Panther\Client::createChromeClient(null, [
    '--headfull'
  ]);
sleep(1);
$crawler = $client->request('GET', 'https://www.youtube.com/results?search_query=php+web+scraping');
sleep(15);

$client->takeScreenshot('shot2.png');   
$link = $crawler->selectLink('PHP Web Scraping - Simple HTML DOM Parser')->link();
$crawler = $client->click($link);}
button1();
?>
</body>
</html>
