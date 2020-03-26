<?php

namespace Gam6itko\DpdCarrier\Type\EventTracking;

/**
 * @author Alexander Strizhak <gam6itko@gmail.com>
 */
class EventParameter
{
    /** @var string|null */
    protected $paramName;

    /** @var string|null */
    private $valueString;

    /** @var float|null */
    private $valueDecimal;

    /** @var string|null DATE_ATOM */
    private $valueDateTime;

    public function getParamName(): ?string
    {
        return $this->paramName;
    }

    public function setParamName(?string $paramName): EventParameter
    {
        $this->paramName = $paramName;

        return $this;
    }

    public function getValueString(): ?string
    {
        return $this->valueString;
    }

    public function setValueString(?string $valueString): EventParameter
    {
        $this->valueString = $valueString;

        return $this;
    }

    public function getValueDecimal(): ?float
    {
        return $this->valueDecimal;
    }

    public function setValueDecimal(?float $valueDecimal): EventParameter
    {
        $this->valueDecimal = $valueDecimal;

        return $this;
    }

    public function getValueDateTime(): ?string
    {
        return $this->valueDateTime;
    }

    public function setValueDateTime(?string $valueDateTime): EventParameter
    {
        $this->valueDateTime = $valueDateTime;

        return $this;
    }
}
