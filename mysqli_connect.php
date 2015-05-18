<?php

#This files connects to import-export database

define('DB_USER', 'root');
define('DB_PASSWORD', 'bitnami');
define('DB_HOST', 'localhost');
define('DB_NAME', 'copy_operlogisticas');


$dbo = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: ' . mysqli_connect_error()); 
mysqli_set_charset($dbo, 'ascii'); 
?>