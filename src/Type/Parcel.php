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

    /** @var float Kilograms */
    protected $weight;

    /** @var float Centimeters */
    protected $length;

    /** @var float Centimeters */
    protected $height;

    /** @var float Centimeters */
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
     * @param float|int $weight Kilograms
     * @param float|int $length Centimeters
     * @param float|int $height Centimeters
     * @param float|int $width Centimeters
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

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getBoxNeeded(): int
    {
        return $this->box_needed;
    }

    public function setBoxNeeded(int $box_needed): self
    {
        $this->box_needed = $box_needed;

        return $this;
    }

    /**
     * @return float Kilograms
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight Kilograms
     */
    public function setWeight(float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * @return float Centimeters
     */
    public function getLength(): float
    {
        return $this->length;
    }

    /**
     * @param float $length Centimeters
     */
    public function setLength(float $length): self
    {
        $this->length = $length;

        return $this;
    }

    /**
     * @return float Centimeters
     */
    public function getHeight(): float
    {
        return $this->height;
    }

    /**
     * @param float $height Centimeters
     */
    public function setHeight(float $height): self
    {
        $this->height = $height;

        return $this;
    }

    /**
     * @return float Centimeters
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * @param float $width Centimeters
     */
    public function setWidth(float $width): self
    {
        $this->width = $width;

        return $this;
    }

    public function getNumberForPrint(): int
    {
        return $this->number_for_print;
    }

    public function setNumberForPrint(int $number_for_print): self
    {
        $this->number_for_print = $number_for_print;

        return $this;
    }

    public function getInsuranceCost(): float
    {
        return $this->insuranceCost;
    }

    public function setInsuranceCost(float $insuranceCost): self
    {
        $this->insuranceCost = $insuranceCost;

        return $this;
    }

    public function getInsuranceCostVat(): float
    {
        return $this->insuranceCostVat;
    }

    public function setInsuranceCostVat(float $insuranceCostVat): self
    {
        $this->insuranceCostVat = $insuranceCostVat;

        return $this;
    }

    public function getCodAmount(): float
    {
        return $this->codAmount;
    }

    public function setCodAmount(float $codAmount): self
    {
        $this->codAmount = $codAmount;

        return $this;
    }

    public function getQuantity(): float
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
