<?php

namespace ShamanHead\PhpLogger;

use ShamanHead\PhpLogger\Log as Log;
use ShamanHead\PhpLogger\Config as Config;

class Logger{
  protected $prefixes = [];
  protected $flow;
  protected $logs;
  protected $dateConvert = "";

  function __construct(){
    $this->dateConvert = Config::getDefaultDateConvert();
    $this->logs = new Log;
  }

  public function get(){
    return $this->logs;
  }

  public function setDateConvert($convert) : bool{
    $this->dateConvert = $convert;

    return true;
  }

  public function stopListening(){
    $this->__destruct();
    return $this->logs;
  }

  function __destruct(){}

}
