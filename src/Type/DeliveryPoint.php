<?php

namespace Gam6itko\DpdCarrier\Type;

class DeliveryPoint extends AbstractDeliveryPoint
{
    /** @var string|null */
    protected $index;

    /** @var string|null */
    protected $countryName;

    public function __construct(?int $cityId = null)
    {
        $this->cityId = $cityId;
    }

    public function getIndex(): ?string
    {
        return $this->index;
    }

    public function setIndex(?string $index): DeliveryPoint
    {
        $this->index = $index;

        return $this;
    }

    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

    public function setCountryName(?string $countryName): DeliveryPoint
    {
        $this->countryName = $countryName;

        return $this;
    }
}
