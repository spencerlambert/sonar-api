<?php
	
	require 'accounts.php';
	
	/**
	*  Billing API Class 
	*/
	class BillingAPI extends AccountAPI{
		public $uri;
		/* constructor */
		function __construct($uri){
			$this->uri=$uri."accounts";
		}

		function getAccountBilling($id){
			$api=$this->billing->uri.'/'.$id.'/billing_parameters';
			return $this->cURL->request("GET",$api,$data);
		}

		function updateAccountBilling($id,$data){
			$api=$this->billing->uri.'/'.$id.'/billing_parameters';
			return $this->cURL->request("PATCH",$api,$data);
		}
	}
?>