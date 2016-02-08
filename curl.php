<?php
	$configs 		= require 'config.php';
	
	$credentials 	= $configs['username'].':'.$configs['password'];
	$baseUrl        = $configs['baseUrl'];
	
	class Curl {
		public $uri;
		public $data;
		public $method;
		
		/* constructor */
		function __construct() {
			$this->url  = $GLOBALS['baseUrl'];
			$this->curl = curl_init();
			$this->credentials = $GLOBALS['credentials'];
			$this->headers = array("Content-type: application/json", 
	            "Accept: application/json", 
	            "Authorization: Basic ".base64_encode($this->credentials) 
	        );
	        curl_setopt($this->curl, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)"); 
	        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, 1); 
	        curl_setopt($this->curl, CURLOPT_TIMEOUT, 60); 
	        curl_setopt($this->curl, CURLOPT_HTTPHEADER,$this->headers); 
	        curl_setopt($this->curl, CURLOPT_HEADER,false); 
		}

		/* request handler */
		function request($method,$uri,$data){

			curl_setopt($this->curl, CURLOPT_URL,$uri);
			switch ($method) {
			    case "POST":
			    	//echo "switch:".$method;
			        curl_setopt($this->curl, CURLOPT_POST, 1); 
	        		curl_setopt($this->curl, CURLOPT_POSTFIELDS,json_encode($data)); 
			        break;
			    case "PATCH":
			        curl_setopt($this->curl, CURLOPT_HTTPHEADER, array("Authorization: Basic ".base64_encode($this->credentials)));
					curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, 'PATCH');
					curl_setopt($this->curl, CURLOPT_POSTFIELDS,json_encode($data));
			        break;
			    case "GET":
			        break;
			    
			    case "DELETE":
			        curl_setopt($this->curl, CURLOPT_CUSTOMREQUEST, "DELETE");
			        break;
			    default:
			    	return "Not a valid request";
			        exit();
			}
			$response = curl_exec($this->curl);
	        return $response;
	        curl_close($this->curl);
		}
	}


?>