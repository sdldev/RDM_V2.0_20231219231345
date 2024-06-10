<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$env = file(__DIR__.'/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach($env as $value)
{
  $value = explode('=', $value);  
  define($value[0], $value[1]);
}

// $host = "localhost";
// $databaseuser = "rdm";
// $databasename = "rdm";
// $dbpassword = "rdm12!!";
$host = getenv('DB_SERVER');
$databaseuser = getenv('DB_USERNAME');
$databasename = getenv('DB_DATABASE');
$dbpassword = getenv('DB_PASSWORD');
define("DB_SERVER",$host);
define("DB_USERNAME",$databaseuser);
define("DB_PASSWORD",$dbpassword);
define("DB_DATABASE",$databasename);
?>