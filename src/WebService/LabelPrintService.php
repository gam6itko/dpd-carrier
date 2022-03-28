<?php

namespace Gam6itko\DpdCarrier\WebService;

use Gam6itko\DpdCarrier\Enum\LabelFileFormat;
use Gam6itko\DpdCarrier\Enum\LabelPageSize;
use Gam6itko\DpdCarrier\Type\Order\OrderStatus;
use Gam6itko\DpdCarrier\Type\OrderLabels;
use Gam6itko\DpdCarrier\Type\OrderLabelsFile;

/**
 * @see https://ws.dpd.ru/services/label-print?xsd=1
 */
class LabelPrintService extends AbstractWebService
{
    protected function getWsdlTest(): string
    {
        return 'https://wstest.dpd.ru/services/label-print?wsdl';
    }

    protected function getWsdlProd(): string
    {
        return 'https://ws.dpd.ru/services/label-print?wsdl';
    }

    protected function getClassmap(): array
    {
        return [
            'dpdOrderLabelsFile' => OrderLabelsFile::class,
            'orderStatus'        => OrderStatus::class,
            'dpdOrderLabels'     => OrderLabels::class,
        ];
    }

    /**
     * Формирует файл с наклейками DPD.
     *
     * @param array  $orders     Массив с номерами заказа и количеством наклеек [['RU010659312' => 1]]
     * @param string $fileFormat Формат файла. Возможные значения: PDF, FP3
     * @param string $pageSize   Формат области печати. Возможные значения: A5, A6.
     *
     * @return OrderLabelsFile
     */
    public function createLabelFile(array $orders, string $fileFormat = LabelFileFormat::PDF, string $pageSize = LabelPageSize::A5)
    {
        $trueOrders = [];
        foreach ($orders as $orderNum => $parcelsNumber) {
            $trueOrders[] = [
                'orderNum'      => $orderNum,
                'parcelsNumber' => $parcelsNumber,
            ];
        }
        unset($orderNum, $parcelsNumber);

        $result = $this->doRequest(__FUNCTION__, [
            'order'      => $trueOrders,
            'fileFormat' => $fileFormat,
            'pageSize'   => $pageSize,
        ], 'getLabelFile');

        return $result;
    }

    /**
     * Получить параметры для печати наклейки.
     *
     * @param string $orderNum  Номер заказа DPD
     * @param string $parcelNum Номер посылки в информационной системе клиента. Order.Parcel.number
     *
     * @return OrderLabels
     */
    public function createParcelLabel(string $orderNum, ?string $parcelNum = null)
    {
        $result = $this->doRequest(__FUNCTION__, [
            'parcel' => [
                'orderNum'  => $orderNum,
                'parcelNum' => $parcelNum,
            ],
        ], 'getLabel');

        return $result->order[0];
    }
}
