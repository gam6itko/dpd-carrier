<?php

namespace Gam6itko\DpdCarrier\Tests\WebService;

use Gam6itko\DpdCarrier\Enum\LabelFileFormat;
use Gam6itko\DpdCarrier\Enum\LabelPageSize;
use Gam6itko\DpdCarrier\Type\OrderLabels;
use Gam6itko\DpdCarrier\Type\OrderLabelsFile;
use Gam6itko\DpdCarrier\WebService\LabelPrintService;

/**
 * @covers \LabelPrintService
 */
class LabelPrintTest extends AbstractDpdServiceTestCase
{
    public function testCreateLabelFile()
    {
        $result = $this->getDpdWebService()->createLabelFile(['RU010659311' => 1, 'RU010659312' => 2], LabelFileFormat::PDF, LabelPageSize::A6);
        self::assertNotEmpty($result);
        self::assertInstanceOf(OrderLabelsFile::class, $result);
        self::assertCount(2, $result->getOrderStatuses());
        self::assertNotEmpty($result->getFileData());

        //file_put_contents(__DIR__ . '/../../testCreateLabelFile.pdf', $result->getFileData());
    }

    public function testCreateParcelLabel()
    {
        $result = $this->getDpdWebService()->createParcelLabel('RU010659346', '101088');
        self::assertNotEmpty($result);
        self::assertInstanceOf(OrderLabels::class, $result);
    }

    /**
     * @return LabelPrintService
     */
    protected function getDpdWebService()
    {
        return $this->createService(LabelPrintService::class);
    }
}
