<?php

namespace ShamanHead\PhpLogger;

use ShamanHead\PhpLogger\Logger as Logger;

class LoggerFactory{

  protected $prefixes = [];
  protected $flowType = "";
  protected $flow;

  public function setPrefixes($prefixes){
    if(gettype($prefixes) === 'Array'){
      
    }
  }

  public function setFlowType($flowType){

  }

  public function build(){
    return new Logger($this->prefixes, $this->flowType, $this->flow);
  }

}
