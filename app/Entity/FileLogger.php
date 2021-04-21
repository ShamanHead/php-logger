<?php

namespace ShamanHead\PhpLogger;

use ShamanHead\PhpLogger\Logger as Logger;

class ArrayLogger extends Logger{

  public function send($prefix, $message){
    $resultMessage = time(), $this->prefixes[$prefix]." ".$message;
    $this->logs[] = [$resultMessage];
    fwrite($this->file, $resultMessage."\n");
  }


}
