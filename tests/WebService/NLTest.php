<?php
namespace WebService;

use Gam6itko\DpdCarrier\Type\Tracing\StateParcels;
use Gam6itko\DpdCarrier\WebService\NLWebService;
use PHPUnit\Framework\TestCase;

/**
 * @covers NLWebService
 */
class NLTest extends TestCase
{
    /** @var StateParcels */
    protected static $states;

    public function testNlAmount()
    {
        $result = $this->getDpdWebService()->getNLAmount(new \DateTime('2018-01-01'), new \DateTime());

        $this->assertNotEmpty($result);
    }

    public function testNLInvoice()
    {
        $result = $this->getDpdWebService()->getNLInvoice(new \DateTime('2018-01-01'), new \DateTime());

        $this->assertNotEmpty($result);
    }

    protected function getDpdWebService()
    {
        if (empty($_SERVER['DPD_CLIENT_NUMBER']) || empty($_SERVER['DPD_CLIENT_KEY'])){
            throw new \LogicException('Env not set DPD_CLIENT_NUMBER or DPD_CLIENT_KEY');
        }
        return new NLWebService(getenv('DPD_CLIENT_NUMBER'), getenv('DPD_CLIENT_KEY'), true);
    }
}
