<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// $host = "192.168.100.30";
// $databaseuser = "root";
// $databasename = "rdm";
// $dbpassword = "casaos";
$host = env('DB_SERVER');
$databaseuser = env('DB_USERNAME');
$databasename = env('DB_DATABASE');
$dbpassword = env('DB_PASSWORD');
define("DB_SERVER",$host);
define("DB_USERNAME",$databaseuser);
define("DB_PASSWORD",$dbpassword);
define("DB_DATABASE",$databasename);
?>