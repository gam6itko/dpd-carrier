<?php
namespace WebService;

use Gam6itko\DpdCarrier\Type\Tracing\StateParcels;
use Gam6itko\DpdCarrier\WebService\TracingWebService;
use PHPUnit\Framework\TestCase;

/**
 * @covers TracingWebService
 */
class TracingTest extends TestCase
{
    /** @var StateParcels */
    protected static $states;

    public function testGetStatesByClient()
    {
        $result = $this->getDpdWebService()->getStatesByClient();

        $this->assertNotEmpty($result);

        self::$states = $result;
    }

    public function testGetStatesByDPDOrder()
    {
        $result = $this->getDpdWebService()->getStatesByDPDOrder('RU010658425');
        self::assertNotEmpty($result);
    }

    protected function getDpdWebService()
    {
        if (empty($_SERVER['DPD_CLIENT_NUMBER']) || empty($_SERVER['DPD_CLIENT_KEY'])){
            throw new \LogicException('Env not set DPD_CLIENT_NUMBER or DPD_CLIENT_KEY');
        }
        return new TracingWebService(getenv('DPD_CLIENT_NUMBER'), getenv('DPD_CLIENT_KEY'), true);
    }
}
