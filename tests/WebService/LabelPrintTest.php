<?php
namespace WebService;

use Gam6itko\DpdCarrier\Enum\LabelFileFormat;
use Gam6itko\DpdCarrier\Enum\LabelPageSize;
use Gam6itko\DpdCarrier\Type\Order\OrderStatus;
use Gam6itko\DpdCarrier\Type\OrderLabels;
use Gam6itko\DpdCarrier\Type\OrderLabelsFile;
use Gam6itko\DpdCarrier\WebService\LabelPrintService;
use PHPUnit\Framework\TestCase;

/**
 * @covers LabelPrintService
 */
class LabelPrintTest extends TestCase
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

    protected function getDpdWebService()
    {
        if (empty($_SERVER['DPD_CLIENT_NUMBER']) || empty($_SERVER['DPD_CLIENT_KEY'])) {
            throw new \LogicException('Env not set DPD_CLIENT_NUMBER or DPD_CLIENT_KEY');
        }
        return new LabelPrintService(getenv('DPD_CLIENT_NUMBER'), getenv('DPD_CLIENT_KEY'), true);
    }
}