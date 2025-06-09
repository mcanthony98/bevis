<?php

define('DB_SERVER', 'srv491.hstgr.io');
define('DB_USERNAME', 'u640333703_bevis');
define('DB_PASSWORD', '?3wm~Agt?#pN');
define('DB_DATABASE', 'u640333703_bevis');

/*
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'bevisafr_bevis');
define('DB_PASSWORD', '?3wm~Agt?#pN');
define('DB_DATABASE', 'bevisafr_GNM');
*/
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
$pdo = $conn;


?>