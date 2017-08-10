<?php
namespace Gam6itko\DpdCarrier\Type;

class City
{
    /** @var integer */
    protected $cityId;

    /** @var string */
    protected $countryCode;

    /** @var string */
    protected $countryName;

    /** @var integer */
    protected $regionCode;

    /** @var string */
    protected $regionName;

    /** @var string */
    protected $cityCode;

    /** @var string */
    protected $cityName;

    /** @var string */
    protected $abbreviation;

    /** @var string */
    protected $indexMin;

    /** @var string */
    protected $indexMax;

    /**
     * @return int
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param int $cityId
     * @return City
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return City
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

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
    public function getRegionCode()
    {
        return $this->regionCode;
    }

    /**
     * @param string $regionCode
     * @return City
     */
    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;
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
    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param string $cityCode
     * @return City
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityName()
    {
        return $this->cityName;
    }

    /**
     * @param string $cityName
     * @return City
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
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