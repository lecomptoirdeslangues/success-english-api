<?php
//Initialisation
require "vendor/autoload.php";
//Lecture du .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//Utilisation
use SuccessEnglish\Api;

$api = new Api($_ENV["SE_PUBLIC_KEY"],$_ENV["SE_PRIVATE_KEY"]);

echo $api->getUsers()->getData("json");
// var_dump($api->getUsers()->getData());

var_dump($api->getUser(0)->getData("json"));