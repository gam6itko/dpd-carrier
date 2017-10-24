<?php
namespace Gam6itko\DpdCarrier\Type\Geography;

class Limits
{
    /** @var float */
    protected $maxShipmentWeight;

    /** @var float */
    protected $maxWeight;

    /** @var float */
    protected $maxLength;

    /** @var float */
    protected $maxWidth;

    /** @var float */
    protected $maxHeight;

    /** @var float */
    protected $dimensionSum;

    /**
     * @return float
     */
    public function getMaxShipmentWeight()
    {
        return $this->maxShipmentWeight;
    }

    /**
     * @param float $maxShipmentWeight
     * @return Limits
     */
    public function setMaxShipmentWeight($maxShipmentWeight)
    {
        $this->maxShipmentWeight = $maxShipmentWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxWeight()
    {
        return $this->maxWeight;
    }

    /**
     * @param float $maxWeight
     * @return Limits
     */
    public function setMaxWeight($maxWeight)
    {
        $this->maxWeight = $maxWeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * @param float $maxLength
     * @return Limits
     */
    public function setMaxLength($maxLength)
    {
        $this->maxLength = $maxLength;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxWidth()
    {
        return $this->maxWidth;
    }

    /**
     * @param float $maxWidth
     * @return Limits
     */
    public function setMaxWidth($maxWidth)
    {
        $this->maxWidth = $maxWidth;
        return $this;
    }

    /**
     * @return float
     */
    public function getMaxHeight()
    {
        return $this->maxHeight;
    }

    /**
     * @param float $maxHeight
     * @return Limits
     */
    public function setMaxHeight($maxHeight)
    {
        $this->maxHeight = $maxHeight;
        return $this;
    }

    /**
     * @return float
     */
    public function getDimensionSum()
    {
        return $this->dimensionSum;
    }

    /**
     * @param float $dimensionSum
     * @return Limits
     */
    public function setDimensionSum($dimensionSum)
    {
        $this->dimensionSum = $dimensionSum;
        return $this;
    }
}
