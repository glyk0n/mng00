<?php

require_once __DIR__.'/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;


$logger = new Logger('main');
$logger->pushHandler(new StreamHandler(__DIR__ . '/../logs/app.log', Logger::DEBUG));
//$logger->pushHandler(new StreamHandler('php://stderr', Logger::WARNING));

$logger->info('********************');
$logger->info('Start test');
$logger->info('********************');



$i=0;

while($i < 10)
{
	echo $i;
	$logger->info('Set echo ' . $i);
	$i++;
}



$logger->info('********************');
$logger->info('End test');
$logger->info('********************');