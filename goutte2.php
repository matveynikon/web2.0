<?php
  require_once('vendor/autoload.php');
  use Facebook\WebDriver\Remote\RemoteWebDriver;
  use Facebook\WebDriver\WebDriverBy;
  $caps = array(
"browserName" => "iPhone",
"device" => "iPhone 11",
"realMobile" => "true",
"os_version" => "13.0",
);
$capabilities = array(WebDriverCapabilityType::BROWSER_NAME => 'chrome');
$web_driver->get("https://www.google.com", $capabilities);
$element = $web_driver->findElement(WebDriverBy::name("q"));
if($element) {
    $element->sendKeys("Browserstack");
    $element->submit();
}
print $web_driver->getTitle();
$web_driver->quit();
?> 