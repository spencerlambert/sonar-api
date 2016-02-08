<?php
	
	require 'billing.php';
	
	/**
	*  Billing API Class 
	*/
	class accountAddressAPI extends BillingAPI{
		public $uri;
		/* constructor */
		function __construct($uri){
			$this->uri=$uri."accounts";
		}

		function createAccountAddress($accountId,$data){
			$api=$this->accountAddress->uri.'/'.$accountId.'/addresses';
			/*return $api;
			exit();*/
			return $this->cURL->request("POST",$api,$data);
		}

		function deleteAccountAddress($accountId,$addressId){
			$api=$this->accountAddress->uri.'/'.$accountId.'/addresses/'.$addressId;
			return $this->cURL->request("DELETE",$api);
		}

		function getAllAccountAddress($accountId,$data){
			$api=$this->accountAddress->uri.'/'.$accountId.'/addresses';
			return $this->cURL->request("GET",$api,$data);
		}

		function getAccountAddress($accountId,$addressId,$data){
			$api=$this->accountAddress->uri.'/'.$accountId.'/addresses/'.$addressId;
			return $this->cURL->request("GET",$api,$data);
		}

		function updateAccountAddress($accountId,$addressId,$data){
			$api=$this->accountAddress->uri.'/'.$accountId.'/addresses/'.$addressId;
			return $this->cURL->request("PATCH",$api,$data);
		}
	}
	/*return $api;
			exit();*/
?>