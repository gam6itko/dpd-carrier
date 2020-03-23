<?php

namespace Gam6itko\DpdCarrier\Type;

class Parameter extends ArrayLike
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $value;

    /**
     * Parameter constructor.
     *
     * @param string $name
     * @param string $value
     */
    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Parameter
     */
    public function setName(string $name): Parameter
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     *
     * @return Parameter
     */
    public function setValue(string $value): Parameter
    {
        $this->value = $value;
        return $this;
    }
}
