<?php

namespace Gam6itko\DpdCarrier\WebService;

use Gam6itko\DpdCarrier\Type\ExtraService;
use Gam6itko\DpdCarrier\Type\Order\Order;
use Gam6itko\DpdCarrier\Type\Parameter;
use Gam6itko\DpdCarrier\Type\Parcel;
use Gam6itko\DpdCarrier\Type\Tracing\StateParcel;
use Gam6itko\DpdCarrier\Type\Tracing\StateParcels;

class TracingWebService extends AbstractWebService
{
    /**
     * @return mixed
     */
    protected function getWsdlTest()
    {
        return 'http://wstest.dpd.ru/services/tracing?wsdl';
    }

    /**
     * @return mixed
     */
    protected function getWsdlProd()
    {
        return 'http://ws.dpd.ru/services/tracing?wsdl';
    }

    /**
     * @return array
     */
    protected function getClassmap()
    {
        return [
            'extraService' => ExtraService::class,
            'parcel' => Parcel::class,
            'parameter' => Parameter::class,
            'stateParcels' => StateParcels::class,
            'stateParcel' => StateParcel::class,
        ];
    }

    /**
     * @return StateParcels
     */
    public function getStatesByClient()
    {
        return $this->doRequest(__FUNCTION__);
    }

    /**
     * @param $docId
     *
     * @return array|mixed|\stdClass
     */
    public function confirm($docId)
    {
        return $this->doRequest(__FUNCTION__, ['docId' => $docId]);
    }

    /**
     * @param $clientOrderNr
     * @param null $pickupDate
     *
     * @return StateParcels
     */
    public function getStatesByClientOrder($clientOrderNr, $pickupDate = null)
    {
        return $this->doRequest(__FUNCTION__, [
            'clientOrderNr' => $clientOrderNr,
            'pickupDate' => $pickupDate,
        ]);
    }

    /**
     * @param \DateTimeInterface $dateFrom
     * @param \DateTimeInterface $dateTo
     * @param int                $maxRowCount
     *
     * @return array|mixed|\stdClass
     */
    public function getEvents(\DateTimeInterface $dateFrom, \DateTimeInterface $dateTo, $maxRowCount = 50)
    {
        return $this->doRequest(__FUNCTION__, [
            'dateFrom' => $dateFrom,
            'dateTo' => $dateTo,
            'maxRowCount' => $maxRowCount,
        ]);
    }

    /**
     * @param $clientOrderNr
     * @param null $pickupDate
     *
     * @return StateParcels
     */
    public function getStatesByClientParcel($clientOrderNr, $pickupDate = null)
    {
        return $this->doRequest(__FUNCTION__, [
            'clientOrderNr' => $clientOrderNr,
            'pickupDate' => $pickupDate,
        ]);
    }

    /**
     * @param $dpdOrderNr
     * @param null $pickupYear
     *
     * @return StateParcels
     */
    public function getStatesByDPDOrder($dpdOrderNr, $pickupYear = null)
    {
        return $this->doRequest(__FUNCTION__, [
            'dpdOrderNr' => $dpdOrderNr,
            'pickupYear' => $pickupYear,
        ]);
    }

    public function getTrakingOrderLink()
    {
        //todo
    }
}
