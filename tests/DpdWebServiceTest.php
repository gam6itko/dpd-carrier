<?php

use Gam6itko\DpdCarrier\DpdWebService;
use Gam6itko\DpdCarrier\Enum\OrderStatusName;
use Gam6itko\DpdCarrier\Enum\PaymentType;
use Gam6itko\DpdCarrier\Enum\ServiceCode;
use Gam6itko\DpdCarrier\Enum\ServiceVariant;
use Gam6itko\DpdCarrier\Type\Address;
use Gam6itko\DpdCarrier\Type\City;
use Gam6itko\DpdCarrier\Type\DeliveryOptions;
use Gam6itko\DpdCarrier\Type\DeliveryPoint;
use Gam6itko\DpdCarrier\Type\Header;
use Gam6itko\DpdCarrier\Type\Order;
use Gam6itko\DpdCarrier\Type\OrderStatus;
use Gam6itko\DpdCarrier\Type\Parcel;
use Gam6itko\DpdCarrier\Type\ParcelShop;
use Gam6itko\DpdCarrier\Type\ServiceCost;
use Gam6itko\DpdCarrier\Type\StateParcels;
use Gam6itko\DpdCarrier\Type\Terminal;
use PHPUnit\Framework\TestCase;

class DpdWebServiceTest extends TestCase
{
    /** @var OrderStatus */
    protected static $orderStatus;

    /** @var StateParcels */
    protected static $states;

    //<editor-fold desc="order2">
    public function testCreateOrder()
    {
        $senderAddress = (new Address())
            ->setTerminalCode('M13')
            ->setName('ACME LTD')
            ->setContactFio('John Doe')
            ->setContactPhone('123 012 301 20 12');

        $receiverAddress = (new Address())
            ->setName('John Lock')
            ->setContactFio('John Lock')
            ->setContactPhone('123456')
            ->setInstructions('fragile')
            ->setTerminalCode('OEL');

        $pickupDate = new \DateTime('next month monday');

        $header = (new Header())
            ->setDatePickup($pickupDate->format('Y-m-d'))
            ->setSenderAddress($senderAddress);
        $order = (new Order())
            ->setOrderNumberInternal('gam6itko/dpd-carrier/' . uniqid())
            ->setServiceCode(ServiceCode::PCL)
            ->setServiceVariant(ServiceVariant::TerminalToTerminal)
            ->setCargoNumPack(1)
            ->setCargoWeight(10.23)
            ->setCargoValue(0.45)
            ->setCargoRegistered(true)
            ->setCargoCategory('something special')
            ->setPaymentType(PaymentType::Receiver)
            ->setReceiverAddress($receiverAddress);

        $result = $this->getDpdWebService()->createOrder($header, $order);

        $this->assertNotEmpty($result);
        $this->assertInstanceOf(OrderStatus::class, $result);
        $this->assertEquals(OrderStatusName::OK, $result->getStatus());

        self::$orderStatus = $result;
    }

    public function testGetOrderStatus()
    {
        $result = $this->getDpdWebService()->getOrderStatus(self::$orderStatus->getOrderNumberInternal());

        $this->assertNotEmpty($result);
        $this->assertInstanceOf(OrderStatus::class, $result);
        $this->assertEquals(OrderStatusName::OK, $result->getStatus());
    }

    public function testCreateAddress()
    {
        $address = (new Address())
            ->setName('Красная площадь')
            ->setContactFio('Ленин')
            ->setContactPhone('+1917 11 07')
            ->setCode('X333')
            ->setCountryName('Россия')
            ->setCity('Москва')
            ->setStreet('Красная площадь')
            ->setNeedPass(false);

        $result = $this->getDpdWebService()->createAddress($address);

        $this->assertNotEmpty($result);
        $this->assertInstanceOf(\Gam6itko\DpdCarrier\Type\AddressStatus::class, $result);
        $this->assertEquals('address-error', $result->getStatus());
    }

    public function testGetInvoiceFile()
    {
        $result = $this->getDpdWebService()->getInvoiceFile(self::$orderStatus->getOrderNum());

        $this->assertNotEmpty($result);

        $filename = sys_get_temp_dir() . DIRECTORY_SEPARATOR . self::$orderStatus->getOrderNum() . '_invoice.pdf';
        file_put_contents($filename, $result);
    }

    public function testGetRegisterFile()
    {
        $pickupDate = new \DateTime('next month monday');
        $result = $this->getDpdWebService()->getRegisterFile($pickupDate->format('Y-m-d'));

        $this->assertNotEmpty($result);
    }

    public function testCancelOrder()
    {
        $result = $this->getDpdWebService()->cancelOrder(self::$orderStatus);

        $this->assertNotEmpty($result);
        $this->assertInstanceOf(OrderStatus::class, $result);
        $this->assertEquals(OrderStatusName::Canceled, $result->getStatus());
    }
    //</editor-fold>

    //<editor-fold desc="tracing">
    public function testGetStatesByClient()
    {
        $result = $this->getDpdWebService()->getStatesByClient();

        $this->assertNotEmpty($result);

        self::$states = $result;
    }

    public function testConfirm()
    {
        $result = $this->getDpdWebService()->confirm(self::$states->getDocId());

        $this->assertNotEmpty($result);
    }
    //</editor-fold>

    //<editor-fold desc="calculator2">
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
    //</editor-fold desc="calculator2">

    //<editor-fold desc="geography2">
    public function testGetCitiesCashPay()
    {
        $result = $this->getDpdWebService()->getCitiesCashPay();

        $this->assertNotEmpty($result);
        $this->assertInstanceOf(City::class, $result[0]);
    }

    public function testGetParcelShops()
    {
        $point = (new DeliveryPoint())
            ->setCountryCode('RU')
            ->setRegionCode(77);
        $result = $this->getDpdWebService()->getParcelShops($point);
        $this->assertNotEmpty($result);
        $this->assertInstanceOf(ParcelShop::class, $result[0]);
    }

    public function testGetTerminalsSelfDelivery2()
    {
        $result = $this->getDpdWebService()->getTerminalsSelfDelivery2();
        $this->assertNotEmpty($result);
        $this->assertInstanceOf(Terminal::class, $result[0]);
    }


    public function testGetStoragePeriod()
    {
        $result = $this->getDpdWebService()->getStoragePeriod('OEL', ServiceCode::PCL);
        $this->assertNotEmpty($result);
        $this->assertInstanceOf(Terminal::class, $result);
    }

    //</editor-fold desc="geography2">

    protected function getDpdWebService()
    {
        return new DpdWebService(getenv('DPD_CLIENT_NUMBER'), getenv('DPD_CLIENT_KEY'));
    }
}