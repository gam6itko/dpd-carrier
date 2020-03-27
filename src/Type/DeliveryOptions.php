<?php

namespace Gam6itko\DpdCarrier\Type;

class DeliveryOptions extends ArrayLike
{
    /** @var bool */
    protected $selfPickup = false;

    /** @var bool */
    protected $selfDelivery = true;

    /** @var float|null Kg */
    protected $weight;

    /** @var float|null */
    protected $volume;

    /** @var string|null */
    protected $serviceCode;

    /** @var string|null */
    protected $pickupDate;

    /** @var int|null */
    protected $maxDays;

    /** @var float|null */
    protected $maxCost;

    /** @var float|null */
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

    public function isSelfPickup(): bool
    {
        return $this->selfPickup ?? false;
    }

    public function setSelfPickup(bool $selfPickup): DeliveryOptions
    {
        $this->selfPickup = $selfPickup;

        return $this;
    }

    public function isSelfDelivery(): bool
    {
        return $this->selfDelivery ?? false;
    }

    public function setSelfDelivery(bool $selfDelivery): DeliveryOptions
    {
        $this->selfDelivery = $selfDelivery;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): DeliveryOptions
    {
        $this->weight = $weight;

        return $this;
    }

    public function getVolume(): ?float
    {
        return $this->volume;
    }

    public function setVolume(?float $volume): DeliveryOptions
    {
        $this->volume = $volume;

        return $this;
    }

    public function getPickupDate(): ?string
    {
        return $this->pickupDate;
    }

    public function setPickupDate(?string $pickupDate): DeliveryOptions
    {
        $this->pickupDate = $pickupDate;

        return $this;
    }

    public function getMaxDays(): ?int
    {
        return $this->maxDays;
    }

    public function setMaxDays(?int $maxDays): DeliveryOptions
    {
        $this->maxDays = $maxDays;

        return $this;
    }

    public function getMaxCost(): ?float
    {
        return $this->maxCost;
    }

    public function setMaxCost(?float $maxCost): DeliveryOptions
    {
        $this->maxCost = $maxCost;

        return $this;
    }

    public function getDeclaredValue(): ?float
    {
        return $this->declaredValue;
    }

    public function setDeclaredValue(?float $declaredValue): DeliveryOptions
    {
        $this->declaredValue = $declaredValue;

        return $this;
    }
}
