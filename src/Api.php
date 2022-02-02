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

    public function getUsers(string $format = null)
    {
        //success-english.fr
        $this->data = file_get_contents("http://localhost:8070/api/{$this->publicKey}/{$this->privateKey}/users");
        return $format == "json" ? $this->data : json_decode($this->data, true);
    }
}
