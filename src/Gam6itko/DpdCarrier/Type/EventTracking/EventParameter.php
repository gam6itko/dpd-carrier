<?php

namespace Gam6itko\DpdCarrier\Type\EventTracking;

/**
 * @author Alexander Strizhak <gam6itko@gmail.com>
 */
class EventParameter
{
    /** @var string */
    protected $paramName;

    /** @var string */
    private $valueString;

    /** @var float */
    private $valueDecimal;

    /** @var string DATE_ATOM */
    private $valueDateTime;

    /**
     * @return string
     */
    public function getParamName()
    {
        return $this->paramName;
    }

    /**
     * @param string $paramName
     *
     * @return EventParameter
     */
    public function setParamName($paramName)
    {
        $this->paramName = $paramName;

        return $this;
    }

    /**
     * @return string
     */
    public function getValueString()
    {
        return $this->valueString;
    }

    /**
     * @param string $valueString
     *
     * @return EventParameter
     */
    public function setValueString($valueString)
    {
        $this->valueString = $valueString;

        return $this;
    }

    /**
     * @return float
     */
    public function getValueDecimal()
    {
        return $this->valueDecimal;
    }

    /**
     * @param float $valueDecimal
     *
     * @return EventParameter
     */
    public function setValueDecimal($valueDecimal)
    {
        $this->valueDecimal = $valueDecimal;

        return $this;
    }

    /**
     * @return string
     */
    public function getValueDateTime()
    {
        return $this->valueDateTime;
    }

    /**
     * @param string $valueDateTime
     *
     * @return EventParameter
     */
    public function setValueDateTime($valueDateTime)
    {
        $this->valueDateTime = $valueDateTime;

        return $this;
    }
}
