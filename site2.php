<!DOCTYPE html>
<html>
<head>
<style>

@keyframes example2{
  from {color: lightblue;}
  to {color: lightseagreen;}
}

* {
   font-family:Arial, Helvetica, sans-serif;
   font-size: 35px;
   overflow: auto;

}

.img {
  filter: blur(2px);
  -webkit-filter: blur(2px);
  background-image: url('gr.jpg');
  height: 800px;
  background-position: center;
}

.img2 {
  filter: blur(4px);
  -webkit-filter: blur(4px);
  background-image: url('s.jpg');
  height: 800px;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
.img3 {
  filter: blur(0px);
  -webkit-filter: blur(0px);
  background-image: url('Y7.jpg');
  height: 1000px;
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}

h1 {
   font-family: myFirstFont;
   font-size: 50px;
   color: lime;
   background-color: slateblue; /* Fallback color */
   background-color: rgba(106, 90, 205, 0.7); /* Black w/opacity/see-through */
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
   border-radius: 10px;
}

@keyframes example {
  from {background-color: lightcyan;}
  to {background-color: rgb(0,0,0);
      background-color: rgba(0,0,0, 0.4);}
}
.headline2 {
   font-family: myFirstFont;
   font-size: 50px;
   color: turquoise;
   background-color: lightgold; /* Fallback color */
   background-color: rgba(143,170,43, 0.8); /* Black w/opacity/see-through */
   font-weight: bold;
   border: 3px solid #f1f1f1;
   position: absolute;
   top: 175%;
   left: 20%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 30%;
   padding: 50px;
   text-align: center;
   border-radius: 10px;

}

.headline {
   font-family: myFirstFont;
   font-size: 50px;
   color: springgreen;
   background-color: mediumturquoise; /* Fallback color */
   background-color: rgba(72, 209, 204, 0.8); /* Black w/opacity/see-through */
   font-weight: bold;
   border: 3px solid #f1f1f1;
   position: absolute;
   top: 155%;
   left: 80%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 30%;
   padding: 20px;
   border-radius: 15px;
   text-align: center;
   animation: fadein 2s;
   animation-fill-mode: both;
   animation-delay: 1s;
   -webkit-animation-delay:1s;

}
.start{
   font-family: myFirstFont;
   font-size: 50px;
   color: goldenrod;
   background-color: green; /* Fallback color */
   background-color: rgba(17,188,165, 0.7); /* Black w/opacity/see-through */
   font-weight: bold;
   border: 3px solid #f1f1f1;
   position: absolute;
   transform: translate(-50%, -50%);
   top: 325%;
   left: 50%;
   z-index: 2;
   width: 75%;
   padding: 0px;
   text-align: center;
   border-radius: 10px;
}

.start:hover {
   font-family: myFirstFont;
   font-size: 50px;
   color: goldenrod;
   background-color: green; /* Fallback color */
   background-color: rgba(17,188,165, 0.7); /* Black w/opacity/see-through */
   font-weight: bold;
   border: 3px solid #f1f1f1;
   position: absolute;
   transform: translate(-50%, -50%);
   top: 325%;
   left: 50%;
   z-index: 2;
   width: 75%;
   padding: 0px;
   text-align: center;
   border-radius: 10px;
   animation: e 2s, fadein 2s;
   animation-fill-mode: both;
}
.headline5{
   font-size: 300px;
   text-align: center;
   font-family: myFirstFont;
   font-size: 20px;
   color: gold;
   font-weight: bold;
   position: absolute;
   background-color: green; /* Fallback color */
   background-color: rgba(17,188,165, 0.7); /* Black w/opacity/see-through */
   border: 3px solid #f1f1f1;
   border-radius: 20px;
   top: 260%;
   left: 25%;
   transform: translate(-50%, -50%);
   z-index: 2;
   width: 30%;
   height: 20%;
   text-align: center;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
</head>
<body>
<?php
  exec("php goutte.php");
?>
<ul>

    <li><a href="services.html" class="current">Home</a></li>
    <li><a href="form.html" class="next">pricing</a></li>

</ul>

</body>
</html>
