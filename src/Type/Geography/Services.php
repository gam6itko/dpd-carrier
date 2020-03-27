<?php

namespace Gam6itko\DpdCarrier\Type\Geography;

use Gam6itko\DpdCarrier\Type\ArrayLike;

class Services extends ArrayLike
{
    /** @var string[]|null */
    protected $serviceCode;

    /** @var int|null */
    protected $days;

    /**
     * @return string[]|null
     */
    public function getServiceCode(): ?array
    {
        return $this->serviceCode;
    }

    /**
     * @param string[]|null $serviceCode
     */
    public function setServiceCode(?array $serviceCode): Services
    {
        $this->serviceCode = $serviceCode;

        return $this;
    }

    public function getDays(): ?int
    {
        return $this->days;
    }

    public function setDays(?int $days): Services
    {
        $this->days = $days;

        return $this;
    }
}
