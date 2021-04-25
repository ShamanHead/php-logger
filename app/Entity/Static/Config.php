<?php

namespace ShamanHead\PhpLogger;

class Config{
  private static $defaultLogPath = "Logs/";
  private static $defaultDateConvert = "H:m:s";

  public static function setDefaultLogPath($path) : bool{
    self::$defaultLogPath = $path;

    return true;
  }

  public static function setDefaultDateConvert(string $convert) : bool{
    self::$defaultDateConvert = $convert;

    return true;
  }

  public static function getDefaultLogPath() : string{
    return self::$defaultLogPath;
  }

  public static function getDefaultDateConvert() : string{
    return self::$defaultDateConvert;
  }

}
