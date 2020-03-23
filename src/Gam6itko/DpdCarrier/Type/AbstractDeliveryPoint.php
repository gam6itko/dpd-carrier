<?php

namespace Gam6itko\DpdCarrier\Type;

abstract class AbstractDeliveryPoint extends ArrayLike
{
    /** @var string */
    protected $countryCode;

    /** @var string */
    protected $regionCode;

    /** @var int */
    protected $cityId;

    /** @var string */
    protected $cityCode;

    /** @var string */
    protected $cityName;

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     *
     * @return AbstractDeliveryPoint
     */
    public function setCountryCode(string $countryCode): AbstractDeliveryPoint
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionCode(): string
    {
        return $this->regionCode;
    }

    /**
     * @param string $regionCode
     *
     * @return AbstractDeliveryPoint
     */
    public function setRegionCode(string $regionCode): AbstractDeliveryPoint
    {
        $this->regionCode = $regionCode;
        return $this;
    }

    /**
     * @return int
     */
    public function getCityId(): int
    {
        return $this->cityId;
    }

    /**
     * @param int $cityId
     *
     * @return AbstractDeliveryPoint
     */
    public function setCityId(int $cityId): AbstractDeliveryPoint
    {
        $this->cityId = $cityId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityCode(): string
    {
        return $this->cityCode;
    }

    /**
     * @param string $cityCode
     *
     * @return AbstractDeliveryPoint
     */
    public function setCityCode(string $cityCode): AbstractDeliveryPoint
    {
        $this->cityCode = $cityCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityName(): string
    {
        return $this->cityName;
    }

    /**
     * @param string $cityName
     *
     * @return AbstractDeliveryPoint
     */
    public function setCityName(string $cityName): AbstractDeliveryPoint
    {
        $this->cityName = $cityName;
        return $this;
    }

}
