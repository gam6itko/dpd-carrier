<?php

use Gam6itko\DpdCarrier\Type\Calculator\ServiceCost;
use Gam6itko\DpdCarrier\Type\DeliveryOptions;
use Gam6itko\DpdCarrier\Type\DeliveryPoint;
use Gam6itko\DpdCarrier\Type\Parcel;
use Gam6itko\DpdCarrier\WebService\CalculatorWebService;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function testGetServiceCost2()
    {
        $pickup = new DeliveryPoint(49694102);
        $delivery = new DeliveryPoint(195664561);
        $options = (new DeliveryOptions(true, true))
            ->setWeight(7.88)
            ->setVolume(0.04092)
            ->setDeclaredValue(34999);

        $result = $this->getDpdWebService()->getServiceCost2($pickup, $delivery, $options);

        $this->assertNotEmpty($result);
        $this->assertInstanceOf(ServiceCost::class, $result[0]);
    }

    public function testGetServiceCostByParcels2()
    {
        $pickup = new DeliveryPoint(49694102);
        $delivery = new DeliveryPoint(195664561);
        $options = (new DeliveryOptions(true, true))
            ->setWeight(7.88)
            ->setVolume(0.04092)
            ->setDeclaredValue(34999);
        $parcel = new Parcel(5, 20, 20, 20, 20);

        $result = $this->getDpdWebService()->getServiceCostByParcels2($pickup, $delivery, $options, $parcel);

        $this->assertNotEmpty($result);
        $this->assertInstanceOf(ServiceCost::class, $result[0]);
    }

    protected function getDpdWebService()
    {
        return new CalculatorWebService(getenv('DPD_CLIENT_NUMBER'), getenv('DPD_CLIENT_KEY'), true);
    }
}