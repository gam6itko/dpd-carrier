<?php

namespace Gam6itko\DpdCarrier\WebService;

class NLWebService extends AbstractWebService
{
    protected function getWsdlTest(): string
    {
        return 'https://wstest.dpd.ru/services/nl?wsdl';
    }

    protected function getWsdlProd(): string
    {
        return 'https://ws.dpd.ru/services/nl?wsdl';
    }

    /**
     * Отчет о предварительной стоимости перевозки за указный период.
     *
     * @return mixed
     */
    public function getNLAmount(\DateTimeInterface $dateFrom, \DateTimeInterface $dateTo)
    {
        $result = $this->doRequest(__FUNCTION__, [
            'dateFrom' => $dateFrom->format('Y-m-d'),
            'dateTo'   => $dateTo->format('Y-m-d'),
        ], 'arg0');

        return $result; //todo if empty
    }

    /**
     * Отчет об окончательной стоимости перевозки за указный период.
     *
     * @return mixed
     */
    public function getNLInvoice(\DateTimeInterface $dateFrom, \DateTimeInterface $dateTo)
    {
        $result = $this->doRequest(__FUNCTION__, [
            'dateFrom' => $dateFrom->format('Y-m-d'),
            'dateTo'   => $dateTo->format('Y-m-d'),
        ], 'arg0');

        return $result; //todo if empty
    }

    /**
     * Получение сканобраза подписанной получателем накладной.
     *
     * @param      $orderNum
     * @param null $year
     *
     * @return mixed
     */
    public function getWaybill(string $orderNum, ?int $year = null)
    {
        if (empty($year)) {
            $year = (int) date('YYYY');
        }

        $result = $this->doRequest(__FUNCTION__, [
            'orderNum' => $orderNum,
            'year'     => $year,
        ], 'getWaybill');

        return $result;
    }
}
