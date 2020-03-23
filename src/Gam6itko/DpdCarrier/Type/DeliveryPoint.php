<?php

namespace Gam6itko\DpdCarrier\Type;

class DeliveryPoint extends AbstractDeliveryPoint
{
    /** @var string */
    protected $index;

    /** @var string */
    protected $countryName;

    public function __construct(?int $cityId = null)
    {
        $this->cityId = $cityId;
    }

    /**
     * @return string
     */
    public function getIndex(): string
    {
        return $this->index;
    }

    /**
     * @param string $index
     */
    public function setIndex(string $index): void
    {
        $this->index = $index;
    }

    /**
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }

    /**
     * @param string $countryName
     */
    public function setCountryName(string $countryName): void
    {
        $this->countryName = $countryName;
    }
}
