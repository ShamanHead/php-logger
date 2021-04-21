<?php

namespace ShamanHead\PhpLogger;

use ShamanHead\PhpLogger\Logger as Logger;

class ArrayLogger extends Logger{

  function __construct(array $prefixes){
    $this->prefixes = $prefixes;
  }

  public function send($prefix, $message){
    $this->logs[] = [time(), $this->prefixes[$prefix]." ".$message];
  }


}
