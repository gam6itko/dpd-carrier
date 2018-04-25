<?php
namespace Gam6itko\DpdCarrier\Type\Geography;

use Gam6itko\DpdCarrier\Type\ArrayLike;

class GeoCoordinates extends ArrayLike
{
    /** @var float */
    protected $latitude;

    /** @var float */
    protected $longitude;

    /**
     * GeoCoordinates constructor.
     * @param float $latitude
     * @param float $longitude
     */
    public function __construct($latitude, $longitude)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     * @return GeoCoordinates
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     * @return GeoCoordinates
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }
}
