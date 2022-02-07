<?php
//Initialisation
require "vendor/autoload.php";
//Lecture du .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//Utilisation
use SuccessEnglish\Api;

$api = new Api($_ENV["SE_PUBLIC_KEY"],$_ENV["SE_PRIVATE_KEY"]);


var_dump($api->get("users"));
// users $api->get("users");
// user/{id} $api->get("user",0);
// licences $api->get("licences");
// "entreprises" IF TYPE Organisme de Formation !!

// $token = $api->call("users");//return token

// $data = $api->connect($token);
// var_dump($token,$data); 
 