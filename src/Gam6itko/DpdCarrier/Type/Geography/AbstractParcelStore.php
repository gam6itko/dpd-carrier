<?php
namespace Gam6itko\DpdCarrier\Type\Geography;

use Gam6itko\DpdCarrier\Type\ArrayLike;
use Gam6itko\DpdCarrier\Type\ExtraService;

abstract class AbstractParcelStore extends ArrayLike
{
    /** @var Address */
    protected $address;

    /** @var GeoCoordinates */
    protected $geoCoordinates;

    /** @var Schedule[] */
    protected $schedule;

    /** @var ExtraService[] */
    protected $extraService;

    /** @var Services */
    protected $services;

    abstract public function getCode();

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address $address
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * @return GeoCoordinates
     */
    public function getGeoCoordinates()
    {
        return $this->geoCoordinates;
    }

    /**
     * @param GeoCoordinates $geoCoordinates
     * @return self
     */
    public function setGeoCoordinates($geoCoordinates)
    {
        $this->geoCoordinates = $geoCoordinates;
        return $this;
    }

    /**
     * @return Schedule[]
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * @param Schedule[] $schedule
     * @return self
     */
    public function setSchedule($schedule)
    {
        $this->schedule = $schedule;
        return $this;
    }

    /**
     * @return ExtraService[]
     */
    public function getExtraService()
    {
        return $this->extraService;
    }

    /**
     * @param ExtraService[] $extraService
     * @return self
     */
    public function setExtraService($extraService)
    {
        $this->extraService = $extraService;
        return $this;
    }

    /**
     * @return Services
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * @param Services $services
     * @return self
     */
    public function setServices($services)
    {
        $this->services = $services;
        return $this;
    }
}
