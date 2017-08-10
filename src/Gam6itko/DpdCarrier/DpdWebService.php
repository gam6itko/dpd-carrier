<?php
namespace Gam6itko\DpdCarrier;

use Gam6itko\DpdCarrier\Type\Address;
use Gam6itko\DpdCarrier\Type\City;
use Gam6itko\DpdCarrier\Type\DataInternational;
use Gam6itko\DpdCarrier\Type\DeliveryOptions;
use Gam6itko\DpdCarrier\Type\DeliveryPoint;
use Gam6itko\DpdCarrier\Type\Header;
use Gam6itko\DpdCarrier\Type\Order;
use Gam6itko\DpdCarrier\Type\Parameter;
use Gam6itko\DpdCarrier\Type\Parcel;
use Gam6itko\DpdCarrier\Type\ServiceCost;

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
     * @param string $wsdlHost
     */
    public function __construct($clientNumber, $clientKey, $wsdlHost = 'http://wstest.dpd.ru')
    {
        $this->clientNumber = $clientNumber;
        $this->clientKey = $clientKey;
        $this->config = new DpdWebServiceConfig(rtrim($wsdlHost, '/'));
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

    public function getTerminalsSelfDelivery2()
    {
    }

    public function getParcelShops()
    {
    }

    public function getStoragePeriod()
    {
    }

    public function createOrder(Header $header, Order $order)
    {
        return $this->doRequest(__FUNCTION__, [
            'header' => $header,
            'order'  => $order
        ]);
    }

    public function cancelOrder()
    {
    }

    public function getOrderStatus()
    {
    }

    public function createAddress()
    {
    }

    public function updateAddress()
    {
    }

    public function getInvoiceFile()
    {
    }

    public function getRegisterFile()
    {
    }

    public function getStatesByClient()
    {
    }

    public function confirm()
    {
    }

    public function getStatesByClientOrder()
    {
    }

    public function getStatesByClientParcel()
    {
    }

    public function getStatesByDPDOrder()
    {
    }

    /**
     * @param $methodName
     * @param $array
     * @return array
     * @throws \SoapFault
     */
    private function doRequest($methodName, $array)
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
            'trace'    => true,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
            'classmap' => [
                'address'           => Address::class,
                'city'              => City::class,
                'dataInternational' => DataInternational::class,
                'order'             => Order::class,
                'parcel'            => Parcel::class,
                'parameter'         => Parameter::class,
                'serviceCost'       => ServiceCost::class,
            ]]);
    }

    private function doResponseFixes($return)
    {
        return $return;
    }
}