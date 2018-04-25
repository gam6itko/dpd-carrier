<?php
namespace Gam6itko\DpdCarrier\Type;

class Parameter extends ArrayLike
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $value;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Parameter
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     * @return Parameter
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }
}
