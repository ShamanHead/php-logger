<?php

namespace ShamanHead\PhpLogger;

use ShamanHead\PhpLogger\Logger as Logger;
use ShamanHead\PhpLogger\Config as Config;

class FileLogger extends Logger{

  function __construct(array $prefixes, string $mode, $fileName = "", $flow = ""){
    parent::__construct();
    if($fileName == ""){
      $fileName = rand().".log";
    }
    if($flow == ""){
        $flow = Config::getDefaultLogPath().$fileName;
    }
    $this->file = fopen($flow, $mode);
    $this->prefixes = $prefixes;
  }

  public function send($prefix, $message){
    if($this->returnPrefix == true){
      $resultMessage = [date($this->dateConvert,time()), $this->prefixes[$prefix]." ".$message];
    }else{
      $resultMessage = [date($this->dateConvert,time()), $message];
    }
    $this->log->add($resultMessage);
    $resultMessage = $resultMessage[0].$resultMessage[1];
    fwrite($this->file, $resultMessage."\n");
  }


}
