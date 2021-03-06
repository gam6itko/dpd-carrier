<?php

namespace Gam6itko\DpdCarrier\Tests\Type;

use Gam6itko\DpdCarrier\Type\DeliveryOptions;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Gam6itko\DpdCarrier\Type\DeliveryOptions
 */
class DeliveryOptionsTest extends TestCase
{
    /**
     * @dataProvider dataSetServiceCode
     *
     * @param $set
     * @param $expected
     */
    public function testSetServiceCode($set, $expected)
    {
        $do = new DeliveryOptions();
        $do->setServiceCode($set);
        self::assertEquals($expected, $do->getServiceCode());
    }

    public function dataSetServiceCode()
    {
        return [
            ['PCL, MAX', 'PCL,MAX'],
            ['PCL MAX csm ', 'PCL,MAX,CSM'],
            ['', ''],
            [['PCL', 'MAX'], 'PCL,MAX'],
        ];
    }
}
