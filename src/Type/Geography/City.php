<?php

namespace Gam6itko\DpdCarrier\Type\Geography;

use Gam6itko\DpdCarrier\Type\AbstractDeliveryPoint;

class City extends AbstractDeliveryPoint
{
    /** @var string|null */
    protected $countryName;

    /** @var string|null */
    protected $regionName;

    /** @var string|null */
    protected $abbreviation;

    /** @var string|null */
    protected $indexMin;

    /** @var string|null */
    protected $indexMax;

    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

    public function setCountryName(?string $countryName): City
    {
        $this->countryName = $countryName;

        return $this;
    }

    public function getRegionName(): ?string
    {
        return $this->regionName;
    }

    public function setRegionName(?string $regionName): City
    {
        $this->regionName = $regionName;

        return $this;
    }

    public function getAbbreviation(): ?string
    {
        return $this->abbreviation;
    }

    public function setAbbreviation(?string $abbreviation): City
    {
        $this->abbreviation = $abbreviation;

        return $this;
    }

    public function getIndexMin(): ?string
    {
        return $this->indexMin;
    }

    public function setIndexMin(?string $indexMin): City
    {
        $this->indexMin = $indexMin;

        return $this;
    }

    public function getIndexMax(): ?string
    {
        return $this->indexMax;
    }

    public function setIndexMax(?string $indexMax): City
    {
        $this->indexMax = $indexMax;

        return $this;
    }
}
