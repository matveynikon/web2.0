<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<?php
if(array_key_exists('button1', $_POST)) { 
  button1(); 
} 
function button1(){
  ignore_user_abort(true);
  exec("php goutte.php &");
}
button1();
?>
</body>
</head>
