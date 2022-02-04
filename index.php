<?php
//Initialisation
require "vendor/autoload.php";
//Lecture du .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

//Utilisation
use SuccessEnglish\Api;

$api = new Api($_ENV["SE_PUBLIC_KEY"],$_ENV["SE_PRIVATE_KEY"]);

// $call = $api->call("users");//return token

// $data = $api->connect($call);
// var_dump($call,$data); 

var_dump($api->get("users"));
 

/**
 * js
 * http://localhost:8070/api/call/PUBLIC_KEY/users
 * return token
 * 
 * backend
 * http://localhost:8070/api/connect/TOKEN/PRIVATE_KEY
 * return data
 * 
 */