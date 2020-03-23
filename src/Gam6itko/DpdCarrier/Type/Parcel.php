<?php

namespace Gam6itko\DpdCarrier\Type;

class Parcel extends ArrayLike
{
    /** KG */
    const MAX_WEIGHT = 1000;

    /** meter */
    const MAX_LENGTH = 0.35;

    /** meter */
    const MAX_WIDTH = 0.16;

    /** meter */
    const MAX_HEIGHT = 0.18;

    /** @var string */
    protected $number;

    /** @var int */
    protected $box_needed;

    /** @var float */
    protected $weight;

    /** @var float */
    protected $length;

    /** @var float */
    protected $height;

    /** @var float */
    protected $width;

    /** @var int */
    protected $number_for_print;

    /** @var float */
    protected $insuranceCost;

    /** @var float */
    protected $insuranceCostVat;

    /** @var float */
    protected $codAmount;

    /** @var float */
    protected $quantity;

    /**
     * Parcel constructor.
     *
     * @param float|int $weight
     * @param float|int $length
     * @param float|int $height
     * @param float|int $width
     */
    public function __construct(float $weight = 0, float $length = 0, float $height = 0, float $width = 0)
    {
        $this->weight = $weight;
        $this->length = $length;
        $this->height = $height;
        $this->width = $width;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @param string $number
     *
     * @return Parcel
     */
    public function setNumber(string $number): Parcel
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return int
     */
    public function getBoxNeeded(): int
    {
        return $this->box_needed;
    }

    /**
     * @param int $box_needed
     *
     * @return Parcel
     */
    public function setBoxNeeded(int $box_needed): Parcel
    {
        $this->box_needed = $box_needed;
        return $this;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     *
     * @return Parcel
     */
    public function setWeight(float $weight): Parcel
    {
        $this->weight = $weight;
        return $this;
    }

    /**
     * @return float
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * @param float $length
     *
     * @return Parcel
     */
    public function setLength(float $length): Parcel
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param float $height
     *
     * @return Parcel
     */
    public function setHeight(float $height): Parcel
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @param float $width
     *
     * @return Parcel
     */
    public function setWidth(float $width): Parcel
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberForPrint(): int
    {
        return $this->number_for_print;
    }

    /**
     * @param int $number_for_print
     *
     * @return Parcel
     */
    public function setNumberForPrint(int $number_for_print): Parcel
    {
        $this->number_for_print = $number_for_print;
        return $this;
    }

    /**
     * @return float
     */
    public function getInsuranceCost(): float
    {
        return $this->insuranceCost;
    }

    /**
     * @param float $insuranceCost
     *
     * @return Parcel
     */
    public function setInsuranceCost(float $insuranceCost): Parcel
    {
        $this->insuranceCost = $insuranceCost;
        return $this;
    }

    /**
     * @return float
     */
    public function getInsuranceCostVat(): float
    {
        return $this->insuranceCostVat;
    }

    /**
     * @param float $insuranceCostVat
     *
     * @return Parcel
     */
    public function setInsuranceCostVat(float $insuranceCostVat): Parcel
    {
        $this->insuranceCostVat = $insuranceCostVat;
        return $this;
    }

    /**
     * @return float
     */
    public function getCodAmount(): float
    {
        return $this->codAmount;
    }

    /**
     * @param float $codAmount
     *
     * @return Parcel
     */
    public function setCodAmount(float $codAmount): Parcel
    {
        $this->codAmount = $codAmount;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @param float $quantity
     *
     * @return Parcel
     */
    public function setQuantity(float $quantity): Parcel
    {
        $this->quantity = $quantity;
        return $this;
    }

}
