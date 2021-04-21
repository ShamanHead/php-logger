<?php

namespace ShamanHead\PhpLogger;

use ShamanHead\PhpLogger\Config as Config;

Class Log{

  public $log = [];
  public $dateConvert;

  function __construct($log){
    $this->log = $log;
    $this->dateConvert = Config::getDefaultDateConvert();
  }

  public function setDateConvert($convert) : bool{
    $this->dateConvert = $convert;

    return true;
  }

  public function toString() : string{
    $result = '';

    for($i = 0, $log = $this->log;$i < count($log);$i++){
      $result .= date($this->dateConvert,$log[$i][0])." ".$log[$i][1];
    }
    return $result;
  }

}
