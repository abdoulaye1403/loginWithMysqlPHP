<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'etudiants');
define('DB_USER', 'root');
define('DB_PASS', 'root');

try {
  $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
  
} catch (PDOEXCEPTION $e) {
  echo "error :" . $e->getMessage();
}




