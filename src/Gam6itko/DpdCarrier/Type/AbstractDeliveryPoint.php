<?php
namespace Gam6itko\DpdCarrier\Type;

use Gam6itko\DpdCarrier\Type\Traits\ToArrayTrait;

abstract class AbstractDeliveryPoint
{
    use ToArrayTrait;

    /** @var string */
    protected $countryCode;

    /** @var string */
    protected $regionCode;

    /** @var integer */
    protected $cityId;

    /** @var string */
    protected $cityCode;

    /** @var string */
    protected $cityName;

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return AbstractDeliveryPoint
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
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
     * @return AbstractDeliveryPoint
     */
    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param int $cityId
     * @return AbstractDeliveryPoint
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
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
     * @return AbstractDeliveryPoint
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
     * @return AbstractDeliveryPoint
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
        return $this;
    }
}
