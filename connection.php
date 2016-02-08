<?php
  require_once 'vendor/autoload.php';
  require_once 'config.php';
  
  class connection {

    protected $client;

    public function setUp() {
      
      $this->client = new GuzzleHttp\Client([
        'base_uri' => url,
        'auth' => [username, password],
        'defaults' => [
        'headers' => ['content-type' => 'application/json', 'Accept' => 'application/json']]
      ]);
    }
  }
  
  
?> 