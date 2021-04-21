<?php

namespace ShamanHead\PhpLogger;

use ShamanHead\PhpLogger\Logger as Logger;

class ArrayLogger extends Logger{

  function __construct(array $prefixes){
    parent::__construct();
    $this->prefixes = $prefixes;
  }

  public function send($prefix, $message){
    $this->logs[] = [date($this->dateConvert, time()), $this->prefixes[$prefix]." ".$message];
  }


}
