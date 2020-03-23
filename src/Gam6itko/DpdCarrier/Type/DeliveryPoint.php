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

    public function getIndex(): string
    {
        return $this->index;
    }

    public function setIndex(string $index): void
    {
        $this->index = $index;
    }

    public function getCountryName(): string
    {
        return $this->countryName;
    }

    public function setCountryName(string $countryName): void
    {
        $this->countryName = $countryName;
    }
}
