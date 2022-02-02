<?php
//initialisation
require "vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use SuccessEnglish\Api;

$api = new Api($_ENV["SE_PUBLIC_KEY"],$_ENV["SE_PRIVATE_KEY"]);

echo $api->getUsers("json");
var_dump($api->getUsers());