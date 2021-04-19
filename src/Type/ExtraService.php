<?php

namespace Gam6itko\DpdCarrier\Type;

class ExtraService extends ArrayLike
{
    /** @var string|null */
    protected $esCode;

    /**
     * @var Parameter|null Parameter that we send to the server
     */
    protected $param;

    /**
     * @var Parameter[]|null Parameters received from the server
     */
    protected $params;

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
        return $this->param ?? $this->params[0] ?? null;
    }

    public function setParam(?Parameter $param): ExtraService
    {
        $this->param = $param;

        return $this;
    }

    public function getParams(): ?array
    {
        return $this->params;
    }
}
