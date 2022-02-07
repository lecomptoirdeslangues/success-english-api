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
    public function call(string $param)
    {
        //success-english.fr
        return json_decode(file_get_contents("https://success-english.fr/api/call/{$this->publicKey}/{$param}"));
    }
    public function connect($token)
    {
        return file_get_contents("https://success-english.fr/api/connect/{$token->token}/{$this->privateKey}/");
 
    }

    public function get(string $param,?string $opt = null)
    {
        $token = $this->call($param."/".$opt); 
        $this->data = $this->connect($token);
        return json_decode($this->data,true);
    }

    public function getData(string $format = null)
    {
        return $format == "json" ? $this->data : json_decode($this->data, true);
    }
}
