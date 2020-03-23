<?php

namespace Gam6itko\DpdCarrier\Type;

class DeliveryOptions extends ArrayLike
{
    /** @var bool */
    protected $selfPickup = false;

    /** @var bool */
    protected $selfDelivery = true;

    /** @var float Kg */
    protected $weight;

    /** @var float */
    protected $volume;

    /** @var string */
    protected $serviceCode;

    /** @var string */
    protected $pickupDate;

    /** @var int */
    protected $maxDays;

    /** @var float */
    protected $maxCost;

    /** @var float */
    protected $declaredValue;

    public function __construct(bool $selfPickup = false, bool $selfDelivery = true)
    {
        $this->selfPickup = $selfPickup;
        $this->selfDelivery = $selfDelivery;
    }

    /**
     * @param string|array $serviceCode
     *
     * @return DeliveryOptions
     */
    public function setServiceCode($serviceCode)
    {
        if (is_array($serviceCode)) {
            $this->serviceCode = implode(',', $serviceCode);
        } else {
            $this->serviceCode = implode(',', array_map(function ($val) {
                return strtoupper(trim($val));
            }, array_filter(explode(',', str_replace(' ', ',', $serviceCode)))));
        }

        return $this;
    }

    /**
     * @return bool
     */
    public function isSelfPickup(): bool
    {
        return $this->selfPickup;
    }

    /**
     * @param bool $selfPickup
     *
     * @return DeliveryOptions
     */
    public function setSelfPickup(bool $selfPickup): DeliveryOptions
    {
        $this->selfPickup = $selfPickup;
        return $this;
    }

}
