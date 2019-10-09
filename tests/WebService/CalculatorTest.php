<?php

namespace Gam6itko\DpdCarrier\Tests\WebService;

use Gam6itko\DpdCarrier\Type\Calculator\ServiceCost;
use Gam6itko\DpdCarrier\Type\DeliveryOptions;
use Gam6itko\DpdCarrier\Type\DeliveryPoint;
use Gam6itko\DpdCarrier\Type\Parcel;
use Gam6itko\DpdCarrier\WebService\CalculatorWebService;

/**
 * @coversDefaultClass  \Gam6itko\DpdCarrier\WebService\CalculatorWebService
 */
class CalculatorTest extends AbstractDpdServiceTestCase
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

        self::assertNotEmpty($result);
        self::assertInstanceOf(ServiceCost::class, $result[0]);
    }

    public function testGetServiceCostByParcels2()
    {
        $pickup = new DeliveryPoint(49694102);
        $delivery = new DeliveryPoint(195664561);
        $options = (new DeliveryOptions(true, true))
            ->setWeight(7.88)
            ->setVolume(0.04092)
            ->setDeclaredValue(34999);
        $parcel = new Parcel(5, 20, 20, 20);

        $result = $this->getDpdWebService()->getServiceCostByParcels2($pickup, $delivery, $options, [$parcel]);

        self::assertNotEmpty($result);
        self::assertInstanceOf(ServiceCost::class, $result[0]);
    }

    /**
     * @expectedException \SoapFault
     * @expectedExceptionMessage Неоднозначно задан населенный пункт
     */
    public function testExceptionGetServiceCostCityName()
    {
        $pickup = new DeliveryPoint();
        $pickup
            ->setCityName('Москва');
        $delivery = new DeliveryPoint();
        $delivery
            ->setCityName('Челябинск');
        $options = (new DeliveryOptions(true, true))
            ->setWeight(7.88)
            ->setVolume(0.04092)
            ->setDeclaredValue(34999);

        $result = $this->getDpdWebService()->getServiceCost2($pickup, $delivery, $options);

        self::assertNotEmpty($result);
        self::assertInstanceOf(ServiceCost::class, $result[0]);
    }

    public function testGetServiceCostCityName()
    {
        $pickup = new DeliveryPoint();
        $pickup
            ->setCountryCode('RU')
            ->setRegionCode(77)
            ->setCityName('Москва');
        $delivery = new DeliveryPoint();
        $delivery
            ->setCountryCode('RU')
            ->setRegionCode(74)
            ->setCityName('Челябинск');
        $options = (new DeliveryOptions(true, true))
            ->setWeight(7.88)
            ->setVolume(0.04092)
            ->setDeclaredValue(34999);

        $result = $this->getDpdWebService()->getServiceCost2($pickup, $delivery, $options);

        self::assertNotEmpty($result);
        self::assertInstanceOf(ServiceCost::class, $result[0]);
    }

    /**
     * @return CalculatorWebService
     */
    protected function getDpdWebService()
    {
        return $this->createService(CalculatorWebService::class);
    }
}
