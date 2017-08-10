<?php
namespace Gam6itko\DpdCarrier;

use Gam6itko\DpdCarrier\Type\Address;
use Gam6itko\DpdCarrier\Type\AddressStatus;
use Gam6itko\DpdCarrier\Type\City;
use Gam6itko\DpdCarrier\Type\DataInternational;
use Gam6itko\DpdCarrier\Type\DeliveryOptions;
use Gam6itko\DpdCarrier\Type\DeliveryPoint;
use Gam6itko\DpdCarrier\Type\ExtraService;
use Gam6itko\DpdCarrier\Type\GeoCoordinates;
use Gam6itko\DpdCarrier\Type\Header;
use Gam6itko\DpdCarrier\Type\Limits;
use Gam6itko\DpdCarrier\Type\Order;
use Gam6itko\DpdCarrier\Type\OrderStatus;
use Gam6itko\DpdCarrier\Type\Parameter;
use Gam6itko\DpdCarrier\Type\Parcel;
use Gam6itko\DpdCarrier\Type\ParcelShop;
use Gam6itko\DpdCarrier\Type\Schedule;
use Gam6itko\DpdCarrier\Type\Services;
use Gam6itko\DpdCarrier\Type\ServiceCost;
use Gam6itko\DpdCarrier\Type\StateParcel;
use Gam6itko\DpdCarrier\Type\StateParcels;
use Gam6itko\DpdCarrier\Type\Terminal;

class DpdWebService
{
    /** @var string */
    protected $clientNumber;

    /** @var string */
    protected $clientKey;

    /** @var DpdWebServiceConfig */
    protected $config;

    /**
     * CseService constructor.
     * @param $clientNumber
     * @param $clientKey
     * @param $testMode
     * @internal param string $wsdlHost
     */
    public function __construct($clientNumber, $clientKey, $testMode = true)
    {
        $this->clientNumber = $clientNumber;
        $this->clientKey = $clientKey;
        $this->testMode = $testMode;
        $this->config = new DpdWebServiceConfig($testMode);
    }

