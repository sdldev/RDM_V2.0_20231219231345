<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use DevCoder\DotEnv;
(new DotEnv(__DIR__ . '/.env'))->load();
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