<?php
namespace Gam6itko\DpdCarrier\Type\Geography;

use Gam6itko\DpdCarrier\Type\AbstractDeliveryPoint;

class Address extends AbstractDeliveryPoint
{
    /** @var string */
    protected $regionName;

    /** @var string */
    protected $street;

    /** @var string */
    protected $streetAbbr;

    /** @var string */
    protected $houseNo;

    /** @var string */
    protected $building;

    /** @var string */
    protected $structure;

    /** @var string */
    protected $ownership;
    /** @var string */
    protected $descript;

    /**
     * @return string
     */
    public function getRegionName()
    {
        return $this->regionName;
    }

    /**
     * @param string $regionName
     * @return Address
     */
    public function setRegionName($regionName)
    {
        $this->regionName = $regionName;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreetAbbr()
    {
        return $this->streetAbbr;
    }

    /**
     * @param string $streetAbbr
     * @return Address
     */
    public function setStreetAbbr($streetAbbr)
    {
        $this->streetAbbr = $streetAbbr;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNo()
    {
        return $this->houseNo;
    }

    /**
     * @param string $houseNo
     * @return Address
     */
    public function setHouseNo($houseNo)
    {
        $this->houseNo = $houseNo;
        return $this;
    }

    /**
     * @return string
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * @param string $building
     * @return Address
     */
    public function setBuilding($building)
    {
        $this->building = $building;
        return $this;
    }

    /**
     * @return string
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * @param string $structure
     * @return Address
     */
    public function setStructure($structure)
    {
        $this->structure = $structure;
        return $this;
    }

    /**
     * @return string
     */
    public function getOwnership()
    {
        return $this->ownership;
    }

    /**
     * @param string $ownership
     * @return Address
     */
    public function setOwnership($ownership)
    {
        $this->ownership = $ownership;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescript()
    {
        return $this->descript;
    }

    /**
     * @param string $descript
     * @return Address
     */
    public function setDescript($descript)
    {
        $this->descript = $descript;
        return $this;
    }
}