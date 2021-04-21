<?php

namespace ShamanHead\PhpLogger;

use ShamanHead\PhpLogger\Log as Log;

class Logger{
  protected $prefixes = [];
  protected $flow;
  protected $logs;

  function __construct(array $prefixes, string $flow){
    $this->prefixes = $prefixes;
    $this->flow = $flow;
  }

  public function get(){
    return new Log($this->logs);
  }

  public function stopListening(){
    $temp = $this->logs;
    $this->__destruct();
    return new Log($temp);
  }

  function __destruct(){}

}
