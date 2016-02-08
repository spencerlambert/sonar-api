<?php
	
	require 'curl.php';
	
	/**
	*  Account API Class 
	*/
	class AccountAPI{
		public $uri;
		
		/*constructor*/
		function __construct($uri){
			$this->uri=$uri."accounts";
		}

		function createAccount($data){
			$api= $this->accounts->uri;
			return $this->cURL->request("POST",$api,$data);
		}
		function deleteAccount($id){
			$api = $this->accounts->uri.'/'.$id;
			return $this->cURL->request("DELETE",$api,$data);
		}

		function allAccounts(){
			$api = $this->accounts->uri;
			return $this->cURL->request("GET",$api,$data);
	        
		}

		function showAccount($id){
			$api = $this->accounts->uri.'/'.$id;
			return $this->cURL->request("GET",$api,$data);
	        
		}

		function updateAccount($id,$data){
			$api = $this->accounts->uri.'/'.$id;
			return $this->cURL->request("PATCH",$api,$data);
		}
	}
?>