    public function setConfig(DpdWebServiceConfig $config)
    {
        $this->config = $config;
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
        ], $options->toArray()));
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
        ], $options));
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
            'pickup'   => $pickup,
            'delivery' => $delivery
        ], $optionsArr));
    }

    /**
     * @param string $countryCode
     * @return City[]
     */
    public function getCitiesCashPay($countryCode = 'RU')
    {
        return $this->doRequest(__FUNCTION__, ['countryCode' => $countryCode]);
    }

    /**
     * @return Terminal[]
     */
    public function getTerminalsSelfDelivery2()
    {
        $result = $this->doRequest(__FUNCTION__);
        return $result->terminal;
    }

    /**
     * @param DeliveryPoint $point
     * @return ParcelShop[]
     */
    public function getParcelShops(DeliveryPoint $point = null)
    {
        $result = $this->doRequest(__FUNCTION__, $point ? $point->toArray() : []);
        return $result->parcelShop;
    }

    /**
     * @param $terminalCode
     * @param $serviceCode
     * @return Terminal
     */
    public function getStoragePeriod($terminalCode, $serviceCode)
    {
        $result = $this->doRequest(__FUNCTION__, [
            'terminalCode' => $terminalCode,
            'serviceCode'  => $serviceCode,
        ]);

        return $result->terminal[0];
    }

    /**
     * @param Header $header
     * @param Order $order
     * @return OrderStatus
     */
    public function createOrder(Header $header, Order $order)
    {
        $result = $this->doRequest(__FUNCTION__, [
            'header' => $header,
            'order'  => $order
        ]);

        return $result[0];
    }

    /**
     * @param OrderStatus $orderState
     * @return OrderStatus
     */
    public function cancelOrder(OrderStatus $orderState)
    {
        $result = $this->doRequest(__FUNCTION__, [
            'cancel' => $orderState->toArray()
        ]);
        return $result[0];
    }

    /**
     * @param $orderNumberInternal
     * @param null $datePickup
     * @return OrderStatus
     */
    public function getOrderStatus($orderNumberInternal, $datePickup = null)
    {
        $result = $this->doRequest(__FUNCTION__, [
            'order' => [
                'orderNumberInternal' => $orderNumberInternal,
                'datePickup'          => $datePickup,
            ]
        ]);
        return $result[0];
    }

    /**
     * @param Address $address
     * @return AddressStatus
     */
    public function createAddress(Address $address)
    {
        return $this->doRequest(__FUNCTION__, [
            'clientAddress' => $address->toArray()
        ]);
    }

    /**
     * @param Address $address
     * @return AddressStatus
     */
    public function updateAddress(Address $address)
    {
        return $this->doRequest(__FUNCTION__, [
            'clientAddress' => $address->toArray()
        ]);
    }

    /**
     * @param $orderNum
     * @param null $parcelCount
     * @param null $cargoValue
     * @return string - pdf content
     */
    public function getInvoiceFile($orderNum, $parcelCount = null, $cargoValue = null)
    {
        $result = $this->doRequest(__FUNCTION__, array_filter([
            'orderNum'    => $orderNum,
            'parcelCount' => $parcelCount,
            'cargoValue'  => $cargoValue,
        ]));
        return $result->file;
    }

    /**
     * @param $datePickup
     * @param null $regularNum
     * @param null $cityPickupId
     * @param null $addressCode
     * @return array
     */
    public function getRegisterFile($datePickup, $regularNum = null, $cityPickupId = null, $addressCode = null)
    {
        $result = $this->doRequest(__FUNCTION__, array_filter([
            'datePickup'   => $datePickup,
            'regularNum'   => $regularNum,
            'cityPickupId' => $cityPickupId,
            'addressCode'  => $addressCode,
        ]));
        return $result->file;

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
     * @return array|mixed|\stdClass
     */
    public function confirm($docId)
    {
        return $this->doRequest(__FUNCTION__, ['docId' => $docId]);
    }

    /**
     * @param $clientOrderNr
     * @param null $pickupDate
     * @return StateParcels
     */
    public function getStatesByClientOrder($clientOrderNr, $pickupDate = null)
    {
        return $this->doRequest(__FUNCTION__, [
            'clientOrderNr' => $clientOrderNr,
            'pickupDate'    => $pickupDate,
        ]);
    }

    /**
     * @param $clientOrderNr
     * @param null $pickupDate
     * @return StateParcels
     */
    public function getStatesByClientParcel($clientOrderNr, $pickupDate = null)
    {
        return $this->doRequest(__FUNCTION__, [
            'clientOrderNr' => $clientOrderNr,
            'pickupDate'    => $pickupDate,
        ]);
    }

    /**
     * @param $dpdOrderNr
     * @param null $pickupYear
     * @return StateParcels
     */
    public function getStatesByDPDOrder($dpdOrderNr, $pickupYear = null)
    {
        return $this->doRequest(__FUNCTION__, [
            'dpdOrderNr' => $dpdOrderNr,
            'pickupYear' => $pickupYear,
        ]);
    }

    /**
     * @param $methodName
     * @param array $array
     * @return array|\stdClass|mixed
     * @throws \SoapFault
     */
    private function doRequest($methodName, array $array = [])
    {
        $soapRequest = $this->buildRequest($array);
        $soapRequest = $this->config->wrapin($methodName, $soapRequest);
        $soapClient = $this->getSoapClient($methodName);
        $soapResult = $soapClient->__soapCall($methodName, [$soapRequest]);

        return $this->doResponseFixes($soapResult->return);
    }

    /**
     * @param $array
     * @return array
     */
    private function buildRequest($array)
    {
        return array_merge([
            'auth' => [
                'clientNumber' => $this->clientNumber,
                'clientKey'    => $this->clientKey,
            ]
        ], $array);
    }

    /**
     * @param $methodName
     * @return \SoapClient
     */
    private function getSoapClient($methodName)
    {
        //todo stash clients for different WSDL
        return new \SoapClient($this->config->getWsdl($methodName), [
            'trace'    => $this->testMode,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            'classmap' => [
                'address'                => Address::class,
                'city'                   => City::class,
                'dataInternational'      => DataInternational::class,
                'dpdOrderStatus'         => OrderStatus::class,
                'dpdClientAddressStatus' => AddressStatus::class,
                'extraService'           => ExtraService::class,
                'geoCoordinates'         => GeoCoordinates::class,
                'limits'                 => Limits::class,
                'order'                  => Order::class,
                'parcel'                 => Parcel::class,
                'parcelShop'             => ParcelShop::class,
                'parameter'              => Parameter::class,
                'serviceCost'            => ServiceCost::class,
                'services'               => Services::class,
                'schedule'               => Schedule::class,
                'stateParcels'           => StateParcels::class,
                'stateParcel'            => StateParcel::class,
                'terminalSelf'           => Terminal::class,
                'terminalStoragePeriods' => Terminal::class,
            ]]);
    }

    private function doResponseFixes($return)
    {
        return $return;
    }
}