<?php
class smartOutput{
  public $output = array();
  protected $responseOutput = array();
  public function __construct(){
  	//$this->output = $output;
  }
  public function setResponse($code, $result = null){
    switch($code){
      //add as many as cases you want
      case 0: $this->responseOutput = array('status_code'=> 0,'status'=>'success','message'=>'Request successfull','response'=> $result);
      break;

      case 1: $this->responseOutput = array('status_code'=> 1,'status'=>'error','message'=>'request was unsuccessful','response'=> $result);
      break;

      case 9: $this->responseOutput = array('status_code'=> 9,'status'=>'error','message'=>'Unauthorized Request','response'=> $result);
      break;

      case 51: $this->responseOutput = array('status_code'=> 51,'status'=>'error','message'=>'Password Doesnot Match','response'=> $result);
      break;

      case 101: $this->responseOutput = array('status_code'=> 101,'status'=>'success','message'=>'Registration Successful','response'=> $result);
      break;

      case 401: $this->responseOutput = array('status_code'=> 401,'status'=>'error','message'=>'Unable to Process','response'=> $result);
      break;

      // Make your own Cases
        
      default: $this->responseOutput = array('status_code'=> 666,'status'=>'error','message'=>'unccessfull','response'=> $result);
      break;
    }
  }
  public function getResponse(){
    return $this->responseOutput;
  }

//==============================================================================
  public function set($name, $value){
    $this->output[$name] = $value;
  }
  public function output($format="array"){
    switch($format){
      case "json":
        return json_encode($this->output);
        break;
      case "array":
      	return $this->output;
      	break;
      default:
        return "invalid_output_format";
    }
  }
//==============================================================================
}
?>
