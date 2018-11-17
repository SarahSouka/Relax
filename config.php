<?php

ini_set('error_reporting', E_ALL | E_STRICT);   // !! change to 0 after debug
ini_set('display_errors', 1);                   // !! change to 0 after debug

define ('DB_HOST', 'localhost');
define ('DB_USER', 'root');
define ('DB_PWD' , 'root');
define ('DB_NAME', 'relax'); //MODIFER ICI LE NOM DE LA DATABASE
define ('MYSQL_DSN', 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8');
?>
