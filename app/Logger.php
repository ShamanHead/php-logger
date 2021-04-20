<?php

namespace ShamanHead\PhpLogger;

class Logger{

  protected $prefixes = [];
  protected $flow;
  protected $flowType = "";

  function __construct($prefixes, $flowType, $flow){

  }

  function send($prefix, $message){
    // return new Message($prefix, $message);
  }

}
