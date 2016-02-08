<?php
require_once 'connection.php';

class system extends connection
{
    
    /*
     * function to create a new account group
     */
    
    public function create_AccountGroup($name)
    {
      try {
        $response = $this->client->request('POST','system/account_groups',['json'=>["name"=>$name]]);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to create a new account status
     */
    
    public function create_AccountStatus($data)
    {
      try {
        $response = $this->client->request('POST','system/account_statuses',['json'=>$data]);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to create a new account type
     * Allowed types are residential and commercial
     */
    
    public function create_AccountType($data)
    {
      try {
        $response = $this->client->request('POST','system/account_types',['json'=>$data]);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to create a new address type
     */
    
    public function create_AddressType($data)
    {
      try {
        $response = $this->client->request('POST','system/address_types',['json'=>$data]);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to create custom field
     * allowed type values are text,select,checkbox and date
     */
    
    public function create_CustomField($data)
    {
      try {
        $response = $this->client->request('POST','system/custom_fields',['json'=>$data]);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to delete a account group
     */
    
    public function delete_AccountGroup($id)
    {
      try {
        $response = $this->client->request('DELETE','system/account_groups/'.$id);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to delete a account status
     */
    
    public function delete_AccountStatus($id)
    {
      try {
        $response = $this->client->request('DELETE','system/account_statuses/'.$id);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to delete a account type
     */
    
    public function delete_AccountType($id)
    {
      try {
        $response = $this->client->request('DELETE','system/account_types/'.$id);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to delete a address type
     */
    
    public function delete_AddressType($id)
    {
      try {
        $response = $this->client->request('DELETE','system/address_types/'.$id);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to delete a custom field
     */
    
    public function delete_CustomField($id)
    {
      try {
        $response = $this->client->request('DELETE','system/custom_fields/'.$id);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
     /*
     * function to list all account groups
     */
    
    public function get_AccountGroups()
    {
      try {
        $response = $this->client->request('GET','system/account_groups');
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to list all account statuses
     */
    
    public function get_AccountStatuses()
    {
      try {
        $response = $this->client->request('GET','system/account_statuses');
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to list all account types
     */
    
    public function get_AccountTypes()
    {
      try {
        $response = $this->client->request('GET','system/account_types');
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to list all address types
     */
    
    public function get_AddressTypes()
    {
      try {
        $response = $this->client->request('GET','system/address_types');
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to list all custom fields
     */
    
    public function get_CustomFields()
    {
      try {
        $response = $this->client->request('GET','system/custom_fields');
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    } 
    
    /*
     * function to get current application configuration
     */
    
    public function get_ApplicationConfig()
    {
      try {
        $response = $this->client->request('GET','system/application');
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
      /*
     * function to get an individual account group
     */
    
    public function get_AccountGroup($id)
    {
      try {
        $response = $this->client->request('GET','system/account_groups/'.$id);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get an individual account status
     */
    
    public function get_AccountStatus($id)
    {
      try {
        $response = $this->client->request('GET','system/account_statuses/'.$id);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get an individual account type
     */
    
    public function get_AccountType($id)
    {
      try {
        $response = $this->client->request('GET','system/account_types/'.$id);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get an individual address type
     */
    
    public function get_AddressType($id)
    {
      try {
        $response = $this->client->request('GET','system/address_type/'.$id);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to get an individual custom field
     */
    
    public function get_CustomField($id)
    {
      try {
        $response = $this->client->request('GET','system/custom_fields/'.$id);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    } 
    
    /*
     * function to update an account group
     */
    
    public function update_AccountGroup($data)
    {
      try {
        $response = $this->client->request('PUT','system/account_groups/'.$data[id],['json'=>$data]);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    } 
    
    /*
     * function to update an account status
     */
    
    public function update_AccountStatus($data)
    {
      try {
        $response = $this->client->request('PUT','system/account_statuses/'.$data[id],['json'=>$data]);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    } 
    
    /*
     * function to update an account type
     */
    
    public function update_AccountType($data)
    {
      try {
        $response = $this->client->request('PUT','system/account_types/'.$data[id],['json'=>$data]);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    } 
    
    /*
     * function to update an address type
     */
    
    public function update_AddressType($data)
    {
      try {
        $response = $this->client->request('PUT','system/address_types/'.$data[id],['json'=>$data]);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    } 
    
    /*
     * function to update application
     */
    
    public function update_Application($data)
    {
      try {
        $response = $this->client->request('PUT','system/application',['json'=>$data]);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    } 
    
    /*
     * function to update custom field.
     * Type and entity_type cannot be updated once created.
     */
    
    public function update_CustomField($data)
    {
      try {
        $response = $this->client->request('PUT','system/custom_fields/'.$data[id],['json'=>$data]);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    } 
    
    /*
     * function to create a new package
     */
    
    public function create_Package($data)
    {
      try {
        $response = $this->client->request('DELETE','system/packages/'.$id);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    } 
    
     /*
     * function to delete a package
     * Note:- This function will not remove the services from account. it will just prevent the package being used in the future by
     * setting active flag false.
     * To permananently remove use interface.
     */
    
    public function delete_Package($id)
    {
      try {
        $response = $this->client->request('POST','system/packages/'.$id);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to list all packages
     */
    
    public function get_Packages()
    {
      try {
        $response = $this->client->request('GET','system/packages/');
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    } 
    
    /*
     * function to get a individual package
     */
    
    public function get_Package($id)
    {
      try {
        $response = $this->client->request('GET','system/packages/'.$id);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    } 
    
    /*
     * function to update a package
     */
    
    public function update_Package($data)
    {
      try {
        $response = $this->client->request('PUT','system/packages/'.$data[id],['json'=>$data]);
        echo $response->getStatusCode();
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to create a new service.
     * allowed type values are "one time", "recurring", "expiring", "adjustment"
     * allowed application values are "credit" and "debit"
     */
    
    public function create_Service($data)
    {
      try {
        $response =$this->client->request('POST','system/services',['json'=>$data]);
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo ex;
      }
    } 
    
    /*
     * to get a list of all services in the system
     */
    
    public function get_allServices()
    {
      try {
        $response = $this->client->request('GET','system/services');
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    
    /*
     * to get an individual service
     */
    
    public function get_Service($id)
    {
      try {
        $response = $this->client->request('GET','system/services/'.$id);
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    }
    
    /*
     * function to update a service
     * Note:- Type cannot be changed.
     */
    
    public function update_Service($data)
    {
      try {
        $response = $this->client->request('PUT','system/services/'.$data[id],['json'=>$data]);
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    } 
    
    /*
     * function to delete a service.
     * Be careful when using this method! Services can be restored from the recycle bin but deletion will 
     * permanently disassociate the service from all accounts, packages and roles.
     */
    
    public function delete_Service($id)
    {
      try {
        $response = $this->client->request('DELETE','system/services/'.$id);
        echo $response->getStatusCode();
        echo $response->getHeaderLine('content-type');
        echo $response->getBody();
      } catch (Exception $ex) {
        echo $ex;
      }
    } 
}
/*$data = array(
    'name'=>'Height of Antenna',
    'type'=>'text',
    'unique'=>1,
    'active'=>1,
    'entity_type'=>'account'
    
);
$s=new system();
    $s->setUp();
    $s->get_ApplicationConfig();*/
?>