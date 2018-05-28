<?php

namespace Gam6itko\DpdCarrier\WebService;

class NLWebService extends AbstractWebService
{
    protected function getWsdlTest()
    {
        return 'http://wstest.dpd.ru/services/nl?wsdl';
    }

    protected function getWsdlProd()
    {
        return 'http://ws.dpd.ru/services/nl?wsdl';
    }

    /**
     * Отчет о предварительной стоимости перевозки за указный период.
     * @param \DateTime $dateFrom
     * @param \DateTime $dateTo
     * @return mixed
     */
    public function getNLAmount(\DateTime $dateFrom, \DateTime $dateTo)
    {
        $result = $this->doRequest(__FUNCTION__, [
            'dateFrom' => $dateFrom->format('Y-m-d'),
            'dateTo'   => $dateTo->format('Y-m-d'),
        ], 'arg0');

        return $result[0];
    }

    /**
     * Отчет об окончательной стоимости перевозки за указный период.
     * @param \DateTime $dateFrom
     * @param \DateTime $dateTo
     * @return mixed
     */
    public function getNLInvoice(\DateTime $dateFrom, \DateTime $dateTo)
    {
        $result = $this->doRequest(__FUNCTION__, [
            'dateFrom' => $dateFrom->format('Y-m-d'),
            'dateTo'   => $dateTo->format('Y-m-d'),
        ], 'arg0');

        return $result[0];
    }

    /**
     * Получение сканобраза подписанной получателем накладной
     * @param $orderNum
     * @param null $year
     * @return mixed
     */
    public function getWaybill($orderNum, $year = null)
    {
        if (empty($year)) {
            $year = date('YYYY');
        }

        $result = $this->doRequest(__FUNCTION__, [
            'orderNum' => $orderNum,
            'year'     => $year,
        ], 'getWaybill');

        return $result[0];
    }
}