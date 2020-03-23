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
    public function __construct(?string $esCode = null, Parameter $param = null)
    {
        $this->esCode = $esCode;
        $this->param = $param;
    }

    /**
     * @return string
     */
    public function getEsCode(): string
    {
        return $this->esCode;
    }

    /**
     * @param string $esCode
     *
     * @return ExtraService
     */
    public function setEsCode(string $esCode): ExtraService
    {
        $this->esCode = $esCode;
        return $this;
    }

    /**
     * @return Parameter
     */
    public function getParam(): Parameter
    {
        return $this->param;
    }

    /**
     * @param Parameter $param
     *
     * @return ExtraService
     */
    public function setParam(Parameter $param): ExtraService
    {
        $this->param = $param;
        return $this;
    }

}
