<?php
namespace Gam6itko\DpdCarrier\Type;

class DeliveryPoint extends AbstractDeliveryPoint
{
    /** @var string */
    protected $index;

    /** @var string */
    protected $countryName;

    public function __construct($cityId = null)
    {
        $this->cityId = $cityId;
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
}
