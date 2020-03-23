<?php

namespace Gam6itko\DpdCarrier\WebService;

use Gam6itko\DpdCarrier\Type\DeliveryOptions;
use Gam6itko\DpdCarrier\Type\DeliveryPoint;
use Gam6itko\DpdCarrier\Type\ExtraService;
use Gam6itko\DpdCarrier\Type\Geography\Address;
use Gam6itko\DpdCarrier\Type\Geography\City;
use Gam6itko\DpdCarrier\Type\Geography\GeoCoordinates;
use Gam6itko\DpdCarrier\Type\Geography\Limits;
use Gam6itko\DpdCarrier\Type\Geography\ParcelShop;
use Gam6itko\DpdCarrier\Type\Geography\Schedule;
use Gam6itko\DpdCarrier\Type\Geography\Services;
use Gam6itko\DpdCarrier\Type\Geography\Terminal;
use Gam6itko\DpdCarrier\Type\Geography\TimeTable;
use Gam6itko\DpdCarrier\Type\Parameter;
use Gam6itko\DpdCarrier\Type\Parcel;

class GeographyWebService extends AbstractWebService
{
    protected function getWsdlTest(): string
    {
        return 'http://wstest.dpd.ru/services/geography2?wsdl';
    }

    protected function getWsdlProd(): string
    {
        return 'http://ws.dpd.ru/services/geography2?wsdl';
    }

    protected function getClassmap(): array
    {
        return [
            'extraService'           => ExtraService::class,
            'parcel'                 => Parcel::class,
            'parameter'              => Parameter::class,
            'address'                => Address::class,
            'limits'                 => Limits::class,
            'city'                   => City::class,
            'geoCoordinates'         => GeoCoordinates::class,
            'extraServiceParam'      => Parameter::class,
            'parcelShop'             => ParcelShop::class,
            'terminalSelf'           => Terminal::class,
            'terminalStoragePeriods' => Terminal::class,
            'schedule'               => Schedule::class,
            'services'               => Services::class,
            'storagePeriod'          => Services::class,
            'timetable'              => TimeTable::class,
        ];
    }

    /**
     * @return City[]
     */
    public function getCitiesCashPay(string $countryCode = 'RU')
    {
        return $this->doRequest(__FUNCTION__, ['countryCode' => $countryCode]);
    }

    /**
     * @return Terminal[]
     */
    public function getTerminalsSelfDelivery2()
    {
        $result = $this->doRequest(__FUNCTION__, [], null);

        return $result->terminal;
    }

    /**
     * @param DeliveryPoint $point
     *
     * @return ParcelShop[]
     */
    public function getParcelShops(?DeliveryPoint $point = null)
    {
        $result = $this->doRequest(__FUNCTION__, ($point ? $point->toArray() : []));

        return $result->parcelShop;
    }

    /**
     * @param $terminalCode
     * @param $serviceCode
     *
     * @return Terminal
     */
    public function getStoragePeriod(string $terminalCode, string $serviceCode)
    {
        $result = $this->doRequest(__FUNCTION__, [
            'terminalCode' => $terminalCode,
            'serviceCode'  => $serviceCode,
        ]);

        return $result->terminal[0];
    }

    public function getPossibleExtraService(DeliveryPoint $pickup, DeliveryPoint $delivery, DeliveryOptions $options)
    {
        return $this->doRequest(__FUNCTION__, array_merge([
            'pickup'   => $pickup,
            'delivery' => $delivery,
        ], $options->toArray()));
    }
}
