<?php

use Gam6itko\DpdCarrier\WebService\OrderWebService;

require_once __DIR__ . '/vendor/autoload.php';



$svc = new OrderWebService('1001035206', 'C6F99770D57AC6F1C560343189A1D5F9729A7AF5', true); //3rd


print 'OrderStatus structure:' . PHP_EOL;
print json_encode($result, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . PHP_EOL . PHP_EOL;
