<?php
namespace Gam6itko\DpdCarrier\Type;

use Gam6itko\DpdCarrier\Type\Traits\ToArrayTrait;

class DeliveryPoint
{
    use ToArrayTrait;

    /** @var integer */
    protected $cityId;

    /** @var string */
    protected $index;

    /** @var string */
    protected $cityCode;

    /** @var string */
    protected $cityName;

    /** @var string */
    protected $regionCode;

    /** @var string */
    protected $countryName;

    /** @var string */
    protected $countryCode;

    public function __construct($cityId = null)
    {
        $this->cityId = $cityId;
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
     * @return DeliveryPoint
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
        return $this;
    }

    /**
     * @return string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param string $index
     * @return DeliveryPoint
     */
    public function setIndex($index)
    {
        $this->index = $index;
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
     * @return DeliveryPoint
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
     * @return DeliveryPoint
     */
    public function setCityName($cityName)
    {
        $this->cityName = $cityName;
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
     * @return DeliveryPoint
     */
    public function setRegionCode($regionCode)
    {
        $this->regionCode = $regionCode;
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
     * @return DeliveryPoint
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
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
     * @return DeliveryPoint
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }
}