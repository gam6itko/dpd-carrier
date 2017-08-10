<?php
namespace Gam6itko\DpdCarrier\Type\Traits;

trait ToArrayTrait
{
    public function toArray()
    {
        return array_filter(get_object_vars($this));
    }
}