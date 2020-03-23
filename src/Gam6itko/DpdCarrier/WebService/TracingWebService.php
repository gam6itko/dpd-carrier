<?php

namespace Gam6itko\DpdCarrier\WebService;

use Gam6itko\DpdCarrier\Type\ExtraService;
use Gam6itko\DpdCarrier\Type\Parameter;
use Gam6itko\DpdCarrier\Type\Parcel;
use Gam6itko\DpdCarrier\Type\Tracing\StateParcel;
use Gam6itko\DpdCarrier\Type\Tracing\StateParcels;

class TracingWebService extends AbstractWebService
{
    /**
     * @return mixed
     */
    protected function getWsdlTest(): string
    {
        return 'http://wstest.dpd.ru/services/tracing?wsdl';
    }

    /**
     * @return mixed
     */
    protected function getWsdlProd(): string
    {
        return 'http://ws.dpd.ru/services/tracing?wsdl';
    }

    protected function getClassmap(): array
    {
        return [
            'extraService' => ExtraService::class,
            'parcel'       => Parcel::class,
            'parameter'    => Parameter::class,
            'stateParcels' => StateParcels::class,
            'stateParcel'  => StateParcel::class,
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
     * @param                           $clientOrderNr
     * @param \DateTimeInterface|string $pickupDate
     *
     * @return StateParcels
     */
    public function getStatesByClientOrder(string $clientOrderNr, $pickupDate = null)
    {
        if ($pickupDate instanceof \DateTimeInterface) {
            $pickupDate = $pickupDate->format('Y-m-d');
        }

        return $this->doRequest(__FUNCTION__, [
            'clientOrderNr' => $clientOrderNr,
            'pickupDate'    => $pickupDate,
        ]);
    }

    /**
     * @param                           $clientOrderNr
     * @param \DateTimeInterface|string $pickupDate
     *
     * @return StateParcels
     */
    public function getStatesByClientParcel(string $clientOrderNr, $pickupDate = null)
    {
        if ($pickupDate instanceof \DateTimeInterface) {
            $pickupDate = $pickupDate->format('Y-m-d');
        }

        return $this->doRequest(__FUNCTION__, [
            'clientOrderNr' => $clientOrderNr,
            'pickupDate'    => $pickupDate,
        ]);
    }

    /**
     * @param      $dpdOrderNr
     * @param null $pickupYear
     *
     * @return StateParcels
     */
    public function getStatesByDPDOrder(string $dpdOrderNr, ?int $pickupYear = null)
    {
        return $this->doRequest(__FUNCTION__, [
            'dpdOrderNr' => $dpdOrderNr,
            'pickupYear' => $pickupYear,
        ]);
    }
}
