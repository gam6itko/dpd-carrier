<?php

namespace Gam6itko\DpdCarrier\Type\Geography;

use Gam6itko\DpdCarrier\Type\ArrayLike;

class GeoCoordinates extends ArrayLike
{
    /** @var float|null */
    protected $latitude;

    /** @var float|null */
    protected $longitude;

    /**
     * GeoCoordinates constructor.
     *
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct(?float $latitude, ?float $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * @return float|null
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * @param float|null $latitude
     *
     * @return GeoCoordinates
     */
    public function setLatitude(?float $latitude): GeoCoordinates
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    /**
     * @param float|null $longitude
     *
     * @return GeoCoordinates
     */
    public function setLongitude(?float $longitude): GeoCoordinates
    {
        $this->longitude = $longitude;
        return $this;
    }

}
