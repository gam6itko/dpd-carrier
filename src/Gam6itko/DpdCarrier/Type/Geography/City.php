<?php
namespace Gam6itko\DpdCarrier\Type\Geography;

use Gam6itko\DpdCarrier\Type\AbstractDeliveryPoint;

class City extends AbstractDeliveryPoint
{
    /** @var string */
    protected $countryName;

    /** @var string */
    protected $regionName;

    /** @var string */
    protected $abbreviation;

    /** @var string */
    protected $indexMin;

    /** @var string */
    protected $indexMax;

    /**
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * @param string $countryName
     * @return City
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionName()
    {
        return $this->regionName;
    }

    /**
     * @param string $regionName
     * @return City
     */
    public function setRegionName($regionName)
    {
        $this->regionName = $regionName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    /**
     * @param string $abbreviation
     * @return City
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;
        return $this;
    }

    /**
     * @return string
     */
    public function getIndexMin()
    {
        return $this->indexMin;
    }

    /**
     * @param string $indexMin
     * @return City
     */
    public function setIndexMin($indexMin)
    {
        $this->indexMin = $indexMin;
        return $this;
    }

    /**
     * @return string
     */
    public function getIndexMax()
    {
        return $this->indexMax;
    }

    /**
     * @param string $indexMax
     * @return City
     */
    public function setIndexMax($indexMax)
    {
        $this->indexMax = $indexMax;
        return $this;
    }
}
