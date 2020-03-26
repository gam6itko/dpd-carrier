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

    /**
     * @return string|null
     */
    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

    /**
     * @param string|null $countryName
     *
     * @return City
     */
    public function setCountryName(?string $countryName): City
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegionName(): ?string
    {
        return $this->regionName;
    }

    /**
     * @param string|null $regionName
     *
     * @return City
     */
    public function setRegionName(?string $regionName): City
    {
        $this->regionName = $regionName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAbbreviation(): ?string
    {
        return $this->abbreviation;
    }

    /**
     * @param string|null $abbreviation
     *
     * @return City
     */
    public function setAbbreviation(?string $abbreviation): City
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIndexMin(): ?string
    {
        return $this->indexMin;
    }

    /**
     * @param string|null $indexMin
     *
     * @return City
     */
    public function setIndexMin(?string $indexMin): City
    {
        $this->indexMin = $indexMin;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIndexMax(): ?string
    {
        return $this->indexMax;
    }

    /**
     * @param string|null $indexMax
     *
     * @return City
     */
    public function setIndexMax(?string $indexMax): City
    {
        $this->indexMax = $indexMax;
        return $this;
    }

}
