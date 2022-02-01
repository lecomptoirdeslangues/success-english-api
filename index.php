<?php
use SuccessEnglish\Api;

$api = new Api("PUBLIC_KEY","PRIVATE_KEY");

var_dump($api->getUsers("json"));