<?php
require_once("vendor/autoload.php");

use ShamanHead\PhpLogger\LoggerFactory as LoggerFactory;
use ShamanHead\PhpLogger\ArrayLogger as ArrayLogger;

$logger = new ArrayLogger(["info" => "[INFO]"]);

$logger->send('info', 'start listening');
$logs = $logger->get();
print_r($logs->toString());
