<?php

namespace SuccessEnglish;

class Api
{
    private $publicKey, $privateKey;
    private $data; 
 
    public function __construct(string $publicKey, string $privateKey)
    {
        $this->publicKey = $publicKey;
        $this->privateKey = $privateKey;
        return $this;
    }
    private function connect(string $param)
    {
        //success-english.fr
        return file_get_contents("http://localhost:8070/api/{$this->publicKey}/{$this->privateKey}/{$param}");
    }

    public function getUsers()
    {
        $this->data = $this->connect("users");
        return $this;
    }

    public function getUser(int $id)
    {
        $this->data = $this->connect("user/{$id}"); 
        return $this;
    }

    public function getData(string $format = null)
    {
        return $format == "json" ? $this->data : json_decode($this->data, true);
    }
}
