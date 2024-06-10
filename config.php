<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// $host = "192.168.100.30";
// $databaseuser = "root";
// $databasename = "rdm";
// $dbpassword = "casaos";
$host = getenv('DB_SERVER');
$databaseuser = getenv('DB_USERNAME');
$databasename = getenv('DB_DATABASE');
$dbpassword = getenv('DB_PASSWORD');
define("DB_SERVER",$host);
define("DB_USERNAME",$databaseuser);
define("DB_PASSWORD",$dbpassword);
define("DB_DATABASE",$databasename);
?>