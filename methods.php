<?php
require_once 'connection.php';
class sonar extends connection
  {
    /*
     * function to create a new Account
     */
    
    public function create_Account($data) {
  
      try {
        $response = $this->client->request('POST','accounts', 
          ['json' =>$data]
       ); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
       // $data = json_decode($response->getBody(), true);
        //  echo $data;
      } catch (Exception $e) {
          echo $e;
         // echo $e->getRequest();
         //if ($e->hasResponse()) {
         //   echo $e->getResponse();
         //   }
      }
         
    }
    
    /*
     * Function to create new Account address based on account_id .
     */
    
    public function create_Account_Address($data)
    {
      try {
        $response = $this->client->request('POST','accounts/'.$data[account_id].'/addresses', 
        ['json' => $data]); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to create account contact based on account_id 
     */
    
    public function create_Account_Contact($data)
    {
      try {
        $response = $this->client->request('POST','accounts/'.$data[account_id].'/contacts', 
        ['json' => $data]); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get all accounts
     */
    
    public function get_allAccounts()
    {
      try {
        $response = $this->client->request('GET','accounts'); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get all account addresses based on account_id
     */
    
    public function get_allAddresses($account_id)
    {
      try {
        $response = $this->client->request('GET','accounts/'.$account_id.'/addresses',
        ['headers' => ['content-type' => 'application/json', 'Accept' => 'application/json']]); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get all contacts based on account_id
     */
    
    public function get_allContacts($account_id)
    {
      try {
        $response = $this->client->request('GET','accounts/'.$account_id.'/contacts',
        ['headers' => ['content-type' => 'application/json', 'Accept' => 'application/json']]); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get an individual account 
     */
    
    public function get_Account($account_id)
    {
      try {
        $response = $this->client->request('GET','accounts/'.$account_id); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get an individual account address using both account_id and address_id
     */
    
    public function get_Address($account_id,$address_id)
    {
      try {
        $response = $this->client->request('GET','accounts/'.$account_id.'/addresses/'.$address_id,
        ['headers' => ['content-type' => 'application/json', 'Accept' => 'application/json']]); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get an individual account contact using both account_id and contact_id
     */
    
    public function get_Contact($account_id,$contact_id)
    {
      try {
        $response = $this->client->request('GET','accounts/'.$account_id.'/contacts/'.$contact_id,
        ['headers' => ['content-type' => 'application/json', 'Accept' => 'application/json']]); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to update an existing account address using account_id and address_id
     */
    
    public function update_Address($data)
    {
      try {
        $response = $this->client->request('PUT','accounts/'.$data[account_id].'/addresses/'.$data[address_id],['json'=>$data]
        ); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    /*
     * function to update an existing account address using account_id and address_id
     */
    
    public function update_contact($data)
    {
      try {
        $response = $this->client->request('PUT','accounts/'.$data[account_id].'/contacts/'.$data[contact_id],['json'=>$data]
        ); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to delete a account .
     * Be careful when using this method! Accounts can be restored from the recycle bin but this will disable 
     * the accounts services and make all the data associated with this account inaccessible as soon as it is deleted.
     */
    
    public function delete_Account($account_id)
    {
      try {
        $response = $this->client->request('DELETE','accounts/'.$account_id); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to delete a account address using account_id and address_id
     */
    
    public function delete_Address($account_id,$address_id)
    {
      try {
        $response = $this->client->request('DELETE','accounts/'.$account_id.'/addresses/'.$address_id,
        ['headers' => ['content-type' => 'application/json', 'Accept' => 'application/json']]); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to delete a contact using account_id and contact_id
     */
    
    public function delete_Contact($account_id,$contact_id)
    {
      try {
        $response = $this->client->request('DELETE','accounts/'.$account_id.'/contacts/'.$contact_id,
        ['headers' => ['content-type' => 'application/json', 'Accept' => 'application/json']]); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get all roles
     */
    
    public function get_allRoles()
    {
      try {
        $response = $this->client->request('GET','roles/'); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get a individual role
     */
    
    public function get_Role($id)
    {
      try {
        $response = $this->client->request('GET','roles/'.$id); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to create a new user
     */
    
    public function create_user($data)
    {
      try {
        $response = $this->client->request('POST','users/',['json'=>$data]); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to delete a user.
     */
    
     public function delete_user($id)
    {
      try {
        $response = $this->client->request('DELETE','users/'.$id); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get all users 
     */
    
    public function get_AllUsers()
    {
      try {
        $response = $this->client->request('GET','users/'); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get a user
     */
    
    public function get_User($id)
    {
      try {
        $response = $this->client->request('GET','users/'.$id); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get all email categories
     */
    
    public function email_Categories()
    {
      try {
        $response = $this->client->request('GET','_data/email_categories'); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get a list of counties for a US state.
     */
    
    public function supported_Counties($subdivision)
    {
      try {
        $response = $this->client->request('GET','_data/counties/'.$subdivision); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get a list of supported countries.
     */
    
    public function supported_Countries()
    {
      try {
        $response = $this->client->request('GET','_data/countries'); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
     /*
     * function to validate a address.All addresses that you plan to enter should be run through this function.
     */
    
    public function validate_Address($data)
    {
      try {
        $response = $this->client->request('POST','_data/validate_address',['json'=>$data]); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get all supported locales.
     */
    
    public function supported_locales()
    {
      try {
        $response = $this->client->request('GET','_data/locales'); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get all supported  subdivisions. A subdivision is a geographical area within a country.
     */
    
    public function supported_subdivisions($country)
    {
      try {
        $response = $this->client->request('GET','_data/subdivisions/'.$country); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get all supported timezones.
     */
    
    public function supported_timezones()
    {
      try {
        $response = $this->client->request('GET','_data/timezones'); 
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    } 
    
   
   
  }

 /*  $data =array(
            'line1'=>'810 S OAK DR',
            'city'=>'WOODLAND HILLS',
            'state'=>'Utah',
            'country'=>'US'
            );
    $c=new sonar();
    $c->setUp();
    $c->create_AccountGroup("test3");*/
?>