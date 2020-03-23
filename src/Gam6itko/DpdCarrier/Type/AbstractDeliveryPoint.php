<?php

namespace Gam6itko\DpdCarrier\Type;

abstract class AbstractDeliveryPoint extends ArrayLike
{
    /** @var string|null */
    protected $countryCode;

    /** @var string|null */
    protected $regionCode;

    /** @var int|null */
    protected $cityId;

    /** @var string|null */
    protected $cityCode;

    /** @var string|null */
    protected $cityName;

    /**
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @param string|null $countryCode
     *
     * @return AbstractDeliveryPoint
     */
    public function setCountryCode(?string $countryCode): AbstractDeliveryPoint
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegionCode(): ?string
    {
        return $this->regionCode;
    }

    /**
     * @param string|null $regionCode
     *
     * @return AbstractDeliveryPoint
     */
    public function setRegionCode(?string $regionCode): AbstractDeliveryPoint
    {
        $this->regionCode = $regionCode;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getCityId(): ?int
    {
        return $this->cityId;
    }

    /**
     * @param int|null $cityId
     *
     * @return AbstractDeliveryPoint
     */
    public function setCityId(?int $cityId): AbstractDeliveryPoint
    {
        $this->cityId = $cityId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCityCode(): ?string
    {
        return $this->cityCode;
    }

    /**
     * @param string|null $cityCode
     *
     * @return AbstractDeliveryPoint
     */
    public function setCityCode(?string $cityCode): AbstractDeliveryPoint
    {
        $this->cityCode = $cityCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    /**
     * @param string|null $cityName
     *
     * @return AbstractDeliveryPoint
     */
    public function setCityName(?string $cityName): AbstractDeliveryPoint
    {
        $this->cityName = $cityName;
        return $this;
    }

}
