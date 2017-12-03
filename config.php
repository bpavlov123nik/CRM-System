<?php
define("USER", "root");
define("PASS", "");
define("HOST", "localhost");
define("DATABASE", "crm");
$connection =  mysqli_connect(HOST, USER, PASS, DATABASE);
mysqli_set_charset($connection, 'utf8');
//if($connection->connect_error)
//{
  //  die('Connect Error: ' . $connection->connect_error);
//}
//else
//{
  //  echo 'Successful connection to MySQL </br>';
//}
?>