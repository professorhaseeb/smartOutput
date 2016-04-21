<?php

class smartOutput{
  
  public $output = array();
  
  public function __construct(){
  	$this->output = $output;
  }
  
  
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
  
}

?>
