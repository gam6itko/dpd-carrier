<?php
namespace WebService;

use Gam6itko\DpdCarrier\Type\Tracing\StateParcels;
use Gam6itko\DpdCarrier\WebService\TracingWebService;
use PHPUnit\Framework\TestCase;

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

//    public function testConfirm()
//    {
//        $result = $this->getDpdWebService()->confirm(self::$states->getDocId());
//
//        $this->assertNotEmpty($result);
//    }

    protected function getDpdWebService()
    {
        return new TracingWebService(getenv('DPD_CLIENT_NUMBER'), getenv('DPD_CLIENT_KEY'), true);
    }
}
