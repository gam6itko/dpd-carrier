<?php
namespace WebService;

use Gam6itko\DpdCarrier\Enum\OrderStatusName;
use Gam6itko\DpdCarrier\Enum\PaymentType;
use Gam6itko\DpdCarrier\Enum\ServiceCode;
use Gam6itko\DpdCarrier\Enum\ServiceVariant;
use Gam6itko\DpdCarrier\Type\Order\ClientAddress;
use Gam6itko\DpdCarrier\Type\Order\ClientAddressStatus;
use Gam6itko\DpdCarrier\Type\Order\Header;
use Gam6itko\DpdCarrier\Type\Order\Order;
use Gam6itko\DpdCarrier\Type\Order\OrderStatus;
use Gam6itko\DpdCarrier\Type\Parcel;
use Gam6itko\DpdCarrier\WebService\OrderWebService;
use PHPUnit\Framework\TestCase;

/**
 * Class OrderTest
 * @package WebService
 * @covers OrderWebService
 */
class OrderTest extends TestCase
{
    /** @var OrderStatus */
    protected static $orderStatus;

    public function testCreateOrder()
    {
        $senderAddress = (new ClientAddress())
            ->setTerminalCode('M13')
            ->setName('ACME LTD')
            ->setContactFio('John Doe')
            ->setContactPhone('123 012 301 20 12');

        $receiverAddress = (new ClientAddress())
            ->setName('John Lock')
            ->setContactFio('John Lock')
            ->setContactPhone('123456')
            ->setInstructions('fragile')
            ->setTerminalCode('OEL');

        $pickupDate = new \DateTime('next month monday');

        $parcel = (new Parcel(1, 1, 1, 1))
            ->setNumber('101088'); // используется в LabelPrintService::createParcelLabel

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
            ->setPaymentType(PaymentType::ReceiverCash)
            ->setReceiverAddress($receiverAddress)
            ->addParcel($parcel);

        $result = $this->getDpdWebService()->createOrder($header, $order);

        self::assertNotEmpty($result);
        self::assertInstanceOf(OrderStatus::class, $result);
        self::assertEquals(OrderStatusName::OK, $result->getStatus());

        self::$orderStatus = $result;
    }

    public function testGetOrderStatus()
    {
        $result = $this->getDpdWebService()->getOrderStatus(self::$orderStatus->getOrderNumberInternal());

        self::assertNotEmpty($result);
        self::assertInstanceOf(OrderStatus::class, $result);
        self::assertEquals(OrderStatusName::OK, $result->getStatus());
    }

    public function testCreateAddress()
    {
        $address = (new ClientAddress())
            ->setName('Красная площадь')
            ->setContactFio('Ленин')
            ->setContactPhone('+1917 11 07')
            ->setCode('X333')
            ->setCountryName('Россия')
            ->setCity('Москва')
            ->setStreet('Красная площадь')
            ->setNeedPass(false);

        $result = $this->getDpdWebService()->createAddress($address);

        self::assertNotEmpty($result);
        self::assertInstanceOf(ClientAddressStatus::class, $result);
        self::assertEquals('address-error', $result->getStatus());
    }

    public function testGetInvoiceFile()
    {
        $result = $this->getDpdWebService()->getInvoiceFile(self::$orderStatus->getOrderNum());

        self::assertNotEmpty($result);

        $filename = sys_get_temp_dir() . DIRECTORY_SEPARATOR . self::$orderStatus->getOrderNum() . '_invoice.pdf';
        file_put_contents($filename, $result);
    }

    /**
     * @depends testCreateOrder
     */
    public function testGetRegisterFile()
    {
        $pickupDate = new \DateTime('next month monday');
        $result = $this->getDpdWebService()->getRegisterFile($pickupDate->format('Y-m-d'));

        self::assertNotEmpty($result);
    }

    public function testCancelOrder()
    {
        $result = $this->getDpdWebService()->cancelOrder(self::$orderStatus);

        self::assertNotEmpty($result);
        self::assertInstanceOf(OrderStatus::class, $result);
        self::assertEquals(OrderStatusName::Canceled, $result->getStatus());
    }

    protected function getDpdWebService()
    {
        if (empty($_SERVER['DPD_CLIENT_NUMBER']) || empty($_SERVER['DPD_CLIENT_KEY'])) {
            throw new \LogicException('Env not set DPD_CLIENT_NUMBER or DPD_CLIENT_KEY');
        }
        return new OrderWebService(getenv('DPD_CLIENT_NUMBER'), getenv('DPD_CLIENT_KEY'), true);
    }
}
