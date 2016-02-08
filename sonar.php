<?php
	
	require 'account-address.php';

	/**
	*  Billing API Class 
	*/
	class SonarAPI extends accountAddressAPI{

		/* constructor */
		function __construct(){
			$this->cURL = new Curl;
			$this->curl=$this->cURL->curl;
			$this->url=$this->cURL->url;
			$this->credentials=$this->cURL->credentials;
			$this->accounts = new AccountAPI($this->url);
			$this->billing = new BillingAPI($this->url);
			$this->accountAddress = new accountAddressAPI($this->url);
		}
	}
?>