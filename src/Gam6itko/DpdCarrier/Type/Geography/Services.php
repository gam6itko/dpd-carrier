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
     *
     * @return Services
     */
    public function setServiceCode(?array $serviceCode): Services
    {
        $this->serviceCode = $serviceCode;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDays(): ?int
    {
        return $this->days;
    }

    /**
     * @param int|null $days
     *
     * @return Services
     */
    public function setDays(?int $days): Services
    {
        $this->days = $days;
        return $this;
    }

}
