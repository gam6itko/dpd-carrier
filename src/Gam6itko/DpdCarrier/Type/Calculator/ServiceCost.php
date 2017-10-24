<?php
namespace Gam6itko\DpdCarrier\Type\Calculator;

class ServiceCost
{
    /** @var string */
    protected $serviceCode;

    /** @var string */
    protected $serviceName;

    /** @var float */
    protected $cost;

    /** @var integer */
    protected $days;

    /** @var float */
    protected $weight;

    /** @var float */
    protected $volume;

    /**
     * @return string
     */
    public function getServiceCode()
    {
        return $this->serviceCode;
    }

    /**
     * @param string $serviceCode
     * @return ServiceCost
     */
    public function setServiceCode($serviceCode)
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getServiceName()
    {
        return $this->serviceName;
    }

    /**
     * @param string $serviceName
     * @return ServiceCost
     */
    public function setServiceName($serviceName)
    {
        $this->serviceName = $serviceName;
        return $this;
    }

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     * @return ServiceCost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
        return $this;
    }

    /**
     * @return int
     */
    public function getDays()
    {
        return $this->days;
    }

    /**
     * @param int $days
     * @return ServiceCost
     */
    public function setDays($days)
    {
        $this->days = $days;
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
     * @param float $weight
     * @return ServiceCost
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
     * @return ServiceCost
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
        return $this;
    }
}
