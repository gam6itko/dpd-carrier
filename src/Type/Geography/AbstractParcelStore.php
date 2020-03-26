<?php

namespace Gam6itko\DpdCarrier\Type\Geography;

use Gam6itko\DpdCarrier\Type\ArrayLike;
use Gam6itko\DpdCarrier\Type\ExtraService;

abstract class AbstractParcelStore extends ArrayLike
{
    /** @var Address|null */
    protected $address;

    /** @var GeoCoordinates|null */
    protected $geoCoordinates;

    /** @var Schedule[]|null */
    protected $schedule;

    /** @var ExtraService[]|null */
    protected $extraService;

    /** @var Services|null */
    protected $services;

    abstract public function getCode(): ?string;

    public function getAddress(): ?Address
    {
        return $this->address;
    }

    public function setAddress(?Address $address): AbstractParcelStore
    {
        $this->address = $address;

        return $this;
    }

    public function getGeoCoordinates(): ?GeoCoordinates
    {
        return $this->geoCoordinates;
    }

    public function setGeoCoordinates(?GeoCoordinates $geoCoordinates): AbstractParcelStore
    {
        $this->geoCoordinates = $geoCoordinates;

        return $this;
    }

    /**
     * @return Schedule[]|null
     */
    public function getSchedule(): ?array
    {
        return $this->schedule;
    }

    /**
     * @param Schedule[]|null $schedule
     */
    public function setSchedule(?array $schedule): AbstractParcelStore
    {
        $this->schedule = $schedule;

        return $this;
    }

    /**
     * @return ExtraService[]|null
     */
    public function getExtraService(): ?array
    {
        return $this->extraService;
    }

    /**
     * @param ExtraService[]|null $extraService
     */
    public function setExtraService(?array $extraService): AbstractParcelStore
    {
        $this->extraService = $extraService;

        return $this;
    }

    public function getServices(): ?Services
    {
        return $this->services;
    }

    public function setServices(?Services $services): AbstractParcelStore
    {
        $this->services = $services;

        return $this;
    }
}
