<?php

class smartOutput{
  
  var $output;
  
  private $name, $value;
  
  function __construct(){
    $this->output = $output;
  }
  
  public function setData($name,$value){
    $this->output[$name] = $value;
  }
  
  public function output($format="json"){
    switch($format){
      case "json":
        echo json_encode($this->output);
        break;
      default:
        echo "invalid_output_format";
    }
  }
  
}

?>
