<?php
echo $_SERVER["SERVER_ADDR"];
echo "</br>";
echo $_SERVER["REMOTE_ADDR"];
echo "</br>";
$host= gethostname();
$ip = gethostbyname($host)
echo $host;
echo "</br>";
echo $ip;
echo "</br>";