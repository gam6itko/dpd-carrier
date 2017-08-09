<?php

use Gam6itko\DpdCarrier\DpdWebService;
use Gam6itko\DpdCarrier\Type\DeliveryOptions;
use Gam6itko\DpdCarrier\Type\DeliveryPoint;
use PHPUnit\Framework\TestCase;

class DpdWebServiceTest extends TestCase
{
    public function testGetServiceCost2()
    {
        $dpdWebService = new DpdWebService('1001035206', 'C6F99770D57AC6F1C560343189A1D5F9729A7AF5');

        $pickup = new DeliveryPoint(49694102);
        $delivery = new DeliveryPoint(195664561);
        $options = (new DeliveryOptions())
            ->setServiceCode("PCL")
            ->setSelfPickup(true)
            ->setSelfDelivery(true)
            ->setWeight(7.88)
            ->setVolume(0.04092)
            ->setDeclaredValue(34999);

        $result = $dpdWebService->getServiceCost2($pickup, $delivery, $options);
    }
}