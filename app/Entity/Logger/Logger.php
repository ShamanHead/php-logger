<?php

namespace ShamanHead\PhpLogger;

use ShamanHead\PhpLogger\Log as Log;
use ShamanHead\PhpLogger\Config as Config;

class Logger{
  protected $prefixes = [];
  protected $flow;
  protected $log;
  protected $dateConvert = "";
  protected $returnPrefix = true;

  function __construct(){
    $this->dateConvert = Config::getDefaultDateConvert();
    $this->log = new Log;
  }

  public function getLog(){
    return $this->log;
  }

  public function setDateConvert($convert) : bool{
    $this->dateConvert = $convert;

    return true;
  }

  public function getPrefixes(){
    return $this->prefixes;
  }

  public function stopListening(){
    $this->__destruct();
    return $this->log;
  }

  function __destruct(){}

}
