<?php

use Gam6itko\DpdCarrier\DpdWebService;
use Gam6itko\DpdCarrier\Enum\ServiceType;
use Gam6itko\DpdCarrier\Type\City;
use Gam6itko\DpdCarrier\Type\DeliveryOptions;
use Gam6itko\DpdCarrier\Type\DeliveryPoint;
use Gam6itko\DpdCarrier\Type\Parcel;
use Gam6itko\DpdCarrier\Type\ServiceCost;
use PHPUnit\Framework\TestCase;

class DpdWebServiceTest extends TestCase
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

    public function testGetCitiesCashPay()
    {
        $result = $this->getDpdWebService()->getCitiesCashPay();

        $this->assertNotEmpty($result);
        $this->assertInstanceOf(City::class, $result[0]);
    }

    protected function getDpdWebService($test = true)
    {
        return new DpdWebService(getenv('DPD_CLIENT_NUMBER'), getenv('DPD_CLIENT_KEY'));
    }
}