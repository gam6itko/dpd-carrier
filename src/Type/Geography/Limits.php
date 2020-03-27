<?php

namespace Gam6itko\DpdCarrier\Type\Geography;

class Limits
{
    /** @var float|null */
    protected $maxShipmentWeight;

    /** @var float|null */
    protected $maxWeight;

    /** @var float|null */
    protected $maxLength;

    /** @var float|null */
    protected $maxWidth;

    /** @var float|null */
    protected $maxHeight;

    /** @var float|null */
    protected $dimensionSum;

    public function getMaxShipmentWeight(): ?float
    {
        return $this->maxShipmentWeight;
    }

    public function setMaxShipmentWeight(?float $maxShipmentWeight): Limits
    {
        $this->maxShipmentWeight = $maxShipmentWeight;

        return $this;
    }

    public function getMaxWeight(): ?float
    {
        return $this->maxWeight;
    }

    public function setMaxWeight(?float $maxWeight): Limits
    {
        $this->maxWeight = $maxWeight;

        return $this;
    }

    public function getMaxLength(): ?float
    {
        return $this->maxLength;
    }

    public function setMaxLength(?float $maxLength): Limits
    {
        $this->maxLength = $maxLength;

        return $this;
    }

    public function getMaxWidth(): ?float
    {
        return $this->maxWidth;
    }

    public function setMaxWidth(?float $maxWidth): Limits
    {
        $this->maxWidth = $maxWidth;

        return $this;
    }

    public function getMaxHeight(): ?float
    {
        return $this->maxHeight;
    }

    public function setMaxHeight(?float $maxHeight): Limits
    {
        $this->maxHeight = $maxHeight;

        return $this;
    }

    public function getDimensionSum(): ?float
    {
        return $this->dimensionSum;
    }

    public function setDimensionSum(?float $dimensionSum): Limits
    {
        $this->dimensionSum = $dimensionSum;

        return $this;
    }
}
