<?php

namespace Gam6itko\DpdCarrier\Type\Geography;

use Gam6itko\DpdCarrier\Type\AbstractDeliveryPoint;

class Address extends AbstractDeliveryPoint
{
    /** @var string|null */
    protected $regionName;

    /** @var string|null */
    protected $street;

    /** @var string|null */
    protected $streetAbbr;

    /** @var string|null */
    protected $houseNo;

    /** @var string|null */
    protected $building;

    /** @var string|null */
    protected $structure;

    /** @var string|null */
    protected $ownership;

    /** @var string|null */
    protected $descript;

    /** @var string|null */
    protected $index;

    public function getRegionName(): ?string
    {
        return $this->regionName;
    }

    public function setRegionName(?string $regionName): Address
    {
        $this->regionName = $regionName;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): Address
    {
        $this->street = $street;

        return $this;
    }

    public function getStreetAbbr(): ?string
    {
        return $this->streetAbbr;
    }

    public function setStreetAbbr(?string $streetAbbr): Address
    {
        $this->streetAbbr = $streetAbbr;

        return $this;
    }

    public function getHouseNo(): ?string
    {
        return $this->houseNo;
    }

    public function setHouseNo(?string $houseNo): Address
    {
        $this->houseNo = $houseNo;

        return $this;
    }

    public function getBuilding(): ?string
    {
        return $this->building;
    }

    public function setBuilding(?string $building): Address
    {
        $this->building = $building;

        return $this;
    }

    public function getStructure(): ?string
    {
        return $this->structure;
    }

    public function setStructure(?string $structure): Address
    {
        $this->structure = $structure;

        return $this;
    }

    public function getOwnership(): ?string
    {
        return $this->ownership;
    }

    public function setOwnership(?string $ownership): Address
    {
        $this->ownership = $ownership;

        return $this;
    }

    public function getDescript(): ?string
    {
        return $this->descript;
    }

    public function setDescript(?string $descript): Address
    {
        $this->descript = $descript;

        return $this;
    }

    public function getIndex(): ?string
    {
        return $this->index;
    }

    public function setIndex(?string $index): Address
    {
        $this->index = $index;

        return $this;
    }
}
