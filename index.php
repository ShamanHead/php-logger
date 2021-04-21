<?php
require_once("vendor/autoload.php");

use ShamanHead\PhpLogger\LoggerFactory as LoggerFactory;
use ShamanHead\PhpLogger\ArrayLogger as ArrayLogger;
use ShamanHead\PhpLogger\FileLogger as FileLogger;

$logger = new FileLogger(["info" => "[INFO]"], "w+", "test.log");

$logger->send('info', 'start listening');
