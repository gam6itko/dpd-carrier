<?php

namespace Gam6itko\DpdCarrier\Tests\WebService;

use Gam6itko\DpdCarrier\Type\Tracing\StateParcels;
use Gam6itko\DpdCarrier\WebService\TracingWebService;

/**
 * @coversDefaultClass \Gam6itko\DpdCarrier\WebService\TracingWebService
 */
class TracingTest extends AbstractDpdServiceTestCase
{
    /** @var StateParcels */
    protected static $states;

    /**
     * @covers ::getStatesByClient
     */
    public function testGetStatesByClient()
    {
        $result = $this->getDpdWebService()->getStatesByClient();

        self::assertNotEmpty($result);

        self::$states = $result;
    }

    public function testGetEvents()
    {
        $result = $this->getDpdWebService()->getEvents(new \DateTime('2019-08-10'), new \DateTime('2019-08-13'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::getStatesByDPDOrder
     */
    public function testGetStatesByDPDOrder()
    {
        $result = $this->getDpdWebService()->getStatesByDPDOrder('RU010658425');
        self::assertNotEmpty($result);
    }

    /**
     * @return TracingWebService
     */
    protected function getDpdWebService()
    {
        return $this->createService(TracingWebService::class);
    }
}
