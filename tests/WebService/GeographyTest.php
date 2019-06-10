<?php
namespace WebService;

use Gam6itko\DpdCarrier\Enum\ServiceCode;
use Gam6itko\DpdCarrier\Type\DeliveryPoint;
use Gam6itko\DpdCarrier\Type\Geography\Address;
use Gam6itko\DpdCarrier\Type\Geography\City;
use Gam6itko\DpdCarrier\Type\Geography\GeoCoordinates;
use Gam6itko\DpdCarrier\Type\Geography\Limits;
use Gam6itko\DpdCarrier\Type\Geography\ParcelShop;
use Gam6itko\DpdCarrier\Type\Geography\Services;
use Gam6itko\DpdCarrier\Type\Geography\Terminal;
use Gam6itko\DpdCarrier\WebService\GeographyWebService;
use PHPUnit\Framework\TestCase;

/**
 * @covers GeographyWebService
 */
class GeographyTest extends TestCase
{
    public function testGetCitiesCashPay()
    {
        $result = $this->getDpdWebService()->getCitiesCashPay();

        self::assertNotEmpty($result);
        self::assertInstanceOf(City::class, $result[0]);
    }

    public function testGetParcelShops()
    {
        $point = (new DeliveryPoint())
            ->setCountryCode('RU')
            ->setRegionCode(77);
        $result = $this->getDpdWebService()->getParcelShops($point);
        self::assertNotEmpty($result);
        self::assertInstanceOf(ParcelShop::class, $result[0]);
        self::assertInstanceOf(Limits::class, $result[0]->getLimits());
    }

    public function testGetTerminalsSelfDelivery2()
    {
        $result = $this->getDpdWebService()->getTerminalsSelfDelivery2();
        self::assertNotEmpty($result);
        self::assertInstanceOf(Terminal::class, $result[0]);
        self::assertInstanceOf(Address::class, $result[0]->getAddress());
        self::assertInstanceOf(GeoCoordinates::class, $result[0]->getGeoCoordinates());
        self::assertInstanceOf(Services::class, $result[0]->getServices());
    }

    public function testGetStoragePeriod()
    {
        $result = $this->getDpdWebService()->getStoragePeriod('OEL', ServiceCode::PCL);
        self::assertNotEmpty($result);
        self::assertInstanceOf(Terminal::class, $result);
        self::assertInstanceOf(Services::class, $result->getServices()[0]);
    }

    protected function getDpdWebService()
    {
        if (empty($_SERVER['DPD_CLIENT_NUMBER']) || empty($_SERVER['DPD_CLIENT_KEY'])){
            throw new \LogicException('Env not set DPD_CLIENT_NUMBER or DPD_CLIENT_KEY');
        }
        return new GeographyWebService(getenv('DPD_CLIENT_NUMBER'), getenv('DPD_CLIENT_KEY'), true);
    }
}
