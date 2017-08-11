<?php
namespace Gam6itko\DpdCarrier\WebService;

use Gam6itko\DpdCarrier\Type\Calculator\ServiceCost;
use Gam6itko\DpdCarrier\Type\DeliveryOptions;
use Gam6itko\DpdCarrier\Type\DeliveryPoint;
use Gam6itko\DpdCarrier\Type\ExtraService;
use Gam6itko\DpdCarrier\Type\Parameter;
use Gam6itko\DpdCarrier\Type\Parcel;

class CalculatorWebService extends AbstractWebService
{
    /**
     * @return mixed
     */
    protected function getWsdlTest()
    {
        return 'http://wstest.dpd.ru/services/calculator2?wsdl';
    }

    /**
     * @return mixed
     */
    protected function getWsdlProd()
    {
        return 'http://ws.dpd.ru/services/calculator2?wsdl';
    }

    /**
     * @return array
     */
    protected function getClassmap()
    {
        return [
            'extraService' => ExtraService::class,
            'parcel'       => Parcel::class,
            'parameter'    => Parameter::class,
            'serviceCost'  => ServiceCost::class,
        ];
    }


    /**
     * @param DeliveryPoint $pickup
     * @param DeliveryPoint $delivery
     * @param DeliveryOptions $options
     * @return ServiceCost[]
     */
    public function getServiceCost2(DeliveryPoint $pickup, DeliveryPoint $delivery, DeliveryOptions $options)
    {
        return $this->doRequest(__FUNCTION__, array_merge([
            'pickup'   => $pickup,
            'delivery' => $delivery
        ], $options->toArray()), 'request');
    }

    /**
     * @param DeliveryPoint $pickup
     * @param DeliveryPoint $delivery
     * @param DeliveryOptions $options
     * @param Parcel $parcel
     * @return Parcel[]
     */
    public function getServiceCostByParcels2(DeliveryPoint $pickup, DeliveryPoint $delivery, DeliveryOptions $options, Parcel $parcel)
    {
        $options = array_merge($options->toArray(), ['parcel' => $parcel->toArray()]);
        return $this->doRequest(__FUNCTION__, array_merge([
            'pickup'   => $pickup,
            'delivery' => $delivery
        ], $options), 'request');
    }

    /**
     * @param DeliveryPoint $pickup
     * @param DeliveryPoint $delivery
     * @param DeliveryOptions $options
     * @param Parcel $parcel
     * @param bool $insurance
     * @return array
     */
    public function getServiceCostInternational(DeliveryPoint $pickup, DeliveryPoint $delivery, DeliveryOptions $options, Parcel $parcel, $insurance = false)
    {
        $optionsArr = array_merge($options->toArray(), $parcel->toArray());
        return $this->doRequest(__FUNCTION__, array_merge([
            'pickup'    => $pickup,
            'delivery'  => $delivery,
            'insurance' => $insurance
        ], $optionsArr), 'request');
    }
}