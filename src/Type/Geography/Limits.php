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

    /**
     * @return float|null
     */
    public function getMaxShipmentWeight(): ?float
    {
        return $this->maxShipmentWeight;
    }

    /**
     * @param float|null $maxShipmentWeight
     *
     * @return Limits
     */
    public function setMaxShipmentWeight(?float $maxShipmentWeight): Limits
    {
        $this->maxShipmentWeight = $maxShipmentWeight;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getMaxWeight(): ?float
    {
        return $this->maxWeight;
    }

    /**
     * @param float|null $maxWeight
     *
     * @return Limits
     */
    public function setMaxWeight(?float $maxWeight): Limits
    {
        $this->maxWeight = $maxWeight;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getMaxLength(): ?float
    {
        return $this->maxLength;
    }

    /**
     * @param float|null $maxLength
     *
     * @return Limits
     */
    public function setMaxLength(?float $maxLength): Limits
    {
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getMaxWidth(): ?float
    {
        return $this->maxWidth;
    }

    /**
     * @param float|null $maxWidth
     *
     * @return Limits
     */
    public function setMaxWidth(?float $maxWidth): Limits
    {
        $this->maxWidth = $maxWidth;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getMaxHeight(): ?float
    {
        return $this->maxHeight;
    }

    /**
     * @param float|null $maxHeight
     *
     * @return Limits
     */
    public function setMaxHeight(?float $maxHeight): Limits
    {
        $this->maxHeight = $maxHeight;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getDimensionSum(): ?float
    {
        return $this->dimensionSum;
    }

    /**
     * @param float|null $dimensionSum
     *
     * @return Limits
     */
    public function setDimensionSum(?float $dimensionSum): Limits
    {
        $this->dimensionSum = $dimensionSum;
        return $this;
    }

}
