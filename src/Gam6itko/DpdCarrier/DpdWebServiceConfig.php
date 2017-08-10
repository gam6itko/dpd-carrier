<?php
namespace Gam6itko\DpdCarrier;

use Gam6itko\DpdCarrier\Type\Address;
use Gam6itko\DpdCarrier\Type\City;
use Gam6itko\DpdCarrier\Type\DataInternational;
use Gam6itko\DpdCarrier\Type\Order;
use Gam6itko\DpdCarrier\Type\Parameter;
use Gam6itko\DpdCarrier\Type\Parcel;
use Gam6itko\DpdCarrier\Type\ServiceCost;

/**
 * Class DpdWebServiceConfig
 * @package Gam6itko\DpdCarrier
 * @version v0.0.1
 */
class DpdWebServiceConfig
{
    /**
     * wrap request in
     */
    const WRAPIN = 'wrapin';

    /** @var string */
    protected $wsdlHost;

    public function __construct($wsdlHost)
    {
        $this->wsdlHost = rtrim($wsdlHost, '/');
    }

    public function get()
    {
        return [
            'calculator2' => [
                'getServiceCost2'             => [self::WRAPIN => 'request'],
                'getServiceCostByParcels2'    => [self::WRAPIN => 'request'],
                'getServiceCostInternational' => [self::WRAPIN => 'request'],
            ],
            'geography2'  => [
                'getCitiesCashPay'          => [self::WRAPIN => 'request'],
                'getTerminalsSelfDelivery2' => [self::WRAPIN => false],
                'getParcelShops'            => [self::WRAPIN => 'request'],
                'getStoragePeriod'          => [self::WRAPIN => false],
            ],
            'order2'      => [
                'createOrder'     => [self::WRAPIN => 'orders'],
                'cancelOrder'     => [self::WRAPIN => 'orders'],
                'getOrderStatus'  => [self::WRAPIN => 'orderStatus'],
                'createAddress'   => [self::WRAPIN => 'address'],
                'updateAddress'   => [self::WRAPIN => 'address'],
                'getInvoiceFile'  => [self::WRAPIN => 'request'],
                'getRegisterFile' => [self::WRAPIN => 'request'],
            ],

            'tracing' => [
                'getStatesByClient'       => [self::WRAPIN => 'request'],
                'confirm'                 => [self::WRAPIN => 'request'],
                'getStatesByClientOrder'  => [self::WRAPIN => 'request'],
                'getStatesByClientParcel' => [self::WRAPIN => 'request'],
                'getStatesByDPDOrder'     => [self::WRAPIN => 'request'],
            ],
        ];
    }

    public function getWsdl($methodName)
    {
        foreach ($this->get() as $wsdlKey => $wsdlConf) {
            foreach ($wsdlConf as $mName => $mConf) {
                if ($methodName === $mName) {
                    return sprintf("{$this->wsdlHost}/services/$wsdlKey?wsdl");
                }
            }
        }

        throw new \Exception("Dpd wsdl not found for method: $methodName");
    }

    public function wrapin($methodName, array $soapRequest)
    {
        $conf = $this->getMethodConf($methodName);

        if ($conf && ! empty($conf['wrapin'])) {
            $soapRequest = [
                $conf['wrapin'] => $soapRequest
            ];
        }

        return $soapRequest;
    }

    public function getMethodConf($methodName)
    {
        foreach ($this->get() as $wsdlKey => $wsdlConf) {
            foreach ($wsdlConf as $mName => $mConf) {
                if ($methodName === $mName) {
                    return $mConf;
                }
            }
        }

        return null;
    }
}