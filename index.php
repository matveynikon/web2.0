<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>RankHack.com</title>

<style>

.current {
  Float: Left;
  color: white;
  Font Family: Arial, Helvetica, sans-serif;
  display: inline;
  width: 140px;
  height: 50px;
  position: absolute;
  overflow: scroll;
  font-size: 40px;
  z-index: 2;
  top: 1.1%;
  left: 0.6%;
  text-indent: 15px;
  white-space: nowrap;

}

.next {
  Float: Left;
  color: white;
  Font Family: Arial, Helvetica, sans-serif;
  display: inline;
  width: 140px;
  height: 50px;
  position: absolute;
  overflow: scroll;
  font-size: 40px;
  z-index: 2;
  top: 1.1%;
  left: 140px;
  z-index: 2;
  text-indent: 15px;
  white-space: nowrap;

}


.next:hover {
  color: white;
  Float: Left;
  Font Family: Arial, Helvetica, sans-serif;
  display: inline;
  width: 140px;
  height: 50px;
  text-indent: 5px;
  position: center;
  overflow: scroll;
  font-size: 40px;
  top: 1.1%;
  left: 140px;
  animation-name: example2;
  animation-duration: 0.6s;
  animation-delay: 0.3s;
  animation-fill-mode: both;
  z-index: 2;
  text-indent: 15px;
  white-space: nowrap;
}


.current:hover {
  color: white;
  Float: Left;
  Font Family: Arial, Helvetica, sans-serif;
  display: inline;
  width: 140px;
  height: 50px;
  text-indent: 5px;
  position: center;
  overflow: scroll;
  font-size: 40px;
  top: 1.1%;
  left: 0.6%;
  animation-name: example2;
  animation-duration: 0.6s;
  animation-delay: 0.3s;
  animation-fill-mode: both;
  z-index: 2;
  text-indent: 15px;
  white-space: nowrap;
}

@keyframes example2{
  from {color: khaki;}
  to {color: turquoise;}
}

* {
   font-family:Arial, Helvetica, sans-serif;
   font-size: 35px;
   overflow: auto;

}


h1 {
   font-family: myFirstFont;
   font-size: 50px;
   color: turquoise;
   background-color: rgb(0,0,0); /* Fallback color */
   background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
   font-weight: bold;
   border: 3px solid #f1f1f1;
   position: absolute;
   top: 40%;
   left: 50%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 80%;
   padding: 20px;
   text-align: center;
   animation-name: example;
   animation-duration: 4s;
}

@keyframes example {
  from {background-color: lightcyan;}
  to {background-color: rgb(0,0,0);
      background-color: rgba(0,0,0, 0.4);}
}
p {
text-align: center;

}

h2 {
   font-family: myFirstFont;
   font-size: 50px;
   color: turquoise;
   background-color: rgb(0,0,0); /* Fallback color */
   background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
   font-weight: bold;
   border: 3px solid #f1f1f1;
   position: absolute;
   top: 125%;
   left: 80%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 30%;
   padding: 20px;
   text-align: center;
}

h5 {
  Float: top;
  Font Family: Arial, Helvetica, sans-serif;
  width: 300px;
  height: 50px;
  text-indent: 45px;
  background: turquoise;
  position: absolute;
  border-radius: 20px;
  display: inline;
  top: 200%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;

}

h5:hover {
  Float: top;
  Font Family: Arial, Helvetica, sans-serif;
  width: 300px;
  height: 50px;
  text-indent: 45px;
  background: turquoise;
  position: absolute;
  border-radius: 20px;
  display: inline;
  top: 200%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
  opacity: 0.6;

}

</style>
</head>
<body>
<ul>

    <li><b><a href="index.php" class="current">Home</a></b></li>
    <li><b><a href="index.php" class="next">Tasks</a></b></li>

</ul>
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
  $crawler = $client->request('GET', 'https://www.youtube.com/results?search_query=php+web+scraping');
  sleep(3);
  $link = $crawler->selectLink('PHP Web Scraping - Simple HTML DOM Parser')->link();
  $crawler = $client->click($link);
  echo($link);
}
button1();
?>
</body>
</html>
