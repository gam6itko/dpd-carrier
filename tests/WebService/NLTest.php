<?php

use Gam6itko\DpdCarrier\Type\Tracing\StateParcels;
use Gam6itko\DpdCarrier\WebService\NLWebService;

/**
 * @covers NLWebService
 */
class NLTest extends AbstractDpdServiceTestCase
{
    /** @var StateParcels */
    protected static $states;

    public function testNlAmount()
    {
        $result = $this->getDpdWebService()->getNLAmount(new \DateTime('2018-01-01'), new \DateTime());

        self::assertNotEmpty($result);
    }

    public function testNLInvoice()
    {
        $result = $this->getDpdWebService()->getNLInvoice(new \DateTime('2018-01-01'), new \DateTime());

        self::assertNotEmpty($result);
    }

    /**
     * @return NLWebService
     */
    protected function getDpdWebService()
    {
        return $this->createService(NLWebService::class);
    }
}
