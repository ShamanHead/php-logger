<?php

namespace ShamanHead\PhpLogger;

use ShamanHead\PhpLogger\Logger as Logger;

class LoggerFactory{

  protected $prefixes = [];
  protected $flowType = "";
  protected $fileName;
  protected $flow;

  public function setPrefixes($prefixes){
    if(gettype($prefixes) === 'Array'){
      for($i = 0;$i < count($prefixes);$i++){
        if(count($prefixes[$i]) > 2) throw new \Exception('Invalid prefix array');
      }
    }
  }

  public function setFlowType($flowType){
    if($flowType != "file" && $flowType != "array" && $flowType != "http"){
      throw new \Exception('Invalid flow type');
    }
    $this->flowType = $flowType;
    return true;
  }

  public function setFlow($flow){
    $this->flow = $flow;
  }

  public function setFileName($fileName){
    $this->fileName = $fileName;
  }

  public function build(){
    if($this->flowType == "file"){
      return new FileLogger($this->prefixes, $this->mode, $this->fileName, $this->flow);
    }else if($this->flowType == "http"){
      return new HttpLogger($this->prefixes, $this->flow);
    }else{
      return new ArrayLogger($this->prefixes);
    }
  }

}
