<?php

namespace ShamanHead\PhpLogger;

use ShamanHead\PhpLogger\Config as Config;

Class Log{

  public $log = [];

  function __construct($log = []){
    $this->log = $log;
  }

  public function setDateConvert($convert) : bool {
    $this->dateConvert = $convert;

    return true;
  }

  public function add(array $data) : bool {
    if(count($data) != 2) throw new \Exception("Error when attempting to add log.");
    $this->log[] = $data;
    return true;
  }

  public function toString() : string {
    $result = '';

    for($i = 0, $log = $this->log;$i < count($log);$i++){
      $result .= $log[$i][0]." ".$log[$i][1];
    }
    return $result;
  }

}
