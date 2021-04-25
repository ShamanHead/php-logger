<?php
require_once("vendor/autoload.php");

use ShamanHead\PhpLogger\LoggerFactory as LoggerFactory;
use ShamanHead\PhpLogger\ArrayLogger as ArrayLogger;
use ShamanHead\PhpLogger\FileLogger as FileLogger;

$loggerFactory = new LoggerFactory;
$loggerFactory->setFlowType('file');
$loggerFactory->setPrefixes(['info' => '[INFO]']);
$loggerFactory->setFileName('test.log');
$logger = $loggerFactory->build();

$logger->send('info', 'start listening');
print_r($logger->get()->toString());
