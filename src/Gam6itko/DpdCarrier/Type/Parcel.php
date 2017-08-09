<?php
namespace Gam6itko\DpdCarrier\Type;

class Parcel
{
    /** @var string */
    protected $number;

    /** @var integer */
    protected $box_needed;

    /** @var float */
    protected $weight;

    /** @var float */
    protected $length;

    /** @var float */
    protected $height;

    /** @var float */
    protected $width;

    /** @var float */
    protected $number_for_print;

    /** @var float */
    protected $insuranceCost;

    /** @var float */
    protected $insuranceCostVat;

    /** @var float */
    protected $codAmount;

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return Parcel
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return int
     */
    public function getBoxNeeded()
    {
        return $this->box_needed;
    }

    /**
     * @param int $box_needed
     * @return Parcel
     */
    public function setBoxNeeded($box_needed)
    {
        $this->box_needed = $box_needed;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     * @return Parcel
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return float
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param float $length
     * @return Parcel
     */
    public function setLength($length)
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param float $height
     * @return Parcel
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param float $width
     * @return Parcel
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return float
     */
    public function getNumberForPrint()
    {
        return $this->number_for_print;
    }

    /**
     * @param float $number_for_print
     * @return Parcel
     */
    public function setNumberForPrint($number_for_print)
    {
        $this->number_for_print = $number_for_print;
        return $this;
    }

    /**
     * @return float
     */
    public function getInsuranceCost()
    {
        return $this->insuranceCost;
    }

    /**
     * @param float $insuranceCost
     * @return Parcel
     */
    public function setInsuranceCost($insuranceCost)
    {
        $this->insuranceCost = $insuranceCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getInsuranceCostVat()
    {
        return $this->insuranceCostVat;
    }

    /**
     * @param float $insuranceCostVat
     * @return Parcel
     */
    public function setInsuranceCostVat($insuranceCostVat)
    {
        $this->insuranceCostVat = $insuranceCostVat;
        return $this;
    }

    /**
     * @return float
     */
    public function getCodAmount()
    {
        return $this->codAmount;
    }

    /**
     * @param float $codAmount
     * @return Parcel
     */
    public function setCodAmount($codAmount)
    {
        $this->codAmount = $codAmount;
        return $this;
    }
}