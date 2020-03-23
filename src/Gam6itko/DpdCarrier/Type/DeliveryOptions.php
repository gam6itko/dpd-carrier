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

    /**
     * @return bool
     */
    public function isSelfDelivery(): bool
    {
        return $this->selfDelivery;
    }

    /**
     * @param bool $selfDelivery
     *
     * @return DeliveryOptions
     */
    public function setSelfDelivery(bool $selfDelivery): DeliveryOptions
    {
        $this->selfDelivery = $selfDelivery;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     *
     * @return DeliveryOptions
     */
    public function setWeight(float $weight): DeliveryOptions
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return float
     */
    public function getVolume(): float
    {
        return $this->volume;
    }

    /**
     * @param float $volume
     *
     * @return DeliveryOptions
     */
    public function setVolume(float $volume): DeliveryOptions
    {
        $this->volume = $volume;
        return $this;
    }

    /**
     * @return string
     */
    public function getPickupDate(): string
    {
        return $this->pickupDate;
    }

    /**
     * @param string $pickupDate
     *
     * @return DeliveryOptions
     */
    public function setPickupDate(string $pickupDate): DeliveryOptions
    {
        $this->pickupDate = $pickupDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxDays(): int
    {
        return $this->maxDays;
    }

    /**
     * @param int $maxDays
     *
     * @return DeliveryOptions
     */
    public function setMaxDays(int $maxDays): DeliveryOptions
    {
        $this->maxDays = $maxDays;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxCost(): float
    {
        return $this->maxCost;
    }

    /**
     * @param float $maxCost
     *
     * @return DeliveryOptions
     */
    public function setMaxCost(float $maxCost): DeliveryOptions
    {
        $this->maxCost = $maxCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeclaredValue(): float
    {
        return $this->declaredValue;
    }

    /**
     * @param float $declaredValue
     *
     * @return DeliveryOptions
     */
    public function setDeclaredValue(float $declaredValue): DeliveryOptions
    {
        $this->declaredValue = $declaredValue;
        return $this;
    }


}
