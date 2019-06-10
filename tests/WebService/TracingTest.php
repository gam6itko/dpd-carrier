<?php

use Gam6itko\DpdCarrier\Type\Tracing\StateParcels;
use Gam6itko\DpdCarrier\WebService\TracingWebService;

/**
 * @covers TracingWebService
 */
class TracingTest extends AbstractDpdServiceTestCase
{
    /** @var StateParcels */
    protected static $states;

    public function testGetStatesByClient()
    {
        $result = $this->getDpdWebService()->getStatesByClient();

        self::assertNotEmpty($result);

        self::$states = $result;
    }

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
