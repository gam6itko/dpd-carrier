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

    public function getNumber(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): Parcel
    {
        $this->number = $number;

        return $this;
    }

    public function getBoxNeeded(): int
    {
        return $this->box_needed;
    }

    public function setBoxNeeded(int $box_needed): Parcel
    {
        $this->box_needed = $box_needed;

        return $this;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function setWeight(float $weight): Parcel
    {
        $this->weight = $weight;

        return $this;
    }

    public function getLength(): float
    {
        return $this->length;
    }

    public function setLength(float $length): Parcel
    {
        $this->length = $length;

        return $this;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function setHeight(float $height): Parcel
    {
        $this->height = $height;

        return $this;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function setWidth(float $width): Parcel
    {
        $this->width = $width;

        return $this;
    }

    public function getNumberForPrint(): int
    {
        return $this->number_for_print;
    }

    public function setNumberForPrint(int $number_for_print): Parcel
    {
        $this->number_for_print = $number_for_print;

        return $this;
    }

    public function getInsuranceCost(): float
    {
        return $this->insuranceCost;
    }

    public function setInsuranceCost(float $insuranceCost): Parcel
    {
        $this->insuranceCost = $insuranceCost;

        return $this;
    }

    public function getInsuranceCostVat(): float
    {
        return $this->insuranceCostVat;
    }

    public function setInsuranceCostVat(float $insuranceCostVat): Parcel
    {
        $this->insuranceCostVat = $insuranceCostVat;

        return $this;
    }

    public function getCodAmount(): float
    {
        return $this->codAmount;
    }

    public function setCodAmount(float $codAmount): Parcel
    {
        $this->codAmount = $codAmount;

        return $this;
    }

    public function getQuantity(): float
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity): Parcel
    {
        $this->quantity = $quantity;

        return $this;
    }
}
