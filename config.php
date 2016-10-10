<?php
$dsn = "mysql:host=localhost;dbname=lorem";// For Localhost
//$dsn = "mysql:host=localhost;dbname=foreexims";//For Server
$db_username = 'root'; // For Localhost
$db_password = ''; // For Localhost
//$db_username = 'cpses_cpHQ6La6wE'; //For Server
//$db_password = 'Ggnard01'; //For Server
$con = new PDO($dsn,$db_username,$db_password);
?>