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

    /** @var integer */
    protected $maxDays;

    /** @var float */
    protected $maxCost;

    /** @var float */
    protected $declaredValue;

    public function __construct($selfPickup = false, $selfDelivery = true)
    {
        $this->selfPickup = $selfPickup;
        $this->selfDelivery = $selfDelivery;
    }

    /**
     * @return bool
     */
    public function isSelfPickup()
    {
        return $this->selfPickup;
    }

    /**
     * @param bool $selfPickup
     * @return DeliveryOptions
     */
    public function setSelfPickup($selfPickup)
    {
        $this->selfPickup = $selfPickup;
        return $this;
    }

    /**
     * @return bool
     */
    public function isSelfDelivery()
    {
        return $this->selfDelivery;
    }

    /**
     * @param bool $selfDelivery
     * @return DeliveryOptions
     */
    public function setSelfDelivery($selfDelivery)
    {
        $this->selfDelivery = $selfDelivery;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight Kg
     * @return DeliveryOptions
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return float
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param float $volume
     * @return DeliveryOptions
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    /**
     * @param string|array $serviceCode
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
     * @return string
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }

    /**
     * @param string $pickupDate
     * @return DeliveryOptions
     */
    public function setPickupDate($pickupDate)
    {
        $this->pickupDate = $pickupDate;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxDays()
    {
        return $this->maxDays;
    }

    /**
     * @param int $maxDays
     * @return DeliveryOptions
     */
    public function setMaxDays($maxDays)
    {
        $this->maxDays = $maxDays;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxCost()
    {
        return $this->maxCost;
    }

    /**
     * @param float $maxCost
     * @return DeliveryOptions
     */
    public function setMaxCost($maxCost)
    {
        $this->maxCost = $maxCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getDeclaredValue()
    {
        return $this->declaredValue;
    }

    /**
     * @param float $declaredValue
     * @return DeliveryOptions
     */
    public function setDeclaredValue($declaredValue)
    {
        $this->declaredValue = $declaredValue;
        return $this;
    }
}
