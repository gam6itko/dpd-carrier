<?php

namespace Gam6itko\DpdCarrier\WebService;

use Gam6itko\DpdCarrier\Type\ExtraService;
use Gam6itko\DpdCarrier\Type\Order\ClientAddress;
use Gam6itko\DpdCarrier\Type\Order\ClientAddressStatus;
use Gam6itko\DpdCarrier\Type\Order\Header;
use Gam6itko\DpdCarrier\Type\Order\Order;
use Gam6itko\DpdCarrier\Type\Order\OrderStatus;
use Gam6itko\DpdCarrier\Type\Parameter;
use Gam6itko\DpdCarrier\Type\Parcel;

class OrderWebService extends AbstractWebService
{
    protected function getWsdlTest(): string
    {
        return 'http://wstest.dpd.ru/services/order2?wsdl';
    }

    protected function getWsdlProd(): string
    {
        return 'http://ws.dpd.ru/services/order2?wsdl';
    }

    protected function getClassmap(): array
    {
        return [
            'extraService'           => ExtraService::class,
            'parcel'                 => Parcel::class,
            'parameter'              => Parameter::class,
            'dpdOrderStatus'         => OrderStatus::class,
            'address'                => ClientAddress::class,
            'dpdClientAddressStatus' => ClientAddressStatus::class,
        ];
    }

    /**
     * @return OrderStatus
     */
    public function createOrder(Header $header, Order $order)
    {
        $result = $this->doRequest(__FUNCTION__, [
            'header' => $header,
            'order'  => $order,
        ], 'orders');

        return $result[0];
    }

    /**
     * @return OrderStatus
     */
    public function cancelOrder(OrderStatus $orderState)
    {
        $result = $this->doRequest(__FUNCTION__, [
            'cancel' => $orderState->toArray(),
        ], 'orders');

        return $result[0];
    }

    /**
     * @param                           $orderNumberInternal
     * @param \DateTimeInterface|string $datePickup
     *
     * @return OrderStatus
     */
    public function getOrderStatus(string $orderNumberInternal, $datePickup = null)
    {
        if ($datePickup instanceof \DateTimeInterface) {
            $datePickup = $datePickup->format('Y-m-d');
        }

        $result = $this->doRequest(__FUNCTION__, [
            'order' => [
                'orderNumberInternal' => $orderNumberInternal,
                'datePickup'          => $datePickup,
            ],
        ], 'orderStatus');

        return $result[0];
    }

    /**
     * @return ClientAddressStatus
     */
    public function createAddress(ClientAddress $address)
    {
        return $this->doRequest(__FUNCTION__, [
            'clientAddress' => $address->toArray(),
        ], 'address');
    }

    /**
     * @return ClientAddressStatus
     */
    public function updateAddress(ClientAddress $address)
    {
        return $this->doRequest(__FUNCTION__, [
            'clientAddress' => $address->toArray(),
        ], 'address');
    }

    /**
     * @param      $orderNum
     * @param null $parcelCount
     * @param null $cargoValue
     *
     * @return string - pdf content
     */
    public function getInvoiceFile(string $orderNum, ?int $parcelCount = null, ?float $cargoValue = null)
    {
        $result = $this->doRequest(__FUNCTION__, array_filter([
            'orderNum'    => $orderNum,
            'parcelCount' => $parcelCount,
            'cargoValue'  => $cargoValue,
        ]));

        return $result->file;
    }

    /**
     * @param \DateTimeInterface|string $datePickup
     *
     * @return array
     */
    public function getRegisterFile($datePickup, ?string $regularNum = null, ?string $cityPickupId = null, ?string $addressCode = null)
    {
        if ($datePickup instanceof \DateTimeInterface) {
            $datePickup = $datePickup->format('Y-m-d');
        }

        $result = $this->doRequest(__FUNCTION__, array_filter([
            'datePickup'   => $datePickup,
            'regularNum'   => $regularNum,
            'cityPickupId' => $cityPickupId,
            'addressCode'  => $addressCode,
        ]));

        return $result->file;
    }
}
