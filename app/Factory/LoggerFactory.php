<?php

namespace ShamanHead\PhpLogger;

use ShamanHead\PhpLogger\Logger as Logger;

class LoggerFactory{

  protected $prefixes = [];
  protected $flowType = "";
  protected $fileName;
  protected $flow;
  protected $mode = "w+";

  public function setPrefixes($prefixes){
    if(gettype($prefixes) === 'array'){
      $this->prefixes = $prefixes;
      return true;
    }
    if(gettype($prefixes) === 'object' && gettype($prefixes->get()) === 'array'){
      $this->prefixes = $prefixes->get();
      return true;
    }
    throw new \Exception('Invalid prefix array');
  }

  public function setFlowType($flowType){
    if($flowType !== "file" && $flowType !== "array" && $flowType !== "http"){
      throw new \Exception('Invalid flow type');
    }
    $this->flowType = $flowType;
    return true;
  }

  public function setMode(string $mode){
    $this->mode = $mode;
  }

  public function setFlow($flow){
    $this->flow = $flow;
  }

  public function setFileName($fileName){
    $this->fileName = $fileName;
  }

  public function build(){
    if($this->flowType === "file"){
      if(empty($this->fileName) && $this->fileName !== "0"){
        throw new Exception("Invalid file name");
      }
      return new FileLogger($this->prefixes, $this->mode, $this->fileName, $this->flow);
    }else if($this->flowType === "http"){
      return new HttpLogger($this->prefixes, $this->flow);
    }else{
      return new ArrayLogger($this->prefixes);
    }
  }

}
