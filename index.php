<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

</head>
<body>
<?php
exec("kill $(lsof -t -i:9516)");
sleep(2);
system("php goutte.php");
//print_r($o);
//echo($v);
?>
</body>
</head>
