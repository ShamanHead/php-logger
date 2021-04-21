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
  }

  public function get(){
    return new Log($this->logs);
  }

  public function setDateConvert($convert) : bool{
    $this->dateConvert = $convert;

    return true;
  }

  public function stopListening(){
    $temp = $this->logs;
    $this->__destruct();
    return new Log($temp);
  }

  function __destruct(){}

}
