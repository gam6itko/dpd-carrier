<?php
namespace Gam6itko\DpdCarrier\Type;

use Gam6itko\DpdCarrier\Type\Traits\ToArrayTrait;

abstract class ArrayLike implements \JsonSerializable
{
    use ToArrayTrait;

    /**
     * @inheritdoc
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }
}