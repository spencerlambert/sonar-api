<?php
require_once 'connection.php';

class financial extends connection
{
  /*
   * function to create a new geotax
   */
  
  public function create_geoTax($data)
  {
    try {
      $response = $this->client->request('POST','financial/taxes/'.$data[id].'/geotaxes',['json'=>$data]);
      echo $response->getBody();
    } catch (Exception $ex) {
      echo $ex;
    }
  }
  
  /*
   * function to create a tax
   */
  
  public function create_Tax($data)
  {
    try {
      $response = $this->client->request('POST','financial/taxes',['json'=>$data]);
      echo $response->getBody();
    } catch (Exception $ex) {
      echo $ex;
    }
  } 
  
  /*
   * function to delete a geotax
   */
  
  public function delete_Tax($data)
  {
    try {
      $response = $this->client->request('DELETE','financial/taxes/'.$data[taxid].'/geotaxes/'.$data[geotaxid]);
      echo $response->getBody();
    } catch (Exception $ex) {
      echo $ex;
    }
  } 
  
  /*
   * function to Get a list of all the geographic area taxes configured for a geographical tax.
   */
  
  public function get_GeoTaxes($id)
  {
    try {
      $response = $this->client->request('GET','financial/taxes/'.$id.'/geotaxes');
      echo $response->getBody();
    } catch (Exception $ex) {
      echo $ex;
    }
  }
  
  /*
   * function to get a list of all configured taxes
   */
  
  public function get_Taxes()
  {
    try {
      $response = $this->client->request('GET','financial/taxes');
      echo $response->getBody();
    } catch (Exception $ex) {
        echo $ex;
    }
  }
  
  /*
   * function to get the current billing configuration
   */
  
  public function get_BillingConfiguration()
  {
    try {
      $response = $this->client->request('GET','financial/billing/configuration');
      echo $response->getBody();
    } catch (Exception $ex) {
      echo $ex;
    }
  }
  
  /*
   * function to get current billing defaults
   */
  
  public function get_BillingDefaults()
  {
    try {
      $response = $this->client->request('GET','financial/billing/defaults');
      echo $response->getBody();
    } catch (Exception $ex) {
      echo $ex;
    }
  }
  
  /*
   * function to get an individual geotax from an parent tax
   */
  
  public function get_GeoTax($data)
  {
    try {
      $response = $this->client->request('GET','financial/taxes/'.$data[taxid].'/geotaxes/'.$data[geotaxid]);
      echo $response->getBody();
    } catch (Exception $ex) {
      echo $ex;
    }
  }
  
  /*
   * function to get an individual tax
   */
  
  public function get_Tax($id)
  {
    try {
      $response = $this->client->request('GET','financial/taxes/'.$id);
      echo $response->getBody();
    } catch (Exception $ex) {
      echo $ex;
    }
  }
  
  /*
   * function to update an billing configuration
   */
  
  public function update_BillingConfig($data)
  {
    try {
      $response = $this->client->request('PUT','financial/billing/configuration',['json'=>$data]);
      echo $response->getBody();
    } catch (Exception $ex) {
      echo $ex;
    }
  }
  
  /*
   * function to update the billing defaults
   */
  
  public function update_BillingDefaults($data)
  {
    try {
      $response = $this->client->request('PUT','financial/billing/defaults',['json'=>$data]);
      echo $response->getBody();
    } catch (Exception $ex) {
      echo $ex;
    }
  }
  
  /*
   * function to update a geo tax
   */
  
  public function update_GeoTax($data)
  {
    try {
      $response = $this->client->request('PUT','financial/taxes/'.$data[taxid].'/geotaxes/'.$data[geotaxid],['json'=>$data]);
      echo $response->getBody();
    } catch (Exception $ex) {
      echo $ex;
    }
  }
  
  /*
   * function to update tax
   */
  
  public function update_Tax($data)
  {
    try {
      $response = $this->client->request('PUT','financial/taxes/'.$data[taxid],['json'=>$data]);
      echo $response->getBody();
    } catch (Exception $ex) {
      echo $ex;
    }
  }
}
/*
$f = new financial();
$f->setUp();
$f->get_BillingDefaults();*/
?>
