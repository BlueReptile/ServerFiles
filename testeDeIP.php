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


echo "COME ON BOI, LETS KILL DEEZ PLEBS!: </br>";
echo $_SERVER['X_FORWARDED_FOR'];
echo "</br>";
echo $_SERVER['HTTP_X_FORWARDED_FOR'];
echo "</br>";
echo $_SERVER['HTTP_CLIENT_IP'];
echo "</br>";
echo gethostbyaddr($_SERVER["SERVER_ADDR"]);
echo "</br>";

foreach ($_SERVER as $key => $value) {
 echo "$key = $value";
}