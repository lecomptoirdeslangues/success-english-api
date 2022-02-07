<?php
//Initialisation
require "vendor/autoload.php";
//Lecture du .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//Utilisation
use SuccessEnglish\Api;

$api = new Api($_ENV["SE_PUBLIC_KEY"],$_ENV["SE_PRIVATE_KEY"]);

// $token = $api->call("users");//return token

// $data = $api->connect($token);
// var_dump($token,$data); 

var_dump($api->get("user",0));
// users
// user/{id}
// licences
// entreprises

/**
 * js
 * https://success-english.fr/api/call/PUBLIC_KEY/users
 * return token
 * 
 * backend
 * https://success-english.fr/api/connect/TOKEN/PRIVATE_KEY
 * return data
 * 
 */