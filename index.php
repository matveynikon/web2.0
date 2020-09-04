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
}
button1();
?>
</body>
</html>
