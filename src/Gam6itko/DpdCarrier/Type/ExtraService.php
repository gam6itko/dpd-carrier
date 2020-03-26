<?php

namespace Gam6itko\DpdCarrier\Type;

class ExtraService extends ArrayLike
{
    /** @var string|null */
    protected $esCode;

    /** @var Parameter|null */
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

    public function getEsCode(): ?string
    {
        return $this->esCode;
    }

    public function setEsCode(?string $esCode): ExtraService
    {
        $this->esCode = $esCode;

        return $this;
    }

    public function getParam(): ?Parameter
    {
        return $this->param;
    }

    public function setParam(?Parameter $param): ExtraService
    {
        $this->param = $param;

        return $this;
    }
}
