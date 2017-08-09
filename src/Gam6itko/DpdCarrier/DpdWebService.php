<?php
namespace Gam6itko\DpdCarrier;

use Gam6itko\DpdCarrier\Type\Address;
use Gam6itko\DpdCarrier\Type\DataInternational;
use Gam6itko\DpdCarrier\Type\DeliveryOptions;
use Gam6itko\DpdCarrier\Type\DeliveryPoint;
use Gam6itko\DpdCarrier\Type\Header;
use Gam6itko\DpdCarrier\Type\Order;
use Gam6itko\DpdCarrier\Type\Parameter;
use Gam6itko\DpdCarrier\Type\Parcel;

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


    public function getServiceCost2(DeliveryPoint $pickup, DeliveryPoint $delivery, DeliveryOptions $options)
    {
        return $this->doRequest(__FUNCTION__, array_merge([
            'pickup'   => $pickup,
            'delivery' => $delivery
        ], $options->toArray()));
    }

    public function getServiceCostByParcels2()
    {
    }

    public function getCitiesCashPay()
    {
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
        return new \SoapClient($this->config->getWsdl($methodName), [
            'classmap' => [
                'address'           => Address::class,
                'dataInternational' => DataInternational::class,
                'order'             => Order::class,
                'parcel'            => Parcel::class,
                'parameter'         => Parameter::class,
            ]]);
    }

    private function doResponseFixes($return)
    {
        return $return;
    }
}