<?php

namespace ShamanHead\PhpLogger;

class PrefixTable{
  protected $prefixTable = [];

  public function add($name, $prefix){
    $this->prefixTable[$name] = $prefix;
  }

  public function get(){
    return $this->prefixTable;
  }

  public function getFromFile(){

  }
}
