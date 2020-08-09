<?php

  require_once('vendor/autoload.php');
  use Facebook\WebDriver\Remote\RemoteWebDriver;
  use Facebook\WebDriver\WebDriverBy;

  $USERNAME = "theboldchannel1";
  $AUTOMATE_KEY = "8t48md34fqkSygbj4UNT";
  $BROWSERSTACK_URL = "https://$USERNAME:$AUTOMATE_KEY@hub-cloud.browserstack.com/wd/hub";

  $caps = array(
    
    'os' => 'Windows',
    'os_version' => '10',
    'browser' => 'Chrome',
    'browser_version' => '80',
    'name' => "theboldchannel1's First Test"

  );
  $web_driver = RemoteWebDriver::create(
    $BROWSERSTACK_URL,
    $caps
  );
  for ($x = 0; $x <= 10; $x++) {
    sleep(mt_rand(3, 5));
    $web_driver->get("https://www.youtube.com/watch?v=LUTVUGDOzOM");
    sleep(mt_rand(1, 3));
    $e2 = $web_driver->findElement(WebDriverBy::id("movie_player"));
    if($e2){
      $e2->click();
    }
    for ($y = 0; $y <= 1; $y++) {
      sleep(2);
      $element = $web_driver->findElement(WebDriverBy::id("toggleButton"))->click();
    }
    sleep(mt_rand(108, 112));
  }
  //if($element) {
      //$element->sendKeys("Browserstack");
      //$element->submit();
  //}
  print $web_driver->getTitle();
  $web_driver->quit();

?>
