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

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): AbstractDeliveryPoint
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getRegionCode(): ?string
    {
        return $this->regionCode;
    }

    public function setRegionCode(?string $regionCode): AbstractDeliveryPoint
    {
        $this->regionCode = $regionCode;

        return $this;
    }

    public function getCityId(): ?int
    {
        return $this->cityId;
    }

    public function setCityId(?int $cityId): AbstractDeliveryPoint
    {
        $this->cityId = $cityId;

        return $this;
    }

    public function getCityCode(): ?string
    {
        return $this->cityCode;
    }

    public function setCityCode(?string $cityCode): AbstractDeliveryPoint
    {
        $this->cityCode = $cityCode;

        return $this;
    }

    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    public function setCityName(?string $cityName): AbstractDeliveryPoint
    {
        $this->cityName = $cityName;

        return $this;
    }
}
