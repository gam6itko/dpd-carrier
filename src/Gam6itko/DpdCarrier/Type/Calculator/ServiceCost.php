<?php

namespace Gam6itko\DpdCarrier\Type\Calculator;

use Gam6itko\DpdCarrier\Type\ArrayLike;

class ServiceCost extends ArrayLike
{
    /** @var string|null */
    protected $serviceCode;

    /** @var string|null */
    protected $serviceName;

    /** @var float|null */
    protected $cost;

    /** @var int|null */
    protected $days;

    /** @var float|null */
    protected $weight;

    /** @var float|null */
    protected $volume;

    public function getServiceCode(): ?string
    {
        return $this->serviceCode;
    }

    public function setServiceCode(?string $serviceCode): ServiceCost
    {
        $this->serviceCode = $serviceCode;

        return $this;
    }

    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }

    public function setServiceName(?string $serviceName): ServiceCost
    {
        $this->serviceName = $serviceName;

        return $this;
    }

    public function getCost(): ?float
    {
        return $this->cost;
    }

    public function setCost(?float $cost): ServiceCost
    {
        $this->cost = $cost;

        return $this;
    }

    public function getDays(): ?int
    {
        return $this->days;
    }

    public function setDays(?int $days): ServiceCost
    {
        $this->days = $days;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): ServiceCost
    {
        $this->weight = $weight;

        return $this;
    }

    public function getVolume(): ?float
    {
        return $this->volume;
    }

    public function setVolume(?float $volume): ServiceCost
    {
        $this->volume = $volume;

        return $this;
    }
}
