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
     */
    public function __construct(string $name, string $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Parameter
    {
        $this->name = $name;

        return $this;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): Parameter
    {
        $this->value = $value;

        return $this;
    }
}
