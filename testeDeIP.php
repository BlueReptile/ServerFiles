<?php
echo $_SERVER["SERVER_ADDR"];
echo "</br>";
echo $_SERVER["REMOTE_ADDR"];
echo "</br>";
$host= gethostname();
$ip = gethostbyname($host);
echo $host;
echo "</br>";
echo $ip;
echo "</br>";
$carinho=getenv('HTTP_CLIENT_IP');
echo $carinho;



echo "agora começa a parte estranha da internet: </br>";
echo $_SERVER['REMOTE_ADDR'];
echo "</br>";
echo $_SERVER["REMOTE_ADDR"];