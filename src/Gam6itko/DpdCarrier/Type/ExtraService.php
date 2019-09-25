<?php

namespace Gam6itko\DpdCarrier\Type;

class ExtraService extends ArrayLike
{
    /** @var string */
    protected $esCode;

    /** @var Parameter */
    protected $param;

    /**
     * ExtraService constructor.
     *
     * @param string    $esCode
     * @param Parameter $param
     */
    public function __construct($esCode = null, Parameter $param = null)
    {
        $this->esCode = $esCode;
        $this->param = $param;
    }
}
